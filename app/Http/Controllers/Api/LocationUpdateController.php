<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Locations;
use Illuminate\Http\Request;

class LocationUpdateController extends Controller
{
    public function update(Request $request)
    {
        Locations::where('id', $request->id)->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Success'
        ]);

    }

    public function destroy(Request $request)
    {
        Locations::where('id', $request->id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Success'
        ]);
    }
}
