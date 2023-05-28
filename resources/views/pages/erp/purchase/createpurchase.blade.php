@extends('layout.erp.app')
@section('style')
@endsection
@section('page')
    <div style="position: relative" class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                Create Purchase
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="btn btn-info" href="{{ url('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a class="btn btn-success"
                            href="{{ url('purchases') }}">Manage Purchase</a></li>
                </ol>
            </nav>
        </div>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <form action="/purchases" method="POST">
                @method('POST')
                @csrf
                <!-- Main content -->
                <div class="invoice p-3 mb-3">
                    <!-- title row -->
                    <div class="d-flex flex-row text-light text-center bg-success">

                        <div class="col-6">
                            <h1>App-Grocery</h1>
                            <h4>tahuranasrin9@gmail.com</h4>
                            <address>Panthapath,Dhaka</address>
                        </div>
                        <div class="col-6">
                            <h4>
                                Phone: 01684159493
                            </h4>
                            <h4><small>Date: <?php echo date('d M Y'); ?></small></h4>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- info row -->
                    <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">
                            <h5> Supplier:

                                <select name="supplier_id" id="supplierId">
                                    @foreach ($suppliers as $supplier)
                                        <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                                </select>
                            </h5>
                            {{-- <h6 id="supplierAddress" value="{{ $supplier->id }}">Address: {{ $supplier->address }}</h6>
                            <h6 id="supplierMobile" value="{{ $supplier->id }}">Mobile: {{ $supplier->mobile }}</h6>
                            <h6 id="supplierEmail" value="{{ $supplier->id }}">Email: {{ $supplier->email }}</h6> --}}
                            @endforeach

                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                            Shipping Address: <br>
                            <textarea name="" id="shippingAddress" cols="30" rows="5"></textarea>

                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                            <table>
                                <tr>
                                    <td>
                                        Purchase Date:
                                    </td>
                                    <td>
                                        <input type="text" id="purchaseDate" value="<?php echo date('d-M-Y'); ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Delivary Date:
                                    </td>
                                    <td>
                                        <input type="text" id="delivaryDate" value="<?php echo date('d-M-Y'); ?>">
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- Table row -->

                    <div class="row" style="font-size:medium;margin-top:30px;background-color:#844FC1;">
                        <div class="col-12 table-responsive">
                          <table class="table table-striped" style="color:gray">
                            <thead>
                              <tr style="color:aliceblue">
                                <th>SN</th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Measure</th>
                                <th>Uom</th>
                                <th>Discount</th>
                                <th>Subtotal</th>
        
        
        
                                <th><input type="button" id="clearAll" value="Clear" /></th>
                              </tr>
                              <tr>
                                <th></th>
                                <th>
                                  <select id="cmbProduct" name="product_id" style="width: 100px;">
                                    @foreach($products as $product)
                                    <option value="{{$product->id}}">{{$product->name}}</option>
                                    @endforeach
                                  </select>
                                </th>
        
                                <th>
                                  <input type="text" id="txtPrice" style="width: 90px;" />
                                </th>
                                <th>
                                  <input type="text" id="txtMesure" style="width: 90px;" />
                                </th>
                                <th>
                                  <input type="text" id="txtUom" style="width: 90px;" />
                                </th>
                                <th><input type="text" id="txtDiscount" style="width: 90px;" /></th>
                                <th></th>
                                <th><input type="button" id="btnAddToCart" value=" + " /></th>
                              </tr>
                            </thead>
                            <tbody id="items">
        
                            </tbody>
                          </table>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
        
                      <div class="row" style="margin-top: 30px;font-size:medium">
                        <!-- accepted payments column -->
                        <div class="col-6">
                          <strong>Remark</strong><br>
                          <textarea id="txtRemark" style="width: 150px;height:50px"></textarea>
                        </div>
                        <!-- /.col -->
                        <div class="col-6">
        
        
                          <div class="table-responsive">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <th style="width:50%">Subtotal:</th>
                                  <td id="subtotal">0</td>
                                </tr>
                                <tr>
                                  <th>Tax (5%)</th>
                                  <td id="tax">0</td>
                                </tr>
        
                                <tr>
                                  <th>Total:</th>
                                  <td id="net-total">0</td>
                                </tr>
                                <tr>
                                  <th>Paid Amount</th>
                                  <td><input type="text" id="Paid" style="width: 150px;" /></td>
                                </tr>
                                
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <!-- /.col -->
                      </div>
                    <!-- /.row -->

                    <div class="row">
                        <!-- accepted payments column -->
                        <div class="col-4">
                            <div>
                                <strong>Remark</strong> <br>
                                <textarea name="" id="remark" cols="30" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="col-4">
                            <p class="lead">Payment Methods:</p>
                            <img src="{{ asset('assets/visa.png') }}" alt="Visa">
                            <img src="{{ asset('assets/mastercard.png') }}" alt="Mastercard">
                            <img src="{{ asset('assets/american-express.png') }}" alt="American Express">
                            <img src="{{ asset('assets/paypal2.png') }}" alt="Paypal">

                            <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">

                            </p>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">

                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <th style="width:50%">Subtotal:</th>
                                        <td>
                                            <input type="text" id="subtotal" name="">
                                        </td>

                                    </tr>
                                    <tr>
                                        <th>vat (9.3%)</th>
                                        <td>
                                            <input type="text" id="vat" name="">
                                        </td>
                                    </tr>


                                    <tr>
                                        <th>Paid Amount:</th>
                                        <td>
                                            <input type="text" id="paidAmount" name="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Total:</th>
                                        <td>
                                            <input type="text" id="total" name="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Due Amount:</th>
                                        <td>
                                            <input type="text" id="due" name="">
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- this row will not appear when printing -->
                    <div class="row no-print">
                        <div class="col-12">
                            <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i
                                    class="fas fa-print"></i> Print</a>
                            <button type="button" id="btnsubmit" class="btn btn-success float-right"><i
                                    class="far fa-credit-card"></i>
                                Submit
                                Payment
                            </button>
                            <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                                <i class="fas fa-download"></i> Generate PDF
                            </button>
                        </div>
                    </div>
            </form>
        </div>
        <!-- /.invoice -->

    </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    </div>
    <script>
        $(function() {
            printcart();
            $('#btnsubmit').on('click', function(e) {
                e.preventDefault();
                let supplier_id = $('#supplierId').val();
                var token = $("input[name='_token']").val();

                var method = $("input[name='_method']").val();

                let purchase_date = $('#purchaseDate').val();
                let delivery_date = $('#deliveryDate').val();
                let paid_amount = $('#paidAmount').val();
                let purchase_total = $('#total').val();
                // let due= $('#due').val();
                let shipping_address = $('#shippingAddress').val();
                let remark = $('#remark').val();
                let discount = $('#discount').val();
                let vat = $('#vat').val();
                let product = JSON.parse(localStorage.getItem('cart'));

                $.ajax({
                    url: "{{ route('purchases.store') }}",
                    type: "POST",
                    data: {
                        _token: token,
                        _method: method,
                        "supplierId": supplier_id,
                        "purchaseDate": purchase_date,
                        "deliveryDate": delivery_date,
                        "paidAmount": paid_amount,
                        "total": purchase_total,
                        // "due":due,
                        "shippingAddress": shipping_address,
                        "remark": remark,
                        "discount": discount,
                        "vat": vat,
                        "products": products


                    },
                    success: function(res) {
                        console.log(res);
                        clearCart();
                        $('#items').html('');
                    }
                });

            })
            $("#supplierId").on("change", function() {
                $.ajax({
                    url: "<?php echo url('getsuppliars'); ?>",
                    type: 'GET',
                    data: {
                        "id": $(this).val()
                    },
                    success: function(res) {
                        console.log(res)
                        let suppliar = JSON.parse(res)
                        $("#supplierMobile").html("<b>Mobile:</b>" + suppliar
                            .mobile)
                    }
                });
            });
            $("#productId").on("change", function() {
                $.ajax({
                    url: "<?php echo url('getproducts'); ?>",
                    type: 'GET',
                    data: {
                        "id": $(this).val()
                    },
                    success: function(res) {
                        console.log(res)
                        let product = JSON.parse(res)

                        $("#uomId").val(product.uom_id);
                    }
                });

            })
            $("#btnaddtocart").on("click", function() {
                AddtoCart();
            });

            function AddtoCart() {
                let product_id = $("#productId").val();
                let name = $("#productId option:selected").text();
                let price = $("#price").val();
                let qty = $("#qty").val();
                let uom_id = $("#uomId").val();
                let discount = $("#discount").val();
                let total_discount = discount * qty;
                let subtotal = price * qty - total_discount;
                let item = {
                    "name": name,
                    "price": price,
                    "qty": parseFloat(qty),
                    "uomId": uom_id,
                    "discount": discount,
                    'total': total_discount,
                    "subtotal": subtotal
                }

                save(item)
                printCart();
            }
            $("body").on("click", ".delete", function() {
                let id = $(this).data("id");
                delItem(id);
                printCart();
            })

            $("#clear").on("click", function() {
                clearCart();
                printCart();
            })


            function printCart() {

                let cart = getCart();
                let serialNumber = 1;
                let $bill = "";
                let subtotal = 0;
                $.each(cart, function(i, item) {
                    //console.log(item.name);
                    subtotal += item.price * item.qty - item.discount;
                    let $html = "<tr>";
                    $html += "<td>";
                    $html += serialNumber;
                    $html += "</td>";
                    $html += "<td>";
                    $html += item.name;
                    $html += "</td>";
                    $html += "<td data-field='price'>";
                    $html += item.price;
                    $html += "</td>";
                    $html += "<td data-field='qty'>";
                    $html += item.qty;
                    $html += "</td>";
                    $html += "</td>";
                    $html += "<td data-field='uomId'>";
                    $html += item.uom_id;
                    $html += "</td>";
                    $html += "<td data-field='discount'>";
                    $html += item.total_discount;
                    $html += "</td>";
                    $html += "<td data-field='subtotal'>";
                    $html += item.subtotal;
                    $html += "</td>";
                    $html += "<td>";
                    $html += "<input type='button' class='delete' data-id='" + item.product_id +
                        "' value='-'/>";
                    $html += "</td>";
                    $html += "</tr>";
                    $bill += $html;
                    serialNumber++;
                });

                $("#items").html($bill);

                //Order Summary
                $("#subtotal").html(subtotal);
                let vat = (subtotal * 0.05).toFixed(2);
                $("#vat").html(vat);
                $("#total").html(parseFloat(subtotal) + parseFloat(vat));
            }



        });
    </script>
@endsection
