<div class="row">
    @if(!$books->isEmpty())
        @foreach ($books as $book)
            <div class="col-md-3">
                <div class="gallery-sec">
                    <div class="icon_wrapper">
                        <ul>
                            <li><a href="{{url('edit_book/'.$book->id)}}" title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
                            <li>
                                @if($book->publish == 1)
                                <a href="{{url('pub_unpub_book/'.$book->id)}}" 
                                   title="publish" onclick="return confirm('Are you sure you want to unpublish this book?')">
                                    <i class="fa fa-cloud-upload text-success" aria-hidden="true"></i>
                                </a>
                                @else
                                    <a href="{{url('pub_unpub_book/'.$book->id)}}"
                                       title="unpublish" onclick="return confirm('Are you sure you want to publish this book?')">
                                        <i class="fa fa-cloud-upload text-danger" aria-hidden="true"></i>
                                    </a>
                                @endif
                            </li>
                        </ul>
                    </div>
                    <figure><a href="{{url('book_details/'.$book->id)}}">
						<img src="{{ isset($book->image) ? url('public/images/books/original/' . $book->image) : url('public/images/books/default.gif')}}" class="img-fluid"></a>
					</figure>
                    <div class="main-lest-items">
                        <div class="gallery-text-sec">
                            <p><a href="{{url('book_details/'.$book->id)}}">{{ $book->title }}</a></p>
                        </div>
                        <div class="border-textss">
                            <hr></hr>
                        </div>
                        <div class="numbers-text">
                            @if ($book->perc_org_price > $book->perc_listing_price)
                                <p class="test">${{ $book->perc_org_price }}</p>
                            @endif
                            <p>${{ $book->perc_listing_price }}</p>
                        </div>
                    </div>
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
        No Book Found
    @endif
</div>
