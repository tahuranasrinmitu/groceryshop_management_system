<?php
/*
 * ProBot Version: 3.0
 * Laravel Version: 10x
 * Description: This source file "resources/views/customer/_show.blade.php" was generated by ProBot AI.
 * Date: 5/4/2023 7:52:34 PM
 * Contact: towhid1@outlook.com
 */
?>
@extends('layout.erp.app')
@section('title', 'Show Customer')
@section('style')


@endsection
@section('page')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                Customer Details
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="btn btn-info" href="{{ url('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a class="btn btn-success"
                            href="{{ url('customers') }}">Manage Customer</a></li>
                </ol>
            </nav>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class='table table-striped text-nowrap'>
                                <tbody>
                                    <tr>
                                        <th>Id</th>
                                        <td>{{ $customer->id }}</td>
                                    </tr>
                                    <tr>
                                        <th>Name</th>
                                        <td>{{ $customer->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Mobile</th>
                                        <td>{{ $customer->mobile }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{ $customer->email }}</td>
                                    </tr>
                                    <tr>
                                        <th>Created At</th>
                                        <td>{{ $customer->created_at }}</td>
                                    </tr>
                                    <tr>
                                        <th>Updated At</th>
                                        <td>{{ $customer->updated_at }}</td>
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
@section('script')


@endsection
