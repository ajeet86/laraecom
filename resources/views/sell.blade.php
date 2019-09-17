@extends('layouts.app')
@section('content')


<section class="login-wrapper">

<div class="container">

    @if(session('success'))

        <div class="alert alert-success">
            {{ session('success') }}
        </div>

    @endif
 
<div>
  <div>
    <div>
      <div>
        <h1>Sell Textbooks</h1>
      </div>
      <div>
        <p>&#65279;<img src="https://cdn.shopify.com/s/files/1/0014/3782/7117/files/header_60666437-fc03-40cc-9560-3e270b147b7b_large.PNG?v=1553300719" alt="ok"></p>
        <p><strong>Welcome to the SCHOOL SHARK selling page!</strong></p>
        <p><strong>To sell your textbook, please copy paste this template and send us an email at</strong></p>
        <p><strong> sell.schoolsharkllc@gmail.com!</strong></p>
        <p><strong>For your listing price, we recommend checking what your book   is new and multiplying it by 36% to give both you and the buyer the best   deal possible! We will review your price, if deemed un-competitive, we   will make your price competitive and alert you if you wish to continue   with that price.</strong></p>
        <p><strong>The first line is what your book will be listed under, which   includes the MAJOR AND CLASS it is used for, followed by the TITLE of   the book (see below). This is so the buy can find the book that they are   looking for as easy as possible!</strong></p>
        <p>&nbsp;</p>
        <p><strong>Listing Title (E/M 110-Intro to Financial Accounting):</strong></p>
        <p><strong>Author:</strong></p>
        <p><strong>ISBN #:</strong></p>
        <p><strong>Selling Price:</strong></p>
        <p><strong>Condition:</strong></p>
        <p><strong>Picture of front cover:</strong></p>
        <p><strong>Phone number for contact and delivery instructions:</strong></p>
        <p><strong>Venmo username:&nbsp;</strong></p>
        <p><strong>Paypal (If you do not have venmo):</strong></p>
        <p>&nbsp;</p>
        <p><strong>Once you email&nbsp;the info, we will upload the book, and alert   you within 24 hours when your book is sold. If you have any questions,   please refer to our <a href="https://schoolshark.co/pages/faq" title="SCHOOL SHARK | FAQ">FAQ</a>.&nbsp;</strong></p>
        <p><strong>**NOTE: All books sold are subject to a transaction fee**</strong></p>
        <p><strong>THANK YOU FOR BELIEVING IN SCHOOL SHARK!</strong></p>
        <p><strong>sell.schoolsharkllc@gmail.com</strong></p>
        <p>&nbsp;</p>
      </div>
    </div>
  </div>
</div>
</div>

 </section>

@endsection