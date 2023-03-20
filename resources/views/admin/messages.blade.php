@extends('adminlayout.main')

@section('admin-dashboard')



     


        <div class=" container-fluid">
<div class="container">



<div class="row">
<h2>Communication Dashboard</h2>
</div>
<hr/>


            <div class="row">
                <div class="col-md-4">
                    <div class="messagebox">
                        <div class="row">
                            <div class="col d-flex flex-column justify-content-center align-items-center">
                                <a href="{{Route('onsitemessage')}}">
                                <h3>Onsite</h3>
                                <p>Messages</p>
                                </a>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-comments"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                <div class="messagebox">
                        <div class="row">
                            <div class="col d-flex flex-column justify-content-center align-items-center">
                                <a href="{{Route('adminsms')}}">
                                <h3>SMS</h3>
                                <p>clients/Writers</p>
</a>
                            </div>
                            <div class="col  d-flex justify-content-center align-items-center">
                            <i class="fa-regular fa-comments"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                <div class="messagebox">
                        <div class="row">
                            <div class="col d-flex flex-column justify-content-center align-items-center">
                                <a href="{{Route('adminemail')}}">
                                <h3>EMAIL</h3>
                                <p>Clients / Writers</p>
                                </a>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                            <i class="fa-solid fa-envelope-open"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



</div>







@endsection