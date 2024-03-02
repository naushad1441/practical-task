<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle; 
use App\Models\Booking; 
use Illuminate\View\View;


class VehicleController extends Controller
{
    public function index(): View
    {
        $vehicles = Vehicle::paginate();

        return view('vehicle', compact('vehicles'));
    }

    public function store(Request $request)
    {
        $update = [
            'is_booking_open' => 1,
        ];
        $edit = Vehicle::where('id', $request->vehicle_id)->update($update);
 		return to_route('rieds');
    }
}
