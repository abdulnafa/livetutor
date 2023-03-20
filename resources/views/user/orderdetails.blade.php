@extends('layouts.main')
@section('title', 'Buy Now')
@section('my-content')
    <div class="container-fluid">
        <div class="row">
            @include('inc.userdashboardsidebar')

@foreach ($order as $order)
    

            <div class="col-md-9 my-4">
                <div class="order-detail">
                    <div class="detail-content">
                        <span style="font-size: 20px">ORDER ID <b>#{{ $order->id }}</b></span> <a href="{{url('editorder')}}/{{ $order->id}}"><button class="btn edit-order-btn btn-danger ml-4">Edit Order</button></a>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col"></div>
                                </div>
                                <div class="h3">Topic: <span class="h3 text-capitalize">{{ $order->topic }}</span></div>
                            </div>
                            <div class="col"><button class="btn btn-success detail-paynow-btn">Pay Now</button></div>
                        </div>
                        <hr class="hr" />
                        <div class="row order-info-btn">
                            <div class="col">
                                <button class="order-detailbtn ins active" id="ins">Instruction</button>
                            </div>
                            <div class="col">
                                <button class="order-detailbtn addfiles" id="addfiles">Add Files</button>
                            </div>
                            <div class="col">
                                <button class="order-detailbtn download " id="download"> Download</button>
                            </div>
                            <div class="col">
                                <button class="order-detailbtn rating" id="rating">Rating</button>
                            </div>
                        </div>

                        <div class="row gap-2 send-order-message" >
                            <div class="col-5">
                                <table class="table order-dtable mt-4">
                                    <tbody>
                                        <tr>
                                            <td>Type of service:</td>
                                            <td>{{ $order->type_of_paper }}</td>
                                        </tr>
                                        <tr>
                                            <td>Format:</td>
                                            <td>{{ $order->paper_format }}</td>
                                        </tr>
                                        <tr>
                                            <td>Amount:</td>
                                            <td>${{ $order->amount }}</td>
                                        </tr>
                                        <tr>
                                            <td>Pages:</td>
                                            <td>{{ $order->number_of_pages }} (@if($order->double_or_single==1)Single @elseif($order->double_or_single==2) Double @endif
                                             )</td>
                                        </tr>
                                        <tr>
                                            <td># of slides:</td>
                                            <td>{{ $order->powerpoint_slides }}</td>
                                        </tr>
                                        {{-- <tr>
                                            <td># of Charts:</td>
                                            <td>{{ $order-> }}</td>
                                        </tr> --}}
                                        <tr>
                                            <td>Deadline:</td>
                                            <td>{{ $order->deadline }}</td>
                                        </tr>
                                       <tr>
                                            <td>Academic level:</td>
                                            <td>{{ $order->academic_level }}</td>
                                        </tr> 
                                        <tr>
                                            <td>Number of sources:</td>
                                            <td>{{ $order->sources_to_cited }}</td>
                                        </tr>
                                        <tr>
                                            <td>Paper instructions:</td>
                                            <td>{{ $order->paper_instruction }}</td>
                                        </tr> 
                                    
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-5 mt-4">
                                <div class="card chat-box p-2">
                                    <div class="alert alert-info">Chat History</div>
                                    <form action="{{ url('order_chat') }}" method="POST">
                                        @csrf
                                    <div class="send-section bg bg-light p-2">
                                         <div class="row">
                                        <input type="hidden" name="orderid" id="" value="{{ $order->id }}">
                                        <input type="hidden" name="person" id="" value="user">
                                        <div class="col"><span>Talk to an expert </span></div>
                                        <div class="col"><label for=""><input type="radio" value="writer"
                                                    name="reciever" value="writer"> Writer</label>
                                            <label for=""><input type="radio" value="writer"
                                                    name="reciever" value="admin" checked> Support</label>
                                        </div>
                                    </div>  @foreach ($chat as $chat )
                                    <div class="user-recent-chat">
                                      
                                             {{ $chat->message }} <br>
                                            <span style="color: #585858;font-size:10px">{{ $chat->created_at->diffForHumans() }}</span> 
                                            
                                             
                                       
                                       
                                    </div><br><hr>
                                             @endforeach  
                                    <textarea class="form form-control" name="message" id="" cols="30" rows="5"></textarea>
                                           <center><button type="submit" class="btn btn-success my-3">Send Now</button></center>    
                                           </form>
                                </div>
                                   
                                </div>
                            </div>
                        </div>

<center>
    <form action="{{ url('/getdocument') }}" method="POST" enctype="multipart/form-data">
        @csrf
<div class="img-upload-section my-5">
  <span class="text-center"> Additional Files (files will be uploaded once you submit)</span> 
  <br>
    <div class="select-img">
        {{-- <p>Drop files here to upload</p> --}}
        <input type="file" id="select-img" name="image">
        <input type="hidden" name="order_id" value="{{ $order->id }}">
        <input type="hidden" name="sender" value="client">
        <input type="hidden" name="userid" value="{{ $order->userid }}">
       
    </div><button type="submit" class="btn btn-success my-3">Send File</button>
</div>
 
</form>
</center>


<table class="table my-5 table-bordered">
    <thead class="bg bg-light">
        <tr>
            <th>File Name</th>
            <th>Uploaded By</th>
            <th>Upladed on</th>
            <th>Download</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($doc as $doc )
       <tr>
        <td>{{ $doc->document}}</td>
        <td>{{ $doc->sender}}</td>
        <td>{{ $doc->created_at->diffForHumans()}}</td>
        <td><a href="{{ asset('images') }}/{{$doc->document}}" download>download</a></td>
    </tr>  
    @endforeach
   
</tbody>
</table>


                    </div>

                </div>
            </div>

        </div>
    </div>
    @endforeach
@endsection
