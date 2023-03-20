@extends('adminlayout.main')

@section('admin-dashboard')



     


        <div class="container-fluid">
           <!-- page wrapper  -->


<form action="{{Route('discipline')}}" method="post">
    @csrf
           <div class="row py-2">
                    <div class="col-2">
                        <label>Discipline</label>
                    </div>
                    <div class="col-6">
                        <input type="text" name="name" placeholder="Discipline" class="form-control" required/>
                        <button class="btn btn-primary my-3">Save</button>
                    </div>
                </div>
</form>







           <!-- Page Wrapper End  -->

        </div>











@endsection