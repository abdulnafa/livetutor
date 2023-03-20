@extends('adminlayout.main')


@section('admin-dashboard')


            <!-- ------  Payment Completed Orders-----------------------------------------------------  -->
            <div class="dashboarddiv paymentcompletedordersdiv">

                <div class="container">
<h1 class="py-4">Payment Completed Orders</h1>
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




@endsection