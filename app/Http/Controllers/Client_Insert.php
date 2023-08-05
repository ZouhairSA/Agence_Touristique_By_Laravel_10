<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\client;
use Illuminate\Http\Request;

class Client_Insert extends Controller
{
    public function store_Data(Request $request)
    {
        client::create($request->post());
        return redirect()->route('golfique_page');
    }
}
