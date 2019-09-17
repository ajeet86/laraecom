@extends('layouts.app')
@section('title', 'abc Apparel')
@section('description', 'Whether you\'re hitting the books, hitting the beach, hitting the weights, or hitting the bars, we want you to feel good repping abc!')
@section('content')

<section class="product-wrapper dashboard-body">

<div class="container">

    @if(session('success'))

        <div class="alert alert-success">
            {{ session('success') }}
        </div>

    @endif
 
 <!--<div>
  <div>
    <div>
      <div>
        <h1>abc Swag</h1>
      </div>
      <div>
        <div> <a href="https://schoolshark.co/pages/www.bonfire.com/schoolshark" target="_blank" title="abc Apparel" rel="noopener noreferrer" aria-describedby="a11y-new-window-message">&#65279;</a><a href="http://www.bonfire.com/schoolshark" target="_blank" title="abc Apparel " rel="noopener noreferrer" aria-describedby="a11y-new-window-external-message">SHOP NOW</a><br>
          Check   our our new apparel to get ready for the books this spring or the beach   this summer! Simply click on the link and check it out! Here are some   samples of apparel we have available:</div>
        <div> <img alt="ss" src="https://cdn.shopify.com/s/files/1/0014/3782/7117/files/blue_long_sleeve_compact.PNG?v=1555599253" width="173" height="152"><img src="https://cdn.shopify.com/s/files/1/0014/3782/7117/files/pink_tee_back_compact.PNG?v=1555599280" alt="ss"><img src="https://cdn.shopify.com/s/files/1/0014/3782/7117/files/navy_bro_tank_compact.PNG?v=1555599270" alt="ss" width="119" height="149"><img src="https://cdn.shopify.com/s/files/1/0014/3782/7117/files/blue_girls_tank_compact.PNG?v=1555599260" alt="ss"><img src="https://cdn.shopify.com/s/files/1/0014/3782/7117/files/white_hoodie_compact.PNG?v=1555599530" alt="ss"><img src="https://cdn.shopify.com/s/files/1/0014/3782/7117/files/grew_crew_compact.PNG?v=1555599602" alt="ss"> </div>
        <p>All apparel ranges from $20-$40.&nbsp;</p>
        <p>www.bonfire.com/schoolshark</p>
      </div>
    </div>
  </div>
</div>-->
<?php echo $apparel->description ?>

</div>
</section>
 
@endsection