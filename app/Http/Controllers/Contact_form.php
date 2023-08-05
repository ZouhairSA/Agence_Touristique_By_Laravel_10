<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contacte_send;
use App\Models\contacte;
use Illuminate\Http\Request;

class Contact_form extends Controller
{
    public function send_data_contact(Request $request)
    {
        $DataRecup = $request->validate([
            'name_contact' => 'required',
            'lastname_contact' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        // contacte::create($DataRecup);
        Contacte_send::create($DataRecup);
        return redirect()->back()->with('success', "Votre demmande est bien effectuer.");


        // return redirect()->route('page_Registrement');

        // if (contacte::create($DataRecup)) {
        // return redirect()->route('page_Registrement');
        // }
    }
}
