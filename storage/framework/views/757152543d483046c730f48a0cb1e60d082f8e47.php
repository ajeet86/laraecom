
<?php $__env->startSection('content'); ?>

<section class="product-wrapper dashboard-body">

<div class="container">

    <?php if(session('success')): ?>

        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>

    <?php endif; ?>
 
 <div>
  <div>
    <div>
      <div>
        <h1>Rate your seller </h1>
      </div>
      <?php echo $user->id;  // "<pre>"; print_r($user->id); die; ?>
	  
	  
	  
	  <form >

  

            <div class="form-group">

                <label>Name:</label>

                <input type="text" name="star" id="seller_star" class="form-control" placeholder="Name" required="">

            </div>

  
  
   			 <div class="rating-star-3"></div>



   

            <div class="form-group">

                <button class="btn btn-success btn-submit">Submit</button>

            </div>

  

        </form>
	  
	  
    </div>
  </div>
</div>

</div>
</section>
 
  <!-- JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous">
</script>
<script type="text/javascript" src="<?php echo e(asset('public/star_assets/plugin/js/hillRate-jquery.js')); ?>">
</script>
<script type="text/javascript" src="<?php echo e(asset('public/star_assets/js/script.js')); ?> ">
</script>
 
 
  <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 <script type="text/javascript">

   



   

    $(".btn-submit").click(function(e){
	
	var star=$('.selected_value').text();

    //  alert('aj');
	 // alert(star);
	//  return false;
        e.preventDefault();
        var name = star;

        $.ajax({

           type:'POST',
		   url: '<?php echo e(url('/ajaxRequest')); ?>',
           
           data:{name:name,'_token': $('meta[name="csrf-token"]').attr('content') },

           success:function(data){

              alert(data.success);

           }

        });

  

	});

</script>

   
 
 
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/schoolsharks/resources/views/ratesaller.blade.php ENDPATH**/ ?>