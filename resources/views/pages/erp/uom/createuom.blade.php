@extends('layout.erp.app')

@section('title','Create Uom')

@section('page')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            Create Units Of Measure
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="btn btn-info" href="{{ url('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a class="btn btn-success" href="{{ url('uoms') }}">Manage Uom</a></li>
            </ol>
        </nav>
    </div>

    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">                
                <form action="{{ route('uoms.store') }}" method="POST" enctype="multipart/form-data"
                    class="forms-sample">
                    @csrf
                    

                    <div class="form-group">
                        <label for="exampleInputPassword4">Name</label>
                        <input type="name" name="name" class="form-control" id="exampleInputPassword4"
                            placeholder="Type Your Name">
                    </div>
                   
                   
                 


                    <button type="submit" name="btnCreate" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
    
