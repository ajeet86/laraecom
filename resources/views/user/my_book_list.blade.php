@extends('layouts.app')
@section('title', 'My Collections | abc')
@section('description', 'College textbooks for students, from students! Save money by buying your book from another student! Don\'t sell your book back to the book store, make real money selling on abc! | Buy Textbooks | Sell Textbooks | Buy Apparel | Blogs | Podcasts |')
@section('content')
<section class="dashboard-body product-wrapper">
    <div class="container-fluid">
        <div class="row">
            @include('layouts.user_sidebar')
            <div class="col-lg-9 produst-right-side">
                <div class="dash-container">
                    <div class="row">
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
                    </div>
                    <h3> My Books </h3>
                    <hr class="divider-hr">
                    <section class="gallerry" id="tag_container">
                        <!-- SCHOOL TOP PICKS section-->
                        @include('user.my_book_list_result')
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('pagescript')
<script>
    $(window).on('hashchange', function () {
        if (window.location.hash) {
            var page = window.location.hash.replace('#', '');
            if (page == Number.NaN || page <= 0) {
                return false;
            } else {
                getData(page);
            }
        }
    });

    $(document).ready(function ()
    {
        $(document).on('click', '.pagination a', function (event)
        {
            event.preventDefault();
            $('li').removeClass('active');
            $(this).parent('li').addClass('active');
            var myurl = $(this).attr('href');
            var page = $(this).attr('href').split('page=')[1];
            $('#hidden_page').val(page);
            getData();
        });
        function getData() {
            var page = $('#hidden_page').val();
            var category = $('#hidden_category').val();
            if (category != '')
            category = category.split(',');
            var priceRange = $('#hidden_price').val();
            if (priceRange != '')
            priceRange = priceRange.split(',');
            var author = $('#hidden_author').val();
            if (author != '')
            author = author.split(',');
            var availability = $('#hidden_availability').val();
            $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
            $.ajax({
                url: 'fetchBooks',
                method: "POST",
                data: {priceRange: priceRange, category: category, author: author,
                                availability: availability, page: page},
            }).done(function (data) {
            $("#tag_container").empty().html(data);
                location.hash = page;
            }).fail(function (jqXHR, ajaxOptions, thrownError) {
            alert('No response from server');
            });
        }
    });
</script>
@stop
