<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Http\Requests\StoreLeadRequest;
use App\Http\Requests\UpdateLeadRequest;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class LeadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Lead::with('status')->get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('status', function ($row) {
                    return $row->status->name; // Assuming 'name' is the attribute you want to display from the 'statuses' table
                })
                ->addColumn('action', function ($row) {
                    $editUrl = route('admin.leads.edit', ['lead' => $row->id]);
                    $showUrl = route('admin.leads.show', ['lead' => $row->id]);

                    $actionBtn = '<a href="' . $showUrl . '" class="show btn btn-info btn-sm mb-1"><i class="far fa-eye"></i></a> ';
                    $actionBtn .= '<a href="' . $editUrl . '" class="edit btn btn-success btn-sm mb-1"><i class="far fa-edit"></i></a> ';
                    $actionBtn .= '<a href="javascript:void(0)" class="delete btn btn-danger btn-sm mb-1" data-id="' . $row->id . '"><i class="fas fa-trash-alt"></i></a>';
                
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('leads.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLeadRequest $request)
    {
        $lead = Lead::create([
            'name' => $request->name,
            'email' => $request->email,
            'contact' => $request->contact ?? $request->phone,

        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Lead $lead)
    {
        $lead->update([
            'status_id' => 2,
        ]);

        return view('leads.show', compact('lead'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lead $lead)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLeadRequest $request, Lead $lead)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lead $lead)
    {
        //
    }
}
