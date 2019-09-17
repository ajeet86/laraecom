@extends('layouts.app')
@section('css')
<link href="{{URL::asset('/public/admn/css/bootstrapValidator.min.css')}}" rel="stylesheet">
@stop
@section('content')
@if ($message = Session::get('success'))
    <div class="w3-panel w3-green w3-display-container">
        <span onclick="this.parentElement.style.display='none'"
                class="w3-button w3-green w3-large w3-display-topright">&times;</span>
        <p>{!! $message !!}</p>
    </div>
    <?php Session::forget('success');?>
    @endif
@if ($message = Session::get('error'))
    <div class="w3-panel w3-red w3-display-container">
        <span onclick="this.parentElement.style.display='none'"
                class="w3-button w3-red w3-large w3-display-topright">&times;</span>
        <p>{!! $message !!}</p>
    </div>
    <?php Session::forget('error');?>
@endif
<section class="product-wrapper dashboard-body">
    <div class="container-fluid">
        <div class="checkout-info">
            <div class="row">	
                <div class="col-md-12 col-sm-12">
                    <div class="shipping">
                        <h6>Shipping Information</h6>
                        <img src="{{ url('public/sites/images/single-img.png') }}">
                    </div>
                </div>
            </div>
            <div class="row">	
                <div class="col-md-6">

                    <div class="contact-info"> 
                        <div class="shipping-add">
                            <!--messages-->
                            @if(count($errors))
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.
                                <br/>
                                <ul>
                                    @foreach($errors as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            @if(Session::has('fedx_err_msg'))
                                <div class="alert alert-danger alert-dismissible">
                                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                          {{ Session::get('fedx_err_msg') }}
                                </div>
                            @endif
                            <!--end messages-->
                            <div class="row">
                                <div class="col-md-12"> 
                                    <h4 class="cont-head"> Shipping address  </h4>
                                </div>
                            </div>
                            <form class="form-horizontal login_validator" id="tryitForm" method="POST">
                                <div class="row">
                                    {{ csrf_field() }}
                                    <div class="col-md-12"> 
                                        <input type="email" placeholder="Email"
                                        name="email" class="shipping_email mobile-email-input"
                                        value="{{ (!empty($shipping_details->email))? $shipping_details->email : '' }}" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" placeholder="First Name" 
                                               minlength="2" maxlength="50"
                                               name="firstName" value="{{ (!empty($shipping_details->first_name))? $shipping_details->first_name : '' }}" 
                                               class="shipping_firstName" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" placeholder="Last Name" 
                                               name="lastName"
                                               minlength="2" maxlength="50"
                                               value="{{ (!empty($shipping_details->last_name))? $shipping_details->last_name : '' }}" 
                                               class="shipping_lastName" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Address" 
                                               name="address" 
                                               value="{{ (!empty($shipping_details->address))? $shipping_details->address : '' }}" 
                                               class="shipping_address" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="text" 
                                               placeholder="Apartment, Suit, etc (optional)"
                                               name="apartment" 
                                               value="{{ (!empty($shipping_details->apartment))? $shipping_details->apartment : '' }}"
                                               class="shipping_apartment" required="">
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="cout-reg">
                                            <label class="label-visible" for="checkout-shipy">Country/Region</label>
                                            <input type="hidden" id="countrySavedValue" value="US">
                                            <select name="country" class="countries" id="countryId">
                                                @foreach($countries as $country)
                                                <option value="{{ $country->iso2_code}}">{{ $country->country_name}}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="cout-reg">
                                            <label class="label-visible" for="checkout-shipy">State</label>
                                            <input type="hidden" id="state-saved-value" value="NY">
                                            <select name="state" class="states" id="stateId">
                                                @foreach($states as $state)
                                                <option value="{{ $state->code}}" {{ (isset($shipping_details->state) && $shipping_details->state == $state->code)? 'selected' : '' }}>{{ $state->default_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>

                                    <div class="col-md-4">
                                        <input type="text" placeholder="City" 
                                               class="cities" name="city"
                                               value="{{ (!empty($shipping_details->city))? $shipping_details->city : '' }}"
                                               required="">				

                                    </div>

                                </div>  

                                <div class="row">
                                    <div class="col-md-8">
                                        <input type="number" placeholder="Phone"
                                               class="shipping_phone" name="tele"
                                               maxlength="10"
                                               value="{{ (!empty($shipping_details->phone_number))? $shipping_details->phone_number : '' }}"
                                               required="">
                                    </div>
                                    <div class="col-md-4">
                                        <div class="pin-code">
                                            <input type="text" placeholder="PIN Code"
                                                   class="shipping_pinCode" name="pin_code"
                                                   maxlength="7"
                                                   value="{{ (!empty($shipping_details->pin_code))? $shipping_details->pin_code : '' }}" required>
                                        </div>	
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="shopping-btn2">
                                            <button type="submit" name="shippingInfo" class="all-btn-theme btn btn-primary"> Continue to shipping method </button>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="payment-info">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="add-product">
                                    <!-- product row -->
                                    @if(session('cart'))
                                    @foreach(session('cart') as $id => $details)
                                    <div class="row">
                                        <div class="col-md-3 col-lg-3">
                                            <div class="pro-img">
                                                <img src="{{ !empty($details['photo']) ?
                                                        url('public/images/books/original/' . $details['photo']) :
                                                                url('public/images/books/default.gif')}}"> 
                                                <span class="qty-cir">{{ $details['quantity'] }}</span>
                                            </div> 
                                        </div>
                                        <div class="col-md-5 col-lg-6"> <div class="pro-det"> 
                                                <h4> {{ $details['name'] }}</h4>
                                            </div> 
                                        </div>
                                        <div class="col-md-4 col-lg-3"> <div class="price-cell"> ${{ $details['price'] * $details['quantity'] }} USD </div> </div>
                                    </div>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="total-code">
                                    <?php $total = 0; //echo '<pre>';print_r(session('cart'));  ?>
                                    @if (session('cart'))
                                    @foreach(session('cart') as $id => $details)
                                    <?php $total += $details['price'] * $details['quantity'] ?>
                                    @endforeach
                                    @else
                                    <?php $total = 0; ?>
                                    @endif
                                    <ul>
                                        <li> <label class="Sub-total">Subtotal</label>   <span class="total"> ${{ $total }} USD </span>  </li>
                                        <li> <label class="Sub-total-total">Total </label>  <span class="total-all">  ${{ $total }} USD </span>  </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                    </div> 
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
@section('pagescript')
<script src="{{URL::asset('/public/admn/js/bootstrapValidator.min.js')}}"></script>
<script src="{{URL::asset('/public/admn/js/pages/validation.js')}}"></script>
@stop
