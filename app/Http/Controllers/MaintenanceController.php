<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maintenance;


class MaintenanceController extends Controller
{
    public function displayMaintenance()
    {
        return view('pages.maintenance', [
            "title" => "Maintenance"
        ]);
    }
}