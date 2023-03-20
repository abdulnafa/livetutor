@extends('adminlayout.main')

@section('admin-dashboard')



     


            <!-- ------  All Orderss-----------------------------------------------------  -->
            <div class="dashboarddiv container-fluid allordersdiv active">
<h1 class="pl-5">All Orders</h1>


                <div class="container">

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Type Of Paper</th>
                                <th>Pages</th>
                                <th>Status</th>
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
                                <td>{{$data->status}}</td>
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











@endsection