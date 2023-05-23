@extends('layout.erp.app')
@section('title', 'Create user')

@section('page')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
               Create Users
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="btn btn-info" href="{{ url('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a class="btn btn-success" href="{{ url('users') }}">Manage User</a></li>
                </ol>
            </nav>
        </div>

        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Create User</h4>
                   
                    <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data"
                        class="forms-sample">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">UserName</label>
                            <input type="text" name="username" class="form-control" id="exampleInputName1"
                                placeholder="Type Your UserName">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword4">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword4"
                                placeholder="Type Your Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail3"
                                placeholder="Type Your Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Full Name</label>
                            <input type="text" name="full_name" class="form-control" id="exampleInputEmail3"
                                placeholder="Type Your Full name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Photo</label>
                            <input type="file" name="photo" class="form-control" id="exampleInputEmail3"
                                placeholder="Upload Your Photo">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Verify Code</label>
                            <input type="text" name="verify_code" class="form-control" id="exampleInputEmail3"
                                placeholder="Verify Code">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Mobile</label>
                            <input type="text" name="mobile" class="form-control" id="exampleInputEmail3"
                                placeholder="Type Your Phone Number">
                        </div>



                        <button type="submit" name="btnCreate" class="btn btn-primary mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
