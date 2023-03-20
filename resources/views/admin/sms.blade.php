@extends('adminlayout.main')

@section('admin-dashboard')






<div class=" container-fluid">
    <div class="container">

        <div class="row gx-5">
            <div class="col-md-6">
                <h2>SMS Clients</h2>
                <div class="row py-3">
                    <form action="{{Route('sendsmsclient')}}" method="post">
                        @csrf
                        <label>Select Client</label>
                        <select name="smsuser" class="form-control">
                        <option value="">Select User</option>
                            @if($user)
                            @foreach($user as $user)
                           <option value="{{$user->id}}">{{$user->email}}</option>
                            @endforeach
                            @endif
                        </select>
                </div>

                <div class="row py-3">

                    <label>SMS Text (max 150 characters)</label>
                    <textarea rows="10" class="form-control" name="message" placeholder="Type Your Message Here">

                </textarea>
<div class="row py-3">
    <div class="col-md-4">
        <button class="btn btn-primary btn-sm">Send Sms</button>
    </div>
</div>
                    
                    </form>
                </div>

            </div>
            <div class="col-md-6">

            <h2>SMS Writers</h2>
                <div class="row py-3">
                    <form>
                        <label>Select Writer</label>
                        <select name="user" class="form-control">
                        <option value="">Select</option>
                          
                           <option value="writer">All Writers</option>
                           
                           
                        </select>
                </div>

                <div class="row py-3">

                    <label>SMS Text (max 160 characters)</label>
                    <textarea rows="10" class="form-control" placeholder="Type Your Message Here">

                </textarea>
<div class="row py-3">
    <div class="col-md-4">
        <button class="btn btn-primary btn-sm">Send Sms</button>
    </div>
</div>
                    
                    </form>
                </div>




            </div>
        </div>




    </div>
</div>







@endsection