@extends('components.principal')
@section('test1')
    <title>zohair</title>

    <div class="title_home"
        style="background: url('{{ asset('/img/header_home_page.jpg') }}') no-repeat;background-size: cover !important;background-position: center;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Envie de decouvrir pour reussir ?</h1>

                    <a href="#home_incentives_link"><img class="img-fluid wow bounce" data-wow-duration="2.5s"
                            data-wow-iteration="infinite" src="{{ asset('/img/looking_down_arrow.png') }}"
                            alt="looking_down_arrow">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="home_incentives" id="home_incentives_link">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow fadeInDown" data-wow-duration="2.5s"><img alt=" " class="img-fluid"
                        src="{{ asset('/img/businessman_holding_luggage_business_trip.jpg') }}" /></div>

                <div class="col-lg-6 align-self-center wow bounceIn" data-wow-delay="1s" data-wow-duration="2s">
                    <h3>Sminaires Incentives</h3>

                    <p>Aux Zones Libres, riche&nbsp;de ses tr&egrave;s nombreuses ann&eacute;es
                        d&rsquo;exp&eacute;rience, vous propose des prestations de qualit&eacute;,
                        accompagn&eacute;es d&rsquo;un service professionnel. Vous avez envie d&rsquo;organiser un
                        voyage au Maroc ? Marrakech, Dakhla, ou excursion sur mesure&hellip;</p>
                    <a href="/seminaire_page">En savoir plus</a>
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
                    <a href="/">Decouvrir<img alt="looking_down_arrow" class="img-fluid"
                            src="{{ asset('/img/looking_down_arrow.png') }}" /></a>
                </div>
                <div class="col-md-8  wow slideInRight" data-wow-duration="2.5s">
                    <div class="owl-carousel nos_services_home" id="nos_services_home">
                        <div class="item_nos_produit_home position-relative"><a href="#"><img alt="titre"
                                    class="img-fluid" src="{{ asset('img/view_morocco_1.jpg') }}" /> </a> <a href="#">
                            </a>

                            <h3><a href="/page_chefchaoun">Chefchaouen</a></h3>
                            <a href="/"> </a>
                        </div>

                        <div class="item_nos_produit_home position-relative"><a href="#"><img alt="titre"
                                    class="img-fluid" src="{{ asset('img/view_morocco_2.jpg') }}" /> </a> <a href="#">
                            </a>

                            <h3><a href="/">Ourzazate</a></h3>
                            <a href="/"> </a>
                        </div>
                        <div class="item_nos_produit_home position-relative"><a href="#"><img alt="titre"
                                    class="img-fluid" src="{{ asset('img/view_morocco_3.jpg') }}" /> </a> <a href="#">
                            </a>

                            <h3><a href="/">Marrakech</a></h3>
                            <a href="/"> </a>
                        </div>
                        <div class="item_nos_produit_home position-relative"><a href="#"><img alt="titre"
                                    class="img-fluid" src="{{ asset('img/ifran1.jpg') }}" /> </a> <a href="#">
                            </a>

                            <h3><a href="/page_ifrane">IFRANE</a></h3>
                            <a href="/"> </a>
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
            <div class="row wow slideInLeft" data-wow-duration="1.0s">
                <div class="col-lg-6 col-md-12">
                    <div class="text_billeterie">
                        <h3>Billeterie</h3>

                        <p>Vous avez besoin d&rsquo;un billet d&rsquo;avion ou d&rsquo;une r&eacute;servation de
                            croisi&egrave;re ? Consultez-nous vous obtiendrez une r&eacute;ponse rapide et votre
                            r&eacute;servation sera quasiment instantan&eacute;e.</p>
                        <a href="/billeterie_page">En savoir plus</a>
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
                        <a href="/organise_voyage">D&eacute;couvrir<img alt="looking_down_arrow" class="img-fluid"
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
    </div>

    <div class="col-12 voyages_organises_col">&nbsp;</div>
@endsection
