<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Lead;
use App\Models\Package;
use App\Models\Testimonial;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home() {
        $popularDestinations = Destination::
        whereIn('type', ['city'])
        // ->has('packages')
        ->withCount('packages')
        ->take(3)
        ->get();

        $packages = Package::take(6)->get();

        $testimonials = Testimonial::where('status', 1)->take(2)->get();

        return view('pages.home', compact('packages', 'popularDestinations', 'testimonials'));
    }

    public function destination($slug): View
    {
        $destination = Destination::where('slug', $slug)->first();
        $packages = $destination->packages()->get();


        return view('pages.destination', compact([
            'destination',
            'packages'
        ]));
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

    }

    public function notFound(): View
    {
        return view('pages.404');
    }

}
