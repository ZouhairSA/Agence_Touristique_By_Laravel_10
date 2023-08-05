@extends('components.principal')
@section('voyage_par_carte')
    <div class="title_page"
        style="background: url('{{ asset('/img/page_billetteries.jpg') }}') no-repeat;background-size: cover !important;">
        <div class="container">
            <div class="row">
                <h1>Voyages à la carte au Maroc</h1>

            </div>
        </div>
    </div>

    <div class="carte_block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 align-self-center">
                    <h4>Vous souhaitez d&eacute;couvrir le&nbsp;<span>Sud marocain, </span> <label>ou visiter les villes
                            imp&eacute;riales ?</label></h4>

                    <p>Envie d&rsquo;aller d&eacute;couvrir l&rsquo;attrait de Dakhla tout au sud et
                        l&rsquo;int&eacute;r&ecirc;t de ce paysage et de cette r&eacute;gion pour les sky-surfeur ?</p>

                    <p>Vous voulez d&eacute;couvrir le sable du Sud marocain ou d&eacute;couvrir les stations
                        baln&eacute;aires du royaume ?</p>
                </div>

                <div class="col-lg-6 col-md-12 order-first order-lg-last"><img alt="titre" class="img-fluid"
                        src="{{ asset('/img/sud_marocain_img_1.png') }}" /></div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-12 "><img alt="titre" class="img-fluid"
                        src="{{ asset('/img/sud_marocain_img_2.png') }}" /></div>

                <div class="col-lg-6 col-md-12 align-self-center">
                    <h5>Aux Zones Libres organise votre voyage avec une prise en charge globale pour que vous n&rsquo;ayiez
                        &agrave; vous soucier d&rsquo;aucun d&eacute;tail.</h5>

                    <p>Votre voyage sera mis sur pied en fonction de vos envies et de vos souhaits. Nous vous apporterons
                        &eacute;galement conseil et information pour vous aider dans vos d&eacute;cisions de destination.
                    </p>

                    <p>Marrakech, Mekn&egrave;s, Tanger, Agadir, Rabat, quelle que soit la r&eacute;gion que vous avez envie
                        de d&eacute;couvrir, ou de red&eacute;couvrir, nous vous organisons votre voyage &agrave; la carte.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="contact_block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <p>Pour plus d&#39;informations, <span>n&#39;h&eacute;sitez pas &agrave; nous contacter </span></p>
                </div>

                <div class="col-lg-6"><a href="/contact_page"><img alt="looking_down_arrow"
                            class="img-fluid" src="{{asset('/img/mail_icon.png')}}" />Nous contacter</a></div>
            </div>
        </div>
    </div>
@endsection
