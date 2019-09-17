@extends('layouts.app')
@section('content')
<section class="dashboard-body product-wrapper">
    <div class="container-fluid">
        <div class="row">
            @include('layouts.user_sidebar')
            <div class="col-lg-9 produst-right-side">
                <div class="dash-container">
                    <h3> Sells Details </h3>
                    <section class="gallerry">
                        <!-- SCHOOL TOP PICKS section-->
                        <div class="col-md-12">
                            <!-- Form Elements -->
                            <div class="order-header">
                                <span>Ordered on {{date('d M Y', strtotime($order_details->orders[0]->created_at))}}</span>&nbsp;
                                <span>Order# {{$order_details->orders[0]->order_no}}</span>
                            </div>
                            <table id="cart" class="table table-hover table-condensed table-responsive">
                                <thead>
                                    <tr>
                                        <th style="min-width: 250px">Item details</th>
                                        <th>Quantity</th>
                                        <th>Buyer Name</th>
                                        <th>Payment Status</th>
                                        <th>Paid Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($order_details->orders[0]->orderItems as $order_detail)
                                    <tr>
                                        <td data-th="Product">
                                            <div class="row">
                                                <div class="col-sm-3 col-3 hidden-xs"><img 
                                                        src="{{ !empty($order_detail->image) 
                                                        ? url('public/images/books/original/' . $order_detail->image)
                                                        : url('public/images/books/default.gif')}}"
                                                        width="100" height="100" class="img-responsive"/>
                                                </div>
                                                <div class="col-sm-9 col-9">
                                                    <h4 class="nomargin">{{ $order_detail->item_name }}</h4>
                                                    <input type="hidden" name="order_id" value="{{ $order_detail->order_id }}" />
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ $order_detail->quantity }}</td>
										<td>{{ $order_details->orders[0]->buyer_name }}</td>
                                        <td>{{ $order_details->orders[0]->status }}</td>
                                        <td data-th="Subtotal" class="text-center">${{ $amt[] = number_format($order_detail->amount * $order_detail->quantity,2) }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="order-detail-sec">
                                <table class="table table-striped table-condensed table-responsive" id="order-detail-shipping-wrap">
                                    <thead>
                                        <tr>
                                            <th style="min-width: 230px">Shipping address </th>
                                            <th style="min-width: 230px">Payment Mode</th>
                                            <th>&nbsp;</th>
                                            <th class="text-right" style="min-width: 150px">Order Summary </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                {{$order_details->first_name}} {{$order_details->last_name}}
                                                {{$order_details->apartment.','}}  {{$order_details->address.','}}
                                                {{$order_details->city.','}} {{$order_details->state.','}} 
                                                {{$order_details->country.','}} {{$order_details->pin_code}}
                                            </td>
                                            <td>Paypal</td>
                                            <td class="text-right">Item(s) Subtotal:</td>
                                            <td class="text-right"> ${{ number_format(array_sum($amt), 2) }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"></td>
                                            <td class="text-right" align="right" style="min-width: 300px"><strong>Total:</strong></td>
                                            <td  class="text-right"align="right"><strong>${{ number_format(array_sum($amt), 2)}}</strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('pagescript')
<script>
$(document).ready(function () {
    $("#cancel_order").click(function(e) {
        var pTrckId = $(this).attr('ptrckid');
        var ordId = $(this).attr('ord_id');

        $.ajax({
            url: '{{ url('/order/cancel/' + ordId + '/' + pTrckId) }}'
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
