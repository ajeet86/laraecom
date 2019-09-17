@extends('layouts.app')
@section('title', 'Edit Profile | abc')
@section('description', 'Edit Profile')
@section('css')
<link href="{{URL::asset('/public/admn/css/plugincss/jasny-bootstrap.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('/public/admn/css/bootstrapValidator.min.css')}}" rel="stylesheet">
@stop
@section('content')
<section class="dashboard-body product-wrapper">
    <div class="container-fluid">
        <div class="row">
            @include('layouts.user_sidebar')
            <div class="col-lg-9">
                <div class="dash-container">
                    <div class="row">
                            @if(session()->has('success'))
                            <div class="col-md-12">
                                    <div class="alert alert-success">
                                            {{ session()->get('success') }}
                                    </div>
                            </div>
                            @endif
                            @if(session()->has('error'))
                            <div class="col-md-12">
                                    <div class="alert alert-danger">
                                            {{ session()->get('error') }}
                                    </div>
                            </div>
                            @endif
                    </div>
                    <div class="abc">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="personal">

                                    <div class="card-block m-t-35">
                                        <div>
                                            <h4>Personal Information</h4>
                                            <hr class="divider-hr">
                                        </div>
                                        <form class="form-horizontal login_validator" id="tryitForm"
                                              enctype="multipart/form-data" action="{{ url('/edit_profile') }}"
                                              method="post">
                                            <div class="row">
                                                <div class="col-12">
                                                    {{ csrf_field() }}
                                                    <div class="form-group row m-t-25">
                                                        <div class="col-lg-3 text-center text-lg-right">
                                                            <label class="col-form-label">Profile Picture</label>
                                                        </div>
                                                        <div class="col-lg-6 text-center text-lg-left">
                                                            <div class="fileinput fileinput-new" 
                                                                 data-provides="fileinput">
                                                                <div class="fileinput-new img-thumbnail text-center">
                                                                    @if (isset($user->avatar))
                                                                    <img src="{{url('public/images/users/' . $user->avatar)}}"></div>
                                                                @else
                                                                <img src="" 
                                                                     data-src="holder.js/100%x100%"  
                                                                     alt="not found"></div>
                                                            @endif
                                                            <div class="fileinput-preview fileinput-exists img-thumbnail"></div>
                                                            <div class="m-t-20 text-center">
                                                                <span class="btn btn-primary btn-file">
                                                                    <span class="fileinput-new">Select image</span>
                                                                    <span class="fileinput-exists">Change</span>
                                                                    <input type="file" name="avatar"></span>
                                                                <a href="#" class="btn btn-warning fileinput-exists"
                                                                   data-dismiss="fileinput">Remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row m-t-25">
                                                    <div class="col-lg-3 text-lg-right">
                                                        <label for="u-name" class="col-form-label">
                                                            Name *</label>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-8">
                                                        <div class="input-group">
                                                            <input type="text" name="name"
                                                                   class="form-control" value="{{ isset($user->name) ? $user->name : old('name') }}" required>
                                                        </div>
                                                        @if ($errors->has('name'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('name') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <!--<div class="form-group row m-t-25">
                                                    <div class="col-lg-3 text-lg-right">
                                                        <label for="u-name" class="col-form-label">User
                                                            Name *</label>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-8">
                                                        <div class="input-group">
                                                            <input type="text" name="userName"
                                                                   value="{{ isset($user->username) ? $user->username : old('userName') }}"
                                                                   autocomplete="user-name"
                                                                   class="form-control">
                                                        </div>
                                                        @if ($errors->has('userName'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('userName') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                                </div>-->
                                                <div class="form-group row">
                                                    <div class="col-lg-3 text-lg-right">
                                                        <label for="email" class="col-form-label">Email
                                                            *</label>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-8">
                                                        <div class="input-group">
                                                            <input type="email" value="{{ isset($user->email) ? $user->email : old('email') }}" name="email"
                                                                   class="form-control" required>
                                                        </div>
                                                        @if ($errors->has('email'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group gender_message row">
                                                    <div class="col-lg-3 text-lg-right">
                                                        <label class="col-form-label">Gender</label>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-8">
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio"
                                                                          name="gender_m_f"
                                                                          value="Male"
                                                                          {{ (isset($user->gender) ? $user->gender : old('gender')) == 'Male' ? 'checked' : ''}}>
                                                                Male</label>
                                                        </div>
                                                        <div class="radio">
                                                            <label><input type="radio"
                                                                          name="gender_m_f"
                                                                          value="Female"
                                                                          {{ (isset($user->gender) ? $user->gender : old('gender')) == 'Female' ? 'checked' : ''}}>
                                                                Female</label>
                                                        </div>
                                                            @if ($errors->has('gender'))
                                                                    <span class="help-block">
                                                                            <strong>{{ $errors->first('gender') }}</strong>
                                                                    </span>
                                                            @endif
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-3 text-lg-right">
                                                        <label for="phone" class="col-form-label">Phone *
                                                        </label>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-8">
                                                        <div class="input-group">
                                                            <input name="phone"
                                                                   type="number"
                                                                   minlength="10"
                                                                   maxlength="20"
                                                                   value="{{ isset($user->phone) ? $user->phone : old('phone') }}" 
                                                                   class="form-control number_validation" required="">
                                                        </div>
                                                        @if ($errors->has('phone'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('phone') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-3 text-lg-right">
                                                        <label for="street_line" class="col-form-label">Street Line *
                                                        </label>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-8">
                                                        <div class="input-group">
                                                            <input name="street_line"
                                                                   type="text"
                                                                   value="{{ isset($user->street_line) ? $user->street_line : old('street_line') }}" 
                                                                   class="form-control" required="">
                                                        </div>
                                                        @if ($errors->has('street_line'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('street_line') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-3 text-lg-right">
                                                        <label for="city" class="col-form-label">City *
                                                        </label>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-8">
                                                        <div class="input-group">
                                                            <input name="city"
                                                                   type="text"
                                                                   value="{{ isset($user->city) ? $user->city : old('city') }}" 
                                                                   class="form-control" required>
                                                        </div>
                                                        @if ($errors->has('city'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('city') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-3 text-lg-right">
                                                        <label for="country" class="col-form-label">Country *
                                                        </label>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-8">
                                                        <div class="input-group">
                                                            <select class="form-control chzn-select" tabindex="2" name="country" required>
                                                                @if($countries)
                                                                    @foreach($countries as $country)
                                                                    <option value="{{ $country->iso2_code}}">
                                                                            {{ $country->country_name}}
                                                                    </option>
                                                                    @endforeach
                                                                @endif
                                                            </select>
                                                        </div>
                                                        @if ($errors->has('country'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('country') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-3 text-lg-right">
                                                        <label for="city" class="col-form-label">State *
                                                        </label>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-8">
                                                        <div class="input-group">
                                                            <select class="form-control chzn-select" tabindex="2" name="state" required>
                                                                    @if($states)
                                                                    <option value="">Select</option>
                                                                    @foreach($states as $state)
                                                                    <option value="{{ $state->code}}"
                                                                            {{ (isset($user->state) && $user->state == $state->code)? 'selected' : '' }}>
                                                                            {{ $state->default_name}}
                                                                    </option>
                                                                    @endforeach
                                                                @endif
                                                            </select>
                                                        </div>
                                                        @if ($errors->has('state'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('state') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-3 text-lg-right">
                                                        <label for="postal_code" class="col-form-label">Postal Code *
                                                        </label>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-8">
                                                        <div class="input-group">
                                                            <input name="postal_code"
                                                                   type="number"
                                                                   value="{{ isset($user->postal_code) ? $user->postal_code : old('postal_code') }}" 
                                                                   class="form-control number_validation" required="">
                                                        </div>
                                                        @if ($errors->has('postal_code'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('postal_code') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-3 text-lg-right">

                                                    </div>
                                                    <div class="col-xl-6 col-lg-8 text-lg-left">
                                                        <button class="btn btn-primary all-btn-theme" type="submit">
                                                            <i class="fa fa-user"></i>
                                                            {{ 'Save Profile' }}
                                                        </button>
   
                                                        <a class="btn btn-primary all-btn-theme" href="{{url('/change_password')}}">
                                                            <i class="fa fa-user"></i>
                                                            {{ 'Change Password' }}
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
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
<script src="{{URL::asset('/public/admn/js/pluginjs/jasny-bootstrap.js')}}"></script>
<script src="{{URL::asset('/public/admn/js/holder.js')}}"></script>
<script src="{{URL::asset('/public/admn/js/bootstrapValidator.min.js')}}"></script>
<script src="{{URL::asset('/public/admn/js/pages/validation.js')}}"></script>
<script>
    $(".number_validation").keydown(function(e){
            if(!((e.keyCode > 95 && e.keyCode < 106)
                  || (e.keyCode > 47 && e.keyCode < 58) 
                  || e.keyCode == 8)) {
                return false;
            }
    });
</script>
@stop