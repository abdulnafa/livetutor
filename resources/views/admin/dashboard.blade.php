<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


    <title>Admin Dashboard</title>
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
                    <a class="navbar-brand px-0" href="#">

                        <img src="{{asset('assets/images/hlogo.png')}}" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse top_nav" id="navbarNav">

                        <i class="fas fa-search ml-auto"></i>



                        @if(session()->has('loginuserid'))

                        <li class="px-5">
                                        <a href="{{Route('logout')}}">Logout</a>
                                    </li>


                        @endif


                    </div>
                </nav>



            </div>
        </div>
    </div>


    <div class="container-fluid">

        <div class="row">


            <!-- Dashboard Sidebar ------------------------------------------------------------------------  -->
            <div class="col-md-3 dashboardsidebar">
                <ul>
                    <li class="active" id="allordersbtn">
                        <a> <i class="fa-regular fa-credit-card mr-2"></i> All Orders</a>
                    </li>

                    <li id="paymentcompletedordersbtn">
                        <a><i class="fa-solid fa-cart-shopping mr-2"></i>Payment Completed Orders </a>
                    </li>


                </ul>
            </div>
            <!-- Dashboard Content  -->


            <div class="col-md-9 dashboardcontent">


                <!-- ------  All Orderss-----------------------------------------------------  -->
                <div class="dashboarddiv container-fluid allordersdiv active">



<div class="container">

<table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Type Of Paper</th>
                                <th>Pages</th>
                                <th>Payment</th>
                            </tr>
                        </thead>
                        <tbody>

                        @if($orderdetail)
                        @foreach($orderdetail as $data)
                            <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->topic}}</td>
                                <td>{{$data->type_of_paper}}</td>
                                <td>{{$data->number_of_pages}} Pages</td>
                                <td>
                                    Amount :${{$data->amount}}</button>
                                </td>
                            </tr>

@endforeach
                            @endif
                        </tbody>
                    </table>
</div>





                </div>




                <!-- ------  Payment Completed Orders-----------------------------------------------------  -->
                <div class="dashboarddiv paymentcompletedordersdiv">

                <div class="container">

<table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Type Of Paper</th>
                                <th>Pages</th>
                                <th>Payment</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>

                        @if($orderdetailactive)
                        @foreach($orderdetailactive as $data)
                            <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->topic}}</td>
                                <td>{{$data->type_of_paper}}</td>
                                <td>{{$data->number_of_pages}} Pages</td>
                                <td>
                                    Amount :${{$data->amount}}</button>
                                </td>
                                <td>
                                    <button class="btn btn-success">{{$data->status}}</button>
                                </td>

                            </tr>

@endforeach
                            @endif
                        </tbody>
                    </table>
</div>
                </div>



                


            </div>
        </div>

    </div>














    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{asset('assets/js/file.js')}}"></script>
</body>

</html>