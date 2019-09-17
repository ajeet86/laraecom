@extends('admin.layout.app')
@section('title', 'Add New Podcast')
@section('css')
<link href="{{URL::asset('/public/admn/css/plugincss/jasny-bootstrap.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('/public/css/chosen.css')}}" rel="stylesheet">
<link href="{{URL::asset('/public/css/multi-select.css')}}" rel="stylesheet">
@stop
@section('content')
<div id="content" class="bg-container">
    <header class="head">
        <div class="main-bar">
            <div class="row no-gutters">
                <div class="col-6">
                    <h4 class="m-t-5">
                        <i class="fa fa-file-powerpoint-o"></i>
                        {{ isset($pod->id) ? 'Edit PodCast' : 'Add PodCast' }}
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
                        <h4>Page Information</h4>
                    </div>
                    <form class="form-horizontal login_validator" id="tryitForm"
                          enctype="multipart/form-data" action="{{ isset($pod->id) ? url('/admin/edit_pod/' . $pod->id) : url('/admin/add_pod') }}"
                          method="post">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group row m-t-25">
                                    <div class="col-lg-3 text-center text-lg-right">
                                        <label class="col-form-label">Upload Feature Image</label>
                                    </div>
                                    <div class="col-lg-6 text-center text-lg-left">
                                        <div class="fileinput fileinput-new" 
                                             data-provides="fileinput">
                                            <div class="fileinput-new img-thumbnail text-center">
                                                @if (isset($pod->feature_image))
                                                    <img src="{{url('public/images/pod/' . $pod->feature_image)}}"></div>
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
                                                <input type="file" name="feature_image"></span>
                                            <a href="#" class="btn btn-warning fileinput-exists"
                                               data-dismiss="fileinput">Remove</a>
                                        </div>
                                        @if ($errors->has('feature_image'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('feature_image') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row m-t-25">
                                <div class="col-lg-3 text-lg-right">
                                    <label for="u-name" class="col-form-label">
                                        Meta title *</label>
                                </div>
                                <div class="col-xl-6 col-lg-8">
                                    <div class="input-group">
                                        <input type="text" name="meta_title"
                                               class="form-control" value="{{ isset($pod->meta_title) ? $pod->meta_title : old('meta_title') }}">
                                    </div>
                                    @if ($errors->has('meta_title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('meta_title') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group row m-t-25">
                                <div class="col-lg-3 text-lg-right">
                                    <label for="u-name" class="col-form-label">Meta Description *</label>
                                </div>
                                <div class="col-xl-6 col-lg-8">
                                    <div class="input-group">
                                        <textarea class="form-control" name="meta_desc" rows="5" cols="50">{{ isset($pod->meta_desc) ? $pod->meta_desc : old('meta_desc') }}</textarea>
                                    </div>
                                    @if ($errors->has('meta_desc'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('meta_desc') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row m-t-25">
                                <div class="col-lg-3 text-lg-right">
                                    <label for="u-name" class="col-form-label">
                                        Pod title *</label>
                                </div>
                                <div class="col-xl-6 col-lg-8">
                                    <div class="input-group">
                                        <input type="text" name="title"
                                               class="form-control" value="{{ isset($pod->title) ? $pod->title : old('title') }}">
                                    </div>
                                    @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row m-t-25">
                                    <div class="col-lg-3 text-center text-lg-right">
                                        <label class="col-form-label">Upload Audio</label>
                                    </div>
                                    <div class="col-lg-3 text-center text-lg-left">
                                        <div class="fileinput fileinput-new" 
                                             data-provides="fileinput">
                                            <div class="fileinput-new img-thumbnail text-center">
                                            
                                            <img src="" 
                                                 data-src="holder.js/100%x100%"  
                                                 alt="not found"></div>
                                        
                                        <div class="fileinput-preview fileinput-exists img-thumbnail"></div>
                                        <div class="m-t-20 text-center">
                                            <span class="btn btn-primary btn-file">
                                                <span class="fileinput-new">Select Audio</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="audio"></span>
                                            <a href="#" class="btn btn-warning fileinput-exists"
                                               data-dismiss="fileinput">Remove</a>
                                        </div>
                                        @if ($errors->has('audio'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('audio') }}</strong>
                                            </span>
                                        @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-3 text-center text-lg-left">
                                        @if(isset($pod->id))
                                            <audio controls>
                                                <source src="{{url('public/storage/upload/files/audio') . '/'. $pod->audio}}" type="audio/ogg">
                                                Your browser does not support the audio element.
                                            </audio>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row m-t-25">
                                <div class="col-lg-3 text-lg-right">
                                    <label for="u-name" class="col-form-label">Content *</label>
                                </div>
                                <div class="col-xl-6 col-lg-8">
                                    <div class="input-group">
                                        <textarea class="editor" name="content" 
                                                  cols="50" rows="6">{{ isset($pod->content) ? $pod->content : old('content') }}</textarea>                                            
                                    </div>
                                    @if ($errors->has('content'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row m-t-25">
                                <div class="col-lg-3 text-lg-right">
                                    <label for="u-name" class="col-form-label">Created By *</label>
                                </div>
                                <div class="col-xl-6 col-lg-8">
                                    <div class="input-group">
                                        <input type="text" name="created_by"
                                               class="form-control" 
                                               value="{{ isset($pod->created_by) ? $pod->created_by : old('created_by') }}">
                                    </div>
                                    @if ($errors->has('created_by'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('created_by') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            @php
                                $pod_tag = array();
                            @endphp
                            @if(isset($pod->id) && $pod->podtags->isNotEmpty())
                                @foreach($pod->podtags as $podtag)
                                    @php
                                        $pod_tag[] = $podtag->tag_id
                                    @endphp
                                @endforeach
                            @endif
                            <div class="form-group row m-t-25">
                                <div class="col-lg-3 text-lg-right">
                                    <label for="u-name" class="col-form-label">Tag *</label>
                                </div>
                                <div class="col-xl-6 col-lg-8">
                                    <div class="input-group">
                                        <select name="tags[]" size="3" multiple class="form-control chzn-select" tabindex="8">
                                            @foreach ($tags as $id => $tag_name)
                                                <option value="{{ $id }}" 
                                                    {{ (isset($pod->id) && in_array($id, $pod_tag)) ? 'selected' : '' }}>{{ $tag_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @if ($errors->has('tag'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tag') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-9 push-lg-3">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fa fa-user"></i>
                                        {{ isset($pod->id) ? 'Edit Page' : 'Add Page' }}
                                    </button>
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
<script src='https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.11.3/ckeditor.js'></script>
<script>
// Normal ckEditor example code
CKEDITOR.config.extraPlugins = 'iframe';
CKEDITOR.config.filebrowserUploadMethod = 'form';
var elements = CKEDITOR.document.find( '.editor' ),
    i = 0,
    element;
while (( element = elements.getItem( i++ ) )) {
    CKEDITOR.replace(element, {
        filebrowserUploadUrl: '{{ route('admin.pod_upload',['_token' => csrf_token() ])}}'
    });
}
</script>


<script src="{{URL::asset('/public/admn/js/pluginjs/jasny-bootstrap.js')}}"></script>
<script src="{{URL::asset('/public/admn/js/holder.js')}}"></script>
<script src="{{URL::asset('/public/js/chosen.jquery.js')}}"></script>
<script src="{{URL::asset('/public/js/jquery.multi-select.js')}}"></script>
<script src="{{URL::asset('/public/admn/js/pages/form_elements.js')}}"></script>
@stop