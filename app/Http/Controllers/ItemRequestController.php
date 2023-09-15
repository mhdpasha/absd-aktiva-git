<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemRequest;


class ItemRequestController extends Controller
{
    public function displayRequest()
    {
        return view('pages.request', [
            "title" => "Request",
            "user" => "admin",
            "status" => "accepted",
            "request" => ItemRequest::where('isHistory', 0)->get(),
            "history" => ItemRequest::where('isHistory', 1)->get()
        ]);
    }
}
