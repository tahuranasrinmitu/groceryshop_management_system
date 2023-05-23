@extends('layout.erp.app')
@section('title', 'Manage Manufacturer')

@section('page')

    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                Manage manufacturer
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('manufacturers/create') }}">Create Manufacturer</a></li>
                </ol>
            </nav>
        </div>
        <div class="col-lg-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Manage Manufacturer</h4>
                    <p class="card-description">
                    </p>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th> Name</th>
                                    <th>Email </th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($manufacturers as $manufacturer)
                                    <tr class="table-info">
                                        <td> {{ $manufacturer->id }} </td>
                                        <td> {{ $manufacturer->name }} </td>
                                        <td>{{ $manufacturer->email }}</td>
                                        <td>{{ $manufacturer->address }}</td>
                                        <td> {{ $manufacturer->phone }} </td>
                                        <td>
                                            <form action="{{ route('manufacturers.destroy', $manufacturer->id) }}" method="POST">

                                                <div>
                                                    <a class="btn btn-success btn-rounded btn-fw"
                                                        href="{{ route('manufacturers.edit', $manufacturer->id) }}">Edit</a>
                                                    <a class="btn btn-warning btn-rounded btn-fw"
                                                        href="{{ route('manufacturers.show', $manufacturer->id) }}">Details</a>
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
