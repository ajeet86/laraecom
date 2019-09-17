@extends('admin.layout.app')
@section('title', 'Category Listing')
@section('css')
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@stop
@section('content')
<div id="content" class="bg-container">
    <header class="head">
        <div class="main-bar">
            <div class="row no-gutters">
                <div class="col-6">
                    <h4 class="m-t-5">
                        <i class="fa fa-star"></i>
                        Seller Rating Listing
                    </h4>
                </div>
            </div>
        </div>
    </header>
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
    <div class="outer">
        <div class="inner bg-container">
            <!--top section widgets-->
            <div class="card">
                <div class="card-header bg-white">
                    Seller Rating Information
                </div>
                <div class="card-block m-t-35" id="user_body">
                    <div>
                        <div>
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Rating</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($sellers as $key => $seller)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$seller->name}}</td>
                                        <td>{{$seller->email}}</td>
                                        @php
                                        $rating = DB::table('seller_rating')
                                                    ->where('seller_id', $seller->id)
                                                    ->avg('rating');
                                        @endphp
                                        <td><span class="rating-star-5" data-value="{{ round($rating,1,PHP_ROUND_HALF_UP)*10 }}"></span></td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4">No Seller Found</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->
                </div>
            </div>
        </div> 
    </div>


    @endsection
    @section('pagescript')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable({
				'columnDefs': [{
					'targets': [3], /* column index */
					'orderable': false, /* true or false */
				}]
			});
        } );
    </script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="{{asset('public/sites/js/hillRate-jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/sites/js/script.js')}} "></script>
    @stop