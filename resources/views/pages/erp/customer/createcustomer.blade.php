<?php
/*
 * ProBot Version: 3.0
 * Laravel Version: 10x
 * Description: This source file "resources/views/customer/_create.blade.php" was generated by ProBot AI.
 * Date: 5/4/2023 7:52:34 PM
 * Contact: towhid1@outlook.com
 */
?>
@extends('layout.erp.app')
@section('title', 'Create Customer')
@section('style')


@endsection
@section('page')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                Create Customer
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="btn btn-info" href="{{ url('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a class="btn btn-success"
                            href="{{ url('customers') }}">Manage Customer</a></li>
                </ol>
            </nav>
        </div>

        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Create Customer</h4>
                    <form action="{{ route('customers.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="mobile" class="col-sm-2 col-form-label">Mobile</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="mobile" id="mobile"
                                    placeholder="Mobile">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="email" id="email"
                                    placeholder="Email">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')


@endsection
