@extends('layout.erp.app')

@section('title', 'Create Sale')

@section('page')
    <form action="/sales" method="POST">
        @csrf
        @method('POST')
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                  Create Sale
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="btn btn-info" href="{{ url('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a class="btn btn-success"
                                href="{{ url('sales') }}">Manage Sales</a></li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card px-2">
                        <div class="card-body">
                          
                            <div class="container-fluid d-flex justify-content-between">
                                <div class="col-lg-3 pl-0">
                                    <p class="mt-5 mb-2"><b>Tahura Nasrin</b></p>
                                    <p>104,<br>Minare SK,<br>Canada, K1A 0G9.</p>
                                </div>
                                <div class="col-lg-3 pr-0">
                                    <p class="mt-5 mb-2"><b> To</b></p>
                                    <p class=""><b> Customer</b></p>
                                    <select name="" id="" >
                                      @foreach ($customers as $customer)
                                          <option value="{{$customer->id}}">{{$customer->name}}</option>
                                      @endforeach
                                    </select>
                                    <div id="customerMobile">
                                      
                                    </div>
                                </div>
                                <div class="col-lg-3 pr-0">
                                  <p ><b>Sales Date :</b><input type="text" value="<?php echo date('d-m-Y')?>"></p>
                                  <p><b>Due Date :</b><input type="text" value="<?php echo date('d-m-Y')?>"></p>
                              </div>
                            </div>
                           
                            <div class="container-fluid mt-5 d-flex justify-content-center w-100">
                                <div class="table-responsive w-100">
                                    <table class="table">
                                        <thead>
                                            <tr class="bg-dark text-white">
                                                <th>Id</th>
                                                <th>Product</th>
                                                <th>Price</th>

                                                <th class="text-right">Quantity</th>
                                                <th class="text-right">UoM</th>
                                                <th class="text-right">Discount</th>
                                                <th class="text-right">SubTotal</th>
                                                <th>
                                                    <input type="button" id="clear" value="Clear">
                                                </th>
                                            </tr>
                                            <tr class="text-right">
                                                <td class="text-left">

                                                </td>
                                                <td class="text-left">
                                                    <select name="" id="">
                                                        @foreach ($products as $product)
                                                            <option value="{{ $product->id }}">{{ $product->name }}

                                                            </option>
                                                        @endforeach

                                                    </select>
                                                </td>
                                                <td><input type="text"></td>
                                                <td><input type="text"></td>
                                                <td><input type="text"></td>
                                                <td><input type="text"></td>
                                                <td><input type="text"></td>
                                                <td><input type="button" id="btnAddtoCart" value="+"></td>
                                            </tr>

                                        </thead>
                                        <tbody id="items">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="container-fluid mt-5 w-100">
                             
                              <p class="text-right mb-2">Sub - Total: $12,348</p>
                              <p class="text-right">vat (10%) : $138</p>
                              <h4 class="text-right mb-5">Total : $13,986</h4>
                               <p class="text-right">Paid Amount : <input type="text" name="" id=""></p>
                            </div>
                            <div class="container-fluid w-100">
                                <a href="#" class="btn btn-primary float-right mt-4 ml-2"><i
                                        class="fa fa-print mr-1"></i>Print</a>
                                <a href="#" class="btn btn-success float-right mt-4"><i
                                        class="fa fa-share mr-1"></i>Send Invoice</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </form>
@endsection
