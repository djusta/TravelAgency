<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Package;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home() {
        $popularDestinations = Destination::where('type', 'city')->has('packages')->withCount('packages')->take(3)->get();
        $packages = Package::take(6)->get();
        return view('pages.home', compact('packages', 'popularDestinations'));
    }

    public function destination($id): View
    {
        $destination = Destination::where('id', $id)->first();
        $packages = $destination->packages()->get();


        return view('pages.destination', compact([
            'destination',
            'packages'
        ]));
    }
}
