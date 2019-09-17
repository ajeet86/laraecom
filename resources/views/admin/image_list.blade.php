@extends('admin.layout.app')
@section('title','Gallery')
@section('css')
<link type="text/css" rel="stylesheet" href="{{URL::asset('/public/css/imagehover.min.css')}}"/>
<link type="text/css" rel="stylesheet" href="{{URL::asset('/public/admn/css/pages/gallery.css')}}"/>
@stop
@section('content')
<div id="content" class="bg-container">
    <header class="head">
        <div class="main-bar">
            <div class="row no-gutters">
                <div class="col-6">
                    <h4 class="m-t-5">
                        <i class="fa fa-glide"></i>
                        Gallery
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
                    Gallery Grid
                </div>
                <div class="card-block m-t-35" id="user_body">
                    <div class="table-toolbar">
                        <div class="btn-group">
                            <a href="{{url('admin/upload_image')}}" id="editable_table_new" class=" btn btn-default">
                                Add Image  <i class="fa fa-plus"></i>
                            </a>
                        </div>
                        <div class="btn-group float-right users_grid_tools">
                            <div class="tools"></div>
                        </div>
                    </div>
                    <div>
                        <div class="row no-gutters">
                            @foreach($images as $image)
                            <div class="col-xl-2 col-lg-3 col-md-4 col-6 gallery-border">
                                <figure class="imghvr-zoom-in"><img src="{{url('public/images/blog/' . $image->image)}}" alt="example-image"/>
                                    <figcaption>
                                        <h5>{{ url('public/images/blog/' . $image->image) }}</h5>
                                    </figcaption>
                                </figure>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->
                </div>
            </div>
        </div> 
    </div>
</div>
@endsection
@section('pagescript')

@stop