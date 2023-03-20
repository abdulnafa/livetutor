@extends('layouts.main')
@section('title', 'Signup')
@section('my-content')


<table class="table table-bordered">
    <thead>
         <tr>
            <th> id </th>
            <th>  pending</th>
            <th> success </th>
            <th>hmac </th>
            <th>order </th>
         </tr>
    </thead>    <thead>
         <tr>
            <td>{{ $id }}</td>
            <td>{{  $pending}}</td>
            <td>{{ $success }}</td>
            <td>{{ $hmac }}</td>
            <td>{{ $order }}</td>
         </tr>
    </thead>
   
</table>


@endsection