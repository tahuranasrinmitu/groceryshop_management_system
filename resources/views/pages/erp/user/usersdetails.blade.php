@extends('layout.erp.app')
@section('title','User Details')

@section('page')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            Users Details
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="btn btn-info" href="{{url('dashboard')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a class="btn btn-success" href="{{url('users')}}">Manage User</a></li>
            </ol>
        </nav>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                                <tr>
                                <th>ID</th>
                                <th>User Name</th>
                                <th>Password</th>
                                <th>Full Name</th>
                                <th>Email </th>
                                <th>Photo</th>
                                <th>Verify Code</th>
                                <th>Mobile</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> {{ $user->id }} </td>
                                    <td> {{ $user->username }} </td>
                                    <td>{{$user->password}}</td>
                                    <td>{{ $user->full_name }}</td>
                                    <td>{{ $user->email }}</td>
                                    

                                    <td><img src="../img/{{ $user->photo }}" alt=""></td>

                                    <td>{{$user->verify_code}}</td>
                                    <td>{{ $user->mobile }}</td>
                                    <td>{{$user->create_at}}</td>
                                    <td>{{$user->updated_at}}</td>
                                    <td>
                                        <form action="{{ route('users.destroy', $user->id) }}" method="POST">

                                            <div>
                                                <a class="btn btn-success btn-rounded btn-fw"
                                                    href="{{ route('users.edit', $user->id) }}">Edit</a>
                                                <a class="btn btn-warning btn-rounded btn-fw"
                                                    href="{{ url('users.show', $user->id) }}" >Details</a>
                                                @method('DELETE')
                                                @csrf
                                                <button type='submit' name='delete' class="btn btn-danger btn-rounded btn-fw">Delete

                                                </button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection

    
