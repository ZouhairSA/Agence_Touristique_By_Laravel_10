@extends('components.principal')
@section('voyage_golfique')
    <div class="title_page"
        style="background: url('{{ asset('/img/page_golf.jpg') }}') no-repeat;background-size: cover !important;">
        <div class="container">
            <div class="row">
                <h1>Voyage golfique</h1>
            </div>
        </div>
    </div>


    <div class="golfique_block">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 align-self-center">
                    <h4>Vous aimez le golf,</h4>

                    <h5>vous jouez r&eacute;guli&egrave;rement au golf, vous avez envie de profiter de votre activit&eacute;
                        favorite pour d&eacute;couvrir <span>de nouveaux endroits, de nouveaux horizons, de nouveaux
                            greens&thinsp;? </span></h5>

                    <p>Le Maroc est un pays de golf et de golfeurs. Vous avez l&rsquo;opportunit&eacute; de d&eacute;couvrir
                    </p>

                    <div class="lable_text_39 row">
                        <div class="col-3"><label>+39 </label></div>

                        <div class="col-9">
                            <p>greens diff&eacute;rents</p>

                            <p>au Royaume.</p>
                        </div>
                    </div>

                    <p>Que vous ayez envie de jouer dans le sud du Maroc dans la grande r&eacute;gion d&rsquo;Agadir, dans
                        la r&eacute;gion de Settat, du grand Marrakech avec plusieurs greens de tr&egrave;s grande
                        qualit&eacute;, plus au Nord dans la r&eacute;gion de Casablanca et Rabat vous trouverez des
                        terrains de golf tout le long de la c&ocirc;te atlantique jusqu&rsquo;&agrave; Tanger, mais
                        &eacute;galement des parcours sur la c&ocirc;te m&eacute;diterran&eacute;enne avec par exemple le
                        golf de Sa&icirc;dia.</p>
                </div>

                <div class="col-lg-5 col-md-12 order-first order-lg-last"><img alt="titre" class="img-fluid"
                        src="{{ asset('/img/golfique_img_1.png') }}" /></div>
            </div>

            <div class="row golfique_block_2">
                <h6>Tentez par cette exp&eacute;rience de golf, d&eacute;paysante et nouvelle&thinsp;?</h6>

                <p>Tout comme vous, Youssef le directeur de &laquo;&thinsp;Aux Zones Libres&thinsp;&raquo; est golfeur.</p>

                <p>Il vous propose donc de pouvoir profiter de plusieurs circuits sur plusieurs parcours.</p>
                <img alt="titre" class="img-fluid" src="{{ asset('/img/golfique_img_2.png') }}" />
                <p><span>Une prise en charge totale vous est propos&eacute;e pour votre voyage :</span></p>

                <p>Billets d&rsquo;avion, transferts a&eacute;roports, h&eacute;bergement, chauffeur pour les transferts,
                    assistance t&eacute;l&eacute;phonique. Mais aussi forfait green comprenant green-fee et caddies, quel
                    que soit la destination que vous choisissez.</p>

                <p>N&rsquo;attendez pas une minute de plus pour nous faire part de votre souhait de s&eacute;jour, et de la
                    r&eacute;gion que vous privil&eacute;giez.</p>
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
                            class="img-fluid" src="{{asset('img/mail_icon.png')}}" />Nous contacter</a></div>
            </div>
        </div>
    </div>
@endsection
