@extends('layouts.main')
@section('title',"About Us")

@section('my-content')

        <!-- Hero Section -->
        <div class="container-fluid herosection">

            <div class="row">
                <div class="col-md-6 d-md-block d-none left">
                    <h1>Get Assignment Help From A Professional Essay Writer</h1>
                    <p>Have a native essay writer do your task from scratch for a student-friendly price of just $10 per
                        page. Free edits and originality reports.</p>

                </div>
                <div class="col-md-6 right">
                    <div class="herobox">
                        <h3 class="text-center py-3">Calculate Price</h3>
                        <!-- Education  -->
                        <div class="row education py-2">
                            <select name="education" class="form-control">
                                <option value="8.00">Hight School</option>
                                <option value="8.40">Undergraduate</option>
                                <option value="8.64">Master</option>
                                <option value="9.60">Docteral</option>
                            </select>
                        </div>



                        <!-- Eassy Type  -->
                        <div class="row eassytype py-2">
                            <select name="eassytype" class="form-control">
                                <option>Eassy (Any Type)</option>
                                <option>Article (Any Type)</option>
                                <option>Assignement</option>
                                <option>Content (Any Type)</option>
                            </select>


                        </div>


                        <!-- Select Words/Pages  -->
                        <div class="row wordspages py-2">
                            <select name="wordspages" class="form-control">
                                <option>Select words/pages</option>
                                <option value="1">1 page</option>
                                <option value="2">2 page</option>
                                <option value="3">3 page</option>
                                <option value="4">4 page</option>
                                <option value="5">5 page</option>
                                <option value="6">6 page</option>
                                <option value="7">7 page</option>
                                <option value="8">8 page</option>
                                <option value="9">9 page</option>
                                <option value="10">10 page</option>
                            </select>


                        </div>



                        <!-- Select Days  -->
                        <div class="row days py-2">
                            <select name="days" class="form-control">
                                <option value="0.00">30 Days</option>
                                <option value="20.00">14 Days</option>
                                <option value="40.00">10 Days</option>
                                <option value="70.00">5 Days</option>
                                <option value="100.00">48 Hours</option>
                                <option value="120.00">24 Hours</option>
                                <option value="140.00">12 Hours</option>
                                <option value="160.00">6 Hours</option>


                            </select>


                        </div>


                        <!-- Price Usd  -->

                        <div class="row priceusd py-3">
                            <div class="col-6 ">
                                <p class="text-right">Price (USD)</p>
                            </div>
                            <div class="col-6 d-flex">
                                <div class="dollersign w-25">
                                    $
                                </div>
                                <div class="pricecalculationdiv w-75">

                                </div>

                            </div>
                        </div>



                        <!-- Button  -->

                        <div class="row py-3">
                            <a href="{{route('buynow')}}"><button class="btn btn-primary btn-lg mx-auto"> Order
                                    Now</button></a>
                        </div>


                    </div>
                </div>
            </div>

        </div>
        <!-- Beautiful clean responsive -->

        <div class="container-fluid" id="feature">
            <div class="row">
                <div class="col-lg-6 mx-lg-auto text-center pt-5 pb-5" data-aos="zoom-in">
                    <p class="h2 my-3 font-weight-bold heading">Essay Writing Service</p>
                    <p>A team of effective writers, re-writers and proof-readers has been designed to enhance your
                        academic writing experience. This team is well-trained to shape a flawless paper and provide it
                        to you before the requested time. The entire framework has been organized meticulously so that
                        you can have an enriching academic encounter. You are our core focus. It’s the customer
                        happiness that we strive and it is the driving force behind our excellence.</p>
                </div>
            </div>
        </div>
        <!-- Icon Section -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <div class="row pb-5">
                        <div class="col-lg-4" data-aos="fade-up">
                            <div class="row">
                                <div class="col-2 pt-2 ">
                                    <i class="far fa-heart star"></i>
                                </div>
                                <div class="col-10">
                                    <p class="h4">2.5B+ Words Delivered</p>
                                    <p>The myriad of clients who have ever availed our writing services, have shown
                                        immense confidence in us. This enabled us in being able to deliver beating 2.5
                                        billion plus words and still counting. Our sights are set on providing
                                        outstanding papers time and again.</p>
                                </div>
                            </div>


                        </div>




                        <div class="col-lg-4" data-aos="fade-up">
                            <div class="row">
                                <div class="col-2 pt-2 ">
                                    <i class="far fa-lightbulb star"></i>
                                </div>
                                <div class="col-10">
                                    <p class="h4">Quality Beyond Comparison</p>
                                    <p>Our Essay Writing service derives the eminence from its urge to deliver
                                        exceptional paper quality. We have been bestowed with the trust of thousands of
                                        students due to our commitment and ability of delivering top notch writing.</p>
                                </div>
                            </div>


                        </div>






                        <div class="col-lg-4" data-aos="fade-up">
                            <div class="row">
                                <div class="col-2 pt-2 ">
                                    <i class="far fa-star star"></i>
                                </div>
                                <div class="col-10">
                                    <p class="h4">2.5B+ Words Delivered</p>
                                    <p>The myriad of clients who have ever availed our writing services, have shown
                                        immense confidence in us. This enabled us in being able to deliver beating 2.5
                                        billion plus words and still counting. Our sights are set on providing
                                        outstanding papers time and again.</p>
                                </div>
                            </div>


                        </div>




                    </div>
                </div>
            </div>
        </div>

        <!-- Cards section -->

        <div class="container-fluid bg-light" id="portfolio">
            <div class="row">
                <div class="col-lg-9 mx-auto my-5">
                    <div class="row text-center my-4">
                        <div class="col" data-aos="fade-down">
                            <p class="h2 mb-4 heading">Check Out Our Latest Work</p>
                            <p class="mb-4">You can look at some of the samples that we did recently, we strongly
                                recommended not to use samples for writing your assignment.</p>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-6 py-3">
                            <div class="card" data-aos="fade-down">
                                <div class="overlay">
                                    <i class="fas fa-plus"></i>
                                    <img src="{{asset('assets/images/check_out1.png')}}" width="100%"
                                        class="card-img-top" alt="...">
                                </div>

                                <div class="card-body">
                                    <p class="m-0 card-text text-center">Data Protection Laws
                                    </p>
                                    <p class="m-0 text-center">Law - Word Count 1406 Words .</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 py-3">
                            <div class="card bg-white" data-aos="fade-up">
                                <img src="{{asset('assets/images/check_out2.png')}}" width="100%" class="card-img-top"
                                    alt="...">
                                <div class="card-body b-none">
                                    <p class="m-0 text-center card-text">Accounting Financial</p>
                                    <p class="m-0 text-center">Accounts - Word Count 2405 Words .</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- owl carasoul -->
                    <div class="row py-5" id="blog">
                        <div class="col">
                            <div class="owl-carousel owl-theme">
                                <div class="item"><img src="{{asset('assets/images/c1.png')}}"></div>
                                <div class="item"><img src="{{asset('assets/images/c2.png')}}"></div>
                                <div class="item"><img src="{{asset('assets/images/c3.png')}}"></div>
                                <div class="item"><img src="{{asset('assets/images/c4.png')}}"></div>
                                <div class="item"><img src="{{asset('assets/images/c1.png')}}"></div>

                            </div>
                        </div>

                    </div>






                </div>
            </div>
        </div>
        <!-- Want to work with us -->

        <div class="container-fluid">
            <div class="row my-5">
                <div class="col-lg-6 mx-auto text-center py-5" data-aos="zoom-in">
                    <p class="h2">Want to Work with Us</p>
                    <p class="my-3">We offer an extensive array of academic support, which is challenging to seek on
                        your own. Students are more than happy to seek assistance from us, and this is how they extend
                        their helping hand towards us.
                    </p>
                    <button class="btn btn-success">Get In Touch</button>

                </div>
            </div>
        </div>


@endsection