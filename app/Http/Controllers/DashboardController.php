<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
            "aset" => Aset::all(),
            "user" => User::count(),


            "dataRequest" => ItemRequest::where('isHistory', 0)->count(),
            "request" => ItemRequest::where('isHistory', 0)->get()
        ]);
    }

    public function displayUser()
    {
        return view('pages.user', [
            "title" => "User",
            "users" => User::all(),

            "dataRequest" => ItemRequest::where('isHistory', 0)->count(),
            "request" => ItemRequest::where('isHistory', 0)->get()
        ]);
    }

    public function storeUser(Request $request)
    {
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'kode_cabang' => $request->kode_cabang,
            'password' => Hash::make($request->password),
            'isAdmin' => $request->isAdmin
        ]);

        return redirect()->back()->with('added', 'User berhasil ditambahkan');
    }

    public function deleteUser(Request $request, User $user)
    {
        $user->where('id', $request->id)->first()->delete();
        return redirect()->back()->with('deleted', 'User telah dihapus');
    }
}
