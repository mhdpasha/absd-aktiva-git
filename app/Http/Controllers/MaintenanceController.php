<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maintenance;
use App\Models\ItemRequest;



class MaintenanceController extends Controller
{
    public function displayMaintenance()
    {
        return view('pages.maintenance', [
            "title" => "Maintenance",
            "dataRequest" => ItemRequest::where('isHistory', 0)->count(),
            "request" => ItemRequest::where('isHistory', 0)->get()
        ]);
    }
}