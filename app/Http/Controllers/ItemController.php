<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function displayItem()
    {
        return view('pages.item', [
            "title" => "Item",
            "itemInventaris" => Item::where('isFurniture', 0)->get(),
            "itemFurniture" => Item::where('isFurniture', 1)->get()
        ]);
    }

    public function storeItem(Request $request)
    {
        $validated = $request->validate([
            'kodeAset' => 'required',
            'jenisAset' => 'required',
            'isFurniture' => 'required'
        ]);

        Item::create($validated);
        return redirect('/item')->with('added', 'Itemcode baru berhasil ditambahkan');
    }

    public function deleteItem(Request $request)
    {
        $item = Item::where('id', $request->id)->first()->delete();
        return redirect('/item')->with('deleted', 'Itemcode telah dihapus');
    }

    public function updateItem(Request $request, $id)
    {
        $data = Item::find($id);
        $data->update($request->all());

        return redirect('/item')->with('saved', 'Change saved');
    }
}
