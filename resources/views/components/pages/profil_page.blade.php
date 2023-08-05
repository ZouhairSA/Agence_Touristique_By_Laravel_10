@extends('components.principal')
@section('profil_page_id')
    <div class="title_page"
        style="background: url('{{ asset('/img/sabyoudA.jpg') }}') no-repeat;background-size: cover !important;">
        <div class="container">
            <div class="row">
                {{-- <h1 style="color:rgb(15, 13, 13);">Bienvenue Mr : {{ $mydata->nom }} </h1> --}}
                <input type="text" value="Bienvenue Mr : {{ $mydata->nom }}" class="d-none" id="vall222">
                <h1 id="paragraphe1111" style="color:black;font-size: 70px;font-family: bolder;"></h1>
                {{-- ->'email page_billetteries.jpg' --}}
            </div>
        </div>
    </div>

    <script>
        var title = document.getElementById("paragraphe1111");
        var words11 = document.getElementById("vall222");
        var words = words11.value;
        var i = 0;
        var isDeleting = false;

        function type() {
            if (i < words.length) {
                title.innerHTML += words.charAt(i);
                i++;
                setTimeout(type, 220);
            } else {
                isDeleting = true;
                setTimeout(deleteLetter, 130);
            }
        }

        function deleteLetter() {
            if (title.innerHTML.length > 0 && isDeleting) {
                title.innerHTML = title.innerHTML.slice(0, -1);
                setTimeout(deleteLetter, 150);
            } else {
                isDeleting = false;
                i = 0;
                setTimeout(type, 500);
            }
        }

        type();
    </script>

    @if (session()->has('error_55'))
        <div class="col-md-2 ">
            {{-- ---------------------------------------------------------- --}}
            <br>
            <div class="text-center">

                <div class="alert alert-danger">
                    {{ session('error_55') }}
                </div>
            </div>
        </div>
    @endif


    <div class="presentation">
        <div class="container">
            <div class="row wow slideInRight" data-wow-duration="2.5s">
                <h3>Bienvenue dans notre espace </h3>
                <p class="container">Nous sommes à votre disposition pour répondre à toutes vos questions et vous aider à
                    planifier votre
                    prochain voyage. N'hésitez pas à parcourir notre site pour découvrir nos offres de voyage et à nous
                    contacter si vous avez besoin d'aide. Bon voyage !</p>

            </div>
        </div>
    </div>

    <div calss="">
        <div class="billetteries_block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 align-self-center">

                        {{-- <div class="row">
                            <div class="">
                                <div class="card-header text-center">
                                    <h3>Vos Informations </h3>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3 text-center">
                                        <div class="col">
                                            <p>Prénom : {{ $mydata->prenom }}</p>

                                        </div>
                                        <div class="col">
                                            <p>Nom : {{ $mydata->nom }}</p>

                                        </div>
                                    </div>
                                    <div class="row mb-3 text-center">
                                        <div class="col">
                                            <p>Email : {{ $mydata->email }}</p>

                                        </div>
                                        <div class="col">
                                            <p>Référence : {{ $mydata->id }}</p>

                                        </div>
                                    </div>
                                    <div class="row mb-3 text-center">
                                        <div class="col">
                                            <p>Numéro de téléphone : {{ $mydata->telephone }}</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="row">
                            <div class="card">
                                <div class="card-header text-center" style="background-color: #6c757d">
                                    <h2
                                        style="font-family: 'AllisonScript';color: #000000;
                                    font-size: 33px;">
                                        Vos informations</h2>
                                </div>
                                <div class="card-body">
                                    <div class="row mb-3 text-center">
                                        <div class="col">
                                            <h3 style="font-family:Markthin">Prénom :</h3>
                                            <input class="text-center" style="font-size: 23px" type="text"
                                                style="font-family:Markthin" value="{{ $mydata->prenom }}" disabled>
                                            {{-- <p>{{ $mydata->prenom }}</p> --}}
                                        </div>
                                        <div class="col">
                                            <h3 style="font-family:Markthin">Nom:</h3>
                                            <input class="text-center" style="font-size: 23px" type="text"
                                                style="font-family:Markthin" value="{{ $mydata->nom }}" disabled>
                                            {{-- <p>{{ $mydata->nom }}</p> --}}
                                        </div>
                                    </div>
                                    <div class="row mb-3 text-center">
                                        <div class="col">
                                            <h3 style="font-family:Markthin">Email :</h3>
                                            <input class="text-center" style="font-size: 23px" type="text"
                                                style="font-family:Markthin" value="{{ $mydata->email }}" disabled>
                                            {{-- <p>{{ $mydata->email }}</p> --}}
                                        </div>
                                        <div class="col">
                                            <h3 style="font-family:Markthin">Référence :</h3>
                                            <input class="text-center" style="font-size: 23px" type="text"
                                                value="{{ $mydata->id }}" disabled>
                                            {{-- <p>{{ $mydata->id }}</p> --}}
                                        </div>

                                    </div>
                                    <div class="row mb-3 text-center">
                                        <div class="col">
                                            <h3 style="font-family:Markthin">Numéro de téléphone :</h3>
                                            <input class="text-center" style="font-size: 23px" type="text"
                                                style="font-family:Markthin" value="{{ $mydata->telephone }}" disabled>
                                        </div>
                                        {{-- <div class="col text-center">
                                            <button type="button" class="btn btn-primary btn-lg btn-block">
                                                Modifier</button>
                                        </div> ----------------------------------------------- --}}

                                        <div class="col text-center">
                                            <label for=""></label><br>
                                            <button type="button" class="btn btn-primary btn-lg btn-block"
                                                data-bs-toggle="modal" data-bs-target="#exampleModal_{{ $mydata->id }}">
                                                Modifier</button>
                                        </div>
                                        {{--  ------------------------------------------------- --}}

                                        {{-- <button type="button" class="btn btn-primary btn-lg btn-block"
                                            data-bs-toggle="modal" data-bs-target="#exampleModal_{{ $voyage->id }}">
                                            Résérver
                                        </button> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="col-lg-4 col-md-12"><img alt="titre" class="img-fluid"
                            src="{{ asset('/img/billetteries_block_img.jpg') }}" /></div> --}}
                </div>
            </div>
        </div>

        {{-- <div class="row">
            <div class="card">
                <div class="card-header text-center">
                    <h3>Vos Informations </h3>
                </div>

                <div class="card-body">
                    <div class="row mb-3 text-center">
                        <div class="col">
                            <h4>Prénom:</h4>
                            <p>{{ $mydata->prenom }}</p>
                        </div>
                        <div class="col">
                            <h4>Nom:</h4>
                            <p>{{ $mydata->nom }}</p>
                        </div>
                    </div>
                    <div class="row mb-3 text-center">
                        <div class="col">
                            <h3>Email:</h3>
                            <p>{{ $mydata->email }}</p>
                        </div>
                        <div class="col">
                            <h3>Référence:</h3>
                            <p>{{ $mydata->id }}</p>
                        </div>
                    </div>
                    <div class="row mb-3 text-center">
                        <div class="col">
                            <h3>Numéro de téléphone:</h3>
                            <p>{{ $mydata->telephone }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        {{-- <div class="container">
            <div class="card">
                <div class="card-header text-center">
                    <h3>Votre Informations </h3>
                </div>
                <div class="card-body ">

                    <div class="row mb-3 text-center">
                        <div class="col">
                            <h4>Prénom: {{ $mydata->prenom }} </h4>
                        </div>
                        <div class="col">
                            <h4>Nom : {{ $mydata->nom }}</h4>
                        </div>
                    </div>

                    <div class="row mb-3 text-center">
                        <div class="col">
                            <h3>Email : {{ $mydata->email }}</h3>
                        </div>
                        <div class="col">
                            <h3> Reference : {{ $mydata->id }}</h3>
                        </div>
                    </div>

                    <div class="row mb-3 text-center">
                        <div class="col">
                            <h3 class="card-text">Numéro de téléphone : {{ $mydata->telephone }} </h3>
                        </div>
                    </div>
                </div>

            </div>
        </div> --}}

        @if ($reservationsCount > 0)

            <h1 class="text-center" style="font-family: 'AllisonScript';color:rgb(61, 21, 21)">la partie de reservation :
            </h1>
            <br>
            <table class="container table">
                <thead>
                    <tr class="text-center">
                        <th>Ref_Reservation</th>
                        <th>Ref_voyage</th>
                        <th>Voyage</th>
                        <th>Prix</th>
                        <th>Durée</th>
                        <th>Place</th>
                        <th>Restauration</th>
                        {{-- <th>Date_reservation</th> --}}
                        <th>Date_Mofication</th>

                    </tr>
                </thead>
                <tbody>

                    @foreach ($reservations as $reservation)
                        <tr class="container text-center">
                            <td>{{ $reservation->id }}</td>
                            <td>{{ $reservation->id_voyage }}</td>

                            @php
                                // recuperer Id de voyage  du table concerve ------------------:
                                
                                $id_voyage = $reservation->id_voyage;
                                
                                //recuperer data de la table Voyage par le Id ------------------::
                                $TableVoyage = DB::table('voyages')
                                    ->where('id', $id_voyage)
                                    ->first();
                                
                                // chercher le nom de voyage par le id a recuperer ------------------::
                                $nom_Voyage = $TableVoyage->nom_voyage;
                                
                                //recuperer le prix  du voyage:
                                $price = $TableVoyage->prix;
                                
                                //recupere la duree du voyage :
                                $duree = $TableVoyage->duree_voyage;
                                
                                // recuperertotale  des  personnes:
                                $places = $TableVoyage->total_reserved;
                                
                                // //recuperer  le  restauration :
                                
                                $type_rst = $TableVoyage->restauration;
                                $Type_restauration = 'Non';
                                
                                if ($type_rst > 0) {
                                    $Type_restauration = $type_rst . ' fois';
                                }
                                
                            @endphp

                            <td>{{ $nom_Voyage }}</td>
                            <td>{{ $price }}</td>
                            <td>{{ $duree }}</td>
                            <td>{{ $places }}</td>
                            <td>{{ $Type_restauration }}</td>
                            {{-- <td>{{ $reservation->created_at }}</td> --}}
                            <td>{{ $reservation->updated_at }}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        @else
            <h2 class="container" style="font-family: 'AllisonScript'">Vous n'avez effectué aucune réservation.</h2>
        @endif
    </div>

    <div class="modal fade" id="exampleModal_{{ $mydata->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-dark text-white text-center">
                    <h5 class="modal-title" id="exampleModalLabel">Modifier votre informations :</h5>
                    {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close"></button> --}}

                    <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('Md_Data_profil') }}">
                        {{-- <form method="POST" action="{{ route('Md_Data_profil') }}"> --}}
                        @csrf
                        <input type="text" class="form-control d-none" value=" {{ $mydata->id }}"
                            name="reference_Profil">
                        <div class="mb-3">

                            <label for="name" class="form-label">Name :</label>

                            <input type="text" class="form-control" placeholder="Saisie votre Nom" name="name_Saisie"
                                value="{{ $mydata->nom }}">

                            @error('name_Saisie')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror

                            {{-- <input type="text" class="form-control d-none" value=" {{ $mydata->id }}"
                                name="reference_Profil"> --}}
                        </div>

                        <div class="mb-3">

                            <label for="name" class="form-label">Prenom :</label>
                            <input type="text" class="form-control" placeholder="Saisie votre Prenom"
                                name="prenom_Saisie" value="{{ $mydata->prenom }}">
                            @error('prenom_Saisie')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">

                            <label for="name" class="form-label">Numéro télèphone :</label>
                            <input type="text" class="form-control" placeholder="Saisie votre Numéro télèphone "
                                name="Tel_Saisie" value="{{ $mydata->telephone }}">
                            @error('Tel_Saisie')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">

                            <label class="form-label">Email : </label>
                            <input type="email" class="form-control" placeholder="Saisie votre Email"
                                value="{{ $mydata->email }}" name="Email_Saisie">
                            @error('Email_Saisie')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@stop
