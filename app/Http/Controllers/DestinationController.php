<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Http\Requests\StoreDestinationRequest;
use App\Http\Requests\UpdateDestinationRequest;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Destination::all();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $editUrl = route('admin.destinations.edit', ['destination' => $row->id]);
                    $actionBtn = '<a href="' . $editUrl . '" class="edit btn btn-success btn-sm">Edit</a> 
                    <a href="javascript:void(0)" class="delete btn btn-danger btn-sm" data-id="' . $row->id . '">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('destinations.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries = Destination::where('type', 'country')->get();
        $states = Destination::where('type', 'state')->get();

        return view('destinations.create', compact('countries', 'states'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDestinationRequest $request)
    {

        // dd($request->all());
        // Handle image upload
        if ($request->hasFile('image')) {
            // Get the file name with extension
            $imageName = Str::uuid() .  $request->file('image')->getClientOriginalName();
            // Store the image in the storage folder (public/uploads) and get the path
            $imagePath = $request->file('image')->storeAs('public/uploads', $imageName);
        } else {
            $imagePath = null; // If no image is uploaded, set imagePath to null
        }

        $destination = Destination::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'type' => $request->type,
            'description' => $request->description,
            'excerpt' => $request->excerpt,
            'parent_destination' => $request->parent_destination,
            'image' => $imageName,
        ]);

        return redirect()->route('admin.destinations.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Destination $destination)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Destination $destination)
    {
        $countries = Destination::where('type', 'country')->get();
        $states = Destination::where('type', 'state')->get();
        $packages = Package::all();
        // Retrieve selected package IDs for the destination
        $selectedPackageIds = $destination->packages?->pluck('id')->toArray();

        if (!$selectedPackageIds) {
            $selectedPackageIds = [];
        }
        return view('destinations.edit', compact('destination', 'countries', 'states', 'packages', 'selectedPackageIds'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDestinationRequest $request, Destination $destination)
    {
        // Update destination attributes
        $destination->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'type' => $request->type,
            'description' => $request->description,
            'excerpt' => $request->excerpt,
            'parent_destination' => $request->parent_destination,
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($destination->image) {
                Storage::delete('public/uploads/' . $destination->image);
            }
            // Get the file name with extension
            $imageName = Str::uuid() . '.' . $request->file('image')->getClientOriginalExtension();
            // Store the image in the storage folder (public/uploads) and get the path
            $imagePath = $request->file('image')->storeAs('public/uploads', $imageName);
            // Update the image path in the destination model
            $destination->update(['image' => $imageName]);
        }

        $destination->packages()->sync($request->input('packages', []));

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Destination $destination)
    {
        $destination->delete();
    }
}
