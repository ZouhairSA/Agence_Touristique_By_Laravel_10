<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Trajet;
use App\Models\User;
use App\Models\voyage;
use Illuminate\Http\Request;
use  Illuminate\Support\Facades\DB;

class Switch_page extends Controller
{
    public function page_Home()
    {
        return view("components.pages.first_page");
    }
    public function page_Propos()
    {
        return view("components.pages.propos");
    }
    public function page_Seminaire()
    {
        return view("components.pages.seminaire");
    }
    public function page_Golfique()
    {
        return view("components.pages.voyages.golfique");
    }
    public function page_voyage_Carte()
    {
        return view("components.pages.voyages.carte");
    }
    public function page_voyage_Organise()
    {
        return view("components.pages.voyages.organise");
    }
    public function page_Billeterie()
    {
        $voyages = voyage::all();
        // $tarajet = Trajet::all();
        return view("components.pages.billeterie", compact('voyages'));
    }

    // validation  transfer du  page_voyage_reservation vers ce  contrleur
    public function validation_conserves(Request $request)
    {
        $AllData = $request->validate(
            [
                'nom_voyage' => 'required',
                'nom_profil' => 'required',
                'email_profil' => 'required',

            ]
        );

        // $dataProfil =['nom'=>$nom_profil,'email'=>$email_profil];

        $nom_Voyage = $request->nom_voyage;

        $nom_profil = $request->nom_profil;

        $email_profil = $request->email_profil;

        $id_voyage = $request->ref_voyage;

        if ($AllData) {

            // profil ;
            $profil_validation_donnees = DB::table('profils')
                ->where('nom', $nom_profil)
                ->where('email',  $email_profil)
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

                    return redirect()->back()->with('error', "Cette réservation a déjà été effectuée avec cet e-mail");
                } else {

                    $rst = DB::insert('insert into conserves (id_voyage, id_profil, voyage_nom, profil_nom, email) values (?, ?, ?, ?, ?)', [$id_voyage, $id_profil, $nom_Voyage, $nom_profil, $email_profil]);

                    $rst;
                    if ($rst) {
                        // dd("valider");
                        return redirect()->route('billeterie_page')->with('success', 'Votre Réservcation est bien passée.');
                    } else {
                        return redirect()->route('billeterie_page')->with('avertissement',  "Votre réservation n'a pas été validée");
                    }
                }
            } else {
                return redirect()->back()->with('problème', "Cette action est réservée aux utilisateurs enregistrés. Merci de vous inscrire");
            }
        }
    }


    public function page_Registrement()
    {
        // dd(User::all());
        // dd(User::paginate(3));
        $personne = User::paginate(5);

        return view("components.pages.registrement", ["dtt" => $personne]);
    }
    public function page_Contact()
    {
        return view("components.pages.contact");
    }
    public function page_chefchaoun()
    {
        return view("components.pages.villes.chefchaoun");
    }
    public function page_ifrane()
    {
        return view("components.pages.villes.ifrane");
    }
}
