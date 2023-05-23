@extends('layout.erp.app')
@section('title', 'Manage Unit Of Measure')

@section('page')

    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                Manage UOM
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="btn btn-info" href="{{ url('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a class="btn btn-success" href="{{ url('uoms/create') }}">Create UOM</a></li>
                </ol>
            </nav>
        </div>
        <div class="col-lg-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Manage UOM</h4>
                    <p class="card-description">
                    </p>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th> Name</th>
                                    <th> Action</th>
                                    

                                  
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($uoms as $uom)
                                    <tr class="table-info">
                                        <td> {{ $uom->id }} </td>
                                        <td> {{ $uom->name }} </td>
                                       
                                        <td>
                                            <form action="{{ route('uoms.destroy', $uom->id) }}" method="POST">

                                                <div>
                                                    <a class="btn btn-success btn-rounded btn-fw"
                                                        href="{{ route('uoms.edit', $uom->id) }}">Edit</a>
                                                    <a class="btn btn-warning btn-rounded btn-fw"
                                                        href="{{ route('uoms.show', $uom->id) }}">Details</a>
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
