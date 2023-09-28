<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\ItemRequest;
use App\Models\Item;
use App\Models\Aset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ItemRequestController extends Controller
{
    public function displayRequest()
    {
        $user = Auth::user();

        return view('pages.request', [
            "title" => "Request",
            "user" => $user,
            "dataItem" => Item::all(),
            "request" => ItemRequest::where('isHistory', 0)->get(),
            "historyAdmin" => ItemRequest::where('isHistory', 1)->get(),
            "historyUser" => ItemRequest::where([
                'isHistory' => 1,
                'username' => $user->name
            ])->get(),

            "dataRequest" => ItemRequest::where('isHistory', 0)->count(),
            "request" => ItemRequest::where('isHistory', 0)->get()
        ]);
    }

    public function storeRequest(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required',
            'user_id' => 'required',
            'category' => 'required',
            'itemcode' => 'required',
            'name' => 'required',
            'description' => 'required',
            'isFurniture' => 'required',
            'isHistory' => 'required',
            'status' => 'required',
            'price' => 'required'
        ]);

        ItemRequest::create($validated);
        
        return redirect('/request')->with('added', 'Request '.$request->name.' berhasil ditambahkan');
    }

    public function acceptRequest(Request $request)
    {
        
        $data = ItemRequest::find($request->id);
        $data->update([
            "isHistory" => 1,
            "status" => 1,
        ]);
        $data->save();
        
        Aset::create([
            "user_id" => $request->user_id,
            "category" => $request->category,
            "itemcode" => $request->itemcode,
            "name" => $request->name,
            "description" => $request->description,
            "isFurniture" => $request->isFurniture,
            "price" => $request->price,
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
