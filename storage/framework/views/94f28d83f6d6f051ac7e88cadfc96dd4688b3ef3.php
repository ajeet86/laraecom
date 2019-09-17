<?php 	//echo '<pre>';print_r($order_details);die; ?>

	<div id="page-wrapper" >
		<div id="page-inner">
		<div class="company-details">
		
			Hi,<br/><br/>
			An order has been placed by <?php echo e($user_name); ?> and payment has done successfully.
                        <?php if($sender == 'Admin'): ?>
                            Please find attachment for order invoice.
                        <?php else: ?>
                        Please click on the link to see more details <a href="<?php echo e($link); ?>">Your Sells Order</a>.
                        <?php endif; ?>
                       
			<br/><br/>
			best regards<br/>
			Schoolshark<br/>
		</div>
		
		
		</div>
	</div>  
               

<?php /**PATH /var/www/html/schoolsharks/resources/views/user/ack_paymentMail.blade.php ENDPATH**/ ?>