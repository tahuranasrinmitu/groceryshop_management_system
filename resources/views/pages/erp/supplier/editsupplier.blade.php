<?php
/*
 * ProBot Version: 3.0
 * Laravel Version: 10x
 * Description: This source file "resources/views/supplier/_edit.blade.php" was generated by ProBot AI.
 * Date: 5/4/2023 6:16:06 PM
 * Contact: towhid1@outlook.com
 */
?>
@extends('layout.erp.app')
@section('title', 'Edit Supplier')
@section('style')


@endsection
@section('page')

    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                Edit Supplier
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="btn btn-info" href="{{ url('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a class="btn btn-success"
                            href="{{ url('suppliers') }}">Manage supplier</a></li>
                </ol>
            </nav>
        </div>

        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form action="{{ url('/suppliers') }}/{{ $supplier->id }}" method="post" enctype="multipart/form-data">


                        
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" value="{{ $supplier->name }}"
                                        id="name" placeholder="Name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="mobile" class="col-sm-2 col-form-label">Mobile</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="mobile" value="{{ $supplier->mobile }}"
                                        id="mobile" placeholder="Mobile">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="email" value="{{ $supplier->email }}"
                                        id="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="address" class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="address" value="{{ $supplier->address }}"
                                        id="address" placeholder="Address">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Save Change</button>
                        </form>
                </div>
            </div>
        </div>
    @endsection
    @section('script')


    @endsection
