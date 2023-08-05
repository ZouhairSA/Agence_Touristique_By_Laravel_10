@extends('components.principal')
@section('page_ifrane')
    <div class="title_page"
        style="background: url('{{ asset('/img/ifrane_p1.png') }}') no-repeat;background-size: cover !important;">
        <div class="container">
            <div class="row">
                <h1 id="chefchaoune_Pq"></h1>
            </div>
        </div>
    </div>
    <script>
        var title = document.getElementById("chefchaoune_Pq");
        var words = "IFRANE, La Suisse du Marroc";
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

    <div class="presentation">
        <div class="container">
            <div class="row wow slideInRight" data-wow-duration="2.5s">
                <h3>Presentation</h3>

                <h4>Pourquoi choisir IFRANE ?</h4>
                <p>
                    Ifrane est une ville située dans la région de Fès-Meknès, dans le centre du Maroc. Elle est connue pour
                    son
                    architecture européenne, ses forêts de cèdres et son climat tempéré.

                    Surnommée la "Suisse marocaine", Ifrane est une destination touristique populaire, notamment pour les
                    Marocains qui cherchent à échapper à la chaleur estivale. La ville est située à une altitude de 1650
                    mètres
                    et bénéficie d'un climat montagnard, avec des températures fraîches en été et des chutes de neige en
                    hiver.
                </p>
            </div>
        </div>
    </div>

    <div class="switcher_home">
        <div class="container">
            <div class="row">
                <div class="col-md-6  wow slideInLeft" data-wow-duration="1.5s">
                    <div class="owl-carousel nos_services_home" id="nos_services_home">
                        <div class="item_nos_produit_home position-relative">
                            <a href="#">
                                <img alt="titre" class="img-fluid" src="{{ asset('/img/MICHLIFEN.png') }}" /> </a> <a
                                href="#">
                            </a>

                            <h3><a href="/page_chefchaoun">HT.MICHELIFEN</a></h3>
                            <a href="/"> </a>
                        </div>
                        <div class="item_nos_produit_home position-relative"><a href="#"><img alt="titre"
                                    class="img-fluid" src="{{ asset('img/Farah.png') }}" /> </a> <a href="#">
                            </a>

                            <h3><a href="/">Farah Inn</a></h3>
                            <a href="/props_page"> </a>
                        </div>

                        <div class="item_nos_produit_home position-relative"><a href="#"><img alt="titre"
                                    class="img-fluid " src="{{ asset('/img/hotellY.png') }}" /> </a> <a href="#">
                            </a>

                            <h3><a href="/page_chefchaoun" style="color:rgb(255, 255, 255)">HT.Tarek</a></h3>
                            <a href="/"> </a>
                        </div>
                        <div class="item_nos_produit_home position-relative"><a href="#"><img alt="titre"
                                    class="img-fluid" src="{{ asset('img/hotellYY.png') }}" /> </a> <a href="#">
                            </a>

                            <h3><a href="/">HT.PLACE_REVEE</a></h3>
                            <a href="/"> </a>
                        </div>



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

    <div class="seminaires_block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 align-self-center">
                    <h4><span>CAPITALE ECONOMIQUE</h4>

                    <p>Ifrane, la capitale écologique du Maroc, est la deuxième ville la plus propre au Monde après Calgary
                        au Canada, rapporte le journal électronique « MBC Times ».

                        La ville d’Ifrane a obtenu ce classement au vu des résultats d’une enquête sur la qualité de vie qui
                        tient compte des facteurs tels que la disponibilité de l’eau, le ramassage des déchets, le système
                        des égouts, la pollution atmosphérique et la densité du trafic.</p>
                </div>
                <div class="col-lg-1 col-md-0">&nbsp;</div>

                <div class="col-lg-5 col-md-12"><img alt="titre" class="img-fluid"
                        src="{{ asset('/img/ifrane_p2.png') }}" />
                </div>
            </div>
        </div>
    </div>
    <div class="seminaires_block">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12"><img alt="titre" class="img-fluid"
                        src="{{ asset('/img/ifrane_p3.png') }}" />
                </div>
                <div class="col-lg-1 col-md-0">&nbsp;</div>
                <div class="col-lg-6 col-md-12 align-self-center">
                    <h4><span style="color:rgb(80, 112, 70)">ESPACE VERTE</span></h4>

                    <p>Du l’avis des autochtones, des visiteurs et des estivants, la ville d’Ifrane n’est plus cette
                        «ville jardin», si captivante et accueillante avec ses beaux parcs fleuris et ses pelouses
                        verdoyantes bien entretenus et arrosés, de jour comme de nuit, par de jeunes saisonniers (en
                        majorité des étudiants) embauchés à cet effet par les Conseils municipaux qui se sont succédé à la
                        ville.</p>
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
