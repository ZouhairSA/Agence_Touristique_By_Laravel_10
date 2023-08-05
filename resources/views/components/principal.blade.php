<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pages</title>

    {{-- <link href="{{ asset('/img/logo.png"') }}" rel="image_src" /> --}}
    <link rel="shortcut icon" href="{{ asset('/img/favicon.ico') }}" />



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/animate.css" />

    <style>
        body::-webkit-scrollbar {
            display: none;
        }
    </style>

</head>

<body>
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-4">
                    <div class="logo">
                        <a href="/"><img src="{{ asset('/img/logo.png') }}" class="img-fluid" alt=""></a>
                    </div>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-7 menu_div">
                    <div class="menu_header liste_deroulante">
                        <ul class="nav justify-content-evenly ">
                            <li class="nav-item">
                                <a class="nav-link" href="/props_page">À propos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/seminaire_page">Séminaires</a>
                            </li>
                            <li class="nav-item dropdown_nav_a"><a class="nav-link" href="">Voyages</a>
                                <ul class="dropdown_nav">
                                    <li><a href="/golfique_page">Voyage golfique</a></li>
                                    <li><a href="/carte_voyage">Voyages à la carte au Maroc </a>
                                    </li>
                                    <li><a href="/organise_voyage">Voyages organisés</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/billeterie_page">Billeterie</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/contact_page"> <img class="img-fluid"
                                        src="{{ asset('/img/mail_header_icon.png') }}" alt="logo">Nous contacter</a>
                            </li>
                        </ul>
                    </div>
                    <div class="menu_global hide_menu">
                        <div class="menu">
                            <div class="menu_ul liste_deroulante">
                                <ul>
                                    <li><a href="/props_page">À propos</a></li>
                                    <li><a href="/golfique_page">Voyage golfique</a></li>
                                    <li><a href="/carte_voyage">Voyages à la carte au Maroc </a>
                                    </li>

                                    <li><a href="/organise_voyage">Voyages organisés</a></li>
                                    <li><a href="/registrement_page">Registrement</a></li>
                                    <li><a href="/seminaire_page">Séminaires</a></li>
                                    <li><a href="/billeterie_page">Billeterie</a></li>
                                    <li><a href="/contact_page"> Nous contacter</a></li>


                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="hamburger" id="hamburger">
                        <button>
                            <span class="bar"></span>
                        </button>
                    </div>
                </div>
                <div class="col-md-1 col-sm-1 col-xs-1 align-self-center les_langues_desktop">
                    <a class="nav-link" href="/registrement_page"
                        style="font-family: 'MarkBold'; color: #fff;font-size: 13px">
                        <img class="img-fluid" src="{{ asset('/img/login_icon.png') }}" alt="en">
                    </a>
                </div>
            </div>
        </div>
        </div>
    </header>

    {{-- creation  des  pages avec Yield --}}
    @yield('test1')

    @yield('propos')

    @yield ('seminaire')

    @yield('contact_page')

    @yield('voyage_par_carte')

    @yield('voyage_golfique')

    @yield('voyage_organise')

    @yield('billeterie')

    @yield('registrement')

    @yield('page_Chefchaoune')

    @yield('page_ifrane')

    @yield('page_login_user')

    @yield('page_login_profil')

    @yield('page_voyage_reservation')

    @yield('page_reservation_seul_voyage')

    @yield('profil_page_id')

    <!-- footer  -->
    <section class="footer">
        <div class="container">
            <div class="row text-center">
                <a href="/"><img src="{{ asset('/img/logo_footer.png') }}" class="img-fluid" alt=""></a>
            </div>
            <div class="row">
                <div class="menu_footer">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link" href="/props_page">À propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/golfique_page">Voyage golfique</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/carte_voyage">Voyages à la carte au
                                Maroc </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/seminaire_page">Séminaires</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/billeterie_page">Billeterie</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/organise_voyage">Voyages organisés</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact_page">Nous contacter</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="media">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link" href="#"> © 2022 - Tous droits réservés </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.facebook.com/auxzoneslibres" target="_blank"><img
                                    src="{{ asset('/img/facebook.png') }}" class="img-fluid" alt="facebook"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.instagram.com/aux_zones_libres/"
                                target="_blank"><img src="{{ asset('/img/instagram.png') }}" class="img-fluid"
                                    alt="instagram"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.linkedin.com/feed/" target="_blank"><img
                                    src="{{ asset('/img/linkedin.png') }}" class="img-fluid" alt="linkedin"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_footer" href="/">Réalisé par : Z O H A I R _
                                S A B Y O U D </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- CDN  --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script src="{{ asset('/js/wow.min.js') }}"></script>
    <script src="{{ asset('/js/main.js') }}"></script>
</body>

</html>
