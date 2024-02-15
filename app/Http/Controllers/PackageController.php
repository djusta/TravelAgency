<?php

namespace App\Http\Controllers;

use App\Models\Locations;
use App\Models\Package;
use App\Http\Requests\StorePackageRequest;
use App\Http\Requests\UpdatePackageRequest;
use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Package::all();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $editUrl = route('admin.packages.edit', ['package' => $row->id]);
                    $actionBtn = '<a href="' . $editUrl . '" class="edit btn btn-success btn-sm">Edit</a>
                    <a href="javascript:void(0)" class="delete btn btn-danger btn-sm" data-id="' . $row->id . '">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('packages.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('packages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePackageRequest $request)
    {
        // Handle image upload
        if ($request->hasFile('image')) {
            // Get the file name with extension
            $imageName = Str::uuid() . $request->file('image')->getClientOriginalName();
            // Store the image in the storage folder (public/uploads) and get the path
            $imagePath = $request->file('image')->storeAs('public/uploads', $imageName);
        } else {
            $imageName = null; // If no image is uploaded, set imagePath to null
        }

        $package = Package::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'duration' => $request->duration,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $imageName
        ]);
        $validatedData = $request->all();
        foreach ($validatedData['offer_name'] as $key => $name) {
            $offer = new Locations();
            $offer->package_id = $package->id;
            $offer->name = $name;
            $offer->description = $validatedData['offer_description'][$key];
            $offer->save();
        }

        return redirect()->route('admin.packages.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Package $package)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Package $package)
    {
        $destinations = Destination::all();
        $locations = Locations::where('package_id', $package->id)->get();

        // Retrieve selected package IDs for the destination
        $selectedDestinationIds = $package->destinations?->pluck('id')->toArray();

        if (!$selectedDestinationIds) {
            $selectedDestinationIds = [];
        }
        return view('packages.edit', compact('package', 'destinations', 'selectedDestinationIds', 'locations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePackageRequest $request, Package $package)
    {
        // Handle image upload
        if ($request->hasFile('image')) {
            // Get the file name with extension
            $imageName = Str::uuid() . $request->file('image')->getClientOriginalName();
            // Store the image in the storage folder (public/uploads) and get the path
            $imagePath = $request->file('image')->storeAs('public/uploads', $imageName);
        } else {
            $imageName = null; // If no image is uploaded, set imagePath to null
        }

        $packageUpdate = Package::where('id', $package->id)->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'duration' => $request->duration,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $imageName
        ]);
        if ($packageUpdate) {
            $validatedData = $request->validate([
                'offer_name.*' => 'required',
                'offer_description.*' => 'required'
            ]);

            foreach ($validatedData['offer_name'] as $key => $name) {
                $offer = new Locations();
                $offer->package_id = $package->id; // Use $package->id instead of $packageUpdate->id
                $offer->name = $name;
                $offer->description = $validatedData['offer_description'][$key];
                $offer->save();
            }
        }

        return redirect()->route('admin.packages.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Package $package)
    {
        $package->delete();
    }

    public function locationDestroy($id)
    {
        $location = Locations::where('id', $id)->delete();

        return redirect()->back()->with('success', 'The Location has been removed');
    }
}
