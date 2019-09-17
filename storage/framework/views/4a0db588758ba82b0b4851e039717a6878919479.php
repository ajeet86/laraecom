<div class="col-lg-3">
<aside>
<h3> Filter </h3>
    <!--Accordion wrapper-->
<div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingOne1">
      <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
        aria-controls="collapseOne1">
        <h5 class="mb-0">CATEGORIES <i class="fa fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
      data-parent="#accordionEx">
      <div class="card-body">
          <ul class="filter">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <input type="checkbox" value="<?php echo e($category->id); ?>" <?php echo e(isset($cat_id) ? ($category['id']) == $cat_id ? 'checked' : '' : ''); ?> class="category"><label class="square" for="prices--25">&nbsp;&nbsp;<?php echo e($category->name); ?></label>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div>
    </div>

  </div>
  <!-- Accordion card -->

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingTwo2">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
        aria-expanded="false" aria-controls="collapseTwo2">
        <h5 class="mb-0">PRICES <i class="fa fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
      data-parent="#accordionEx">
      <div class="card-body">
          <ul class="filter">
            <li>
                <input type="checkbox" value="-25" id="prices--25" name="condition" class="price_range"><label class="square" for="prices--25">&nbsp;&nbsp;Under $25</label>
            </li>
            <li>
                <input type="checkbox" value="25-50" id="prices-25-50" name="condition" class="price_range"><label class="square" for="prices-25-50">&nbsp;&nbsp;$25 - $50</label>
            </li>
            <li>
                <input type="checkbox" value="50-100" id="prices-50-100" name="condition" class="price_range"><label class="square" for="prices-50-100">&nbsp;&nbsp;$50 - $100</label>
            </li>
            <li>
                <input type="checkbox" value="100-250" id="prices-100-250" name="condition" class="price_range"><label class="square" for="prices-100-250">&nbsp;&nbsp;$100 - $250</label>
            </li>
            <li>
                <input type="checkbox" value="250-500" id="prices-250-500" name="condition" class="price_range"><label class="square" for="prices-250-500">&nbsp;&nbsp;$250 - $500</label>
            </li>
            <li>
                <input type="checkbox" value="500-" id="prices-500-" name="condition" class="price_range"><label class="square" for="prices-500-">&nbsp;&nbsp;Over $500</label>
            </li>
        </ul>
      </div>
    </div>

  </div>
  <!-- Accordion card -->

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingThree3">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3"
        aria-expanded="false" aria-controls="collapseThree3">
        <h5 class="mb-0">AUTHOR <i class="fa fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
      data-parent="#accordionEx">
      <div class="card-body">
          <ul class="filter">
            <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <input type="checkbox" value="<?php echo e($author->author); ?>" class="author"><label class="square" for="author">&nbsp;&nbsp;<?php echo e($author->author); ?></label>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div>
    </div>

  </div>
  <!-- Accordion card -->

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingFive5">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseFive5"
        aria-expanded="false" aria-controls="collapseFive5">
        <h5 class="mb-0">AVAILABILITY <i class="fa fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseFive5" class="collapse" role="tabpanel" aria-labelledby="headingFive5"
      data-parent="#accordionEx">
      <div class="card-body">
        <ul class="filter">
            <li data-id=""><a href="javascript:void(0)">All</a></li>
            <li data-id="1"><a href="javascript:void(0)">Available</a></li>
            <li data-id="0"><a href="javascript:void(0)">Sold</a></li>
        </ul>
      </div>
    </div>

  </div>
  <!-- Accordion card -->

</div>
<!-- Accordion wrapper -->
</aside>
</div><?php /**PATH /var/www/html/schoolshark1/resources/views/layouts/left_sidebar.blade.php ENDPATH**/ ?>