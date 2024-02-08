<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function admin() 
    {
        $destinations = Destination::all();

        return view('dashboard.admin', compact('destinations'));
    }
}
