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
    public function home(): View
    {
        $popularDestinations = Destination::whereIn('type', ['city'])
            // ->has('packages')
            ->withCount('packages')
            ->take(3)
            ->get();

        $packages = Package::take(6)->get();

        $testimonials = Testimonial::where('status', 1)->take(2)->get();

        return view('pages.home', compact('packages', 'popularDestinations', 'testimonials'));
    }

    public function about(): View
    {
        $whyCards = [
            [
                'title' => 'Tailored Experiences',
                'description' => "At Your Travelling Partner, we believe in crafting personalized journeys
                                 that cater to your specific preferences and interests. Whether you're seeking adventure, relaxation,
                                 or cultural immersion, our expert team will create an itinerary that perfectly aligns with your
                                 vision, ensuring a truly unforgettable experience."
            ],
            [
                'title' => 'Expert Guidance',
                'description' => "At Your Travelling Partner, we believe in crafting personalized journeys
                                 that cater to your specific preferences and interests. Whether you're seeking adventure, relaxation,
                                 or cultural immersion, our expert team will create an itinerary that perfectly aligns with your
                                 vision, ensuring a truly unforgettable experience."
            ],
            [
                'title' => 'Seamless Service',
                'description' => "At Your Travelling Partner, we believe in crafting personalized journeys
                                 that cater to your specific preferences and interests. Whether you're seeking adventure, relaxation,
                                 or cultural immersion, our expert team will create an itinerary that perfectly aligns with your
                                 vision, ensuring a truly unforgettable experience."
            ]
        ];

        $counter = [
            ['number' => 120, 'label' => 'Destinations Travelled'],
            ['number' => '1 Lac +', 'label' => 'Happy Travellers'],
            ['number' => '7+', 'label' => 'Years of Experience'],
            ['number' => '&infin;', 'label' => 'Memorable Moments']
        ];

        return view('pages.about', compact('counter', 'whyCards'));
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

    public function package($slug): View
    {
        $package = Package::where('slug', $slug)->first();
        // $packages = $destination->packages()->get();

        return view('pages.package', compact([
            'package'
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
