<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Lead;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function admin() 
    {
        $leads = Lead::get();
        $destinations = Destination::all();

        return view('dashboard.admin', compact(
            'leads',
            'destinations'
        ));
    }
}
