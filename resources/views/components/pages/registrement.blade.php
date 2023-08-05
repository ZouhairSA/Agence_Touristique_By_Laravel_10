@extends('components.principal')
@section('registrement')
    <div class="title_page"
        style="background: url('{{ asset('/img/registrementZ.jpg') }}') no-repeat;background-size: cover !important;">
        <div class="container">
            <div class="row">
                <h1 id="title"></h1>
                {{-- Rejoignez notre communauté en vous inscrivant sur notre site --}}

            </div>
        </div>
    </div>

    <script>
        var title = document.getElementById("title");
        var words = "Rejoignez notre communauté en vous inscrivant sur notre site";
        var i = 0;
        var isDeleting = false;

        function type() {
            if (i < words.length) {
                title.innerHTML += words.charAt(i);
                i++;
                setTimeout(type, 80);
            } else {
                isDeleting = true;
                setTimeout(deleteLetter, 130);
            }
        }

        function deleteLetter() {
            if (title.innerHTML.length > 0 && isDeleting) {
                title.innerHTML = title.innerHTML.slice(0, -1);
                setTimeout(deleteLetter, 120);
            } else {
                isDeleting = false;
                i = 0;
                setTimeout(type, 500);
            }
        }

        type();
    </script>
    <style>
        @keyframes pulse {

            0% {
                transform: scale(0.9);
                opacity: 1;
            }

            50% {
                transform: scale(1);
                opacity: 0.5;
            }

            100% {
                transform: scale(0.9);
                opacity: 1;
            }

        }
    </style>
    {{-- <script>
        var title = document.getElementById("title");
        var words = "Rejoignez notre communauté en vous inscrivant sur notre site";
        var i = 0;

        function printLetter() {
            if (i < words.length) {
                title.innerHTML += words.charAt(i);
                i++;
                setTimeout(printLetter, 100);
            }
        }
        printLetter();
    </script> --}}

    {{-- page_apropos.jpg --}}

    {{-- <div class="container" style="height: 
    2em">
    
        <div> --}}
    {{-- class="container" style="height: 
            5em,position: relative --}}


    @if (session()->has('success'))
        <div class="container" style="height: 
5em,position: relative">

            <br>
            {{-- alert  de  success : --}}
            <div class="text-center" style="position: relative;">

                {{-- @if (session()->has('success')) --}}
                <div class="alert alert-success text-center"
                    style="border: 2px solid #ffffff; border-radius: 5px; animation: pulse 2s ease-in-out infinite;">
                    {{ session('success') }}
                </div>
                {{-- @endif --}}

            </div>
        </div>
    @endif

    {{-- 
    @if (session()->has('success'))
        <div calss="container" style="height: 
        5em,position: relative">
            <div class="text-center">
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            </div>
        </div>
    @endif --}}

    <div class="switcher_confironce_home my-5 wow slideInLeft" data-wow-duration="2.1s">
        <div class="switcher_confironce_text">
            <h3>Ils nous font confiance</h3>
        </div>
        {{-- style="margin-left: 20px" --}}
        <div class="container">
            <div class="owl-carousel switcher_confironce" id="switcher_confironce">
                <div class="item_nos_produit_home"><img alt="titre" style="width: auto" class="img-fluid"
                        src="{{ asset('/img/01.png') }}" />
                </div>

                <div class="item_nos_produit_home"><img alt="titre" style="width: auto" class="img-fluid"
                        src="{{ asset('/img/02.png') }}" />
                </div>

                <div class="item_nos_produit_home"><img alt="titre" style="width: auto" class="img-fluid"
                        src="{{ asset('/img/03.png') }}" />
                </div>

                <div class="item_nos_produit_home"><img alt="titre" style="width: auto" class="img-fluid"
                        src="{{ asset('/img/04.png') }}" />
                </div>

                <div class="item_nos_produit_home"><img alt="titre" style="width: auto" class="img-fluid"
                        src="{{ asset('/img/05.png') }}" />
                </div>

                <div class="item_nos_produit_home"><img alt="titre" style="width: auto" class="img-fluid"
                        src="{{ asset('/img/06.png') }}" />
                </div>

                <div class="item_nos_produit_home"><img alt="titre" style="width: auto" class="img-fluid"
                        src="{{ asset('/img/07.png') }}" />
                </div>
            </div>
        </div>
    </div>

    {{-- </div>
    </div> --}}

    <div class="container">
        {{-- <div class="row"> --}}
        {{-- col-lg-9 col-md-12 align-self-center --}}

        <div class="col-md-12 container">
            {{-- <div class="col-md-6"> --}}
            <div class="card mt-5 shadow-lg"
                style="background-image:
                    url({{ asset('/img/bkk1.jpg') }});background-size: cover;">
                <div class="card-body">
                    <h3 class="text-center mb-4" style="color:rgb(235, 233, 232);font-family: 'MarkBold';font-size:33px">
                        Sign
                        In</h3>

                    <form method="POST" action="{{ route('store_data_profil') }}">

                        @csrf

                        <div class="mb-3 text-center mx-auto" style="max-width: 700px;">
                            {{-- <label for="name" class="form-label">Nom </label> --}}
                            {{-- form-control rounded-pill --}}
                            <input type="text" class="form-control rounded-pill" id="nom" name="nom"
                                placeholder="Saisie votre Nom" required maxlength="20">

                            @error('nom')
                                <div class="text-white">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>

                        <div class="mb-3 text-center mx-auto" style="max-width: 700px;">
                            {{-- <label for="prenom" class="form-label">Prenom</label> --}}
                            <input type="text" class="form-control rounded-pill" id="prenom" name="prenom"
                                placeholder="Saisie votre Prenom" required>

                            @error('prenom')
                                <div class="text-white">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>

                        <div class="mb-3 text-center mx-auto" style="max-width: 700px;">
                            {{-- <label for="teplephone" class="form-label">Telephone</label> --}}
                            <input type="number" class="form-control rounded-pill" id="telephone" name="telephone"
                                placeholder="Saisie votre Téléphone" required>


                            @error('telephone')
                                <div class="text-white">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>

                        <div class="mb-3 text-center mx-auto" style="max-width: 700px;">
                            {{-- <label for="job" class="form-label">Email</label> --}}

                            <input type="email" class="form-control rounded-pill" id="email" name="email"
                                placeholder="Saisie votre Email" required>

                            @error('email')
                                <div class="text-white">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>

                        <div class="mb-2 text-center mx-auto" style="max-width: 700px;">
                            {{-- <label for="job" class="form-label">password </label> --}}
                            <input type="password" class="form-control rounded-pill" id="password" name="password"
                                placeholder="Saisie votre Password" required>

                            @error('password')
                                <div class="text-white">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg rounded-pill px-5 custom-button-az"
                                style="background-color: transparent;">Sign Up</button>
                            <a href="/show_Page_login" class="btn btn-primary btn-lg  rounded-pill px-5 custom-button-az"
                                style="background-color: transparent;">Sign In</a>
                        </div>


                        {{-- <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg rounded-pill px-5">Sign Up</button>
                            <a href="/show_Page_login" class="btn btn-primary btn-lg  rounded-pill px-5">Sign In</a>
                        </div> --}}
                    </form>
                </div>
            </div>
        </div>

        {{-- </div> --}}
        {{-- <div class="col-lg-4 col-md-12 order-first order-lg-last" style="backgroud-color:red">
            <img alt="titre" class="img-fluid" src="{{ asset('/img/bkk1.jpg') }}" />
            <br>
            
        </div> --}}

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
    <br>
@endsection
