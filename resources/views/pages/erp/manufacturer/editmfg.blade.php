@extends('layout.erp.app')
@section('title', 'Edit Manufacturer')

@section('page')

<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">

  Edit Manufecturer        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{url('manufacturers')}}">Manage Manufacturers</a></li>
            </ol>
        </nav>
    </div>

<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit Manufecturer</h4>
            <p class="card-description">
                Edit Manufecturer
            </p>
            <form action="{{url('/manufacturers')}}/{{($manufacturer->id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group" >
                    <label for="exampleInputName1">Name</label>
                    <input type="text" value="{{$manufacturer->name}}" name="name" class="form-control" id="exampleInputName1" placeholder="Type Your Name">
                </div>
                
                <div class="form-group">
                    <label for="exampleInputPassword4">Email</label>
                    <input type="email" value="{{$manufacturer->email}}" name="email" class="form-control" id="exampleInputPassword4" placeholder="Type Your Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail3">Address</label>
                    <input type="text" name="address" value="{{$manufacturer->address}}" class="form-control" id="exampleInputEmail3" placeholder="Type Your Address">
                </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail3">Phone</label>
                    <input type="text" value="{{$manufacturer->phone}}" name="phone"  class="form-control" id="exampleInputEmail3" placeholder="Type Your Phone">
                </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail3">Create At</label>
                    <input type="text" value="{{$manufacturer->create_at}}" name="create at"  class="form-control" id="exampleInputEmail3" placeholder="CreateIng Time">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail3">Updated At</label>
                    <input type="text" value="{{$manufacturer->updated_at}}" name="updated at"  class="form-control" id="exampleInputEmail3" placeholder="Updating time">
                </div>
                
                
                <button type="submit" name="btnCreate" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
</div>
@endsection