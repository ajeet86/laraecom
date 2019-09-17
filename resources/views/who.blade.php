@extends('layouts.app')
@section('title', 'Who We Are | abc')
@section('description', 'Our Story abc came to be because of three friends who had a vision of becoming successful entrepreneurs, while also providing a service that is beneficial to the community. The three of us met the first week of college and became friends shortly after. Our friendship was based on our shared faith, baseball and our dreams of becoming entrepreneurs.')
@section('content')
<section class="product-wrapper dashboard-body">
	<div class="container">
	
	
   <!--<div>
  <div>
    <div>
      <div>
        <h1>WHO WE ARE</h1>
      </div>
      <div>
        <h2 data-theme-editor-setting="section.feature-row.title/escape">Our Story</h2>
        <div data-theme-editor-setting="section.feature-row.text">
          <p>abc came to be because of three friends who had a vision of   becoming successful entrepreneurs, while also providing a service that   is beneficial to the community. The&nbsp;three of us met the first week of   college and became friends shortly after. Our friendship was based on   our shared faith, baseball, and our dreams of becoming entrepreneurs. We   spent hours brainstorming in the cafeteria of a solution to some sort   of problem in our community. We were all on the same page that we were   your typical "broke college students".&nbsp; We wanted to provide services to   students to help save money, and then we&nbsp;came up with the idea of   abc. From there we worked on creating a business model so that   we could effectively provide this service to as many students as   possible. Through hard work and vigorous amounts of student feedback and   research, we launched abc!</p>
          <p>&nbsp;</p>
          <h2 data-theme-editor-setting="section.feature-row.title/escape">What We Do</h2>
          <p>abc LLC has three goals as a company. The first is to save   you money on your textbooks. The second is to make you more money on   your textbooks. And the third is to make that process as easy as   possible! If we can do those three things for our customers, we are   happy!</p>
          <p><img src="https://cdn.shopify.com/s/files/1/0014/3782/7117/files/About_us_medium.PNG?v=1553044966" alt="logo"></p>
        </div>
      </div>
    </div>
  </div>
</div>-->
 
 
 
<?php echo $who->description ?>


</div>
</section>
 
@endsection