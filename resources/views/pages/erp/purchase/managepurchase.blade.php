<?php
/*
 * ProBot Version: 3.0
 * Laravel Version: 10x
 * Description: This source file "resources/views/purchase/_index.blade.php" was generated by ProBot AI.
 * Date: 5/6/2023 1:47:57 AM
 * Contact: towhid1@outlook.com
 */
?>
@extends('layout.erp.app')
@section('title', 'Manage Purchase')
@section('style')


@endsection
@section('page')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                Manage Purchase
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="btn btn-info" href="{{ url('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a class="btn btn-success"
                            href="{{ url('purchases/create') }}">Create Purchase</a></li>
                </ol>
            </nav>
        </div>
        <div class="col-lg-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Supplier </th>
                                   
                                    <th>Shipping Address</th>
                                    <th>Purchase Total</th>
                                    <th>Paid Amount</th>
                                    <th>Remark</th>
                                    
                                    
                                  
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($purchases as $purchase)
                                    <tr>
                                        <td>{{ $purchase->id }}</td>
                                        <td>{{ $purchase->pdt }}</td>
                                        <td>{{ $purchase->spl }}</td>
                                       
                                        <td>{{ $purchase->shipping_address }}</td>
                                        <td>{{ $purchase->purchase_total }}</td>
                                        <td>{{ $purchase->paid_amount }}</td>
                                        <td>{{ $purchase->remark }}</td>
                                       
                                       

                                        <td>
                                            <form action="{{ route('purchases.destroy', $purchase->id) }}" method="post">
                                                <a class='btn btn-primary'
                                                    href="{{ route('purchases.show', $purchase->id) }}">View</a>
                                                <a class='btn btn-success'
                                                    href="{{ route('purchases.edit', $purchase->id) }}"> Edit </a>
                                                @method('DELETE')
                                                @csrf
                                                <input type="submit" class="btn btn-danger" name="delete"
                                                    value="Delete" />
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
@section('script')


@endsection