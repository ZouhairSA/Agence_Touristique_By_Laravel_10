@extends('components.principal')
@section('seminaire')
    <div class="title_page"
        style="background: url('{{ asset('/img/page_apropos.jpg') }}') no-repeat;background-size: cover !important;">
        <div class="container">
            <div class="row">
                <h1>Séminaires et congrès</h1>

            </div>
        </div>
    </div>

    <div class="seminaires_block">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12"><img alt="titre" class="img-fluid"
                        src="{{ asset('/img/businessman_holding_luggage_business_trip.jpg') }}" /></div>

                <div class="col-lg-1 col-md-0">&nbsp;</div>

                <div class="col-lg-6 col-md-12 align-self-center">
                    <h4>S&eacute;minaires, Incentives, congr&egrave;s&nbsp;<span>prise en charge de laboratoires. </span>
                    </h4>
                    <p>Organiser un s&eacute;minaire, un lancement de produit, une formation, un team building, une
                        r&eacute;union de fin d&rsquo;ann&eacute;e pour la force de vente, ou faire profiter toute une
                        &eacute;quipe du bon r&eacute;sultat de leur travail par la gratification d&rsquo;un
                        incentive&hellip; vous &ecirc;tes au bon endroit chez Aux Zones Libres.</p>

                    <p>Nous pouvons &eacute;galement prendre en charge toute la logistique au Maroc ou &agrave;
                        l&#39;&eacute;tranger, tout comme g&eacute;rer les&nbsp;prises en charge pour
                        des&nbsp;laboratoires.&nbsp;</p>

                    <p>Fort de nos plus de 30 ans d&rsquo;exp&eacute;rience dans la mise en place de voyages professionnels,
                        nous maitrisons parfaitement ce type d&rsquo;organisation et sommes en mesure de vous proposer un
                        service cl&eacute; en main, quel que soit la destination, mais aussi, quelques soient les
                        diff&eacute;rents pays de d&eacute;part des participants.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-12 align-self-center">
                    <p>Nous vous proposons une prestation globale, qui int&egrave;gre toute l&rsquo;organisation de votre
                        s&eacute;minaire ou colloque. La r&eacute;servation des billets pour vos trajets, la
                        r&eacute;servation des chambres, les d&eacute;marches administratives, etc.</p>

                    <p>Nous organisons votre d&eacute;placement pour vous rendre &agrave; un salon professionnel&nbsp;ou
                        s&eacute;minaire et la logistique de vos voyages d&rsquo;affaires.</p>

                    <p>Plusieurs laboratoires pharmaceutiques internationaux et multinationales nous font confiance pour
                        leurs voyages d&rsquo;affaires.</p>

                </div>

                <div class="col-lg-6 col-md-12 order-first order-lg-last"><img alt="titre" class="img-fluid"
                        src="{{ asset('/img/seminaires_block_block.png') }}" /></div>
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
@endsection
