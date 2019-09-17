<?php 	//echo '<pre>';print_r($order_details);die; ?>

	<div id="page-wrapper" >
		<div id="page-inner">
		<div class="company-details">
		
			Hi,<br/><br/>
			An order has been placed by {{ $user_name }} and payment has done successfully.
                        @if($sender == 'Admin')
                            Please find attachment for order invoice.
                        @else
                        Please click on the link to see more details <a href="{{ $link }}">Your Sells Order</a>.
                        @endif
                       
			<br/><br/>
			best regards<br/>
			Schoolshark<br/>
		</div>
		
		
		</div>
	</div>  
               

