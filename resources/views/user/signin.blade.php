@extends('layouts.main')
@section('title', 'Signin')
@section('my-content')

    <style>
        label {
            margin-top: 1rem
        }
    </style>
















    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="register-section my-5">
            <div class="bg-image-register">
                <div class="container my-5">
                    <h2 class="text-center">Login</h2>
                    <div class="mainform-div col-md-6 m-auto">





                        <label for="" class="label">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror



                        <label for="" class="label">Password</label>



                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="row my-4">
                            <div class="col">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>

                            <div class="col">
                                @if (Route::has('password.request'))
                                    <a class="" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif

                            </div>
                        </div>
                        <hr class="hr">
                        <div class="row">

                          <a class="text-dark" href="{{ url('signup') }}"><i class="bi bi-person"></i>   New! create a new account</a>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </form>

@endsection
