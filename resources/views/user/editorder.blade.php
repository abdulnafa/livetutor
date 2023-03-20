@extends('layouts.main')
@section('title',"Edit Order")

@section('my-content')



    <!-- Form Section  -->

    <div class="container-fluid py-5">


<div class="row">
    {{-- @include('inc.userdashboardsidebar') --}}
    @foreach ($order as $order )
        
  
    <div class="col-md-9">
      <a href="{{ url('userAdmin') }}"><button class="btn btn-success"> << <i class="bi bi-rewind"></i> Go Back</button></a>   
        <div class="alert alert-warning">EDIT ORDER #{{ $order->id }} --- PRICE: ${{ $order->amount }}</div>
        <div class="container">


            <div class="row position-relative">



                <div class="col-md-9">
                    <h3>EDIT ORDER</h3>
                    <p>customize your requirements </p>

                    <div class="paperdetailbox my-2">
                        <p>1. Paper details</p>
                    </div>

                    <div class="paperdetailformdiv">


                        <form action="{{url('editorder')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="orderid" value="{{ $order->id }}">
                            <!-- Academic level  -->
                            <div class="row  py-3">
                                <div class="col-3">
                                    <label class="mb-0">Academic level</label>
                                </div>
                                <div class="col">
                                    <div class="row academiclevelrow">
                                        <div class="col @if($order->academic_level=='collage') academicactive @endif ">
                                            <label for="college">College</label>
                                            <input type="radio" id="college" data-val="50.38" value="collage" class="d-none"
                                                name="academic" checked />
                                        </div>
                                        <div class="col @if($order->academic_level=='undergraduate') academicactive @endif " >
                                            <label for="undergraduate">Undergraduate</label>
                                            <input type="radio" id="undergraduate" data-val="52.47" value="undergraduate" class="d-none"
                                                name="academic" />
                                        </div>
                                        <div class="col @if($order->academic_level=='master') academicactive @endif ">
                                            <label for="master">Masters</label>
                                            <input type="radio" id="master" data-val="62.97" value="master" class="d-none"
                                                name="academic" />
                                        </div>
                                        <div class="col @if($order->academic_level=='phd') academicactive @endif ">
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
                                        <option @if($order->discipline=="subject1") selected @endif value="subject1">Subject 1</option>
                                        <option @if($order->discipline=="subject2") selected @endif value="subject2">Subject 2</option>

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
                                        placeholder="Enter Title Of Your Paper" required  value="{{ $order->topic }}"/>
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
                                        class="form-control" name="paperintstruction" rows="5" required>
                                     {{ $order->paper_instruction }}</textarea>
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
                                        <div class="col @if($order->paper_format=="apa") paperformatactive @endif paperformatactive">
                                            <label for="apa">APA</label>
                                            <input type="radio" id="apa" value="apa" class="d-none" name="format"
                                                checked />
                                        </div>
                                        <div class="col  @if($order->paper_format=="chicago") paperformatactive @endif">
                                            <label for="chicago">Chicago/Turabian</label>
                                            <input type="radio" id="chicago" value="chicago" class="d-none"
                                                name="format" />
                                        </div>
                                        <div class="col  @if($order->paper_format=="mla") paperformatactive @endif">
                                            <label for="mla">MLA</label>
                                            <input type="radio" id="mla" value="mla" class="d-none" name="format" />
                                        </div>
                                        <div class="col  @if($order->paper_format=="havard") paperformatactive @endif">
                                            <label for="havard">Havard</label>
                                            <input type="radio" id="havard" value="havard" class="d-none"
                                                name="format" />
                                        </div>
                                        <div class="col  @if($order->paper_format=="notapplicable") paperformatactive @endif">
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
                                                <div class="mycount">{{ $order->number_of_pages }}</div>
                                                <div class="myplus">+</div>
                                            </div>


                                        </div>
                                        <div class="col px-5">
                                            <div class="row doublesinglerow">
                                                <div class="col @if($order->number_of_pages=="1") doublesinglerowactive @endif">
                                                    <label for="double">Double</label>
                                                    <input type="radio" id="double" class="d-none" value="1"
                                                        name="doublesingle" checked />
                                                </div>


                                                <div class="col @if($order->number_of_pages=="2") doublesinglerowactive @endif">
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
                                        <div class="mycount">{{ $order->sources_to_cited }}</div>
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
                                        <div class="mycount">{{ $order->powerpoint_slides }}</div>
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
                                        <div class="col  @if($order->deadline=="sixhours") deadlinerowactive @endif ">
                                            <label for="sixhours">6 Hours</label>
                                            <input type="radio" id="sixhours" class="d-none" value="sixhours"
                                                name="deadline" checked />
                                        </div>

                                        <div class="col  @if($order->deadline=="twelvehours") deadlinerowactive @endif">
                                            <label for="twelvehours">12 Hours</label>
                                            <input type="radio" id="twelvehours" value="twelvehours" class="d-none"
                                                name="deadline" />
                                        </div>



                                        <div class="col  @if($order->deadline=="twentyfourhours") deadlinerowactive @endif">
                                            <label for="twentyfourhours">24 Hours</label>
                                            <input type="radio" id="twentyfourhours" value="twentyfourhours"
                                                class="d-none" name="deadline" />
                                        </div>



                                        <div class="col  @if($order->deadline=="ortyeighthours") deadlinerowactive @endif">
                                            <label for="fortyeighthours">48 Hours</label>
                                            <input type="radio" id="fortyeighthours" value="fortyeighthours"
                                                class="d-none" name="deadline" />
                                        </div>




                                        <div class="col  @if($order->deadline=="threedays") deadlinerowactive @endif">
                                            <label for="threedays">3 Days</label>
                                            <input type="radio" id="threedays" value="threedays" class="d-none"
                                                name="deadline" />
                                        </div>








                                        <div class="col  @if($order->deadline=="fivedays") deadlinerowactive @endif">
                                            <label for="fivedays">5 Days</label>
                                            <input type="radio" id="fivedays" value="fivedays" class="d-none"
                                                name="deadline" />
                                        </div>


                                        <div class="col  @if($order->deadline=="sevendays") deadlinerowactive @endif">
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
                                    <p>Mon Mar 13 2023 10:22:02 GMT+0500 (USA Standard Time)</p>
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
                            <input type="hidden" name="totalamount" id="totalamount" value="{{ $order->amount }}" />
                          
                            <div class="py-4 checkoutbuttonhide">
                                <button class="btn btn-lg btn-info ">Checkout</button>
                            </div>
                          

                            

                        </form>


                        <!----------------------- Acount Section Start From Here --------------------- -->
                       



                       


                    </div>


                </div>


            </div>

        </div> <!-- Left COlumn div end  -->


        <!-- Right  -->


        <div class="rightboxfixed" style="max-width:200px">
            <div class="orderbox">
                <h4 style="color:#4A6675">Writer's Choice</h4>
                <div style="color:#4A6675" class="getacademic mb-1">
                    College
                </div>

                <div style="color:#4A6675" class="gettypeofpaper">
                    Dissertation chapter
                </div>

                <hr />

                <div class="row">
                    <div class="col">
                        <span class="pagesideboxfixed">{{ $order->number_of_pages }}</span> pages *
                        <span class="singlepricesideboxfixed"> 22.31</span>
                    </div>
                    <div class="col">

                        <span class="getcurrencydiv">USD</span> <span class="totalchangedsidebarfixed">{{22.31* $order->number_of_pages }}</span>
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

                        <span style="color:#28a745!important;font-weight:500" class="getcurrencydiv">USD</span> <span  style="color:#28a745!important;font-weight:500" class="totalchangedsidebarfixed">{{ $order->amount }}</span>
                    </div>
                </div>



                <hr />

                <p>Secure payments via:</p>

                <div class=" paypalimage">

                </div>

              

            </div>
        </div>




    
    </div>
    </div>
</div>
</div>
</div>

   
  @endforeach





    @endsection