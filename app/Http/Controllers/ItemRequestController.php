<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\ItemRequest;
use App\Models\Item;
use App\Models\Aset;


class ItemRequestController extends Controller
{
    public function displayRequest()
    {
        return view('pages.request', [
            "title" => "Request",
            "user" => "admin",
            "status" => "accepted",
            "request" => ItemRequest::where('isHistory', 0)->get(),
            "history" => ItemRequest::where('isHistory', 1)->get(),
            "dataItem" => Item::all()
        ]);
    }

    public function storeRequest(Request $request)
    {
        $validated = $request->validate([
            'category' => 'required',
            'itemcode' => 'required',
            'name' => 'required',
            'user' => 'required',
            'description' => 'required',
            'isFurniture' => 'required',
            'isHistory' => 'required',
            'status' => 'required'
        ]);

        ItemRequest::create($validated);
        
        return redirect('/request')->with('added', 'Request '.$request->name.' berhasil ditambahkan');
    }

    public function acceptRequest(Request $request, ItemRequest $itemReq)
    {
        
        $data = ItemRequest::find($request->id);
        $data->update([
            "isHistory" => 1,
            "status" => 1,
        ]);
        $data->save();
        
        Aset::create([
            "category" => $request->category,
            "itemcode" => $request->itemcode,
            "name" => $request->name,
            "description" => $request->description,
            "isFurniture" => $request->isFurniture,
            "date" => Carbon::now()
        ]);

        return redirect('/request')->with('added', 'Item '.$request->name.' telah diterima');
    }

    public function rejectRequest(Request $request)
    {
        $data = ItemRequest::find($request->id);
        $data->update([
            "isHistory" => 1,
            "status" => 0,
            "date" => Carbon::now()
        ]);
        
        return redirect('/request')->with('deleted', 'Item '.$request->name.' telah ditolak');
    }

    public function deleteRequest(Request $request)
    {
        $item = ItemRequest::where('id', $request->id)->first()->delete();
        return redirect('/request')->with('deleted', 'History telah dihapus');
    }
}
