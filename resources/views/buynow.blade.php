@extends('layouts.main')
@section('title',"Buy Now")

@section('my-content')



    <!-- Form Section  -->

    <div class="container-fluid py-5">




        <div class="container">


            <div class="row position-relative">



                <div class="col-md-9">
                    <h3>PLACE AN ORDER</h3>
                    <p>It’s fast, secure, and confidential &#8712;</p>

                    <div class="paperdetailbox my-2">
                        <p>1. Paper details</p>
                    </div>

                    <div class="paperdetailformdiv">


                        <form action="{{Route('orderpaypal')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <!-- Academic level  -->
                            <div class="row  py-3">
                                <div class="col-3">
                                    <label class="mb-0">Academic level</label>
                                </div>
                                <div class="col">
                                    <div class="row academiclevelrow">
                                        <div class="col academicactive">
                                            <label for="college">College</label>
                                            <input type="radio" id="college" value="50.38" class="d-none"
                                                name="academic" checked />
                                        </div>
                                        <div class="col">
                                            <label for="undergraduate">Undergraduate</label>
                                            <input type="radio" id="undergraduate" value="52.47" class="d-none"
                                                name="academic" />
                                        </div>
                                        <div class="col">
                                            <label for="master">Masters</label>
                                            <input type="radio" id="master" value="62.97" class="d-none"
                                                name="academic" />
                                        </div>
                                        <div class="col">
                                            <label for="phd">PHD</label>
                                            <input type="radio" id="phd" value="67.17" class="d-none" name="academic" />
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <!-- Type of Paper  -->

                            <div class="row py-2">
                                <div class="col-3">
                                    <label>Type of Paper</label>
                                </div>
                                <div class="col px-0">
                                    <select name="typeofpaper" id="typeofpaper" class="form-control">
                                        <option value="eassyanytype" selected>Eassy (Any Type)</option>
                                        <option value="articleanytype">Article (Any Type)</option>
                                        <option value="contentanytype">Content (Any Type)</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Decipline  -->

                            <div class="row py-2">
                                <div class="col-3">
                                    <label>Discipline</label>
                                </div>
                                <div class="col px-0">
                                    <select name="disciplien" class="form-control">
                                        <option value="">Select Subject</option>
                                        <option value="subject1">Subject 1</option>
                                        <option value="subject2">Subject 2</option>

                                    </select>
                                </div>
                            </div>
                            <!-- Topic  -->

                            <div class="row py-4">
                                <div class="col-3">
                                    <label>Topic</label>
                                </div>
                                <div class="col px-0">
                                    <input type="text" name="topic" class="form-control"
                                        placeholder="Enter Title Of Your Paper" required />
                                </div>
                            </div>



                            <!-- Paper Instruction  -->

                            <div class="row py-4">
                                <div class="col-3">
                                    <label>Paper Instruction</label>
                                </div>
                                <div class="col px-0">
                                    <textarea
                                        placeholder="Write anything you feel is important for the writer to consider. An outline, a grading scale, and other documents may be uploaded as additional materials."
                                        class="form-control" name="paperintstruction" rows="5" required></textarea>
                                </div>
                            </div>



                            <!-- Additional Materials  -->

                            <div class="row py-4">
                                <div class="col-3">
                                    <label>Additional Materials </label>
                                </div>
                                <div class="col px-0">
                                    <input type="file" name="additionalmaterial" id="additionalfile" class="d-none" />
                                    <div class="dragablefilediv">
                                        Browse or Drag and Drop your files here
                                    </div>
                                </div>
                            </div>





                            <!-- Paper Format  -->
                            <div class="row  py-4">
                                <div class="col-3">
                                    <label class="mb-0">Paper Format</label>
                                </div>
                                <div class="col">
                                    <div class="row paperformatrow">
                                        <div class="col paperformatactive">
                                            <label for="apa">APA</label>
                                            <input type="radio" id="apa" value="apa" class="d-none" name="format"
                                                checked />
                                        </div>
                                        <div class="col">
                                            <label for="chicago">Chicago/Turabian</label>
                                            <input type="radio" id="chicago" value="chicago" class="d-none"
                                                name="format" />
                                        </div>
                                        <div class="col">
                                            <label for="mla">MLA</label>
                                            <input type="radio" id="mla" value="mla" class="d-none" name="format" />
                                        </div>
                                        <div class="col">
                                            <label for="havard">Havard</label>
                                            <input type="radio" id="havard" value="havard" class="d-none"
                                                name="format" />
                                        </div>
                                        <div class="col">
                                            <label for="notapplicable">NotApplicable</label>
                                            <input type="radio" id="notapplicable" value="notapplicable" class="d-none"
                                                name="format" />
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Number Of Pages  -->



                            <div class="row py-4">
                                <div class="col-3">
                                    <label>Number Of Pages </label>
                                    <input type="hidden" name="noofpages" id="noofpages" value="1" />
                                </div>
                                <div class="col px-0">
                                    <div class="row">
                                        <div class="col px-5">
                                            <div class="row countingrowpage">
                                                <div class="myminus">-</div>
                                                <div class="mycount">1</div>
                                                <div class="myplus">+</div>
                                            </div>


                                        </div>
                                        <div class="col px-5">
                                            <div class="row doublesinglerow">
                                                <div class="col doublesinglerowactive">
                                                    <label for="double">Double</label>
                                                    <input type="radio" id="double" class="d-none" value="1"
                                                        name="doublesingle" checked />
                                                </div>


                                                <div class="col">
                                                    <label for="single">Single</label>
                                                    <input type="radio" value="2" id="single" class="d-none"
                                                        name="doublesingle" />
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>




                            <!-- Currency  -->


                            <div class="row  py-4">
                                <div class="col-3">
                                    <label class="mb-0">Currency</label>
                                </div>
                                <div class="col">
                                    <div class="row currencyrow">
                                        <div class="col currencyactive">
                                            <label for="usd">USD</label>
                                            <input type="radio" id="usd" value="usd" class="d-none" name="currency"
                                                checked />
                                        </div>

                                        <div class="col ">
                                            <label for="gbp">GBP</label>
                                            <input type="radio" id="gbp" value="gbp" class="d-none" name="currency" />
                                        </div>



                                        <div class="col ">
                                            <label for="eur">EUR</label>
                                            <input type="radio" id="eur" value="eur" class="d-none" name="currency" />
                                        </div>



                                        <div class="col ">
                                            <label for="aud">AUD</label>
                                            <input type="radio" id="aud" value="aud" class="d-none" name="currency" />
                                        </div>

                                    </div>
                                </div>
                            </div>





                            <!--Sources to be cited  -->



                            <div class="row py-4">
                                <div class="col-3">
                                    <label>Sources to be cited </label>
                                    <input type="hidden" name="sourcetobecited" id="sourcetobecited" value="1" />
                                </div>
                                <div class="col ">

                                    <div class="sourcecountingrowpage">
                                        <div class="myminus">-</div>
                                        <div class="mycount">1</div>
                                        <div class="myplus">+</div>
                                    </div>


                                </div>
                            </div>




                            <!--PowerPoint Slides  -->



                            <div class="row py-4">
                                <div class="col-3">
                                    <label>PowerPoint Slides </label>
                                    <input type="hidden" name="powerpointslides" id="powerpointslides" value="0" />
                                </div>
                                <div class="col ">

                                    <div class="powerpointslidecountingrowpage">
                                        <div class="myminus">-</div>
                                        <div class="mycount">0</div>
                                        <div class="myplus">+</div>
                                    </div>


                                </div>
                            </div>






                            <!-- Deadline -->
                            <div class="row  py-4">
                                <div class="col-3">
                                    <label class="mb-0">Deadline</label>
                                </div>
                                <div class="col">
                                    <div class="row deadlinerow">
                                        <div class="col deadlinerowactive">
                                            <label for="sixhours">6 Hours</label>
                                            <input type="radio" id="sixhours" class="d-none" value="sixhours"
                                                name="deadline" checked />
                                        </div>

                                        <div class="col ">
                                            <label for="twelvehours">12 Hours</label>
                                            <input type="radio" id="twelvehours" value="twelvehours" class="d-none"
                                                name="deadline" />
                                        </div>



                                        <div class="col ">
                                            <label for="twentyfourhours">24 Hours</label>
                                            <input type="radio" id="twentyfourhours" value="twentyfourhours"
                                                class="d-none" name="deadline" />
                                        </div>



                                        <div class="col ">
                                            <label for="fortyeighthours">48 Hours</label>
                                            <input type="radio" id="fortyeighthours" value="fortyeighthours"
                                                class="d-none" name="deadline" />
                                        </div>




                                        <div class="col ">
                                            <label for="threedays">3 Days</label>
                                            <input type="radio" id="threedays" value="threedays" class="d-none"
                                                name="deadline" />
                                        </div>








                                        <div class="col ">
                                            <label for="fivedays">5 Days</label>
                                            <input type="radio" id="fivedays" value="fivedays" class="d-none"
                                                name="deadline" />
                                        </div>


                                        <div class="col ">
                                            <label for="sevendays">7 Days</label>
                                            <input type="radio" id="sevendays" value="sevendays" class="d-none"
                                                name="deadline" />
                                        </div>



                                    </div>
                                </div>
                            </div>













                            <!-- Pakistan Standar time dive data  -->




                            <div class="row   standardtimedivdata py-2">
                                <div class="col-3">

                                </div>
                                <div class="col">
                                    <p>We'll send you the order for review by</p>
                                    <p>Mon Mar 13 2023 10:22:02 GMT+0500 (Pakistan Standard Time)</p>
                                </div>
                            </div>









                            <!-- Writer category -->
                            <div class="row  py-4">
                                <div class="col-3">
                                    <label class="mb-0">Writer category</label>
                                </div>
                                <div class="col">
                                    <div class="row categorypackagerow">
                                        <div class="col categorypackagerowactive">
                                            <label for="standard">

                                                <h5>Standard</h5>
                                                <hr />
                                                <p>Standard Price writeers</p>


                                            </label>
                                            <input type="radio" id="standard" value="standard" class="d-none"
                                                name="package" checked />
                                        </div>




                                        <div class="col ">
                                            <label for="premimium">

                                                <h5>Premimum</h5>
                                                <hr />
                                                <p> High-rank professional writer, proficient in the requested field of
                                                    study
                                                </p>


                                            </label>
                                            <input type="radio" id="premimium" value="premimium" class="d-none"
                                                name="package" />
                                        </div>






                                        <div class="col ">
                                            <label for="platinum">

                                                <h5>Platinum</h5>
                                                <hr />
                                                <p> English as a native language writer (US, UK, CA, AU writers)</p>


                                            </label>
                                            <input type="radio" id="platinum" value="platinum" class="d-none"
                                                name="package" />
                                        </div>



                                    </div>
                                </div>
                            </div>


                            <input type="hidden" name="userid" id="userid" value="" />
                            <input type="hidden" name="totalamount" id="totalamount" value="" />
                            @if(session()->has('loginuserid'))
                            <div class="py-4 checkoutbuttonhide">
                                <button class="btn btn-lg btn-info ">Checkout</button>
                            </div>
                            @else
                            <div class="py-4 checkoutbuttonhide">
                                <button class="btn btn-lg btn-info hide">Checkout</button>
                            </div>

                            @endif

                        </form>


                        <!----------------------- Acount Section Start From Here --------------------- -->
                        @if(session()->has('loginuserid'))

                        @else




                        <div class="bottonaccountdiv">




                            <div class="accountdivpointmain position-relative">
                                <div class="accoutdivpoint">
                                    2.Account
                                </div>
                            </div>



                            <div class="acounttabdiv">
                                <div class="paymentloginbutton new active">New Customer</div>
                                <div class="paymentloginbutton old">Returning Customer</div>
                            </div>


                            <div class="paymentloginform new py-3 active">

                                <form method="post" id="buynowsignupform">

                                    @csrf

                                    <!-- Email  -->
                                    <div class="row py-3">
                                        <div class="col-3">
                                            <label>Email</label>
                                        </div>
                                        <div class="col">
                                            <input type="email" placeholder="Your Email Address" class="form-control"
                                                name="email" id="emailsignup" />
                                        </div>
                                    </div>


                                    <!-- Name  -->
                                    <div class="row py-3">
                                        <div class="col-3">
                                            <label>Name</label>
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control" name="name" id="namesignup" />

                                        </div>
                                    </div>



                                    <!-- Password  -->
                                    <div class="row py-3">
                                        <div class="col-3">
                                            <label>Password</label>
                                        </div>
                                        <div class="col">
                                            <input type="password" class="form-control" name="password"
                                                id="signuppassword" />
                                        </div>
                                    </div>



                                    <!-- Phone  -->
                                    <div class="row py-3">
                                        <div class="col-3">
                                            <label>Phone</label>
                                        </div>
                                        <div class="col">
                                            <div class="row">
                                                <div class="col-3 px-0">
                                                    <select name="phonecode" class="form-control" id="signupphonecode">
                                                        <option value="+1">USA +1</option>
                                                        <option value="+92">Pak</option>
                                                        <option value="+91">Ind</option>
                                                    </select>
                                                </div>
                                                <div class="col px-0">
                                                    <input type="number" class="form-control" name="phone"
                                                        id="signupnumber" />
                                                </div>
                                            </div>

                                        </div>
                                    </div>


                                    <!-- checkbox  -->
                                    <div class="row py-1">
                                        <div class="col-3">

                                        </div>
                                        <div class="col ">
                                            <div class="row">
                                                <div class="col-1"><input type="checkbox" name="agree" value="agree1"
                                                        class="me-2" /></div>
                                                <div class="col"> <label>I agree to receive discount coupons, exclusive
                                                        offers, and the latest news by email, SMS, phone, and other
                                                        electronic means</label></div>
                                            </div>



                                        </div>
                                    </div>

                                    <div class="row py-1">
                                        <div class="col-3">

                                        </div>
                                        <div class="col">


                                            <div class="row">
                                                <div class="col-1"> <input type="checkbox" value="agree2"
                                                        name="agree2" /></div>
                                                <div class="col"> <label>I agree to the Terms and conditions</label>
                                                </div>
                                            </div>





                                        </div>
                                    </div>


                                    <button class="btn btn-info" id="buynowsignupformbutton">Sign Up</button>



                                </form>




                            </div>


                            <div class="paymentloginform old py-3">
                                <form method="post">
                                    <div class="row py-3">
                                        <div class="col-3">
                                            <label>Email</label>
                                        </div>
                                        <div class="col">
                                            <input type="email" class="form-control" placeholder="Email"
                                                name="olduseremail" id="signinemail" />
                                        </div>
                                    </div>

                                    <div class="row py-3">
                                        <div class="col-3">
                                            <label>Password</label>
                                        </div>
                                        <div class="col">
                                            <input type="password" class="form-control" placeholder="Password"
                                                name="olduserpassword" id="signinpassword" />
                                        </div>
                                    </div>

                                    <button class="btn btn-seconday" id="btnsignin">LogIn</button>

                                </form>

                            </div>

                        </div>



                        @endif


                    </div>


                </div>


            </div>

        </div> <!-- Left COlumn div end  -->


        <!-- Right  -->


        <div class="rightboxfixed">
            <div class="orderbox">
                <h4>Writer's Choice</h4>
                <div class="getacademic mb-1">
                    College
                </div>

                <div class="gettypeofpaper">
                    Dissertation chapter
                </div>

                <hr />

                <div class="row">
                    <div class="col">
                        <span class="pagesideboxfixed">1</span> pages *
                        <span class="singlepricesideboxfixed"> 50.52</span>
                    </div>
                    <div class="col">

                        <span class="getcurrencydiv">USD</span> <span class="totalchangedsidebarfixed">50.52</span>
                    </div>
                </div>

                <hr />



                <div class="row   pptdiv hide">
                    <div class="col">
                        <span class="getppslidenumber"></span> PPT Slides
                    </div>
                    <div class="col">

                        <span class="getcurrencydiv">USD</span> <span class="getpptslidetotal">22.31</span>
                    </div>
                </div>






                <div class="row py-3">
                    <div class="col">
                        <h5>Total</h5>
                    </div>
                    <div class="col">

                        <span class="getcurrencydiv">USD</span> <span class="totalchangedsidebarfixed">50.52</span>
                    </div>
                </div>



                <hr />

                <p>Secure payments via:</p>

                <div class=" paypalimage">

                </div>

                <div class="row couponcodediv py-3">
                    <div class="col-8">
                        <input type="text" class="form-control" />
                    </div>
                    <div class="col">
                        <button class="btn btn-success">Apply</button>
                    </div>

                </div>

            </div>
        </div>




    </div>
    </div>
    </div>







    @endsection