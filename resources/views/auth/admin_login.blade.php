@extends('auth.layouts.app')

@section('content')
<div class="col-lg-8 push-lg-2 col-md-10 push-md-1 col-sm-10 push-sm-1 login_top_bottom">
    <div class="row">
        <div class="col-lg-8 push-lg-2 col-md-10 push-md-1 col-sm-12">
            @if(session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @elseif(session()->has('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
            @endif


            <div class="login_logo login_border_radius1">
                <h3 class="text-center">
                    <a href="/"><img src="{{ asset('public/admn/img/logo.png')}}" alt="josh logo" class="admire_logo"></a><span class="text-white"> <br/>
                        Login</span>
                </h3>
            </div>
            <div class="bg-white login_content login_border_radius">
            <form method="POST" action="{{ route($loginRoute) }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route($forgotPasswordRoute) }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                <!--<div class="form-group">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 m-t-10">
                            <div class="icon-white btn-facebook icon_padding loginpage_border">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                <span class="text-white icon_padding text-center question_mark">Log In With Facebook</span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 pull-lg-right m-t-10">
                            <div class="icon-white btn-google icon_padding loginpage_border">
                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                                <span class="text-white icon_padding question_mark">Log In With Google+</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-form-label">Don't you have an Account? </label>
                    <a href='{{ route('register') }}' class="text-primary"><b>Sign Up</b></a>
                </div>-->
            </div>
        </div>
    </div>
</div>





@endsection
