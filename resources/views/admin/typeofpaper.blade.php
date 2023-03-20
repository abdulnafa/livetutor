@extends('adminlayout.main')

@section('admin-dashboard')



     


        <div class="container-fluid">
           <!-- page wrapper  -->


<form action="{{Route('typeofpaper')}}" method="post">
    @csrf
           <div class="row py-2">
                    <div class="col-2">
                        <label>Type Of Paper</label>
                    </div>
                    <div class="col-6">
                        <input type="text" name="name" placeholder="Type Of Paper" class="form-control"/>
                        <button class="btn btn-primary my-3">Save</button>
                    </div>
                </div>
</form>







           <!-- Page Wrapper End  -->

        </div>











@endsection