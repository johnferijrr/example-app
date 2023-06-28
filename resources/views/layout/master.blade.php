@extends('layout.main')

@section('content')

    <div class="container">
        <div class="col-md-12">
            <div class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapse" 
                        data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" 
                        aria-expanded="false"></button>

                        <span class="  "
                    </div>
                </div>
            </div>
        </div>
    </div>
            @endif
            <form method="post" action="{{ route('actionlogin') }}">
                @csrf
                <div class="form-group">
                    <label>Email</label>
                    <input class="my-form-control" type="email" name="email" placeholder="Email" required="">
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input class="my-form-control" type="password" name="password" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
                <hr>
                <p class="text-center">Belum punya akun? <a href="#">Register</a>Sekarang!</p>
            </form>
        </div>
    </div>
@endsection
