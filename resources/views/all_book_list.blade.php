@extends('layouts.app')
@section('title', 'Collections | abc')
@section('description', 'College textbooks for students, from students! Save money by buying your book from another student! Don\'t sell your book back to the book store, make real money selling on abc! | Buy Textbooks | Sell Textbooks | Buy Apparel | Blogs | Podcasts |')
@section('css')
<link href="{{URL::asset('/public/css/chosen.css')}}" rel="stylesheet">
<!--<link href="{{URL::asset('/public/css/multi-select.css')}}" rel="stylesheet">-->
@stop
@section('content')
<section class="product-wrapper dashboard-body">
    
    <div class="container-fluid">
        <div class="row product">
            @include('layouts.left_sidebar')
            <div class="col-lg-9 produst-right-side">
                <div class="dash-container">
                    <h3> Books </h3>
                    <hr class="divider-hr">
                    <input type="hidden" name="hidden_page" id="hidden_page" value="1" />
                    <input type="hidden" name="hidden_category" id="hidden_category" value="" />
                    <input type="hidden" name="hidden_price" id="hidden_price" value="" />
                    <input type="hidden" name="hidden_author" id="hidden_author" value="" />
                    <input type="hidden" name="hidden_availability" id="hidden_availability" value="" />
                    <input type="hidden" name="hidden_school" id="hidden_school" value="" />
                    <section class="gallerry" id="tag_container">
                        <!-- SCHOOL TOP PICKS section-->
                        @include('book_list_result')
                    </section>
                </div>
            </div>

        </div>

    </div>


</section>
@endsection
@section('pagescript')
<script>
	var base_url = "{{asset('/')}}";
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
	var flgDOMLoaded = false;
    if(flgDOMLoaded){
        $(".add_to_cart").prop("onclick", false);
    }
    $(document).ready(function ()
    {
        $(".chzn-select").chosen({allow_single_deselect: true});
        $(".chzn-select-deselect,#select2_sample").chosen();
        flgDOMLoaded = true; // page done loading
        $('[data-toggle="tooltip"]').tooltip();
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
        $(document).on('click', '.filter li', function () {
            $('#hidden_page').val(1);
            var priceRange = get_filter('price_range');
            var category = get_filter('category');
            //var author = get_filter('author');
            //var school = get_filter_multiselect('school');
            var author = $(".author").val();
            var school = $(".school").val();
            var availability = $(this).attr("data-id");
            $('#hidden_category').val(category);
            $('#hidden_price').val(priceRange);
            $('#hidden_author').val(author);
            $('#hidden_school').val(school);
            $('#hidden_availability').val(availability);
            getData();
        });

        function get_filter(class_name)
        {
            var filter = [];
            $('.' + class_name + ':checked').each(function () {
                filter.push($(this).val());
            });
            return filter;
        }
        /*function get_filter_multiselect(class_name)
        {
            var filter = [];
            $('.' + class_name + ' option:selected').each(function () {
                filter.push($(this).val());
            });
            return filter;
        }*/

    });
	function add_to_cart(book_id){
        if(flgDOMLoaded){
            //console.log("Hi");
            $(".add_to_cart").prop("onclick", true);
            location.href = base_url + 'add-to-cart/' + book_id;
        } else {
            $(".add_to_cart").prop("onclick", false);
        }
    }
    function getData() {
        var page = $('#hidden_page').val();
        var category = $('#hidden_category').val();
        var title = $("#book_title").val();
        if(category != '')
        category = category.split(',');
        var priceRange = $('#hidden_price').val();
        if(priceRange != '')
        priceRange = priceRange.split(',');
        var author = $('#hidden_author').val();
        if(author != '')
        author = author.split(',');
        var availability = $('#hidden_availability').val();
        var school = $("#hidden_school").val();
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        $.ajax({
            url: 'fetch_data',
            method: "POST",
            data: {book_title:title, priceRange: priceRange, category: category, author: author,
                availability: availability, school: school, page: page},
        }).done(function (data) {
            $("#tag_container").empty().html(data);
            location.hash = page;
			$('[data-toggle="tooltip"]').tooltip();
        }).fail(function (jqXHR, ajaxOptions, thrownError) {
            alert('No response from server');
        });
    }
</script>

<script src="{{URL::asset('/public/js/chosen.jquery.js')}}"></script>
<!--<script src="{{URL::asset('/public/js/jquery.multi-select.js')}}"></script>-->
<!--<script src="{{URL::asset('/public/admn/js/pages/form_elements.js')}}"></script>-->
@stop
