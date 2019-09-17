
<?php $__env->startSection('title', 'Category Listing'); ?>
<?php $__env->startSection('css'); ?>
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div id="content" class="bg-container">
    <header class="head">
        <div class="main-bar">
            <div class="row no-gutters">
                <div class="col-6">
                    <h4 class="m-t-5">
                        <i class="fa fa-star"></i>
                        Seller Rating Listing
                    </h4>
                </div>
            </div>
        </div>
    </header>
    <?php if(session()->has('success')): ?>
    <div class="col-md-12">
        <div class="alert alert-success">
            <?php echo e(session()->get('success')); ?>

        </div>
    </div>
    <?php endif; ?>
    <?php if(session()->has('error')): ?>
    <div class="col-md-12">
        <div class="alert alert-success">
            <?php echo e(session()->get('error')); ?>

        </div>
    </div>
    <?php endif; ?>
    <div class="outer">
        <div class="inner bg-container">
            <!--top section widgets-->
            <div class="card">
                <div class="card-header bg-white">
                    Seller Rating Information
                </div>
                <div class="card-block m-t-35" id="user_body">
                    <div>
                        <div>
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Rating</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__empty_1 = true; $__currentLoopData = $sellers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $seller): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td><?php echo e($key+1); ?></td>
                                        <td><?php echo e($seller->name); ?></td>
                                        <td><?php echo e($seller->email); ?></td>
                                        <?php
                                        $rating = DB::table('seller_rating')
                                                    ->where('seller_id', $seller->id)
                                                    ->avg('rating');
                                        ?>
                                        <td><span class="rating-star-5" data-value="<?php echo e(round($rating,1,PHP_ROUND_HALF_UP)*10); ?>"></span></td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="4">No Seller Found</td>
                                    </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->
                </div>
            </div>
        </div> 
    </div>


    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('pagescript'); ?>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable({
				'columnDefs': [{
					'targets': [3], /* column index */
					'orderable': false, /* true or false */
				}]
			});
        } );
    </script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="<?php echo e(asset('public/sites/js/hillRate-jquery.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('public/sites/js/script.js')); ?> "></script>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/schoolsharks/resources/views/admin/seller_rating_list.blade.php ENDPATH**/ ?>