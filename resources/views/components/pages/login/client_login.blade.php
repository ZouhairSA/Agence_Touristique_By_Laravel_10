@extends('components.principal')
@section('page_login_user')
    <div class="title_page"
        style="background: url('{{ asset('/img/page_billetteries.jpg') }}') no-repeat;background-size: cover !important;">
        <div class="container">
            <div class="row">
                <h1>LOGIN </h1>

            </div>
        </div>
    </div>

    <div class="billetteries_block">
        <div class="container">
            <form method="POST" action="{{ route('login_user') }}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">first_name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter Your Name" name="nameStudent">
                    {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.</small> --}}
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1"
                        placeholder="Enter  Your password" name="password">
                </div>

                {{-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> --}}
                <button type="submit" class="btn btn-primary center">Submit</button>
            </form>
        </div>
    </div>
@endsection
