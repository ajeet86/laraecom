<?php 	//echo '<pre>';print_r($order_details);die; ?>

	<div id="page-wrapper" >
		<div id="page-inner">
		<div class="company-details">
		
			Hello Admin,<br/><br/>
			Please find below user details submitted from contact us form. <br/>
                        Name: <?php echo e($name); ?><br/>
                        Email: <?php echo e($email); ?><br/>
                        Phone: <?php echo e($phone); ?><br/>
                        Message: <?php echo e($body_message); ?><br/>
                       
			<br/><br/>
			best regards<br/>
			Schoolshark<br/>
		</div>
		
		
		</div>
	</div>  
               

<?php /**PATH /var/www/html/schoolsharks/resources/views/contact_us_mail.blade.php ENDPATH**/ ?>