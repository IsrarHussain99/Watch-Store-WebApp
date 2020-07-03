<?php $__env->startSection('content'); ?>
<div class="container" style="background-color: #A1A1A1  ; border-radius: 20px;">

<!-- Title  -->
<h4 class="align-middle" style="padding-top: 30px;">Search Watches</h4>
    <div class="row">
      <div class="watchapp_col-md-12">

        <!-- ADD WATCH BUTTON  -->
    <a href="<?php echo e(route('create')); ?>" class="btn btn-primary float-lg-right"><i class="fa fa-plus fa-1x"></i> Add Watch</a>
    </div>
   </div>


  <!-- The form below contains all the fields (database records)  -->
  <form method="post" action="<?php echo e(route('search')); ?>" enctype="application/x-www-form-urlencoded">
      <?php echo e(csrf_field()); ?>

  <div class="row">
     <div class="watchapp_col-md-4">
        <label for="validationDefault02">Watch Name</label>
        <input type="text" name="Watch_company" class="form-control" id="validationDefault02" placeholder="Watch Name" value="">
     </div>

     <div class="watchapp_col-md-4">
          <label for="ValidationFrm01">Watch Price</label>
          <input type="text" name="Watch_price" class="form-control" id="ValidationFrm01" placeholder="Watch Price" value="">
     </div>
  </div>
<!-- Break  -->
  <br>
  <div class="row">
     <div class="watchapp_col-md-4">
       <label for="ValidationFrm01">Watch Color</label>
       <input type="text" name="Watch_color" class="form-control" id="ValidationFrm01" placeholder="Watch Color" value="">
     </div>
      <div class="watchapp_col-md-4">
      <label for="validationDefaultUsername">Release Year</label>
      <input type="text" name="Watch_year" class="form-control" id="validationDefaultUsername" placeholder="Release Year" aria-describedby="inputGroupPrepend2">
      </div>
  </div>
<!-- Break  -->
<br/>
    <div class="row">
    <div class="watchapp_col-md-4">
      <!-- Search Button  -->
            <button class="btn btn-primary" type="submit">Search</button>
    </div>
    </div>
  </form>
<!-- End of Form  -->

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\WatchApp\resources\views/home.blade.php ENDPATH**/ ?>