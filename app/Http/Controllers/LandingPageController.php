<?php

namespace App\Http\Controllers;

use App\Models\LandingPage;
use App\Http\Requests\StoreLandingPageRequest;
use App\Http\Requests\UpdateLandingPageRequest;
use App\Models\Lead;
use App\Models\Package;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = LandingPage::all();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $editUrl = route('admin.landing-pages.edit', ['landing_page' => $row->id]);
                    $actionBtn = '<a href="' . $editUrl . '" class="edit btn btn-success btn-sm">Edit</a> 
                    <a href="javascript:void(0)" class="delete btn btn-danger btn-sm" data-id="' . $row->id . '">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('landing-pages.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('landing-pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLandingPageRequest $request)
    {
        $landingPage = LandingPage::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'template' => $request->template
        ]);

        return redirect()->route('admin.landing-pages.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(LandingPage $landingPage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LandingPage $landingPage)
    {        
        $packages = Package::all();
        // Retrieve selected package IDs for the destination
        $selectedPackageIds = $landingPage->packages?->pluck('id')->toArray();

        if (!$selectedPackageIds) {
            $selectedPackageIds = [];
        }
        return view('landing-pages.edit', compact('landingPage', 'packages', 'selectedPackageIds'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLandingPageRequest $request, LandingPage $landingPage)
    {
        $landingPage->packages()->sync($request->input('packages', []));

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LandingPage $landingPage)
    {
        //
    }

    /**
     * Landing Page Display to End User.
     */
    public function endUserShow(string $slug)
    {
        $landingPage = LandingPage::where('slug', $slug)->first();

        $packages = $landingPage->packages;

        if ($landingPage->template == 1) {
            return view('landing-pages.templates.template-1', compact('packages'));
        }
    }

    public function storeLead(Request $request)
    {
        $lead = Lead::create([
            'name' => $request->name,
            'email' => $request->email,
            'contact' => $request->contact,
            'message' => $request->message,
            'source' => $request->headers->get('referer')
        ]);

        // Redirect back with a session flash message
        return redirect()->back()->with('success', 'Thank you for your inquiry! We will get back to you shortly.');
    }
}
