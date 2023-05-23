@extends('layout.erp.app')

@section('title','Create manufacturer')

@section('page')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            Create Manufacturer
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="btn btn-info" href="{{ url('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a class="btn btn-success" href="{{ url('manufacturers') }}">Manage Manufacturer</a></li>
            </ol>
        </nav>
    </div>

    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
               
                <form action="{{ route('manufacturers.store') }}" method="POST" enctype="multipart/form-data"
                    class="forms-sample">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputName1"
                            placeholder="Type Your Name">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword4">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputPassword4"
                            placeholder="Type Your Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Address</label>
                        <input type="text" name="address" class="form-control" id="exampleInputEmail3"
                            placeholder="Type Your Address">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Phone</label>
                        <input type="text" name="phone" class="form-control" id="exampleInputEmail3"
                            placeholder="Type Your Phone">
                    </div>
                 


                    <button type="submit" name="btnCreate" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
    
