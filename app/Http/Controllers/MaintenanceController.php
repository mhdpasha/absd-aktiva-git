<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aset;
use App\Models\Item;
use App\Models\ItemRequest;



class MaintenanceController extends Controller
{
    public function displayMaintenance()
    {
        return view('pages.maintenance', [
            "title" => "Maintenance",
            "aset" => Aset::all(),
            "itemInventaris" => Item::where('isFurniture', 0)->get(),
            "itemFurniture" => Item::where('isFurniture', 1)->get(),

            "dataRequest" => ItemRequest::where('isHistory', 0)->count(),
            "request" => ItemRequest::where('isHistory', 0)->get()
        ]);
    }
}