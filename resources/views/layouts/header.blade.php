<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


    <title>Live Tutors</title>
    <!-- Option 1: Include in HTML -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/file.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.green.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/21d8fb0b75.js" crossorigin="anonymous"></script>
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.js')}}"></script>
</head>

<body>

    <div class="full_main">
        <!-- Small Header -->


        <div class="container-fluid">
            <div class="row bg-light sh">
                <div class="col-lg-9 mx-auto">
                    <div class="row top_header">
                        <div class="col-lg-6 py-2 d-flex justify-content-lg-start justify-content-center">
                            <i class="far fa-envelope mr-2"></i>
                            <span>info@reen.com</span>
                            <i class="fas fa-mobile-alt ml-5 mr-2"></i>
                            <span>+00 (123) 4567890</span>
                        </div>
                        <div class="col-lg-6 d-flex justify-content-lg-end justify-content-center py-2 ">

                            <i class="fab fa-facebook-f social_icon"></i>
                            <i class="fab fa-google-plus-g social_icon"></i>
                            <i class="fab fa-twitter social_icon"></i>
                            <i class="fab fa-pinterest-p social_icon"></i>
                            <i class="fab fa-behance social_icon"></i>
                            <i class="fas fa-atom social_icon"></i>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Header -->

        <div class="container-fluid">
            <div class="row bg-white">
                <div class="col-lg-9 mx-auto py-3">

                    <nav class="navbar navbar-expand-lg navbar-light p-0 pr-4">
                        <a class="navbar-brand px-0" href="{{  url('/')  }}">

                            <img src="{{asset('assets/images/hlogo.png')}}" alt="">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse top_nav" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item  mr-3 ml-lg-5">
                                    <a class=" color" href="{{ url('/') }}">HOME <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item mr-3">
                                    <a class=" color" href="#portfolio">PORTFOLIO</a>
                                </li>
                                <li class="nav-item mr-3">
                                    <a class=" color" href="#blog">BLOG</a>
                                </li>
                                <li class="nav-item mr-3">
                                    <a class=" color" href="#page" tabindex="-1" aria-disabled="true">PAGES</a>
                                </li>
                                <li class="nav-item mr-2">
                                    <a class=" color" href="#feature" tabindex="-1" aria-disabled="true">FEATURES</a>
                                </li>
                                <li class="nav-item mr-2">
                                    <a class=" color" href="#menu" tabindex="-1" aria-disabled="true">MEGA MENU</a>
                                </li>
                                <li class="nav-item mr-2">
                                    <a class=" color" href="#contact" tabindex="-1" aria-disabled="true">CONTACT</a>
                                </li>
                            </ul>
                            {{-- <i class="fas fa-search ml-auto"></i> --}}

                            @if(Auth::check())


 <div class="px-2 ml-auto position-relative">
    <div class="dashboard-btn">
            <a href="{{Route('userAdmin')}}"><i class="bi bi-person-circle"></i> Account</a>
    </div>
 </div>
                            {{-- <div class="pl-5 position-relative">
                                <i class="fa-solid fa-user openheaderprofileicon"></i>
                                <div class="profileopendiv position-absolute">
                                    <ul>
                                        <li>
                                            <a href="{{Route('userAdmin')}}">Profile</a>
                                        </li>
                                        <li>
                                            <a class="" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                                        </li>
                                    </ul>
                                </div>
                            </div> --}}

                            <div class="logout-btn"> <a class="" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form></div>
                            @endif


                          
@guest
                            <div class="px-5">
                             <button class="theme-btn"> <a href="{{url('signin')}}">Login / Signup</a></button>  
                            </div>

                   @endguest        





                        </div>
                    </nav>



                </div>
            </div>
        </div>