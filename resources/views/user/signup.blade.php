@extends('layouts.main')
@section('title', 'Signup')
@section('my-content')

    <style>
        label {
            margin-top: 1rem
        }
    </style>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="register-section">
            <div class="bg-image-register">
                <div class="container my-5">
                    <h2 class="text-center">Create an Account</h2>
                    <div class="mainform-div col-md-6 m-auto">


                        <label for="" class="label">Your Name</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror


                        <label for="" class="label">Your Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <label for="" class="label">Phone Number</label>
                        <input type="number" class="form-control" name="phone" id="">


                        <label for="" class="label">Your Password</label>



                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label for="" class="label">Repeat your password</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            required autocomplete="new-password">
                        <button type="submit" class="col btn btn-cool-blues my-2">Register</button>

                        <div><a href="{{ url('signin') }}">Already have a account</a></div>
                    </div>
                </div>

            </div>
        </div>
    </form>

@endsection
