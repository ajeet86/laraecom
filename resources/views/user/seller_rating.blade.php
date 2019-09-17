@extends('layouts.app')
@section('content')
<section class="dashboard-body product-wrapper">
    <div class="container-fluid">
        <div class="row">
            @include('layouts.user_sidebar')
            <div class="col-lg-9 produst-right-side">
                <div class="dash-container">
                    <h3> Rate Your Seller </h3>
                    <hr class="divider-hr">
                    <section class="gallerry">
                        <!-- SCHOOL TOP PICKS section-->
                        @if($my_sellers->isNotEmpty())
                        <table id="cart" class="table table-hover table-condensed table-responsive">
                            <thead>
                                <tr>

                                    <th style="min-width: 270px;">Seller Name</th>
                                    <th>Rate Your seller</th>
                                    <th>Message</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($my_sellers as $seller)
                                <tr>
                                    <td>{{ $seller->name }}</td>
                                    <td>
                                        <div class="rating-star-3" data-value="{{ $seller->rating }}">
                                            
                                        </div>
                                        <input type="hidden" class="seller_id" value="{{ $seller->id }}" />
                                    </td>
                                    <td>
                                        <a class="btn btn-primary btn-sm" 
                                           href="{{ url('/message/'.$seller->id) }}">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                            Message to {{ $seller->name }}</a>
											@if(array_key_exists($seller->id, $msg_read_status))
                                                <span class="notification">{{ '1' }}</span>
                                            @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else
                            <p>You have not ordered any seller's book yet.</p>
                        @endif
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('pagescript')
<script>
    $(document).ready(function(){
        $(document).on("click", ".rating-star-3" , function() {
            var rating = $(this).find("input[name='rating']").val();
            var seller_id = $(this).next(".seller_id").val();
            $.ajax({type:'POST',
            url: '{{ url('/post_rating') }}',
            data:{seller_id:seller_id, user_rating:rating, '_token': $('meta[name="csrf-token"]').attr('content') },
            success:function(data){
                alert(data.success);
            }

        });
        });
    });
</script>
<script type="text/javascript" src="{{asset('public/sites/js/hillRate-jquery.js')}}">
</script>
<script type="text/javascript" src="{{asset('public/sites/js/script.js')}} ">
</script>

@stop
