<?php $__env->startSection('content'); ?>
<div class="container"  style="background-color: #fafafa; border-radius: 20px;">
    
    <div class="row">
        <div class="watchapp_col-md-12" style="padding-top: 20px;">
            <h1>
                Edit Watch
                <a href="<?php echo e(route('home')); ?>" style="float:right;" class="btn btn-primary pull-right">Go Back</a>
            </h1>

        </div>
    </div>
    <form method="post" action="<?php echo e(route('update')); ?>" enctype="application/x-www-form-urlencoded">
        <input type="hidden" name="id" value="<?php echo e($Watch->id); ?>">
        <?php echo e(csrf_field()); ?>

    <div class="row">
        <div class="watchapp_col-md-4">
            <label for="ValidationFrm01">Watch Price</label>
            <input type="text" name="Watch_price" value="<?php echo e($Watch->Watch_price); ?>" class="form-control" id="ValidationFrm01" placeholder="Watch Price" value="Watch Price" required>
        </div>
        <div class="watchapp_col-md-4">
            <label for="validationDefaultUsername">Release Year</label>
            <input type="text" name="Watch_year" value="<?php echo e($Watch->Watch_year); ?>" class="form-control" id="validationDefaultUsername" placeholder="Release Year" aria-describedby="inputGroupPrepend2" required>
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="watchapp_col-md-4">
            <label for="ValidationFrm01">Watch Color</label>
            <input type="text" name="Watch_color" value="<?php echo e($Watch->Watch_color); ?>" class="form-control" id="ValidationFrm01" placeholder="Watch Color" value="" required>
        </div>
        <div class="watchapp_col-md-4">
            <label for="validationDefault02">Watch Name</label>
            <input type="text" name="Watch_company" value="<?php echo e($Watch->Watch_company); ?>" class="form-control" id="validationDefault02" placeholder="Watch Name" value="" required>
        </div>
        <div class="watchapp_col-md-4">
            <label for="validationDefaultUsername">Watch Type</label>
            <input type="text" name="Watch_type" value="<?php echo e($Watch->Watch_type); ?>" class="form-control" id="validationDefaultUsername" placeholder="Watch Type" aria-describedby="inputGroupPrepend2" required>
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="watchapp_col-md-4" style="padding-bottom: 20px;">
            <button class="btn btn-primary" type="submit">Update</button>
        </div>
    </div>
    </form>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\WatchApp\resources\views/edit.blade.php ENDPATH**/ ?>