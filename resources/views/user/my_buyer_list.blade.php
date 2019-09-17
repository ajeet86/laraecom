@extends('layouts.app')
@section('content')
<section class="dashboard-body product-wrapper">
    <div class="container-fluid">
        <div class="row">
            @include('layouts.user_sidebar')
            <div class="col-lg-9 produst-right-side">
                <div class="dash-container">
                    <h3> My buyer Messages </h3>
                    <hr class="divider-hr">
                    <section class="gallerry">
                        <!-- SCHOOL TOP PICKS section-->
                        @if($my_buyers->isNotEmpty())
                            <table id="cart" class="table table-hover table-condensed table-responsive">
                                <thead>
                                    <tr>
                                        <th style="min-width: 150px;">Buyer Name</th>
                                        <th>Message</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($my_buyers as $buyer)
                                    <tr>
                                        <td>{{ $buyer->name }}</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm" 
                                               href="{{ url('/message/'.$buyer->id) }}">
                                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                                Message to {{ $buyer->name }}</a>
												@if(array_key_exists($buyer->id, $msg_read_status))
													<span class="notification">{{ '1' }}</span>
												@endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <p>You have no any buyer yet.</p>
                        @endif   
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('pagescript')
@stop
