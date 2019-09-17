@extends('layouts.app')
@section('title', 'Add Books')
@section('css')
@stop
@section('content')
<section class="dashboard-body product-wrapper">
    <div class="container-fluid">
        <div class="row">
            @include('layouts.user_sidebar')
            <div class="col-lg-9">
                <div class="dash-container">
                    <div class="abc">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="personal">
                                    <div class="card-block m-t-35">
                                        <div>
                                            <h4>Messages</h4>
                                            <hr class="divider-hr">
                                        </div>
                                        <div class="chat-history">
                                            <ul>
                                                @foreach($messages as $message)

                                                @if($message->sender_name == 'Me')
                                                <li class="clearfix">
                                                    <div class="message-data align-right">
                                                        <span class="message-data-time">
                                                            {{ $message->created_at->format('d-m-Y H:i') }}
                                                            {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $message->created_at, 'UTC')
                                                                        ->setTimezone('America/Chicago')
                                                                        ->format('F d, Y @ h:i A T') }}
                                                        </span> &nbsp; &nbsp;
                                                        <span class="message-data-name">{{ $message->sender_name }}</span> <i class="fa fa-circle me"></i>
                                                    </div>
                                                    <div class="message other-message float-right">
                                                        {{ $message->message }}
                                                    </div>
                                                </li>
                                                @else
                                                <li>
                                                    <div class="message-data">
                                                        <span class="message-data-name"><i class="fa fa-circle online"></i>{{ $message->sender_name }}</span>
                                                        <span class="message-data-time">
                                                            {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $message->created_at, 'UTC')
															->setTimezone('America/Chicago')
															->format('F d, Y @ h:i A T') }}
                                                        </span>
                                                    </div>
                                                    <div class="message my-message">
                                                        {{ $message->message }}
                                                    </div>
                                                </li>
                                                @endif

                                                @endforeach
                                            </ul>
                                        </div>
                                        <form class="form-horizontal login_validator" id="mymessage"
                                              action="{{ url('/message/' . $seller_id . '#mymessage') }}"
                                              method="post">
                                            {{ csrf_field() }}
                                            <textarea class="form-control" name="message"
                                                      cols="20" rows="5"></textarea>
                                            @if ($errors->has('message'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('message') }}</strong>
                                            </span>
                                            @endif
                                            <button class="btn btn-primary" type="submit" id="button_book">
                                                Send
                                            </button>
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
@stop
