<div class="row">
    @if(!$books->isEmpty())
        @foreach ($books as $book)
			@php($flag = 1)
            @if(isset(session('cart')[$book->id]) && (($book->quantity > 0) && session('cart')[$book->id]['quantity'] == $book->quantity))
                @php ($flag = 2)
            @endif
            <div class="col-md-3">
                <div class="gallery-sec">
                    <figure><a href="{{url('book_details/'.$book->id)}}"><img src="{{ isset($book->image) ? url('public/images/books/original/' . $book->image) : url('public/images/books/default.gif')}}" class="img-fluid"></a></figure>
                    <div class="main-lest-items">
                        <div class="gallery-text-sec">
                            <p><a href="{{url('book_details/'.$book->id)}}">{{ $book->title }}</a></p>
                        </div>
                        <div class="border-textss">
                            <hr></hr>
                            @if ((Auth::guest() || ($book->user_id != Auth::user()->id)) 
                            && ($book->quantity > 0 && $flag == 1))
                                <div class="main-outer-circle">
                                    <div class="main-inner-circle">
                                        <a href="javascript:void(0)">
                                            <img src="{{ asset('public/sites/images/bucket.png') }}" 
                                                 onclick="return add_to_cart({{$book->id}});" 
                                                 class="add_to_cart" 
                                                 data-toggle="tooltip"
                                                 data-placement="top"
                                                 title="Add To Cart">
                                        </a>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="numbers-text">
                            @if ($book->perc_org_price > $book->perc_listing_price)
                            <p class="test">${{ $book->perc_org_price }}</p>
                            @endif
                            <p>${{ $book->perc_listing_price }}</p>
                        </div>
                    </div>
					@if ($flag == 2)
                        <div class="sold"><p>Stock Out</p></div>
                    @endif
                    @if ($book->quantity == 0)
                        <div class="sold"><p>Sold Out</p></div>
                    @endif
                </div>
            </div>
        @endforeach
        <div class="col-md-12">
            {!! $books->render() !!}
        </div>
    @else
    <div class="col-md-12"><p class="no-found"> No Book Found </p></div>
    @endif
</div>
