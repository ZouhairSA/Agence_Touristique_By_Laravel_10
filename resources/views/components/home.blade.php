<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/animate.css" />

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
                                <a class="nav-link" href="/fr/page/apropos">À propos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/fr/page/seminaires">Séminaires</a>
                            </li>
                            <li class="nav-item dropdown_nav_a"><a class="nav-link" href="">Voyages</a>
                                <ul class="dropdown_nav">
                                    <li><a href="/fr/page/voyage_golfique">Voyage golfique</a></li>
                                    <li><a href="/fr/page/voyages-a-la-carte-au-maroc">Voyages à la carte au Maroc </a>
                                    </li>
                                    <li><a href="/fr/page/voyages">Voyages organisés</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/fr/page/billeterie">Billeterie</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/fr/contact">Nous contacter</a>
                            </li>
                        </ul>
                    </div>
                    <div class="menu_global hide_menu">
                        <div class="menu">
                            <div class="menu_ul liste_deroulante">
                                <ul>
                                    <li><a href="/fr/page/apropos">À propos</a></li>
                                    <li><a href="/fr/page/voyage_golfique">Voyage golfique</a></li>
                                    <li><a href="/fr/page/voyages-a-la-carte-au-maroc">Voyages à la carte au Maroc </a>
                                    </li>
                                    <li><a href="/fr/page/voyages">Voyages organisés</a></li>
                                    <li><a href="/fr/page/seminaires">Séminaires</a></li>
                                    <li><a href="/fr/page/billeterie">Billeterie</a></li>
                                    <li><a href="/fr/contact">Nous contacter</a></li>

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

            </div>
        </div>
    </header>


    <div class="title_home"
        style="background: url('{{ asset('/img/header_home_page.jpg') }}') no-repeat;background-size: cover !important;background-position: center;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Envie de decouvrir pour reussir ?</h1>
                    <img class="img-fluid wow bounce" data-wow-duration="2.5s" data-wow-iteration="infinite"
                        src="{{ asset('/img/looking_down_arrow.png') }}" alt="looking_down_arrow">
                </div>
            </div>
        </div>
    </div>

    <div class="home_incentives">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow fadeInDown" data-wow-duration="2.5s"><img alt=" " class="img-fluid"
                        src="{{ asset('/img/businessman_holding_luggage_business_trip.jpg') }}" /></div>

                <div class="col-lg-6 align-self-center wow bounceIn" data-wow-delay="1s" data-wow-duration="2s">
                    <h3>S&eacute;minaires Incentives</h3>

                    <p>Aux Zones Libres, riche&nbsp;de ses tr&egrave;s nombreuses ann&eacute;es
                        d&rsquo;exp&eacute;rience, vous propose des prestations de qualit&eacute;,
                        accompagn&eacute;es d&rsquo;un service professionnel. Vous avez envie d&rsquo;organiser un
                        voyage au Maroc ? Marrakech, Dakhla, ou excursion sur mesure&hellip;</p>
                    <a href="https://auxzoneslibres.com/fr/page/seminaires">En savoir plus</a>
                </div>
            </div>
        </div>
    </div>
    <div class="switcher_home">
        <div class="container">
            <div class="row">
                <div class="col-md-4  switcher_home_left wow fadeInUp" data-wow-duration="2.5s">
                    <h3>Particuliers</h3>
                    <p>Voyages la carte au Maroc</p>
                    <a href="https://auxzoneslibres.com/fr/page/carte">Decouvrir<img alt="looking_down_arrow"
                            class="img-fluid" src="{{ asset('/img/looking_down_arrow.png') }}" /></a>
                </div>
                <div class="col-md-8  wow slideInRight" data-wow-duration="2.5s">
                    <div class="owl-carousel nos_services_home" id="nos_services_home">
                        <div class="item_nos_produit_home position-relative"><a href="#"><img alt="titre"
                                    class="img-fluid" src="{{ asset('img/view_morocco_1.jpg') }}" /> </a> <a
                                href="#"> </a>

                            <h3><a href="https://auxzoneslibres.com/fr/page/carte">Chefchaouen</a></h3>
                            <a href="https://auxzoneslibres.com/fr/page/carte"> </a>
                        </div>

                        <div class="item_nos_produit_home position-relative"><a href="#"><img alt="titre"
                                    class="img-fluid" src="{{ asset('img/view_morocco_2.jpg') }}" /> </a> <a
                                href="#"> </a>

                            <h3><a href="https://auxzoneslibres.com/fr/page/carte">Ourzazate</a></h3>
                            <a href="https://auxzoneslibres.com/fr/page/carte"> </a>
                        </div>
                        <div class="item_nos_produit_home position-relative"><a href="#"><img alt="titre"
                                    class="img-fluid" src="{{ asset('img/view_morocco_3.jpg') }}" /> </a> <a
                                href="#"> </a>

                            <h3><a href="https://auxzoneslibres.com/fr/page/carte">Marrakech</a></h3>
                            <a href="https://auxzoneslibres.com/fr/page/carte"> </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="presentation">
        <div class="container">
            <div class="row wow slideInRight" data-wow-duration="2.5s">
                <h3>Presentation</h3>

                <h4>Pourquoi choisir Aux Zones Libres ?</h4>

                <p>Aux Zones Libres, riche de ses tr&egrave;s nombreuses ann&eacute;es d&rsquo;exp&eacute;rience,
                    vous propose des prestations de qualit&eacute;,&nbsp;accompagn&eacute;es d&rsquo;un service
                    professionnel. Vous avez envie d&rsquo;organiser un voyage au Maroc ? Marrakech, Dakhla, ou
                    excursion sur mesure&hellip; nous sommes l&agrave; pour tout organiser pour un voyage en toute
                    s&eacute;r&eacute;nit&eacute;. Envie d&rsquo;&eacute;vasion, quitter le Maroc et d&eacute;couvrir
                    les charmes de la Turquie ou&nbsp;d&eacute;couvrir la culture asiatique au Vi&ecirc;t Nam ou en
                    Indon&eacute;sie ?</p>
            </div>
        </div>
    </div>

    <div class="billeterie">
        <div class="container">
            <div class="row wow slideInLeft" data-wow-duration="2.5s">
                <div class="col-lg-6 col-md-12">
                    <div class="text_billeterie">
                        <h3>Billeterie</h3>

                        <p>Vous avez besoin d&rsquo;un billet d&rsquo;avion ou d&rsquo;une r&eacute;servation de
                            croisi&egrave;re ? Consultez-nous vous obtiendrez une r&eacute;ponse rapide et votre
                            r&eacute;servation sera quasiment instantan&eacute;e.</p>
                        <a href="https://auxzoneslibres.com/fr/page/billeterie">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="voyages_organises">
        <div class="container">
            <div class="row">
                <div class="col-12 wow fadeInDown" data-wow-duration="2.5s"><img alt="titre" class="img-fluid"
                        src="{{ asset('/img/young_girl_steps.png') }}" />
                    <div class="voyages_organises_text wow fadeInUp" data-wow-duration="2.5s">
                        <h4>Voyages organis&eacute;s</h4>

                        <p>Envie d&rsquo;aventure et de partir d&eacute;couvrir d&rsquo;autres endroits de la
                            plan&egrave;te,
                            Istanbul vous tente avec ses monuments et son architecture, le Vi&ecirc;t-nam et sa culture
                            vous
                            attirent, Bali vous attend &eacute;galement.</p>
                        <a href="https://auxzoneslibres.com/fr/page/voyages">D&eacute;couvrir<img
                                alt="looking_down_arrow" class="img-fluid"
                                src="{{ asset('/img/looking_down_arrow.png') }}" /></a>
                    </div>
                </div>
            </div>

            <div class="row">&nbsp;</div>
        </div>


        <div class="switcher_confironce_home my-5 wow slideInLeft" data-wow-duration="2.5s">
            <div class="switcher_confironce_text">
                <h3>Ils nous font confiance</h3>
            </div>

            <div class="container">
                <div class="owl-carousel switcher_confironce" id="switcher_confironce">
                    <div class="item_nos_produit_home"><img alt="titre" class="img-fluid"
                            src="{{ asset('/img/01.png') }}" />
                    </div>

                    <div class="item_nos_produit_home"><img alt="titre" class="img-fluid"
                            src="{{ asset('/img/02.png') }}" />
                    </div>

                    <div class="item_nos_produit_home"><img alt="titre" class="img-fluid"
                            src="{{ asset('/img/03.png') }}" />
                    </div>

                    <div class="item_nos_produit_home"><img alt="titre" class="img-fluid"
                            src="{{ asset('/img/04.png') }}" />
                    </div>

                    <div class="item_nos_produit_home"><img alt="titre" class="img-fluid"
                            src="{{ asset('/img/05.png') }}" />
                    </div>

                    <div class="item_nos_produit_home"><img alt="titre" class="img-fluid"
                            src="{{ asset('/img/06.png') }}" />
                    </div>

                    <div class="item_nos_produit_home"><img alt="titre" class="img-fluid"
                            src="{{ asset('/img/07.png') }}" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 voyages_organises_col">&nbsp;</div>

    <!-- footer  -->
    <section class="footer">
        <div class="container">
            <div class="row text-center">
                <a href="/"><img src="{{ asset('/img/logo_footer.png') }}" class="img-fluid"
                        alt=""></a>
            </div>
            <div class="row">
                <div class="menu_footer">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link" href="/fr/page/apropos">À propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/fr/page/voyage_golfique">Voyage golfique</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/fr/page/voyages-a-la-carte-au-maroc">Voyages à la carte au
                                Maroc </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/fr/page/seminaires">Séminaires</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/fr/page/billeterie">Billeterie</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/fr/page/voyages">Voyages organisés</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/fr/contact">Nous contacter</a>
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
                            <a class="nav-link" href="https://www.facebook.com/auxzoneslibres"><img
                                    src="{{ asset('/img/facebook.png') }}" class="img-fluid" alt="facebook"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.instagram.com/aux_zones_libres/"><img
                                    src="{{ asset('/img/instagram.png') }}" class="img-fluid" alt="instagram"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="link ici"><img src="{{ asset('/img/linkedin.png') }}"
                                    class="img-fluid" alt="linkedin"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub_footer" href="https://elevenmedia.ma/">Réalisé par : Z O H A I R _
                                S A B Y O U D</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>









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
    <script src="{{ asset('/js/main.js') }}"></script>

</body>

</html>
