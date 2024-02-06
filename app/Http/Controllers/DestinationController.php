<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Http\Requests\StoreDestinationRequest;
use App\Http\Requests\UpdateDestinationRequest;
use App\Models\Package;
use Illuminate\Http\Request;
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

        if (! $selectedPackageIds) { $selectedPackageIds = [];}
        return view('destinations.edit', compact('destination', 'countries', 'states', 'packages', 'selectedPackageIds'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDestinationRequest $request, Destination $destination)
    {
        $destination->update([

        ]);

        $destination->packages()->sync($request->input('packages', []));

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Destination $destination)
    {
        //
    }
}
