<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use Illuminate\View\View;

class RiedsController extends Controller
{
    public function index(): View
    {
        $vehicles = Vehicle::paginate();

        return view('rieds', compact('vehicles'));
    }
}
