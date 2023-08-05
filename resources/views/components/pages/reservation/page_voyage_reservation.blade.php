@extends('components.principal')
@section('page_voyage_reservation')
    <div class="title_page"
        style="background: url('{{ asset('/img/page_billetteries.jpg') }}') no-repeat;background-size: cover !important;">
        <div class="container">
            <div class="row">
                <h1>Reservation :</h1>

            </div>
        </div>
    </div>

    <div class="seminaires_block">
        <div class="container">
            <div class="row">
                <form>
                    @csrf

                    <div class="switcher_home">
                        <div class="container">
                            <div class="row">
                                <div class=" wow slideInLeft" data-wow-duration="1.5s">
                                    <div class="owl-carousel nos_services_home" id="nos_services_home">
                                        @foreach ($voyages as $voyage)
                                            <div class="item_nos_produit_home position-relative">
                                                <div class="card">
                                                    <div class="row mb-6">
                                                        <div class="col-12 text-center">
                                                            <div class="col">

                                                                {{-- <div class="text-center"> --}}
                                                                {{-- <input type="text" class="form-control text-center"
                                                                        id="nom" value="{{ $voyage->nom_voyage }}"
                                                                        disabled> --}}
                                                                <br>
                                                                <p type="text" id="nom" style="font-size:35px;"
                                                                    value="{{ $voyage->nom_voyage }}">
                                                                    {{ $voyage->nom_voyage }}</p>
                                                                <hr>
                                                                {{-- </div> --}}
                                                            </div>
                                                        </div>

                                                        <div class="col-12 text-center">
                                                            <div class="col">
                                                                <p for="description" class="form-label  text-center"
                                                                    style="font-size:25px;">
                                                                    Description
                                                                </p>
                                                                <div class="border border-primary">
                                                                    <p>{{ $voyage->description }}</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">

                                                            <div class="col">
                                                                <br>
                                                                <label for="personnes"
                                                                    class="form-label font-weight-bold">Nombre de
                                                                    personnes</label>
                                                                <input type="number" class="form-control" id="personnes"
                                                                    name="personnes" disabled
                                                                    value="{{ $voyage->total_reserved }}">
                                                            </div>

                                                            <div class="col">
                                                                <br>
                                                                <label for="restaurant"
                                                                    class="form-label font-weight-bold">Restaurant</label>
                                                                <input type="text" class="form-control" id="restaurant"
                                                                    name="restaurant" disabled
                                                                    value="{{ $voyage->restauration }}">
                                                            </div>
                                                        </div>

                                                        <div class="col-12 text-center">
                                                            <div class="col">
                                                                <label for="nom"
                                                                    class="form-label font-weight-bold text-center">Prix</label>
                                                                <div class="text-center">
                                                                    <input type="text" class="form-control text-center"
                                                                        id="nom" value="{{ $voyage->prix }}" disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br>

                                                        <div class="col-12 text-center">
                                                            <br>
                                                            <button type="button" class="btn btn-primary"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal_{{ $voyage->id }}">Envoyer</button>

                                                            {{-- <button type="submit" class="btn btn-primary">Envoyer</button> --}}
                                                            <br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @foreach ($voyages as $voyage)
        <div class="modal fade" id="exampleModal_{{ $voyage->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Enter your name and email</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal " aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{ route('validation_reservation_voyage') }}">
                            @csrf

                            <div class="mb-3">

                                <label for="name_voyage" class="form-label">Nom voyage :</label>
                                <input type="text" class="form-control" value=" {{ $voyage->nom_voyage }}"
                                    name="name_voyage">
                                {{-- <input type="text" class="form-control"
                                    value=" {{ $voyage->id }}" name="name_voyage"> --}}

                            </div>

                            <div class="mb-3">

                                <label for="ref_voyage" class="form-label">Reference :</label>
                                <input type="text" class="form-control" value=" {{ $voyage->id }}" name="ref_voyage">
                            </div>

                            <div class="mb-3 ">

                                <label for="prix_voyage" class="form-label">Prix</label>
                                <input type="text" class="form-control bg-primary" value=" {{ $voyage->prix }}"
                                    name="prix_voyage">

                            </div>

                            <div class="mb-3">

                                <label for="name" class="form-label">Name :</label>
                                <input type="text" class="form-control" id="nom_Profil" name="nom_profil"
                                    placeholder="saisie votre Name" required>

                            </div>

                            <div class="mb-3">

                                <label for="email" class="form-label">Email : </label>
                                <input type="email" class="form-control" id="email_profil" name="email_profil"
                                    placeholder="saisie votre Email" required>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    @endforeach
@stop
{{-- <div class="row mb-6">
    <div class="row mb-3">
        <div class="col">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom"
                value="{{ $voyage->nom_voyage }}" disabled>
        </div>
        <div class="col">
            <label for="prix" class="form-label">Prix</label>
            <input type="number" class="form-control" id="prix" name="prix" disabled
                value="{{ $voyage->prix }}">
        </div>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <p> {{ $voyage->description }}</p>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label for="personnes" class="form-label">Nombre de personnes</label>
            <input type="number" class="form-control" id="personnes" name="personnes" disabled
                value="{{ $voyage->total_reserved }}">
        </div>
        <div class="col">
            <label for="restaurant" class="form-label">Restaurant</label>
            <input type="text" class="form-control" id="restaurant" name="restaurant" disabled
                value="{{ $voyage->restauration }}">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Envoyer</button>
</div>  --}}
