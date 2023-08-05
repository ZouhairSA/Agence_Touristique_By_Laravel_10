<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\profil;
use  Illuminate\Support\Facades\DB;

use Illuminate\View\ViewName;

class login_Profil_Controller extends Controller
{


    public function show_Page_login()
    {
        return view('components.pages.login_profil');
    }

    public function validate_login_profil(Request $request)
    {
        $verifier_Data = $request->validate([

            'email' => 'required',
            'password' => 'required',

        ]);

        $email_profil =  $request->email;
        $password_profil = $request->password;

        if ($verifier_Data) {

            $existe_profile = DB::table('profils')
                ->where('email', $email_profil)
                ->where('password', $password_profil)
                ->first();

            if (!$existe_profile) {
                return redirect()->back()->with('error_1', "N'existe pas ce profil avec ses informations.ressaisir les champs dans la bases des données");
                // dump('ne existe pas ce profile  avec ses  information');
            } else {

                $allinfo_testing =  DB::table('profils')
                    ->where('email', $email_profil)
                    ->first();

                $idProfil = $allinfo_testing->id;

                //le nombre  des reservtion pour affichage :
                $reservationsCount = DB::table('conserves')
                    ->where('id_profil', $idProfil)
                    ->count();
                //data 
                $reservations = DB::table('conserves') // conserve signifier  la table de reservation
                    ->where('id_profil', $idProfil)
                    ->get();


                // dump($reservations);
                return view('components.pages.profil_page', [
                    'mydata' => $allinfo_testing,
                    'reservations' => $reservations, 'reservationsCount' => $reservationsCount
                ]);

                // dump($allinfo_testing);
                // dump("Bien venue dans votre session");
            }
        } else {
            return redirect()->back()->with('error_2', "Votre information incorrecte");

            // dump('votre  informations  incorrectes');
        }
    }

    public function Modifier_data_profil(Request $request)
    {
        // $verifier_Data_Modife = $request->validate([

        //     'name_Saisie' => 'required',
        //     'prenom_Saisie' => 'required',
        //     'Tel_Saisie' => 'required',
        //     'Email_Saisie' => 'required',
        //     'reference_Profil' => 'required'

        // ]);

        $Name_Profil = $request->name_Saisie;
        $Prenom_Profil = $request->prenom_Saisie;
        $tel_Profil = $request->Tel_Saisie;
        $Email_Profil = $request->Email_Saisie;
        $Reference_Profil = $request->reference_Profil;

        $existe_profile = DB::table('profils')
            ->where('id', $Reference_Profil)
            ->update(['nom' => $Name_Profil, 'prenom' => $Prenom_Profil, 'email' => $Email_Profil, 'telephone' => $tel_Profil]);

        if ($existe_profile) {

            // return redirect('/validate_login_profil')->with('error_55', "Votre information incorrecte");
            // return redirect()->route('billeterie_page');
            // return redirect()->route('validate_login_profil');

            return view('components.pages.login_profil');
            // return redirect()->back()->with('error_55', "Votre information incorrecte");
            // dump("BIEN");
        } else {
            // dump('PRB');
            return view('components.pages.login_profil');
            // return redirect()->back();
        }
    }
}
