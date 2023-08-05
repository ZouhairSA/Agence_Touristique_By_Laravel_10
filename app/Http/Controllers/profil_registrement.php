<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class profil_registrement extends Controller
{
    public function store_Data_profil(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'telephone' => 'required|digits:10',
            'email' => 'required|email',
            'password' => 'required|string|min:5',
        ]);

        // pour decrype le password de user:
        if ($validatedData) {


            $email = $request->email;

            $profil_existe = profil::where('email', $email)->first();
            // $profil_existe = profil::where('email', $validatedData['email'])->first();

            if ($profil_existe) {
                return back()->withInput()->withErrors(['email' => 'Cet email est déjà utilisé. 
            Veuillez saisir un autre email.']);
            } else {
                profil::create($validatedData);
                return redirect()->route('page_Registrement')->with('success', 'Votre inscription est bien passée.');
            }
        }

        // $validatedData['password'] = Hash::make($request->password);
        //----------------------------  changement apartien ce  code -----------------:
        // $email = $request->email;

        // $profil_existe = profil::where('email', $email)->first();
        // // $profil_existe = profil::where('email', $validatedData['email'])->first();

        // if ($profil_existe) {
        //     return back()->withInput()->withErrors(['email' => 'Cet email est déjà utilisé. 
        //     Veuillez saisir un autre email.']);
        // } else {
        //     profil::create($validatedData);
        //     return redirect()->route('page_Registrement')->with('success', 'Votre inscription est bien passée.');
        // }
    }
}
