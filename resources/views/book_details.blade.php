@extends('layouts.app')
@section('title', $book->title)
@section('description', 'College textbooks for students, from students! Save money by buying your book from another student! Don\'t sell your book back to the book store, make real money selling on abc! | Buy Textbooks | Sell Textbooks | Buy Apparel | Blogs | Podcasts |')
@section('css')
@stop
@section('content')
    @php
        $book_id = $book->id;
    @endphp
<section class="product-wrapper dashboard-body">
    <div class="container-fluid">
        <div class="row product">
            <div class="col-lg-12">
                <h3> Products Details</h3></div>
            <hr class="divider-hr">
            @if(session()->has('success'))
                <div class="col-md-12">
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                </div>
            @endif
            <div class="product-descript">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-12 col-xs-12">
                            <div class="book-details-slider">
                                @if($book->bookImages->isNotEmpty())
                                <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                                    <!--Slides-->
                                    <div class="carousel-inner" role="listbox">
                                        @foreach($book->bookImages as $bookImages)
                                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                            <img class="d-block w-100" src="{{ url('public/images/books/original/' . $bookImages->image) }}"
                                                 alt="First slide">
                                        </div>
                                        @endforeach
                                    </div>
                                    <!--/.Slides-->
                                    <!--Controls-->
                                    <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                    <!--/.Controls-->
                                    <ol class="carousel-indicators">
                                        <?php $i = 0; ?>
                                        @foreach($book->bookImages as $bookImages)
                                        <li data-target="#carousel-thumb" data-slide-to="{{ $i }}" class="{{ $loop->first ? 'active' : '' }}">
                                            <img src="{{ url('public/images/books/original/' . $bookImages->image) }}" width="100">
                                        </li>
                                        <?php $i++; ?>
                                        @endforeach

                                    </ol>
                                </div>
                                @else
                                <img src="{{ url('public/images/books/default.gif') }}" weight="450px" height="600px">
                                @endif
                                <!-- #endregion Jssor Slider End -->
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="book-description-cls">
                                <h6>Book Title:<br>
                                    <span>{{ $book->title }}</span></h6>
                                @if (isset($book->book_desc))
                                <h6>Book Description:<br>
                                    <span>{!! $book->book_desc !!}</span>
                                </h6>
                                @endif
                                <h6>ISBN:<br>
                                    <span>{{ $book->isbn_no }}</span></h6>
                                <h6>School Name:<br>
                                    <span>{{ $book->school_name }}</span></h6>
                                @if (isset($book->book_condition))
                                <h6>Book Condition:<br>
                                    <span>{{ $book->book_condition }}</span>
                                </h6>                                
                                @endif
                                <h6>Seller Name:<br>
                                    <span>{{ $seller->name }}</span>
                                </h6>
                                <h6>Seller Rating:
                                    {{-- <span>{{ $rating }}</span> --}}
                                <span class="rating-star-5" data-value="{{ round($rating,1,PHP_ROUND_HALF_UP)*10 }}"></span>
                                <div class="clearfix"></div>
                                </h6>
                                
                                <div>
                                    <h6>Author Name:<br>
                                        @foreach($book->bookAuthors as $author)
                                        <span>{{$author->author}}</span><br>
                                        @endforeach
                                    </h6>
                                </div>
                                
                                <h6>Price:<br>
                                    <div class="numbers-text">
                                        @if ($book->perc_org_price > $book->perc_listing_price)
                                        <p class="test">${{ $book->perc_org_price }}</p>
                                        @endif
                                        <p>${{ $book->perc_listing_price }}</p>
                                    </div>
                                </h6>
                                    @if ((Auth::guest() || ($book->user_id != Auth::user()->id)) && ($book->quantity > 0))
                                    <div class="pro-color quantity">
                                        <h6> Quantity </h6>
                                        <input type="number" name="quantity" id="quantity" value="1" min="1" class="product_quantity">
                                    </div>

                                    <div class="buttons">
                                        <button type="button" id="add_cart" class="add-to-cart check-availability">ADD TO CART</button>
										<button type="button" id="buy_now" class="buy check-availability">BUY NOW</button>
                                    </div>
                                    @endif
                                    @if ($book->quantity < 1)
                                    <div class="" >
                                        <button style="margin-top: 20px;" type="button" class="btn btn-danger disabled">Sold Out</button>
                                    </div>
                                    @endif
                            </div>
                        </div>
                    </div>
                </div>

            </div


        </div>


    </div>
</div>

</section>
<!-- SCHOOL TOP PICKS section-->
@if(!$related_author_books->isEmpty())
<section class="gallerry related">
    <div class="container-fluid">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="all-heading anhanger-head"> <h4> Related Author Books</h4><img src="{{ url('public/sites/images/single-img.png')}}"> </div>
        </div>
        <div class="row padtop">
            @foreach ($related_author_books as $related_author_book)
				@php($flag = 1)
                @if(isset(session('cart')[$related_author_book->id]) && (($related_author_book->quantity > 0) 
                && session('cart')[$related_author_book->id]['quantity'] == $related_author_book->quantity))
                    @php ($flag = 2)
                @endif
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="gallery-sec">
                    <figure>
                        <a href="{{url('book_details/'.$related_author_book->id)}}">
                            <img 
                                src="{{ isset($related_author_book->image) ? 
                                    url('public/images/books/original/' . $related_author_book->image) : 
                                            url('public/images/books/default.gif') }}"
                                class="img-fluid"/>
                        </a>
                    </figure>
                    <div class="main-lest-items">
                        <div class="gallery-text-sec">
                            <p><a href="{{url('book_details/'.$related_author_book->id)}}">{{ $related_author_book->title }}</a></p>
                        </div>
                        <div class="border-textss">
                            <hr></hr>
                            @if ((Auth::guest() || ($related_author_book->user_id != Auth::user()->id))
                                && ($related_author_book->quantity > 0 && $flag == 1))
                            <div class="main-outer-circle">
                                <div class="main-inner-circle">
									<a href="javascript:void(0)">
                                        <img src="{{ asset('public/sites/images/bucket.png') }}" 
                                             onclick="return add_to_cart({{$related_author_book->id}});" 
                                             class="add_to_cart" data-toggle="tooltip" 
                                             data-placement="top" title="Add To Cart">
                                    </a>
                                </div>
                            </div>
                            @endif
                        </div>
                        
                        <div class="numbers-text">
                            @if ($related_author_book->perc_org_price > $related_author_book->perc_listing_price)
                            <p class="test">${{ $related_author_book->perc_org_price }}</p>
                            @endif
                            <p>${{ $related_author_book->perc_listing_price }}</p>
                        </div>
                        
                    </div>
					@if ($flag == 2)
                        <div class="sold"><p>Stock Out</p></div>
                    @endif
                    @if ($related_author_book->quantity == 0)
                        <div class="sold"><p>Sold Out</p></div>
                    @endif
                </div>
            </div>
            @endforeach
            <div class="col-md-1 col-sm-1 col-xs-1"></div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <a href="{{ route('all_book_list') }}" class="view-buton">View All</a>
        </div>
    </div>
</section>
@endif
<!-- end selbs section-->
@endsection
@section('pagescript')
<script>
	var base_url = "{{asset('/')}}"; 
    var flgDOMLoaded = false;
    if(flgDOMLoaded){
        $(".add_to_cart").prop("onclick", false);
    }
	$(document).ready(function(){
		flgDOMLoaded = true; // page done loading
		$('[data-toggle="tooltip"]').tooltip();
		// Prevent number input field to take negative value
		$("#quantity").keydown(function (e) {
			if (!((e.keyCode > 95 && e.keyCode < 106)
					|| (e.keyCode > 47 && e.keyCode < 58)
					|| e.keyCode == 8)) {
				return false;
			}
		});
		$('.check-availability').click(function () {
			var quantity = $('#quantity').val();
			var book_id = '{{$book_id}}';
			var button_id = this.id;
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
			$.ajax({
				url: '{{ url('check_quantity') }}',
				type: 'POST',
				data: {book_id: book_id, quantity: quantity, flag: button_id},
				success: function (data, status) {
					if (data == 0) {
						alert('Stock Not Availaible');
					} else if(data == 1) {
						location.reload(true);
					} else if(data == 'login') {
						location.href = base_url + 'login';
					} else if(data == 'shipping') {
						location.href = base_url + 'shipping';
					} else {
						alert("Some error occur! Please try again.");
					}
				},
				error: function (result) {
					alert("Some error occur! Please try again.");
				}
			});
		});
	});
	function add_to_cart(book_id){
        if(flgDOMLoaded){
            $(".add_to_cart").prop("onclick", true);
            location.href = base_url + 'add-to-cart/' + book_id;
        } else {
            $(".add_to_cart").prop("onclick", false);
        }
    }
</script>

<script type="text/javascript" src="{{asset('public/sites/js/hillRate-jquery.js')}}">
</script>
<script type="text/javascript" src="{{asset('public/sites/js/script.js')}} ">
</script>
@stop
