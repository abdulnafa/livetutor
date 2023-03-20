@extends('adminlayout.main')

@section('admin-dashboard')


        <div class="container-fluid">
        

        <div class="container">



        <div class="row">

<div class="col-md-4 text-center">
    <h4> Pending Invoices (0)</h4>
</div>
<div class="col-md-4  text-center">
    <h4> Paid Invoices (0)</h4>
</div>
<div class="col-md-4  text-center">
    <h4>Payment Dates</h4>
</div>
</div>


<hr/>
<br/>
<br/>


            <div class="row">

       

<table class="table">
    <thead class="thead-dark">
        <tr>
            <th>Order</th>
            <th>Writer</th>
            <th>Client paid</th>
            <th>Amount</th>
            <th>Order completed</th>
            <th>Payment Date</th>
          
        </tr>
    </thead>
    <tbody class="dark-bordered">

      

     
    </tbody>
</table>
</div>
<hr/>
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-3">
    <h6>Total Invoices: 0</h6>
</div>
<div class="col-md-3">
    <h6>Total Amount: USD N/A</h6>
</div>
<div class="col-md-3">
    <h6>Total Writer: KES 0</h6>
</div>
</div>



</div>




        </div>
    
      

@endsection