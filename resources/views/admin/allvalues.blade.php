@extends('adminlayout.main')

@section('admin-dashboard')






<div class="container-fluid">

    <!-- Type Of Paper  -->

    <div class="row">



        <h1 class="py-2">Type Of Paper</h1>
        <div class="d-flex justify-content-end">
            <a href="{{Route('opentypeofpaperform')}}" class="btn btn-primary ms-auto">Add New</a>
        </div>

        <div class="row py-3">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Delete</th>

                    </tr>
                </thead>
                <tbody>

                    @if($typeofpaper)
                    @foreach($typeofpaper as $data)
                    <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->name}}</td>
                        <td><a href="{{Route('deletetypeofpaper',['id'=>$data->id])}}" class="btn btn-danger">Delete</a>
                        </td>


                    </tr>

                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>





    <!-- Discipline -->

    <div class="row">



        <h1 class="py-2">Discipline</h1>
        <div class="d-flex justify-content-end">
            <a href="{{Route('opendisciplineform')}}" class="btn btn-primary ms-auto">Add New</a>
        </div>

        <div class="row py-3">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Delete</th>

                    </tr>
                </thead>
                <tbody>

                    @if($discipline)
                    @foreach($discipline as $data)
                    <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->name}}</td>
                        <td><a href="{{Route('deletediscipline',['id'=>$data->id])}}" class="btn btn-danger">Delete</a>
                        </td>


                    </tr>

                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>




<form action="{{Route('allvalues')}}" method="post">
@csrf
    <!-- Page wrapper  -->
    <h1>All Values</h1>

    <div class="container-fluid px-4">
        <h1>Academic Level</h1>
        <div class="row py-2">
            <div class="col-2">
                <label>First Academic</label>
            </div>
            <div class="col-6">
                <input type="text" name="academic1" placeholder="Academic1" class="form-control" @if($values)  value="{{$values->academic1}}"  @endif required />
            </div>
        </div>


        <div class="row py-2">
            <div class="col-2">
                <label>Academic 2</label>
            </div>
            <div class="col-6">
                <input type="text" name="academic2" placeholder="Academic 2" class="form-control" @if($values)  value="{{$values->academic2}}"  @endif required />
            </div>
        </div>



        <div class="row py-2">
            <div class="col-2">
                <label>Academic 3</label>
            </div>
            <div class="col-6">
                <input type="text" name="academic3" @if($values)  value="{{$values->academic3}}"  @endif placeholder="Academic 3" class="form-control" required />
            </div>
        </div>




        <div class="row py-2">
            <div class="col-2">
                <label>Academic 4</label>
            </div>
            <div class="col-6">
                <input type="text" name="academic4" @if($values)  value="{{$values->academic4}}"  @endif placeholder="Academic 4" class="form-control" required />
            </div>
        </div>





        <!-- Paper Format  -->


        <div class="row">
            <h1>Paper Format</h1>



            <div class="row py-2">
                <div class="col-2">
                    <label>First Paper Format</label>
                </div>
                <div class="col-8">
                    <input type="text" name="paperformat1" @if($values)  value="{{$values->paperformat1}}"  @endif placeholder="First Paper Format" class="form-control"
                        required />
                </div>
            </div>


            <div class="row py-2">
                <div class="col-2">
                    <label>Second Paper Format</label>
                </div>
                <div class="col-8">
                    <input type="text" name="paperformat2"  @if($values)  value="{{$values->paperformat2}}"  @endif  placeholder="Second Paper Format" class="form-control"
                        required />
                </div>
            </div>


            <div class="row py-2">
                <div class="col-2">
                    <label>Third Paper Format</label>
                </div>
                <div class="col-8">
                    <input type="text" name="paperformat3"  @if($values)  value="{{$values->paperformat3}}"  @endif  placeholder="Third Paper Format" class="form-control"
                        required />
                </div>
            </div>


            <div class="row py-2">
                <div class="col-2">
                    <label>Fourth Paper Format</label>
                </div>
                <div class="col-8">
                    <input type="text" name="paperformat4"  @if($values)  value="{{$values->paperformat4}}"  @endif  placeholder="Forth Paper Format" class="form-control"
                        required />
                </div>
            </div>



            <div class="row py-2">
                <div class="col-2">
                    <label>Fifth Paper Format</label>
                </div>
                <div class="col-8">
                    <input type="text" name="paperformat5"  @if($values)  value="{{$values->paperformat5}}"  @endif  placeholder="Fifth Paper Format" class="form-control"
                        required />
                </div>
            </div>




        </div>






        <!-- Deadline  -->


        <div class="row">
            <h1>Deadline</h1>



            <div class="row py-2">
                <div class="col-2">
                    <label>6 Hours</label>
                </div>
                <div class="col-8">
                    <input type="text" name="sixhours"  @if($values)  value="{{$values->sixhours}}"  @endif  placeholder="6 Hours" class="form-control" required />
                </div>
            </div>


            <div class="row py-2">
                <div class="col-2">
                    <label>12 Hours</label>
                </div>
                <div class="col-8">
                    <input type="text" name="twelvehours"  @if($values)  value="{{$values->twelvehours}}"  @endif  placeholder="12 Hours" class="form-control" required />
                </div>
            </div>


            <div class="row py-2">
                <div class="col-2">
                    <label>24 Hours</label>
                </div>
                <div class="col-8">
                    <input type="text" name="twentyfourhours"  @if($values)  value="{{$values->twentyfourhours}}"  @endif  placeholder="24 Hours" class="form-control" required />
                </div>
            </div>


            <div class="row py-2">
                <div class="col-2">
                    <label>48 Hours</label>
                </div>
                <div class="col-8">
                    <input type="text" name="fortyeighthours"  @if($values)  value="{{$values->fortyeighthours}}"  @endif  placeholder="48 Hours" class="form-control" required />
                </div>
            </div>



            <div class="row py-2">
                <div class="col-2">
                    <label>3 Days</label>
                </div>
                <div class="col-8">
                    <input type="text" name="threedays"  @if($values)  value="{{$values->threedays}}"  @endif  placeholder="3 Days" class="form-control" required />
                </div>
            </div>


            <div class="row py-2">
                <div class="col-2">
                    <label>5 Days</label>
                </div>
                <div class="col-8">
                    <input type="text" name="fivedays" placeholder="5 Days"  @if($values)  value="{{$values->fivedays}}"  @endif  class="form-control" required />
                </div>
            </div>




            <div class="row py-2">
                <div class="col-2">
                    <label>7 Days</label>
                </div>
                <div class="col-8">
                    <input type="text" name="sevendays"  @if($values)  value="{{$values->sevendays}}"  @endif  placeholder="7 Days" class="form-control" required />
                </div>
            </div>



        </div>




        <!-- Writer Category  -->


        <div class="row py-4">
            <h1>Writer Category</h1>



            <div class="row py-2">
                <div class="col-2">
                    <label>Standard</label>
                </div>
                <div class="col-8">
                    <input type="text" name="standard"  @if($values)  value="{{$values->standard}}"  @endif  placeholder="Standard" class="form-control" required />
                </div>
            </div>


            <div class="row py-2">
                <div class="col-2">
                    <label>Premimum</label>
                </div>
                <div class="col-8">
                    <input type="text" name="premimum"  @if($values)  value="{{$values->premimum}}"  @endif  placeholder="premimum" class="form-control" required />
                </div>
            </div>


            <div class="row py-2">
                <div class="col-2">
                    <label>Platinum</label>
                </div>
                <div class="col-8">
                    <input type="text" name="platinum"  @if($values)  value="{{$values->platinum}}"  @endif  placeholder="Platinum" class="form-control" required />
                </div>
            </div>


<div class="row">
    <button class="btn btn-primary">Save</button>
</div>


</form>




        </div>



    </div>
    <!-- Page wrapper End  -->
</div>











@endsection