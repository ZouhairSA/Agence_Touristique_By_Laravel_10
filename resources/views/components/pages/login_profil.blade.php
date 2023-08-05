@extends('components.principal')
@section('page_login_profil')
    <div class="title_page"
        style="background: url('{{ asset('/img/page_apropos.jpg') }}') no-repeat;background-size: cover !important;">
        <div class="container">
            <div class="row">
                <h1 id="PG_Profill" style="color:rgb(238, 218, 218);font-family: 'ARGUE';font-size: 98px;"></h1>
            </div>
        </div>
    </div>
    <script>
        var title = document.getElementById("PG_Profill");
        var words = "Decouvrire votre Profil";
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


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 text-container" style="padding-left:10%">
                <div class="card mt-5">
                    <div class="card-header">
                        <h3 class="text-center" style="font-family: ARGUE;font-size:36px;">Login Form</h3>
                    </div>
                    <div class="card-body" style="margin-left: 10px">
                        <form method="POST" action="{{ route('validate_login_profil') }}">
                            @csrf
                            <div class="mb-3 text-center" style="max-width: 700px;margin-left:40px">
                                <label for="email" class="form-label"
                                    style="font-family: Markthin;font-size:30px">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter your email">

                                @error('email')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                            <div class="mb-3 text-center" style="max-width: 700px;margin-left:40px">
                                <label for="password" class="form-label"
                                    style="font-family: Markthin;font-size:30px">Password</label>
                                <input type="password" class="form-control" name="password"
                                    placeholder="Enter your password">

                                @error('password')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                            <div class="text-center" style="max-width: 700px;margin-left:28px">
                                <button type="submit" style="margin-left:70px;padding-left:39px;padding-right:39px"
                                    class="btn btn-primary">Submit</button>

                                <a href="/registrement_page" style="padding-left:39px;padding-right:39px"
                                    class="btn btn-secondary">Register</a>
                            </div>
                        </form>
                    </div>
                    <br>
                </div>
            </div>

            {{-- error_2 --}}
            {{-- @if (session()->has('error_1')) --}}
            <div class="col-md-2 ">
                {{-- ---------------------------------------------------------- --}}
                <br>
                <div class="text-center">

                    @if (session()->has('error_1'))
                        <div class="alert alert-danger">
                            {{ session('error_1') }}
                        </div>
                    @endif
                    {{-- @if (session()->has('error_55'))
                        <div class="alert alert-danger">
                            {{ session('error_55') }}
                        </div>
                    @endif --}}

                </div>
            </div>
            {{-- @endif --}}
            {{-- ---------------------------------------------------------- --}}

        </div>
    </div>
    </div>
@endsection
