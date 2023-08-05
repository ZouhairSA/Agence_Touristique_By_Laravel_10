@extends('components.principal')
@section('billeterie')
    <div class="title_page"
        style="background: url('{{ asset('/img/page_billetteries.jpg') }}') no-repeat;background-size: cover !important;">
        <div class="container">
            <div class="row">
                {{-- <h1>Choisie Billet découvrir plus ...</h1> --}}
                <h1 id="Pg_reservation"></h1>
            </div>
        </div>
    </div>

    <script>
        var title = document.getElementById("Pg_reservation");
        var words = "Choisie Billet découvrir plus ...";
        var i = 0;
        var isDeleting = false;

        function type() {
            if (i < words.length) {
                title.innerHTML += words.charAt(i);
                i++;
                setTimeout(type, 190);
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

    {{-- aler -------------------------------------------------------- --}}
    @if (session()->has('success'))
        <div class="container" style="height: 
5em">

            <br>
            {{-- alert  de  success : --}}
            <div class="text-center">

                {{-- @if (session()->has('success')) --}}
                <div class="alert alert-success text-center">
                    {{ session('success') }}
                </div>
                {{-- @endif --}}

            </div>
        </div>
    @endif
    {{-- ---------------------------------------------------------- --}}
    @if (session()->has('error'))
        <div class="container" style="height: 
5em">

            <br>
            <div class="text-center">

                {{-- @if (session()->has('error')) --}}
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                {{-- @endif --}}

            </div>
        </div>
    @endif

    {{-- </div> --}}
    {{-- ---------------------------------------------------------- --}}
    @if (session()->has('avertissement'))
        <div class="container" style="height: 
    5em">
            <div class="text-center">

                {{-- @if (session()->has('avertissement')) --}}
                <div class="alert alert-danger">
                    {{ session('avertissement') }}
                </div>


            </div>
        </div>
    @endif


    {{-- </div> --}}
    {{-- ---------------------------------------------------------- --}}
    @if (session()->has('problème'))
        <div class="container" style="height: 
5em">
            <div class="text-center">

                {{-- @if (session()->has('problème')) --}}
                <div class="alert alert-danger">
                    {{ session('problème') }}
                </div>
                {{-- @endif --}}

            </div>
        </div>
    @endif

    {{-- </div> --}}
    {{-- ---------------------------------------------------------- --}}



    <div class="billetteries_block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12"><img alt="titre" class="img-fluid"
                        src="{{ asset('/img/billetteries_block_img.jpg') }}" /></div>

                <div class="col-lg-6 col-md-12 align-self-center">
                    <h4>Vous avez besoin d&rsquo;un billet d&rsquo;avion <span>ou d&#39;une r&eacute;servation de
                            croisi&egrave;re ? </span></h4>

                    <p><span>Vous souhaitez r&eacute;server vos billets pour un voyage ?</span> Consultez-nous vous
                        obtiendrez une r&eacute;ponse rapide et votre r&eacute;servation sera quasiment instantan&eacute;e,
                        m&ecirc;me pour des billets low costs et des croisi&egrave;res partout &agrave; travers le
                        monde.&nbsp;</p>
                </div>
            </div>
        </div>
    </div>

    <div class="seminaires_block">
        <div class="container">
            <div class="row">
                <h1 class="text-center"
                    style="
                    color: #91a71d;
                    font-size: 48px;
                    font-family: 'AllisonScript';
                ">
                    Voyages</h1>
                <form>
                    @csrf

                    <div class="switcher_home">
                        <div class="container">
                            <div class="row">
                                <div class=" wow slideInLeft" data-wow-duration="1.5s">
                                    <div class="owl-carousel nos_services_home" id="nos_services_home">
                                        @foreach ($voyages as $voyage)
                                            <div
                                                class="item_nos_produit_home position-relative border-rotate animated-border">
                                                <div>
                                                    <div class="row mb-6">
                                                        <div class="col-12 text-center">
                                                            <div class="col">

                                                                {{-- <div class="text-center"> --}}
                                                                {{-- <input type="text" class="form-control text-center"
                                                                        id="nom" value="{{ $voyage->nom_voyage }}"
                                                                        disabled> --}}
                                                                <br>
                                                                <p type="text" id="nom" style="font-size:35px;"
                                                                    class="p-3 mb-2 bg-light text-dark"
                                                                    value="{{ $voyage->nom_voyage }}">
                                                                    {{ $voyage->nom_voyage }}</p>
                                                                <hr>
                                                                {{-- </div> --}}
                                                            </div>


                                                        </div>
                                                        {{-- ------------------------------------------ --}}

                                                        <div class="col-12 conatiner">
                                                            <div class="col text-center">
                                                                <br>
                                                                {{-- <label for="description" class="form-label  text-center"
                                                                    style="font-size:25px">
                                                                    Description
                                                                </label> --}}
                                                                {{-- border border-primary  border-3 --}}
                                                                <div class="">
                                                                    <p>{{ $voyage->description }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">

                                                            <div class="col">
                                                                <br>
                                                                <label style="font-size:20px" name="personnes"
                                                                    value="{{ $voyage->total_reserved }}">
                                                                    Nombre des personne : {{ $voyage->total_reserved }}
                                                                </label>
                                                                {{-- <label for="personnes"
                                                                    class="form-label font-weight-bold">Nombre de
                                                                    personnes</label>
                                                                <p id="personnes" name="personnes" disabled
                                                                    value="{{ $voyage->total_reserved }}">
                                                                    {{ $voyage->total_reserved }}</p> --}}

                                                            </div>

                                                            <div class="col">
                                                                <br>
                                                                <label style="font-size:20px" name="restaurant"
                                                                    value="{{ $voyage->restauration }}">
                                                                    Restaurant Repas : {{ $voyage->restauration }}
                                                                    fois.
                                                                </label>
                                                                <br>

                                                                {{-- <label for="restaurant"
                                                                    class="form-label font-weight-bold">Restaurant</label>
                                                                <input type="text" class="form-control" id="restaurant"
                                                                    name="restaurant" disabled
                                                                    value="{{ $voyage->restauration }}"> --}}
                                                            </div>
                                                            <hr>
                                                        </div>


                                                        <div class="row mb-3">

                                                            <div class="col text-center">
                                                                <div class="col">
                                                                    <label for="nom" style="font-size: 27px"
                                                                        class="form-label font-weight-bold text-center">Prix
                                                                        :
                                                                        {{ $voyage->prix }}</label>
                                                                    {{-- <div class="text-center">
                                                                        <input type="text" class="form-control text-center"
                                                                            id="nom" value="{{ $voyage->prix }}"
                                                                            disabled>
                                                                    </div> --}}
                                                                </div>
                                                            </div>

                                                            <div class="col text-center">
                                                                <button type="button"
                                                                    class="btn btn-primary btn-lg btn-block"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal_{{ $voyage->id }}">
                                                                    Résérver
                                                                </button>
                                                                <br>
                                                                {{-- <button type="submit" class="btn btn-primary">Envoyer</button> --}}
                                                                <br>
                                                            </div>
                                                        </div>



                                                        {{-- <div class="col-12 text-center">
                                                            <div class="col">
                                                                <label for="nom" style="font-size: 27px"
                                                                    class="form-label font-weight-bold text-center">Prix :
                                                                    {{ $voyage->prix }}</label>
                                                                     --}}

                                                        {{-- <div class="text-center">
                                                                    <input type="text" class="form-control text-center"
                                                                        id="nom" value="{{ $voyage->prix }}"
                                                                        disabled>
                                                                </div> --}}

                                                        {{-- </div>
                                                        </div>
                                                        <br> --}}
                                                        {{-- 
                                                        <div class="col-12 text-center">
                                                            <button type="button" class="btn btn-primary btn-lg btn-block"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal_{{ $voyage->id }}">
                                                                Résérver
                                                            </button>
                                                            <br> --}}
                                                        {{-- <button type="submit" class="btn btn-primary">Envoyer</button> --}}

                                                        {{-- <br>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="contact_block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <p>Pour plus d&#39;informations, <span>n&#39;h&eacute;sitez pas &agrave; nous contacter </span></p>
                </div>

                <div class="col-lg-6"><a href="/contact_page"><img alt="looking_down_arrow" class="img-fluid"
                            src="{{ asset('/img/mail_icon.png') }}" />Nous contacter</a></div>
            </div>
        </div>
    </div>

    {{-- la partie  de  reservation :  --}}


    @foreach ($voyages as $voyage)
        <div class="animated-borderr">
            <div class="modal fade" id="exampleModal_{{ $voyage->id }}" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-content">
                            <div class="modal-header bg-dark text-white">
                                <h5 class="modal-title text-center w-100" id="exampleModalLabel">
                                    Enter your name and email
                                </h5>
                                <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close"
                                    style="border: 3px solid white;"></button>
                            </div>


                            <div class="modal-body">
                                <form method="post" action="{{ route('validation_conserves') }}">
                                    @csrf

                                    <div class="mb-3 text-center">

                                        <label for="name_voyage" style="font-size: 25px" class="form-label">Nom voyage :
                                        </label>

                                        <label style=" color: #5b6624; font-family: 'Markthin' ; font-size: 41px">
                                            {{ $voyage->nom_voyage }}</label>

                                        <input type="text" class="form-control d-none"
                                            value=" {{ $voyage->nom_voyage }}" name="nom_voyage">

                                        <input type="text" class="form-control d-none" value=" {{ $voyage->id }}"
                                            name="nom_voyage">

                                    </div>

                                    <div class="row mb-3 text-center">
                                        <div class="col">

                                            <label style="font-size: 25px" class="form-label">Reference : </label>
                                            <label style="font-size: 21px">
                                                {{ $voyage->id }}</label>

                                            <input type="text" class="form-control d-none"
                                                value=" {{ $voyage->id }}" name="ref_voyage">
                                        </div>

                                        <div class="col">

                                            <label for="prix_voyage" class="form-label"
                                                style="font-size: 25px">Prix</label>
                                            <label style="font-size: 21px">
                                                {{ $voyage->prix }}</label>

                                            <input type="text" class="form-control bg-primary d-none"
                                                value=" {{ $voyage->prix }}" name="prix_voyage">

                                        </div>
                                    </div>
                                    {{-- Name --}}
                                    <div class="mb-3">

                                        <label for="name" class="form-label">Name :</label>
                                        <input type="text" class="form-control" id="nom_Profil" name="nom_profil"
                                            placeholder="saisie votre Name " required>

                                    </div>
                                    {{-- Email --}}
                                    <div class="mb-3">

                                        <label class="form-label">Email : </label>
                                        <input type="email" class="form-control" id="email_profil" name="email_profil"
                                            placeholder="saisie votre Email " required>

                                    </div>
                                    {{-- Password --}}
                                    <div class="mb-3">

                                        <label class="form-label">Password : </label>
                                        <input type="password" class="form-control" id="passw_profil"
                                            name="passw_profil" placeholder="saisie votre Password " required>

                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    @endforeach
@endsection
