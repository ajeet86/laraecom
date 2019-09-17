@extends('layouts.app')
@section('content')
<section class="dashboard-body product-wrapper">
    <div class="container-fluid">
        <div class="row">
            @include('layouts.user_sidebar')
            <div class="col-lg-9 produst-right-side">
                <div class="dash-container">
                    <h3> My Sells </h3>
                    <hr class="divider-hr">
                    <section class="gallerry">
                        <!-- SCHOOL TOP PICKS section-->
                        @if($orders->isEmpty())
                        <p class="no-found">No sell found</p>
                        @endif
                        @foreach($orders as $order)
                        <table id="cart" class="table table-hover table-condensed table-responsive">
                            <thead>
                                <tr>

                                    <th style="min-width: 270px;">Order Placed <span> {{date('d M Y', strtotime( $order->created_at ))}}</span></th>
                                    <th>Quantity</th>
									<th>Buyer Name</th>
                                    <th style="min-width: 270px;" class="text-center">Paid amount</th>
                                    <th style="min-width: 270px">Status</th>


                                    <th style="min-width: 270px;">Order #{{$order->order_no}}<br/>
                                        <a class="btn btn-primary btn-sm" href="{{ url('/sells_detail/'.$order->id) }}">Order detail</a>
                                        @if($order->status == 'success')
                                            <!--<a class="btn btn-info btn-sm" target="_blank" href="{{ url('/generate_seller_pdf/'.$order->id) }}">Invoice</a>-->
                                        @endif
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($order->orderItems as $orderItem)
                                <tr>
                                    <td data-th="Product" style="min-width: 270px;">
                                        <div class="row">
                                            <div class="col-sm-3 col-3 hidden-xs"><img 
                                                    src="{{ !empty($orderItem->image) 
                                                        ? url('public/images/books/original/' . $orderItem->image) 
                                                        : url('public/images/books/default.gif')}}"
                                                    width="100" height="100" 
                                                    class="img-responsive"/>
                                            </div>
                                            <div class="col-sm-9 col-9">							
                                                <h4 class="nomargin"> {{ $orderItem->item_name }} </h4>
                                                <input type="hidden" name="order_id" value="{{ $order->id }}" />
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $orderItem->quantity }}</td>
									<td>{{ $order->buyer_name }}</td>
                                    <td data-th="Subtotal" class="text-center" style="min-width: 270px;">${{ number_format($orderItem->amount * $orderItem->quantity,2) }}</td>
                                    <td class="actions" data-th="" style="min-width: 270px;">
                                        {{ $order->status }}
                                    </td>
                                    <td></td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                        @endforeach
                        <div class="col-md-12">
                            {!! $orders->render() !!}
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
