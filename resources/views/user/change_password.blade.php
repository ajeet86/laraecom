@extends('layouts.app')
@section('title', 'Edit Profile')
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
                    <div class="abc">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="personal">

                                    <div class="card-block m-t-35">
                                        <div>
                                            <h4>Change Password</h4>
                                            <hr class="divider-hr">
                                        </div>
                                        <form class="form-horizontal login_validator" id="tryitForm"
                                              enctype="multipart/form-data" action="{{ url('/change_password') }}"
                                              method="post">
                                            <div class="row">
                                                <div class="col-12">
                                                    {{ csrf_field() }}
                                                


                                                <div class="form-group row m-t-25">
                                                    <div class="col-lg-3 text-lg-right">
                                                        <label for="u-name" class="col-form-label">
                                                            Current password *</label>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-8">
                                                        <div class="input-group">
                                                            <input type="password" name="current-password"  class="form-control" required="">
                                                        </div>
                                                        @if ($errors->has('current-password'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('current-password') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                                </div>



                                                <div class="form-group row m-t-25">
                                                    <div class="col-lg-3 text-lg-right">
                                                        <label for="u-name" class="col-form-label">
                                                            New password *</label>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-8">
                                                        <div class="input-group">
                                                            <input type="password" name="password"  class="form-control" required>
                                                        </div>
                                                        @if ($errors->has('password'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                                </div>


                                                <div class="form-group row m-t-25">
                                                    <div class="col-lg-3 text-lg-right">
                                                        <label for="u-name" class="col-form-label">
                                                            Confirm new password *</label>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-8">
                                                        <div class="input-group">
                                                            <input type="password" name="password_confirmation" class="form-control" required>
                                                        </div>
                                                        @if ($errors->has('password_confirmation'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
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
                                                            {{ 'Change Password' }}
                                                        </button>

                                                         <a class="btn btn-warning" href="{{route('edit_profile')}}">
                                                            <i class="fa fa-user"></i>
                                                            {{ 'Cancel' }}
                                                        </a>
                                                    </div>
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
@stop