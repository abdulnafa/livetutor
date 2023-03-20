@extends('layouts.main')
@section('title',"User Account")

@section('my-content')


    <div class="container-fluid">

        <div class="row">


            <!-- Dashboard Sidebar ------------------------------------------------------------------------  -->
            @include('inc.userdashboardsidebar')
            <!-- Dashboard Content  -->


            <div class="col-md-9 dashboardcontent">
<script src="{{ asset('assets/js/paymob.js') }}"></script>
<button onclick="firstStep()">Pay</button>
<div class="dashboarddiv home-section active">
    <div class="row mb-4">
        <div class="col-3 home-card">
            <div class="row">
                <div class="col">
                     <div class="content text-center">
                        <h3 class="">{{ $pennum }}</h3>
                        <span >Pending Order</span>
                     </div>
                </div>
                <div class="col">
               <div class="round-div" style="    background-color: #E984B1 !important;"> <i class="bi bi-stopwatch"></i></div>
                </div>
            </div>
        </div>  
        
        <div class="col-3 home-card">
            <div class="row">
                <div class="col">
                     <div class="content text-center">
                        <h3 class="">{{ $revnum }}</h3>
                         <span>Revsion Order</span>
                     </div>
                </div>
                <div class="col">
                <div class="round-div " style="background-color: #59ADEC !important;"><i class="bi bi-receipt"></i></div>
                   
                </div>
            </div>
        </div>
        
        <div class="col-3 home-card">
            <div class="row">
                <div class="col">
                     <div class="content">
                        <h3 class="text-center">{{ $comnum }}</h3>
                         <span>Complete Order</span>
                     </div>
                </div>
                <div class="col">
                 <div class="round-div"  style="background-color: #E7C353 !important;"><i class="bi bi-bag"></i> </div>
                </div>
            </div>
        </div>
       
        
    </div>

<h6 class=" my-3">Pending Payments</h6>
<table class="table mb-4 ">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Type of Paper</th>
            <th>Amount</th>
        </tr>
    </thead>
    
    <tbody>
        @foreach ($pen as $pen)
            
       
        <tr>
            <td>#{{ $pen->id }}</td>
            <td>{{ $pen->topic }}</td>
            <td>{{ $pen->type_of_paper }}</td>
            <td>${{ $pen->amount }}</td>
        </tr>
         @endforeach
    </tbody>
</table>

<h6 class="mt-5">Assigned Orders Activity</h6>
<li class="hr"></li>
<div class="row status-btns">
    <div class="col">
        <button  class="in-btn active">IN PROGRESS ({{ $inpronum }})</button>
                <button class="rv-btn ">REVISION ({{ $revnum }})</button>
                
              
                
               
                <button class="com-btn">COMPLETED ({{ $comnum }})</button>       

    </div>
</div>
<table class="table in-progress-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Type of Paper</th>
            <th>Academic Level</th>
        </tr>
    </thead>
    
    <tbody>

        @foreach ($inpro as $inpro)  
        <tr>
            <td>#{{$inpro->id  }}</td>
            <td>{{ $inpro->topic }}</td>
            <td>{{ $inpro->type_of_paper }}</td>
            <td>{{ $inpro->academic_level }}</td>
        </tr> 
         @endforeach


    </tbody>
</table>

<table class="table revision-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Type of Paper</th>
            <th>Academic Level</th>
        </tr>
    </thead>
    
    <tbody>
        @foreach ($rev as $rev )
            
       
        <tr>
             <td>#{{$rev->id  }}</td>
            <td>{{ $rev->topic }}</td>
            <td>{{ $rev->type_of_paper }}</td>
            <td>{{ $rev->academic_level }}</td>
        </tr>
         @endforeach
    </tbody>
</table>

<table class="table complete-table">
    <thead>
        <tr>
            <th>#ID</th>
            <th>Title</th>
            <th>Type of Paper</th>
            <th>Academic Level</th>
        </tr>
    </thead>
    
    <tbody>
        @foreach ($com as $com )
            
     
        <tr>
             <td>#{{$com->id  }}</td>
            <td>{{ $com->topic }}</td>
            <td>{{ $com->type_of_paper }}</td>
            <td>{{ $com->academic_level }}</td>
        </tr>
           @endforeach
    </tbody>
</table>
</div>
                <!-- ------  Place And Order Code-----------------------------------------------------  -->
                <div class="dashboarddiv container-fluid placeorderdiv ">


                    <div class="container-fluid py-5">



<div class="dashboarddiv  order-pay-section"></div>
                        <div class="container order-custom">


                            <div class="row position-relative">



                                <div class="col-md-9">
                                    <h3>PLACE AN ORDER</h3>
                                    <p>It’s fast, secure, and confidential &#8712;</p>

                                    <div class="paperdetailbox my-2">
                                        <p>1. Paper details</p>
                                    </div>

                                    <div class="paperdetailformdiv">


                                        <form action="{{Route('orderpaypal')}}" method="post"
                                            enctype="multipart/form-data">
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
                                            <input type="radio" id="college" data-val="50.38" value="collage" class="d-none"
                                                name="academic" checked />
                                        </div>
                                        <div class="col">
                                            <label for="undergraduate">Undergraduate</label>
                                            <input type="radio" id="undergraduate" data-val="52.47" value="undergraduate" class="d-none"
                                                name="academic" />
                                        </div>
                                        <div class="col">
                                            <label for="master">Masters</label>
                                            <input type="radio" id="master" data-val="62.97" value="master" class="d-none"
                                                name="academic" />
                                        </div>
                                        <div class="col">
                                            <label for="phd">PHD</label>
                                            <input type="radio" id="phd" data-val="67.17" value="phd" class="d-none" name="academic" />
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
                                                        <option value="eassy" selected>Eassy (Any Type)</option>
                                                        <option value="article">Article (Any Type)</option>
                                                        <option value="content">Content (Any Type)</option>
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
                                                        class="form-control" name="paperintstruction" rows="5"
                                                        required></textarea>
                                                </div>
                                            </div>



                                            <!-- Additional Materials  -->

                                            <div class="row py-4">
                                                <div class="col-3">
                                                    <label>Additional Materials </label>
                                                </div>
                                                <div class="col px-0">
                                                    <input type="file" name="additionalmaterial" id="additionalfile"
                                                        class="d-none" />
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
                                                            <input type="radio" id="apa" value="apa" class="d-none"
                                                                name="format" checked />
                                                        </div>
                                                        <div class="col">
                                                            <label for="chicago">Chicago/Turabian</label>
                                                            <input type="radio" id="chicago" value="chicago"
                                                                class="d-none" name="format" />
                                                        </div>
                                                        <div class="col">
                                                            <label for="mla">MLA</label>
                                                            <input type="radio" id="mla" value="mla" class="d-none"
                                                                name="format" />
                                                        </div>
                                                        <div class="col">
                                                            <label for="havard">Havard</label>
                                                            <input type="radio" id="havard" value="havard"
                                                                class="d-none" name="format" />
                                                        </div>
                                                        <div class="col">
                                                            <label for="notapplicable">NotApplicable</label>
                                                            <input type="radio" id="notapplicable" value="notapplicable"
                                                                class="d-none" name="format" />
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
                                                                    <input type="radio" id="double" class="d-none"
                                                                        value="1" name="doublesingle" checked />
                                                                </div>


                                                                <div class="col">
                                                                    <label for="single">Single</label>
                                                                    <input type="radio" value="2" id="single"
                                                                        class="d-none" name="doublesingle" />
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
                                                            <input type="radio" id="usd" value="usd" class="d-none"
                                                                name="currency" checked />
                                                        </div>

                                                        <div class="col ">
                                                            <label for="gbp">GBP</label>
                                                            <input type="radio" id="gbp" value="gbp" class="d-none"
                                                                name="currency" />
                                                        </div>



                                                        <div class="col ">
                                                            <label for="eur">EUR</label>
                                                            <input type="radio" id="eur" value="eur" class="d-none"
                                                                name="currency" />
                                                        </div>



                                                        <div class="col ">
                                                            <label for="aud">AUD</label>
                                                            <input type="radio" id="aud" value="aud" class="d-none"
                                                                name="currency" />
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>





                                            <!--Sources to be cited  -->



                                            <div class="row py-4">
                                                <div class="col-3">
                                                    <label>Sources to be cited </label>
                                                    <input type="hidden" name="sourcetobecited" id="sourcetobecited"
                                                        value="1" />
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
                                                    <input type="hidden" name="powerpointslides" id="powerpointslides"
                                                        value="0" />
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
                                                            <input type="radio" id="sixhours" class="d-none"
                                                                value="sixhours" name="deadline" checked />
                                                        </div>

                                                        <div class="col ">
                                                            <label for="twelvehours">12 Hours</label>
                                                            <input type="radio" id="twelvehours" value="twelvehours"
                                                                class="d-none" name="deadline" />
                                                        </div>



                                                        <div class="col ">
                                                            <label for="twentyfourhours">24 Hours</label>
                                                            <input type="radio" id="twentyfourhours"
                                                                value="twentyfourhours" class="d-none"
                                                                name="deadline" />
                                                        </div>



                                                        <div class="col ">
                                                            <label for="fortyeighthours">48 Hours</label>
                                                            <input type="radio" id="fortyeighthours"
                                                                value="fortyeighthours" class="d-none"
                                                                name="deadline" />
                                                        </div>




                                                        <div class="col ">
                                                            <label for="threedays">3 Days</label>
                                                            <input type="radio" id="threedays" value="threedays"
                                                                class="d-none" name="deadline" />
                                                        </div>








                                                        <div class="col ">
                                                            <label for="fivedays">5 Days</label>
                                                            <input type="radio" id="fivedays" value="fivedays"
                                                                class="d-none" name="deadline" />
                                                        </div>


                                                        <div class="col ">
                                                            <label for="sevendays">7 Days</label>
                                                            <input type="radio" id="sevendays" value="sevendays"
                                                                class="d-none" name="deadline" />
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
                                                            <input type="radio" id="standard" value="standard"
                                                                class="d-none" name="package" checked />
                                                        </div>




                                                        <div class="col ">
                                                            <label for="premimium">

                                                                <h5>Premimum</h5>
                                                                <hr />
                                                                <p> High-rank professional writer, proficient in the
                                                                    requested field of
                                                                    study
                                                                </p>


                                                            </label>
                                                            <input type="radio" id="premimium" value="premimium"
                                                                class="d-none" name="package" />
                                                        </div>






                                                        <div class="col ">
                                                            <label for="platinum">

                                                                <h5>Platinum</h5>
                                                                <hr />
                                                                <p> English as a native language writer (US, UK, CA, AU
                                                                    writers)</p>


                                                            </label>
                                                            <input type="radio" id="platinum" value="platinum"
                                                                class="d-none" name="package" />
                                                        </div>



                                                    </div>
                                                </div>
                                            </div>


                                            <input type="hidden" name="userid" id="userid" value="" />
                                            <input type="hidden" name="totalamount" id="totalamount" value="" />

                                            <div class="py-4 checkoutbuttonhide">
                                                <button class="btn btn-lg btn-info">Checkout</button>
                                            </div>



                                        </form>













                                    </div>


                                </div>


                            </div>

                        </div> <!-- Left COlumn div end  -->


                        <!-- Right  -->


                        <div class="rightboxfixed loginuser">
                            <div class="orderbox">
                                <h4>Writer's Choice</h4>
                                <div style="color:#536C86" class="getacademic mb-1">
                                    College
                                </div>

                                <div style="color:#536C86" class="gettypeofpaper">
                                    Dissertation chapter
                                </div>

                                <hr />

                                <div class="row">
                                    <div class="col">
                                        <span class="pagesideboxfixed">1</span> pages *
                                        <span class="singlepricesideboxfixed"> 50.52</span>
                                    </div>
                                    <div class="col">

                                        <span class="getcurrencydiv">USD</span> <span
                                            class="totalchangedsidebarfixed">50.52</span>
                                    </div>
                                </div>

                                <hr />



                                <div class="row   pptdiv hide">
                                    <div class="col">
                                        <span class="getppslidenumber"></span> PPT Slides
                                    </div>
                                    <div class="col">

                                        <span class="getcurrencydiv">USD</span> <span
                                            class="getpptslidetotal">22.31</span>
                                    </div>
                                </div>






                                <div class="row py-3">
                                    <div class="col">
                                        <h5>Total</h5>
                                    </div>
                                    <div class="col">

                                        <span class="getcurrencydiv">USD</span> <span
                                            class="totalchangedsidebarfixed">50.52</span>
                                    </div>
                                </div>



                                <hr />

                                

                                <div class=" paypalimage">

                                </div>

                                <div class="row couponcodediv py-3">
                                    <div class="col-8">
                                        
                                    </div>
                                    <div class="col">
                                     
                                    </div>

                                </div>

                            </div>
                        </div>




                    </div>








                </div>




                <!-- ------  My Orders-----------------------------------------------------  -->
                <div class="dashboarddiv myorderdiv">

                    <div class="container-fluid py-3">
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
                                 <td> <a style="cursor: pointer ;color:#00BC9C;" href="{{ url('order-detail') }}/{{$data->id}}">#{{$data->id}}</a> </td>
                                    <td><a style="cursor: pointer ;color:#00BC9C;" href="{{ url('order-detail') }}/{{$data->id}}">{{$data->topic}}</a></td>
                                    <td>{{$data->type_of_paper}}</td>
                                    <td>{{$data->number_of_pages}} Pages</td>
                                    <td>
                                        <button class="btn btn-danger">Pay Now ${{$data->amount}}</button>
                                    </td>
                                </tr>

                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>



                <!-- ------ Edit Profile-----------------------------------------------------  -->



                <div class="dashboarddiv editprofilediv">
                    <div class="container-fluid py-2">

                        @if($user)
                        @foreach($user as $user)
                        <form action="{{Route('updateprofile')}}" method="post">
                            @csrf
                            <div class="row py-2">
                                <div class="col-3">
                                    <label>Client Id</label>
                                </div>
                                <div class="col">
                                    <input type="text" value="{{$user->id}}" class="form-control" disabled />
                                </div>
                            </div>

                            <div class="row py-2">
                                <div class="col-3">
                                    <label>Email</label>
                                </div>
                                <div class="col">
                                    <input type="email" value="{{$user->email}}" name="email" class="form-control" />
                                </div>
                            </div>

                            <div class="row py-2">
                                <div class="col-3">
                                    <label>Password</label>
                                </div>
                                <div class="col">
                                    <input type="text" placeholder="Hidden Password" name="password"
                                        class="form-control" />
                                </div>
                            </div>

                            <div class="row py-2">
                                <button class="btn btn-primary">Update</button>
                            </div>
                        </form>
                        @endforeach
                        @endif

                    </div>
                </div>



                <!-- Messages ------------------------------------------------- -->

                <div class="dashboarddiv messagediv">
<div class="container">
    <div class="row py-2">
        <div class="col-md-8 mx-auto">
            <div class="messageboxdiv">
<div class="row px-2 py-2 border-bottom">
    <div class="col-3">
        <img src="{{asset('assets/images/c2.png')}}" class=" rounded-circle" width="50" height="50"/>
    </div>
</div>

<div class="chatrowmain row">
<div class="col-md-7 singlechatcol  receivercol">
    <h5>Hi How Are You</h5>
</div>
<div class="col-md-7 singlechatcol sendercol">
    <h5>I am fine</h5>
</div>
</div>


            </div>
<form method="post">
            <div class="row rowchatinput mt-auto">
    <div class="col-9">
        <input type="text" name="messageinput" class="form-control" id="sendmessageinput" placeholder="Enter Message"/>
    </div>
    <div class="col-3">
        <button class="btn btn-primary" id="sendmessagebtn">Send Message</button>
    </div>
</div>

</form>
        </div>
        @if(Session::has('loginuserid'))    <input type="hidden" id="sessionuserid" value="{{ Session::get('loginuserid')}}"/>  @endif
    </div>
</div>
                </div>
            </div>
        </div>

    </div>








@endsection