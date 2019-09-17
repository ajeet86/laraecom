


<?php 	//echo '<pre>';print_r($order_details);die; ?>

	<div id="page-wrapper" >
		<div id="page-inner">
	Hi,<br/><br/>
	
	User with email: {{$email_address}} wants to cancel his/her order.<br/>
        Please find below the order id. Order Id: {{$order_id}} <br/>
	Cancellation reason: <?php echo $client_message; ?>
		</div>
	</div>  
               

