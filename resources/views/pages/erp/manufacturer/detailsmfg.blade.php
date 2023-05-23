@extends('layout.erp.app')
@section('title', 'Details Manufacturer')

@section('page')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                Msanufacturer Details
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('manufacturers') }}">Manage User</a>
                    </li>
                </ol>
            </nav>
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data table</h4>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table id="order-listing" class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Phone</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> {{ $manufacturer->id }} </td>
                                        <td> {{ $manufacturer->name }} </td>
                                        <td>{{ $manufacturer->email }}</td>
                                        <td>{{ $manufacturer->address }}</td>
                                        <td>{{ $manufacturer->phone }}</td>
                                        <td>{{ $manufacturer->create_at }}</td>
                                        <td>{{ $manufacturer->updated_at }}</td>
                                        <td>
                                            <form action="{{ route('manufacturers.destroy', $manufacturer->id) }}"
                                                method="POST">

                                                <div>
                                                    <a class="btn btn-success btn-rounded btn-fw"
                                                        href="{{ route('manufacturers.edit', $manufacturer->id) }}">Edit</a>
                                                    <a class="btn btn-warning btn-rounded btn-fw"
                                                        href="{{ url('manufacturers.show', $manufacturer->id) }}">Details</a>
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type='submit' name='delete'
                                                        class="btn btn-danger btn-rounded btn-fw">Delete

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
