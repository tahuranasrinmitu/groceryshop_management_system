@extends('layout.erp.app')
@section('title', 'Create user')

@section('page')

<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            Edit User
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="btn btn-info" href="{{url('dashboard')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a class="btn btn-success" href="{{url('users')}}">Manage User</a></li>
            </ol>
        </nav>
    </div>

<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit User</h4>
        
            <form action="{{url('/users')}}/{{($user->id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group" >
                    <label for="exampleInputName1">UserName</label>
                    <input type="text" value="{{$user->username}}" name="username" class="form-control" id="exampleInputName1" placeholder="Type Your UserName">
                </div>
                
                <div class="form-group">
                    <label for="exampleInputPassword4">Password</label>
                    <input type="password" value="{{$user->password}}" name="password" class="form-control" id="exampleInputPassword4" placeholder="Type Your Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail3">Email</label>
                    <input type="email" name="email" value="{{$user->email}}" class="form-control" id="exampleInputEmail3" placeholder="Type Your Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail3">Full Name</label>
                    <input type="text" value="{{$user->full_name}}" name="full_name" class="form-control" id="exampleInputEmail3" placeholder="Type Your Full name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail3">Photo</label>
                    <input type="file" value="{{$user->photo}}" name="photo" class="form-control" id="exampleInputEmail3" placeholder="Upload Your Photo">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail3">Verify Code</label>
                    <input type="text" value="{{$user->verify_code}}" name="verify_code" class="form-control" id="exampleInputEmail3" placeholder="Verify Code">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail3">Mobile</label>
                    <input type="text" value="{{$user->mobile}}" name="mobile"  class="form-control" id="exampleInputEmail3" placeholder="Type Your Phone Number">
                </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail3">Create At</label>
                    <input type="text" value="{{$user->create_at}}" name="create at"  class="form-control" id="exampleInputEmail3" placeholder="CreateIng Time">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail3">Updated At</label>
                    <input type="text" value="{{$user->updated_at}}" name="updated at"  class="form-control" id="exampleInputEmail3" placeholder="Updating time">
                </div>
                
                
                <button type="submit" name="btnCreate" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
</div>
@endsection