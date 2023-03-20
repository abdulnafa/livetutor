@extends('adminlayout.main')

@section('admin-dashboard')



     


        
     
        <div class="container-fluid">
        

        <div class="container">

<table class="table">
    <thead class="thead-dark">
        <tr>
            <th>Order Id</th>
            <th>Message From</th>
            <th>Sender</th>
            <th>Message To</th>
            <th>Message</th>
            <th>Date</th>
            <th>Status</th>
            <th>Approved</th>
        </tr>
    </thead>
    <tbody class="dark-bordered">

       @if($data)
       @foreach($data as $data)
    <tr>
            <th>{{$data->id}}</th>
            <th>{{$data->sender_id}}</th>
            <th>{{$data->sender_id}}</th>
            <th>{{$data->receiver_id}}</th>
            <th>{{$data->message}}</th>
            <th>{{$data->created_at}}</th>
            <th>unread</th>
            <th><i class="fa-solid fa-pen text-primary mr-2"></i> | <i class="fa-solid fa-trash-can text-danger ml-2"></i></th>
        </tr>

        @endforeach
        @endif

     
    </tbody>
</table>
</div>





        </div>
    
      
        











@endsection