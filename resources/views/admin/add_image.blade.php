@extends('admin.layout.app')
@section('title', 'Add Books')
@section('css')
@stop
@section('content')
<?php //echo "<pre>"; print_r($book); die();?>
<div id="content" class="bg-container">
    <header class="head">
        <div class="main-bar">
            <div class="row no-gutters">
                <div class="col-6">
                    <h4 class="m-t-5">
                        <i class="fa fa-upload"></i>
                        Upload Images
                    </h4>
                </div>
            </div>
        </div>
    </header>
    @if(session()->has('error'))
    <div class="col-md-12">
        <div class="alert alert-danger">
            {{ session()->get('error') }}
        </div>
    </div>
    @endif
    @if(session()->has('success'))
    <div class="col-md-12">
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    </div>
    @endif
    <div class="outer">
        <div class="inner bg-container">
            <!--top section widgets-->
            <div class="card">
                <div class="card-block m-t-35">
                    <div>
                        <h4>Images</h4>
                    </div>
                    <form class="form-horizontal login_validator" id="tryitForm"
                          enctype="multipart/form-data" action="{{ url('/admin/upload_image/') }}"
                          method="post">
                        <div class="row">
                            <div class="col-12">
                                {{ csrf_field() }}
                                <div class="form-group row m-t-25">
                                    <div class="col-lg-3 text-lg-right">
                                        <label for="image" class="col-form-label">Upload Image</label>
                                    </div>
                                    <div class="col-xl-6 col-lg-8">
                                        <div id="coba" class="chk">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-9 push-lg-3">
                                        <button class="btn btn-primary" type="submit" id="button_book">
                                            <i class="fa fa-user"></i>
                                            Add New
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('pagescript')
<script>
    $(document).ready(function () {
         var base_url = "{{asset('/')}}";
        $("#coba").spartanMultiImagePicker({
            fieldName: 'image[]',
            maxCount: 6,
            rowHeight: '200px',
            groupClassName: 'col-md-4 col-sm-6 col-xs-6',
            allowedExt: 'png|jpg|jpeg|gif',
            maxFileSize: '',
            placeholderImage: {
                image: base_url + 'public/images/placeholder.png',
                width: '100%'
            },
            dropFileLabel: "Drop Here",
            onAddRow: function (index) {
                console.log(index);
                console.log('add new row');
            },
            onRenderedPreview: function (index) {
                console.log(index);
                console.log('preview rendered');
            },
            onRemoveRow: function (index) {
                console.log(index);
            },
            onExtensionErr: function (index, file) {
                console.log(index, file, 'extension err');
                alert('Please only input png or jpg type file')
            },
            onSizeErr: function (index, file) {
                console.log(index, file, 'file size too big');
                alert('File size too big');
            }
        });
    });
</script>
<script src="{{URL::asset('/public/js/spartan-multi-image-picker.js')}}"></script>
@stop