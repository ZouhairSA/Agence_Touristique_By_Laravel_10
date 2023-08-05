@extends('components.principal')
@section('propos')
    <div class="title_page"
        style="background: url('{{ asset('/img/page_apropos.jpg') }}') no-repeat;background-size: cover !important;">
        <div class="container">
            <div class="row">
                <h1>À propos</h1>

            </div>
        </div>
    </div>
    


    <div class="apropos_block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 align-self-center">
                    <h4>&quot;Aux Zones Libres&quot;, agence riche&nbsp;de ses tr&egrave;s nombreuses ann&eacute;es
                        d&rsquo;exp&eacute;rience&nbsp;<span>vous propose des prestations de qualit&eacute;,
                            accompagn&eacute;es</span> <label>d&rsquo;un service professionnel.</label></h4>
                </div>

                <div class="col-lg-6 col-md-12 order-first order-lg-last"><img alt="titre" class="img-fluid"
                        src="{{ asset('/img/propos_img_block.jpg') }}" /></div>
            </div>

            <div class="row">
                <h5>Nous sommes l&agrave; pour r&eacute;pondre &agrave; vos attentes sur les sujets suivants :</h5>

                <p>S&eacute;minaires d&rsquo;entreprises au Maroc ou &agrave; l&rsquo;&eacute;tranger, incentive,
                    congr&egrave;s internationaux, colloques de laboratoires pharmaceutiques.</p>

                <p>Notre service billetterie saura rapidement et efficacement proc&eacute;der &agrave; vos
                    r&eacute;servations d&rsquo;avion ou de croisi&egrave;res &agrave; la demande.</p>

                <p>Vous avez envie d&rsquo;organiser un voyage au Maroc ? Marrakech, Dakhla, ou excursion sur mesure&hellip;
                    nous sommes l&agrave; pour tout organiser pour un voyage en toute s&eacute;r&eacute;nit&eacute;.</p>

                <p>Envie d&rsquo;&eacute;vasion, quitter le Maroc et d&eacute;couvrir les charmes de la Turquie ou de
                    l&rsquo;Ouzb&eacute;kistan d&eacute;couvrir la culture asiatique au Vi&ecirc;t Nam ?</p>
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
