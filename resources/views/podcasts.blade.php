@foreach($pods as $pod)
    <div class="col-lg-4 col-md-6">
       <!-- Single Blog -->
        <div class="single-blog">
            <div class="blog-img">
                <a href="{{url('podcast/' . $pod->slug)}}">
                    <img src="{{(isset($pod->feature_image) 
                                ? url('public/images/pod/' . $pod->feature_image) 
                                : url('public/images/pod/default.png'))}}" alt="">
                </a>
                
                <div class="music"><img src="{{ url('public/sites/images/music-icon.png')}}" alt=""></div>
            </div>
            <div class="blog-content">
               <div class="blog-title">
                  <h4><a href="{{url('podcast/' . $pod->slug)}}">{{ $pod->title }}</a></h4>
                  <span>by {{ $pod->created_by }}</span>
                  <div class="meta">
                     <ul>
                        <li>{{ date('F d, Y', strtotime($pod->created_at)) }}</li>
                     </ul>
                  </div>
               </div>
               <p>{!! str_limit(strip_tags($pod->content), 90) !!}</p>
                <ul class="co-words">
                    @foreach($pod->podtags as $tag)
                    <li value="{{ $tag->tag_id }}">{{ $tag->name }}</li>
                    @endforeach
                </ul>
               
                <p class="read-more"> <a href="{{url('podcast/' . $pod->slug)}}" class="box_btn">read more</a>
                    @if(isset($pod->cmt_count))
                        <span><i class="fa fa-comment" aria-hidden="true"></i> {{ $pod->cmt_count }}</span>
                    @endif
                </p>
            </div>
        </div>
    </div>
@endforeach
<div class="col-lg-12">
{!! $pods->render() !!}
</div>