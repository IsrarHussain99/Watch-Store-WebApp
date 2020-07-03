<?php $__env->startSection('content'); ?>
    <div class="container"  style="background-color: #fafafa; border-radius: 20px;">
        <h3 class="align-middle" style="padding-top: 20px;">Watches Data</h3>
        <div class="row">
            <div class="watchapp_col-md-12">
                <a href="<?php echo e(route('create')); ?>" class="btn btn-primary float-lg-right"><i class="fa fa-plus fa-1x"></i> Add Watch</a>
            </div>
        </div>

        <form method="post" action="<?php echo e(route('search')); ?>" enctype="application/x-www-form-urlencoded">
            <?php echo e(csrf_field()); ?>

            <div class="row">
                <div class="watchapp_col-md-4">
                    <label for="validationDefaultUsername">Watch Year</label>
                    <input type="text" name="Watch_year" class="form-control" id="validationDefaultUsername" placeholder="Watch Year" aria-describedby="inputGroupPrepend2">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="watchapp_col-md-4">
                    <label for="ValidationFrm01">Watch Price</label>
                    <input type="text" name="Watch_price" class="form-control" id="ValidationFrm01" placeholder="Watch Price" value="">
                </div>
                <div class="watchapp_col-md-4">
                    <label for="ValidationFrm01">Watch Color</label>
                    <input type="text" name="Watch_color" class="form-control" id="ValidationFrm01" placeholder="Watch Color" value="">
                </div>
                <div class="watchapp_col-md-4">
                    <label for="validationDefault02">Watch Name</label>
                    <input type="text" name="Watch_company" class="form-control" id="validationDefault02" placeholder="Watch Name" value="">
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="watchapp_col-md-4">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </div>
        </form>
        <br/>

        <div class="row justify-content-center">
            
            
            

            
            <?php if(session('status')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo e(session('status')); ?>

                </div>
            <?php endif; ?>

            
            
            
            
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="watchapp_col">#</th>
                    <th scope="watchapp_col">Watch Name</th>
                    <th scope="watchapp_col">Watch Color</th>
                    <th scope="watchapp_col">Watch Price</th>
                    <th scope="watchapp_col">Watch Year</th>
                    <th scope="watchapp_col">Watch Type</th>
                    <th scope="watchapp_col" style="width: 15%;">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php if($Watches->count() > 0): ?>
                    <?php $__currentLoopData = $Watches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Watch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr style="background: #9ebf7c;">
                            <th scope="row"><?php echo e($Watch->id); ?></th>
                            <td><?php echo e($Watch->Watch_company); ?></td>
                            <td><?php echo e($Watch->Watch_color); ?></td>
                            <td><?php echo e($Watch->Watch_price); ?></td>
                            <td><?php echo e($Watch->Watch_year); ?></td>


                            <td><?php echo e($Watch->Watch_type); ?></td>
                            <td>
                                <button class="btn btn-warning"><a style="color: green;" href="<?php echo e(route('edit',$Watch->id)); ?>"><i class="fa fa-edit fa-1x"></i></a></button>
                                <button class="btn btn-danger"><a href="<?php echo e(route('delete',$Watch->id)); ?>"><i class="fa fa-trash fa-1x"></i></a></button>
                            </td>

                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <tr>
                        <td colspan="11" class="btn-danger"> No Results Found !</td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\WatchApp\resources\views/search.blade.php ENDPATH**/ ?>