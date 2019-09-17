@extends('layouts.app')
@section('content')
<section class="dashboard-body product-wrapper">
    <div class="container-fluid">
        <div class="row">
            @include('layouts.user_sidebar')
            <div class="col-lg-9 produst-right-side">
                <div class="dash-container">
                    @if(session()->has('success'))
                    <div class="col-md-12">
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    </div>
                    @endif
                    @if(session()->has('error'))
                    <div class="col-md-12">
                        <div class="alert alert-success">
                            {{ session()->get('error') }}
                        </div>
                    </div>
                    @endif
                    <h3> My Orders </h3>
                    <hr class="divider-hr">
                    <section class="gallerry">
                        <!-- SCHOOL TOP PICKS section-->
                        @if($orders->isEmpty())
                        <p class="no-found">No order found</p>
                        @endif
                        @foreach($orders as $order)
                        <table id="cart" class="table table-hover table-condensed table-responsive">
                            <thead>
                                <tr>

                                    <th style="min-width: 270px;">Order Placed <span> {{date('d M Y', strtotime( $order->created_at ))}}</span></th>
                                    <th>Seller Name</th>
                                    <th>Quantity</th>
                                    <th style="min-width: 270px;" class="text-center">Total paid amount<span> ${{number_format($order->paid_amount,2)}}</span></th>
                                    <th style="min-width: 50px">Payment Status</th>


                                    <th style="min-width: 270px;">@if($order->status == 'success') Order #{{$order->order_no}} @endif<br/>
                                        <a class="btn btn-primary btn-sm" href="{{ url('/order_details/'.$order->id) }}">Order detail</a>
                                        @if($order->status == 'success')
                                        <a class="btn all-btn-theme btn-sm" target="_blank" href="{{ url('/generate_pdf/'.$order->id) }}">Invoice</a>
                                        @endif	
                                        @if($order->status == 'success')
                                        <a class="btn btn-danger btn-sm" hre="#"  data-toggle="modal" data-target="#myModal_{{$order->id}}"> Cancel </a> 
                                        @endif
                                        <!--model start-->
                            <div class="modal fade" id="myModal_{{$order->id}}">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Cancel Order</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <form action="{{url('/cancel-form')}}" method="POST">
                                                {{ csrf_field() }}
                                                <input type="hidden" readonly value="{{$order->id}}" name="order-id">
                                                <input type="hidden" readonly value="{{ Auth::user()->id }}" name="user-id" class=""> 
                                                <input type="text" readonly value="{{ Auth::user()->email }}" name="user-email">
                                                <input type="hidden" readonly value="{{ $order->amount-$order->shipping_rate }}" name="product-total">
                                                <input type="hidden" readonly value="{{ $order->shipping_rate }}" name="shipping-amount">

                                                <input type="text" readonly value="Cancel product" name="subject">
                                                <textarea class="editor" cols="80" name="cancelreason" ></textarea>
                                                @if($order->status == 'success')
                                                <button class="w3-btn w3-blue" data-dismiss="modal" >Cancel</button>
                                                <button class="w3-btn w3-blue cancelproduct" >Submit</button>
                                                @endif
                                            </form>

                                        </div>


                                    </div>
                                </div>
                            </div>
                            <!--model end-->
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
                                            <div class="col-sm-9 col-3">							
                                                <h4 class="nomargin"> {{ $orderItem->item_name }} </h4>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $orderItem->name }}</td>
                                    <td>{{ $orderItem->quantity }}</td>
                                    <td data-th="Subtotal" class="text-center" style="min-width: 270px;">${{ number_format($orderItem->amount * $orderItem->quantity,2) }}</td>
                                    <td class="actions" data-th="" style="min-width: 270px;">
                                        {{ $order->status }}
                                    </td>
                                    <td>
                                        <!--<div class="rating-star-3"><input type="text" name="sell_id" class="seller_id" value="{{ $orderItem->user_id }}" /></div>-->

                                        <!--<a class="btn btn-primary btn-sm" href="{{ url('/seller_rating/'.$orderItem->user_id) }}">Rate Your Seller</a>-->
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                        @endforeach
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('pagescript')
<script src='https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.11.3/ckeditor.js'></script>
<script>
// Normal ckEditor example code
var elements = CKEDITOR.document.find('.editor'),
        i = 0,
        element;
while ((element = elements.getItem(i++))) {
    CKEDITOR.replace(element);
}

$('.cancelproduct').on('click',function(event){
    var cancel_msg = CKEDITOR.instances['cancelreason'].getData();
    if (cancel_msg === "" || cancel_msg === null) {
        alert("Please enter your cancellation reason");
        return false;
    }
});
</script>
@stop
