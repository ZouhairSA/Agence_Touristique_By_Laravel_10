@extends('components.principal')
@section('contact_page')
    <style>
        @keyframes pulse {
            0% {
                transform: scale(0.9);
                opacity: 1;
            }

            50% {
                transform: scale(1);
                opacity: 0.5;
            }

            100% {
                transform: scale(0.9);
                opacity: 1;
            }
        }
    </style>

    <div class="title_page"
        style="background: url('{{ asset('/img/page_apropos.jpg') }}') no-repeat;background-size: cover !important;">
        <div class="container">
            <div class="row">
                <h1 id="contact_form_send" style="color:rgb(219, 219, 219);font-size: 70px;font-family:'ARGUE'; "></h1>
                {{-- <h1 id="contact_form_send">l'agence Aux Zones Libres A votre disposition.</h1> --}}
            </div>
        </div>
    </div>
    <script>
        var title = document.getElementById("contact_form_send");
        var words = "l'agence Aux Zones Libres A votre disposition.";
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

    @if (session()->has('success'))
        <div class="container" style="height: 
5em,position: relative">

            <br>
            {{-- alert  de  success : --}}
            <div class="text-center" style="position: relative;">

                {{-- @if (session()->has('success')) --}}
                <div class="alert alert-success text-center"
                    style="border: 2px solid #ffffff; border-radius: 5px; animation: pulse 2s ease-in-out infinite;">
                    {{ session('success') }}
                </div>
                {{-- @endif --}}

            </div>
        </div>
    @endif

    <div class="content_page content_contact">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>Laissez-nous un message</h3>
                </div>
                <form class="form_contact" id="form_contact" action="{{ route('send_data_contact') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="text_input">
                                <input type="text" id="contactpublic_nomcomplet" name="name_contact" required="required"
                                    maxlength="255" placeholder="NOM" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text_input">
                                <input type="text" id="contactpublic_prenom" name="lastname_contact" required="required"
                                    maxlength="255" placeholder="PRENOM" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="text_input">
                                <input type="text" id="contactpublic_telephone" name="telephone" required="required"
                                    maxlength="255" placeholder="TELEPHONE" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text_input">
                                <input type="text" id="contactpublic_email" name="email" required="required"
                                    maxlength="255" placeholder="ADRESSE MAIL" />
                            </div>
                        </div>
                    </div>

                    {{--                     
                    <div class="row d-none">
                        <div class="col-md-12">
                            <div class="text_input">
                                <input type="text" id="contactpublic_objet" name="contactpublic[objet]"
                                    required="required" maxlength="255" placeholder="Sujet" value="contactez zonelibre" />
                            </div>
                        </div>
                    </div> --}}

                    <div class="row">
                        <div class="col-md-12">
                            <div class="text_input">
                                <textarea id="contactpublic_message" name="message" required="required" placeholder="MESSAGE"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="button_submit col-lg-6 col-md-12">
                            <button type="submit" name="submit"><img class="img-fluid"
                                    src="{{ asset('/img/mail_icon.png') }}" alt="titre">Envoyer</button>
                            <input type="hidden" id="contactpublic__token" name="contactpublic[_token]"
                                value="5TRsZ4KFg8gb7MJvwRnaE7Am6ucuGANb7UBlBiSMfx4" />
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="info_contact info_footer">
                                <ul>
                                    <li><img src="{{ asset('/img/adresse.png') }}" alt="Localisation">Adresse : Résidence
                                        naim
                                        angle bd anfa et rue kawakibi 20060 casa</li>
                                    <li><img src="{{ asset('/img//tel.png') }}" alt="phone">Fixe : 0522 47 27 47/6 - Fax:
                                        0522
                                        47 27 45</li>
                                    <li><img src="{{ asset('/img/mail__icon.png') }}" alt="phone">Adresse email :
                                        auxzoneslibres@auxzoneslibres.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $.validator.addMethod("email", function(value, element) {
            return this.optional(element) || /^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/i.test(value);
        }, "Adresse e-mail non valide: Veuillez entrer une adresse e-mail valide.");
        $.validator.addMethod("phone", function(value, element) {
            return this.optional(element) || /^[0-9]{10,14}$/i.test(value);
        }, "Format invalide. (Exemple: 0611111111)");
        //$("#form_telephone").mask("06 00 00 00 00");


        $(document).ready(function() {

            $("#form_contact").validate({
                errorElement: "samp",
                rules: {
                    "contactpublic[nomcomplet]": {
                        required: true,
                        minlength: 3
                    },
                    "contactpublic[prenom]": {
                        required: true,
                        minlength: 3
                    },
                    "contactpublic[email]": {
                        required: true,
                        email: true
                    },
                    "contactpublic[telephone]": {
                        required: true,
                        phone: true
                    },
                    "contactpublic[message]": {
                        required: true
                    }
                },

                messages: {
                    "contactpublic[nomcomplet]": {
                        required: "Veuillez saisir votre nom complet",
                        minlength: "Votre nom pas correct"
                    },
                    "contactpublic[prenom]": {
                        required: "Veuillez saisir votre nom complet",
                        minlength: "Votre prenom pas correct"
                    },
                    "contactpublic[email]": {
                        required: "Veuillez saisir votre email",
                        email: "Votre email pas correct"
                    },

                    "contactpublic[telephone]": {
                        required: "Veuillez saisir votre Téléphone",
                        phone: "Votre Téléphone pas correct"
                    },

                    "contactpublic[message]": {
                        required: "Veuillez saisir votre message",
                    }

                }

            });

        });
    </script>
@endsection
