<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Aset;
use App\Models\Item;
use App\Models\User;
use App\Models\ItemRequest;


class AsetController extends Controller
{
    public function getInventaris()
    {
        return view('pages.inventaris', [
            "title" => "Inventaris Kantor",
            "aset" => Aset::where('isFurniture', 0)->with('user')->get(),
            "itemInventaris" => Item::where('isFurniture', 0)->get(),
            "itemFurniture" => Item::where('isFurniture', 1)->get(),
            "user" => User::all(),

            "dataRequest" => ItemRequest::where('isHistory', 0)->count(),
            "request" => ItemRequest::where('isHistory', 0)->get()
        ]);
    }

    public function getFurniture()
    {
        return view('pages.furniture', [
            "title" => "Furniture & Fixture",
            "aset" => Aset::where('isFurniture', 1)->with('user')->get(),
            "itemInventaris" => Item::where('isFurniture', 0)->get(),
            "itemFurniture" => Item::where('isFurniture', 1)->get(),
            "user" => User::all(),

            "dataRequest" => ItemRequest::where('isHistory', 0)->count(),
            "request" => ItemRequest::where('isHistory', 0)->get()
        ]);
    }

    public function storeAset(Request $request, Aset $aset)
    {
        $validated = $request->validate([
            'category' => 'required',
            'itemcode' => 'required',
            'name' => 'required',
            'description' => 'required',
            'isFurniture' => 'required',
            'date' => 'required',
            'price' => 'required',
            'user_id' => 'required'
        ]);

        Aset::create($validated);
        
        return $request->isFurniture == 1 ? redirect('/aset/furniture')->with('added', 'Aset berhasil ditambahkan') : redirect('/aset/inventaris')->with('added', 'Aset berhasil ditambahkan');
    }

    public function deleteAset(Request $request)
    {
        $aset = Aset::where('id', $request->id)->first();

        if ($aset->isFurniture == 1) {
            $aset->delete();
            return redirect('/aset/furniture')->with('deleted', 'Aset telah dihapus');
        } else {
            $aset->delete();
            return redirect('/aset/inventaris')->with('deleted', 'Aset telah dihapus');
        }

    }

    public function updateAset(Request $request, $id)
    {
        $data = Aset::find($id);
        $data->update($request->all());

        return $data->isFurniture == 1 ? redirect('/aset/furniture')->with('saved', 'Change saved') : redirect('/aset/inventaris')->with('saved', 'Change saved');
    }
}