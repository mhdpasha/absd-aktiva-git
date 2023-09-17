<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aset;
use App\Models\Item;
use App\Models\Maintenance;
use App\Models\ItemRequest;

class DashboardController extends Controller
{
    public function display()
    {
        return view('pages.dashboard', [
            "title" => "Dashboard",
            "dataInventaris" => Aset::where('isFurniture', 0)->count(),
            "dataFurniture" => Aset::where('isFurniture', 1)->count(),
            "dataItemcode" => Item::count(),
            "dataMaintenance" => Maintenance::count(),
            "dataRequest" => ItemRequest::where('isHistory', 0)->count(),
            "request" => ItemRequest::where('isHistory', 0)->get()
        ]);
    }
}
