@extends('admin.layout.app')
@section('title','Order Details')
@section('css')
@stop
@section('content')
@php($order_id = $order_details->orders[0]->id)
<div id="content" class="bg-container">
    <header class="head">
        <div class="main-bar">
            <div class="row no-gutters">
                <div class="col-6">
                    <h4 class="m-t-5">
                        <i class="fa fa-gift"></i>
                        Order Details
                    </h4>
                </div>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="col-md-12">
            <!-- Form Elements -->
            <div class="order-header">
                <span>Ordered on {{date('d M Y', strtotime($order_details->orders[0]->created_at))}}</span>&nbsp;
                <span>Order# {{$order_details->orders[0]->order_no}}</span>
            </div>
            
            <!--<div class="box box-danger">
                <div class="box-header with-border">
                    <label class="box-title">Cancel Order</label>
                </div>
                <div class="box-body refund-payment">
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-2">
                                <button id="refund_order" 
                                        data-toggle="modal"
                                        data-target="#refund_Modal"
                                        data-ordid="{{ $order_id }}"
                                        data-paidamt="{{ $order_details->orders[0]->paid_amount }}"
                                        type="button" class="btn btn-block btn-primary"
                                        style="margin:10px 0;">
                                    Refund Payment
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <label for="exampleInputPassword1">Reason for cancellation</label>
                    </div>
                    <div class="col-xs-12">
                        <?php //echo htmlspecialchars_decode(stripslashes($order_details->orders[0]->cancelOrders->cancel_reason)) ?>
                    </div>
                </div>
            </div>-->
            
            <div class="box box box-success">
                <div class="box-header with-border">
                    <label class="box-title">Tracking Details</label>
                </div>
                <div class="box-body">
                    <div class="col-xs-12">
                        @foreach($order_details->orders[0]->shippingDetails as $shippingDetail)
                        <div class="package-tracking-detls">
                            <p>Package Tracking Number: {{ $shippingDetail->pkg_tracking_no }}</p>
                            <button class="cancel_order"
                                        ord_id="{{ $order_id }}"
                                        ptrckid="{{ $shippingDetail->pkg_tracking_no }}"
                                        seller_id="{{ $shippingDetail->seller_id }}"
                                        type="button"
                                        class="btn btn-block btn-primary"
                                        style="margin:10px 0;"
                                        onclick="return confirm('Are you sure you want to cancel this order')">
                                    Cancel Shipment
                                </button>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <table id="cart" class="table table-hover table-condensed table-responsive">
                <thead>
                    <tr>
                        <th style="min-width: 250px">Item details</th>
                        <th>Quantity</th>
                        <th>Seller Name</th>
                        <th>Payment Status</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($order_details->orders[0]->orderItems as $order_detail)
                    <tr>
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-sm-2 hidden-xs"><img 
                                        src="{{ !empty($order_detail->image) 
                                            ? url('public/images/books/original/' . $order_detail->image) 
                                            : url('public/images/books/default.gif')}}"
                                        width="100" height="100" class="img-responsive"/></div>
                                <div class="col-sm-9">
                                    <h4 class="nomargin">{{ $order_detail->item_name }}</h4>
                                    <input type="hidden" name="order_id" value="{{ $order_id }}" />
                                </div>
                            </div>
                        </td>
                        <td>{{ $order_detail->quantity }}</td>
                        <td>{{ $order_detail->name }}</td>
                        <td>{{ $order_details->orders[0]->status }}</td>
                        <td data-th="Subtotal" class="text-center">${{ number_format($order_detail->amount * $order_detail->quantity,2) }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="order-detail-sec">
                <table class="table table-striped table-condensed table-responsive" id="order-detail-shipping-wrap">
                    <thead>
                        <tr>
                            <th style="min-width: 230px">Buyer Name</th>
                            <th style="min-width: 230px">Shipping address </th>
                            <th style="min-width: 230px">Payment Mode</th>
                            <th>&nbsp;</th>
                            <th class="text-right" style="min-width: 150px">Order Summary </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$order_details->first_name}} {{$order_details->last_name}}</td>
                            <td>
                                {{$order_details->apartment.','}}  {{$order_details->address.','}}
                                {{$order_details->city.','}} {{$order_details->state.','}} 
                                {{$order_details->country.','}} {{$order_details->pin_code}} </td>
                            <td>Paypal</td>
                            <td class="text-right">Item(s) Subtotal:</td>
                            <td class="text-right"> ${{number_format($order_details->orders[0]->amount,2)}}</td>
                        </tr>
                        <tr>
                            <td colspan="3"></td>
                            <td class="text-right" align="right">Total:</td>
                            <td class="text-right" align="right">${{number_format($order_details->orders[0]->amount,2)}}</td>
                        </tr>
                        <tr>
                            <td colspan="3"></td>
                            <td class="text-right" align="right" style="min-width: 300px"><strong>Paid Amount:</strong></td>
                            <td  class="text-right"align="right"><strong>${{number_format($order_details->orders[0]->paid_amount,2)}}</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
<!-- Modal -->
<div class="modal fade" id="refund_Modal" tabindex="-1" role="dialog" aria-labelledby="cat_ModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="cat_ModalLabel">Refund Payment</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>     
            </div>
            <div class="modal-body">
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" id="catForm">
                        <div class="form-group">
                            <div class="row"><div class="col-md-12">
                                <span id="refund_err" class="form-error"></span>
                            </div>
                            </div>
                            <input type="hidden" name="hd_ord_id" id="hd_ord_id">
                            <!--<input type="hidden" name="hd_sale_id" id="hd_sale_id">-->
                            <div class="row">
                                <div class="col-md-12" style="padding-bottom:20px;">
                                    <div class="row">
                                    <div class="col-md-4">
                                        <label for="inputEmail3"
                                               class="control-label">
                                            Paid Amount
                                        </label>
                                    </div>
                                    <div class="col-md-8 refund-input">
                                        <span>$</span>
                                        <input type="text"
                                               name="paid_amt"
                                               class="form-control"
                                               id="paid_amt"
                                               placeholder="Paid Amount"
                                               readonly>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                <div class="col-md-4">
                                    <label for="inputEmail3"
                                           class="control-label">
                                        Refund Amount
                                    </label>
                                </div>
                                <div class="col-sm-8 refund-input">
                                    <span>$</span>
                                    <input type="text"
                                           name="refund_amt"
                                           class="form-control"
                                           id="refund_amt"
                                           placeholder="Refund Amount"
                                           required>
                                </div>
                                </div>
                            </div>
                        </div>
                        </div>
                </form>
            </div>
            <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="submitRefund">Submit</button>
            </div>
        </div>
    </div>
</div>
@section('pagescript')
    <script>
        $(document).ready(function () {
            var base_url = "{{asset('/')}}";
            $('#refund_Modal').on('show.bs.modal', function (event) {
                $("#refund_err").html("");
                $("#refund_amt").val("");
                var button = $(event.relatedTarget) // Button that triggered the modal
                var ordId = button.data('ordid');
                var paidAmt = button.data('paidamt');
                //var saleId = button.data('saleid');
                // Extract info from data-* attributes
                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.

                var modal = $(this)
                //modal.find('.modal-body #hd_sale_id').val(saleId);
                modal.find('.modal-body #hd_ord_id').val(ordId);
                modal.find('.modal-body #paid_amt').val(paidAmt);
            });
            $("#submitRefund").click(function (e) {
                var thisForm = this;
                $("#refund_err").html("");
                var ordId = $("#hd_ord_id").val();
                //var saleId = $("#hd_sale_id").val();
                var refundAmt = parseFloat($("#refund_amt").val());
                var paidAmt = parseFloat($("#paid_amt").val());
                var formData = new FormData();
                formData.append('_token', '{{ csrf_token() }}');
                formData.append('ord_id', ordId);
                //formData.append('sale_id', saleId);
                formData.append('refund_amt', refundAmt);
                //formData.append('paidAmt', paidAmt);

                if (refundAmt == '' || isNaN(refundAmt)) {
                    $("#refund_err").html("Please enter refund amount");
                    return false;
                } else if (refundAmt > paidAmt) {
                    $("#refund_err").html("Refund Amount can not greater than Paid Amount");
                    $("#refund_amt").val("");
                    return false;
                } else {
                    $(this).text('Processing...').attr('disabled', 'disabled');
                    e.preventDefault()
                    $.ajax({
                        url: base_url + 'payment-refund',
                        data: formData,
                        type: 'POST',
                        cache: false,
                        contentType: false,
                        processData: false,
                        dataType: 'JSON',
                        success: function (data, status) {
                            if (data.message) {
                                $('#submitRefund').text('Submit').removeAttr('disabled');
                                alert(data.message);
                                return false;
                            }
                            alert(data.success);
                            $(thisForm).text('Submit').removeAttr('disabled');
                            $("#refund_amt").val("");
                            $('#refund_Modal').modal('hide');  // Your modal Id
                            location.reload();
                        },
                        error: function (result) {

                        }
                    });
                }
            });

            $('.alert .close').on('click', function (e) {
                $(this).parent().hide();
            });
            $(".cancel_order").click(function (e) {
                //var base_url = "{{asset('/')}}";
                var ordId = $(this).attr('ord_id');
                var pTrckId = $(this).attr('ptrckid');
                var sellerId = $(this).attr('seller_id');
                $.ajax({
                    url:  base_url + 'admin/order/cancel/' + ordId + '/' + sellerId + '/' + pTrckId,
                    type: 'GET',
                    success: function (data, status) {
                        alert(data.message);
                    },
                    error: function (result) {
                    }
                });
            });
        });
    </script>
@stop