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

<div class="container-fluid loginformdiv">
    <div class="row ">
        <div class="col-md-6 mx-auto d-flex justify-content-center align-items-center pt-5">
            <div class="loginbox">
                <h2>Admin Login Form</h2>
            <form action="{{Route('userlogindirection')}}" method="post">
                @csrf
<label>Email</label>
<input type="email" placeholder="Enter Email" name="email" class="form-control" />
<label>Password</label>
<input type="password" placeholder="Enter Password"  name="password" class="form-control"/>

<button class="btn btn-primary mt-3">Login</button>
            </form>



        </div>
        </div>
        
    </div>
    
</div>

    
</body>
</html>