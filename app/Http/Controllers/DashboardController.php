<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aset;
use App\Models\Item;
use App\Models\Maintenance;
use App\Models\ItemRequest;
use App\Models\User;

class DashboardController extends Controller
{
    public function displayDashboard()
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

    public function displayUser()
    {
        return view('pages.user', [
            "title" => "User",
            "dataRequest" => ItemRequest::where('isHistory', 0)->count(),
            "request" => ItemRequest::where('isHistory', 0)->get()
        ]);
    }
}
