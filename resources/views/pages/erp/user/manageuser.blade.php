@extends('layout.erp.app')
@section('title', 'Manage User')

@section('page')

    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                Manage User
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="btn btn-info" href="{{ url('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a class="btn btn-success" href="{{ url('users/create') }}">Create User</a></li>
                </ol>
            </nav>
        </div>
        <div class="col-lg-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>User Name</th>
                                    <th>Full Name</th>
                                    <th>Email </th>
                                    <th>Mobile</th>
                                    <th>Photo</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr class="table-info">
                                        <td> {{ $user->id }} </td>
                                        <td> {{ $user->username }} </td>
                                        <td>{{ $user->full_name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->mobile }}</td>
                                        <td><img src="img/{{ $user->photo }}" alt=""></td>
                                        <td>
                                            <form action="{{ route('users.destroy', $user->id) }}" method="POST">

                                                <div>
                                                    <a class="btn btn-success btn-rounded btn-fw"
                                                        href="{{ route('users.edit', $user->id) }}">Edit</a>
                                                    <a class="btn btn-warning btn-rounded btn-fw"
                                                        href="{{ route('users.show', $user->id) }}">Details</a>
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type='submit' name='delete'
                                                        class="btn btn-danger btn-rounded btn-fw">Delete

                                                    </button>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach



                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
