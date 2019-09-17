@extends('layouts.app')
@section('content')
<section class="dashboard-body product-wrapper">
    <div class="container-fluid">
        <div class="row">
            @include('layouts.user_sidebar')
            <div class="col-lg-9 produst-right-side">
                <div class="dash-container">
                    <h3> Order Details </h3>
                    <hr class="divider-hr">
                    <section class="gallerry">
                        <!-- SCHOOL TOP PICKS section-->
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Form Elements -->
                                <div class="order-header">
                                    <span>Ordered on {{date('d M Y', strtotime($order_details->orders[0]->created_at))}}</span>&nbsp;
                                    @if($order_details->orders[0]->status == 'success')<span><b>Order#</b> {{$order_details->orders[0]->order_no}}</span>
                                    @foreach($order_details->orders[0]->shippingDetails as $shipping_detail)
                                        <span><b>Package Tracking Id#</b> {{$order_details->orders[0]->order_no}}</span>
                                    @endforeach
                                    @endif

                                </div>
                                <table id="cart" class="table table-hover table-condensed table-responsive">
                                    <thead>
                                        <tr>
                                            <th style="min-width: 250px">Item details</th>
                                            <th>Quantity</th>
                                            <th>Seller Name</th>
                                            <th>Payment Status</th>
                                            <th style="text-align: right;">Paid Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php($subtotal = 0)
                                        @foreach($order_details->orders[0]->orderItems as $order_detail)
                                        <tr>
                                            <td data-th="Product">
                                                <div class="row">
                                                    <div class="col-sm-3 col-3 hidden-xs"><img 
                                                            src="{{ !empty($order_detail->image) 
                                                        ? url('public/images/books/original/' . $order_detail->image) 
                                                        : url('public/images/books/default.gif')}}" class=""/></div>
                                                    <div class="col-sm-9 col-9">
                                                        <h4 class="nomargin">{{ $order_detail->item_name }}</h4>
                                                        <input type="hidden" name="order_id" value="{{ $order_detail->order_id }}" />
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{ $order_detail->quantity }}</td>
                                            <td>{{ $order_detail->name }}</td>
                                            <td>{{ $order_details->orders[0]->status }}</td>
                                            <td data-th="Subtotal" align="right">
                                                ${{ $total = number_format($order_detail->amount * $order_detail->quantity,2) }}
                                            </td>
                                            @php($subtotal = $subtotal + $total)
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
                                                <td class="text-right"> ${{number_format($subtotal, 2)}}</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"></td>
                                                <td class="text-right" align="right">Shipping Charge:</td>
                                                <td class="text-right" align="right">${{number_format($order_details->orders[0]->shipping_rate, 2)}}</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"></td>
                                                <td class="text-right" align="right">Total:</td>
                                                <td class="text-right" align="right">${{number_format($order_details->orders[0]->amount,2)}}</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"></td>
                                                <td class="text-right" align="right" style="min-width: 300px"><strong>Paid Amount:</strong></td>
                                                <td  class="text-right"align="right"><strong>${{number_format($order_details->orders[0]->paid_amount,2)}}</strong></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
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
@stop
