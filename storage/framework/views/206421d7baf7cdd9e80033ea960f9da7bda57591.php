<?php $__env->startSection('content'); ?>
<section class="product-wrapper dashboard-body">
<div class="container">
	<?php ($my_items = []); ?>
	<p style="display:none;" class="alert <?php echo e(Session::get('alert-class', 'alert-info')); ?> cart-message" ></p>
	<div class="row">
        <?php if(session()->has('message')): ?>
            <?php ($my_items = session()->get('my_items')); ?>
        <div class="col-md-12">
                <div class="alert alert-danger">
                    <?php echo e(session()->get('message')); ?>

                </div>
        </div>
        <?php endif; ?>
    </div>
    <table id="cart" class="table table-hover table-condensed">
        <thead>
        <tr>
            <th style="width:50%">Book</th>
            <th style="width:10%">Price</th>
            <th style="width:8%">Quantity</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%">Remove</th>
        </tr>
        </thead>
        <tbody>

        <?php $total = 0 ?>
        <?php if(session('cart')): ?>
            <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $total += $details['price'] * $details['quantity'] ?>
                <tr class="<?php echo e((in_array($id, $my_items)) ? 'my_item' : ''); ?>">
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"><img 
                                    src="<?php echo e(!empty($details['photo']) ? url('public/images/books/original/' . $details['photo']) : url('public/images/books/default.gif')); ?>"
                                    width="100" height="100" class="img-responsive"/></div>
                            <div class="col-sm-9">
                                <p class="nomargin"><?php echo e($details['name']); ?></p>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">$<?php echo e($details['price']); ?></td>
                    <td data-th="Quantity">
                        <input type="number" 
                               value="<?php echo e($details['quantity']); ?>"
                               book_id ="<?php echo e($id); ?>" min="1"
                               class="form-control quantity" id="quantity"/>
                    </td>
                    <td data-th="Subtotal" class="text-center" id="sub_tot_<?php echo e($id); ?>">$<?php echo e($details['price'] * $details['quantity']); ?></td>
                    <td class="actions" data-th="">
                        <!--<button class="btn btn-info btn-sm update-cart" data-id="<?php echo e($id); ?>"><i class="fa fa-refresh"></i></button>-->
                        <button class="btn btn-danger btn-sm remove-from-cart" data-id="<?php echo e($id); ?>"><i class="fa fa-trash-o"></i></button>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
        <tr>
            <td colspan="5">No Item Found</td>
        </tr>
        <?php endif; ?>

        </tbody>
    </table>
    <table id="cart" class="table table-hover table-condensed">
        <tbody>
       <!--  <tr class="visible-xs">
            <td class="text-center"><strong>Total <?php echo e($total); ?></strong></td>
        </tr> -->
        <tr>
            <td><a href="<?php echo e(url('/all_book_list')); ?>" class="btn btn-warning check-out-btn all-btn-theme"><i class="fa fa-angle-left"></i> Continue Shopping</a>
            <?php if(session('cart')): ?>
                <a href="<?php echo e(Auth::guest() ? url('/login') : url('/check_list')); ?>" class="btn btn-warning all-btn-theme chk"><i class="fa fa-angle-right"></i> Checkout</a>
            <?php endif; ?>
            </td>
            <td colspan="2" class="hidden-xs"></td>
            <td class="hidden-xs"><strong>Total $<?php echo e($total); ?></strong></td>
        </tr>
        </tbody>
    </table>
    </div>
</section>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('pagescript'); ?>


    <script type="text/javascript">
	  $(".chk").click(function (e) {
		var neg=  $('.quantity').val();

		if(neg < 1){
			alert('please add numeric value'); 
			return false;
		}
	  });

        /*$(".update-cart").click(function (e) {
           e.preventDefault();
           var ele = $(this);
            $.ajax({
               url: '<?php echo e(url('update-cart')); ?>',
               method: "patch",
               data: {_token: '<?php echo e(csrf_token()); ?>', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
               success: function (response) {
                   window.location.reload();
               }
            });
        });*/
        // Select your input element.
		var quantity = document.getElementById('quantity');

		// Listen for input event on numInput.
		$("#quantity").keydown(function(e){
            if(!((e.keyCode > 95 && e.keyCode < 106)
                  || (e.keyCode > 47 && e.keyCode < 58) 
                  || e.keyCode == 8)) {
                return false;
            }
        });
        $(".quantity").on("keyup change", function() {
            var ele = $(this);
            var quantity = ele.val();
            if(quantity == 0){
                    $(".cart-message").css("display","block");
                     $('.cart-message').html('Quantity must be greater then 0.');
                    return false;	
            }
            quantity = quantity.replace(/^0+/, '');
            if (quantity.match(/^[0-9]+$/) == null){
                    $(".cart-message").css("display","block");
                     $('.cart-message').html('You can add numeric value only');
                    return false;	

            }
            var book_id = ele.attr('book_id');
            var tot = parseInt(quantity) * parseFloat();

            $.ajax({
                url: '<?php echo e(url('update-cart')); ?>',
                method: "patch",
                data: {_token: '<?php echo e(csrf_token()); ?>', 
			   id: book_id, quantity: quantity			   
			   },
                success: function (response) {
                    $(".cart-message").css("display","block");
                    $('.cart-message').html(response.message);
                    if(response.is_updated == 0){
                        setInterval(function(){ window.location.reload(); }, 2000);
                    } else {
                        setInterval(function(){ window.location.reload(); }, 1000);
                    }
                }
            });
			   
        });

        $(".remove-from-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            if(confirm("Are you sure you want to delete this item?")) {
                $.ajax({
                    url: '<?php echo e(url('remove-from-cart')); ?>',
                    method: "DELETE",
                    data: {_token: '<?php echo e(csrf_token()); ?>', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });

    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/schoolsharks/resources/views/cart.blade.php ENDPATH**/ ?>