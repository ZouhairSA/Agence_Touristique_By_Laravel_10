@extends('components.principal')
@section('page_Chefchaoune')
    <link rel="stylesheet" type="text/css" href="css/checf_page.css" />

    <div class="title_page"
        style="background: url('{{ asset('/img/chefc2.jpg') }}') no-repeat;background-size: cover !important;">
        <div class="container">
            <div class="row">
                {{-- <h1 id="chefchaoune_P">Chefchaoune, la belle bleue "</h1> --}}
                <h1 id="chefchaoune_P"></h1>

            </div>
        </div>
    </div>


    <script>
        var title = document.getElementById("chefchaoune_P");
        var words = "Chefchaoune, la belle bleue ";
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
    {{-- chefc5.jpg --}}
    <div class="presentation">
        <div class="container">
            <div class="row wow slideInRight" data-wow-duration="2.5s">
                <h3>Presentation</h3>

                <h4>Pourquoi choisir Chefchaoune ?</h4>

                <p>Chefchaouen est la ville la plus touristique du nord du Maroc. Ancienne destination des hippies dans les
                    années 60, elle attire aujourd’hui un nombre ridicule de personnes inscrites sur Instagram. A la fois
                    spectaculaire, un peu bizarre et agréable grâce aux montagnes autour. </p>
            </div>
        </div>
    </div>

    <div class="switcher_home">
        <div class="container">
            <div class="row">
                <div class="col-md-6  wow slideInLeft" data-wow-duration="1.5s">
                    <div class="owl-carousel nos_services_home" id="nos_services_home">

                        <div class="item_nos_produit_home position-relative"><a href="#"><img alt="titre"
                                    class="img-fluid " src="{{ asset('/img/hotell2.png') }}" /> </a> <a href="#">
                            </a>

                            <h3><a href="/page_chefchaoun" style="color:rgb(255, 255, 255)">HT.Tarek</a></h3>
                            <a href="/"> </a>
                        </div>
                        <div class="item_nos_produit_home position-relative"><a href="#"><img alt="titre"
                                    class="img-fluid" src="{{ asset('img/chefc4.jpg') }}" /> </a> <a href="#">
                            </a>

                            <h3><a href="/">HT.Puerta Azul</a></h3>
                            <a href="/props_page"> </a>
                        </div>
                        <div class="item_nos_produit_home position-relative"><a href="#"><img alt="titre"
                                    class="img-fluid" src="{{ asset('img/hotell4.png') }}" /> </a> <a href="#">
                            </a>

                            <h3><a href="/">HT.Molino Garden</a></h3>
                            <a href="/"> </a>
                        </div>
                        <div class="item_nos_produit_home position-relative">
                            <a href="#">
                                <img alt="titre" class="img-fluid" src="{{ asset('/img/hotell6.png') }}" /> </a> <a
                                href="#">
                            </a>

                            <h3><a href="/page_chefchaoun">HT.Alkhalifa</a></h3>
                            <a href="/"> </a>
                        </div>
                        {{-- hotell6.png hotel1.png --}}
                    </div>
                </div>

                <div class="col-md-5  switcher_home_left wow fadeInUp" data-wow-duration="2.5s">
                    <h3 class="text-center">Hotel</h3>
                    <p class="text-center">Choisir hôtel selon besoin</p>
                    <a href="#" style="margin-left: 186px;">Decouvrir<img alt="looking_down_arrow" class="img-fluid"
                            src="{{ asset('/img/looking_down_arrow.png') }}" /></a>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="presentation">
        <div class="container">
            <div class="row wow slideInRight" data-wow-duration="2.5s">
                <h3>Presentation</h3>

                <h4>Pourquoi choisir Chefchaoune ?</h4>

                <p>Chefchaouen est la ville la plus touristique du nord du Maroc. Ancienne destination des hippies dans les
                    années 60, elle attire aujourd’hui un nombre ridicule de personnes inscrites sur Instagram. A la fois
                    spectaculaire, un peu bizarre et agréable grâce aux montagnes autour. </p>
            </div>
        </div>
    </div> --}}

    <div class="seminaires_block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 align-self-center">
                    <h4><span>LE PARADIS DE CHEFCHAOUEN</h4>

                    <p>Le paradis de Chefchaouen est une petite ville située dans les montagnes du Rif au nord-ouest du
                        Maroc. Elle est connue pour ses rues étroites et sinueuses, ses maisons blanches et bleues, ainsi
                        que pour son ambiance paisible et détendue.

                        Chefchaouen est un véritable joyau du Maroc, avec ses bâtiments blanchis à la chaux et ses portes et
                        fenêtres peintes en bleu clair. Cette couleur a une signification particulière pour les habitants de
                        la ville, qui la considèrent comme un symbole de la paix et de la spiritualité.</p>
                </div>
                <div class="col-lg-1 col-md-0">&nbsp;</div>

                <div class="col-lg-5 col-md-12"><img alt="titre" class="img-fluid"
                        src="{{ asset('/img/chefchaoune_presentation1.png') }}" />
                </div>
            </div>
        </div>
    </div>
    <div class="seminaires_block">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12"><img alt="titre" class="img-fluid"
                        src="{{ asset('/img/chefchaoune_presentation3.png') }}" />
                </div>
                <div class="col-lg-1 col-md-0">&nbsp;</div>
                <div class="col-lg-6 col-md-12 align-self-center">
                    <h4><span style="color:rgb(80, 112, 70)">L'ARTISANAT INTERNE</span></h4>

                    <p>Détendez-vous à la terrasse de l’un des nombreux cafés de la place Outa el Hammam, le cœur de la
                        ville, d’où vous pouvez voir une partie de la mosquée El-Masjid El-Aadam et la casbah. Celle-ci
                        abrite un somptueux jardin ainsi que le musée ethnographique de Chefchaouen.</p>
                </div>
                <div class="col-lg-1 col-md-0">&nbsp;</div>
            </div>
        </div>
    </div>
    <div class="contact_block">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <p>Pour plus d'informations, <span>concerne les offres des voyages</span></p>
                </div>

                <div class="col-6"><a href="/billeterie_page"><img alt="looking_down_arrow" class="img-fluid"
                            src="{{ asset('/img/mail_icon.png') }}" />Résérver un billet(s) </a></div>
            </div>
        </div>
    </div>
@endsection
