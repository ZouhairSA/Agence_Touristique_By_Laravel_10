<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\voyage;
use  Illuminate\Support\Facades\DB;
use App\Models\conserve;
use PhpParser\Node\Expr\Exit_;


class page_voyage_reservation extends Controller
{
    public function show_page_Voyages()
    {
        $voyages = voyage::all();
        return view('components.pages.reservation.page_voyage_reservation', compact('voyages'));
    }

    public function page_reservation_seul_voyage()
    {
        return view('components.pages.reservation.page_reservation_seul_voyage');
    }

    public function validation_reservation_voyage(Request $request)
    {
        $AllData = $request->validate(
            [
                'name_voyage' => 'required',
                'nom_profil' => 'required',
                'email_profil' => 'required',
                'passw_profil' => 'required',
            ]
        );

        // $dataProfil =['nom'=>$nom_profil,'email'=>$email_profil];

        $nom_Voyage = $request->name_voyage;

        $nom_profil = $request->nom_profil;

        $email_profil = $request->email_profil;

        $id_voyage = $request->ref_voyage;

        $password_Profil = $request->passw_profil;

        if ($AllData) {

            // profil ;
            $profil_validation_donnees = DB::table('profils')
                ->where('nom', $nom_profil)
                ->where('email',  $email_profil)
                ->where('password', $password_Profil)
                ->first();

            //validation  profil:
            if ($profil_validation_donnees) {

                //recuperation Id profil: 
                $id_profil = DB::table('profils')
                    ->where('nom', $nom_profil)
                    // ->where('email', $email_profil)
                    ->value('id');

                //  verifie si le personne est deja reserve:

                $reserver_deja = DB::table('conserves')
                    ->where('id_voyage', $id_voyage)
                    ->where('id_profil', $id_profil)
                    ->first();

                if ($reserver_deja) {

                    dd('dejs existe');
                } else {

                    $rst = DB::insert('insert into conserves (id_voyage, id_profil, voyage_nom, profil_nom, email) values (?, ?, ?, ?, ?)', [$id_voyage, $id_profil, $nom_Voyage, $nom_profil, $email_profil]);

                    $rst;
                    if ($rst) {
                        dd("valider");
                        return redirect()->route('page_Seminaire');
                    } else {
                        dd("Problem");
                    }
                }
            } else {
                return redirect()->route('golfique_page');
            }
        }
    }
}
