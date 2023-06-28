@extends('layout.main')

@section('content')

    <div class="container">
        <div class="col-md-4 col-md-offset-4">
            <h2 class="text-center"><b>Aplikasi</b></h2>
            <hr>
            @if (session('error'))
            <div class="alert alert-danger">
                <b>Oops!</b> {{ session('error') }}
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
