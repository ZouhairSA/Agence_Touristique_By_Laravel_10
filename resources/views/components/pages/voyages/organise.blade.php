@extends('components.principal')
@section('voyage_organise')
    <div class="title_page"
        style="background: url('{{ asset('/img/page_voyage.jpg') }}') no-repeat;background-size: cover !important;">
        <div class="container">
            <div class="row">
                <h1>Voyages organisés</h1>

            </div>
        </div>
    </div>


    <div class="voyages_organises">
        <div class="container">
            <div class="row">
                <div class="col-12"><img alt="titre" class="img-fluid" src="{{ asset('/img/young_girl_steps.png') }}" />
                    <div class="voyages_organises_text">
                        <h4>Voyages organis&eacute;s</h4>

                        <p>Envie d&rsquo;aventure et de partir d&eacute;couvrir d&rsquo;autres endroits de la
                            plan&egrave;te, Istanbul vous tente avec ses monuments et son architecture, le Vi&ecirc;t-nam et
                            sa culture vous attirent, Bali vous attend &eacute;galement.</p>
                    </div>
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

                <div class="col-lg-6"><a href="/contact_page"><img alt="looking_down_arrow" class="img-fluid"
                            src="{{ asset('/img/mail_icon.png') }}" />Nous contacter</a></div>
            </div>
        </div>
    </div>
@endsection
