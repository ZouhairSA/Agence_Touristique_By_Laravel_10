<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class user_login extends Controller
{
    public function show_page_login()
    {
        return view('components.pages.login.client_login');
    }

    public function validate_client_login(Request $request)
    {
        // $first_name = $request->first_name;nameStudent

        $first_name = $request->nameStudent;

        // $password = $request->password;

        $password = $request->password;

        $values_client = ['nameStudent' => $first_name, 'password' => $password];

        dd(Auth::attempt($values_client));
        // dd($request);
    }
}
