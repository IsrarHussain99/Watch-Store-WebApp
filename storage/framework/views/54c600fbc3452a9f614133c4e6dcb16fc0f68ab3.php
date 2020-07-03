<?php $__env->startSection('content'); ?>
<div class="container">
    <br><br><br>
    <div class="row justify-content-center">
        <div class="watchapp_col-md-8">
            <div class="card" style="border: none;border-radius: 25px;">
                <div class="card-header" style="background: #3681f7; color: white;"><?php echo e(__('Register')); ?></div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label for="name" class="watchapp_col-md-4 watchapp_col-form-label text-md-right"><?php echo e(__('Name')); ?></label>

                            <div class="watchapp_col-md-6">
                                <input style="border-radius: 50px;" id="name" type="text" class="form-control <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus>

                                <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="watchapp_col-md-4 watchapp_col-form-label text-md-right"><?php echo e(__('E-Mail Address')); ?></label>

                            <div class="watchapp_col-md-6">
                                <input style="border-radius: 50px;" id="email" type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email">

                                <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="watchapp_col-md-4 watchapp_col-form-label text-md-right"><?php echo e(__('Password')); ?></label>

                            <div class="watchapp_col-md-6">
                                <input style="border-radius: 50px;" id="password" type="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password" required autocomplete="new-password">

                                <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="watchapp_col-md-4 watchapp_col-form-label text-md-right"><?php echo e(__('Confirm Password')); ?></label>

                            <div class="watchapp_col-md-6">
                                <input style="border-radius: 50px;" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
<br>
                        <div class="form-group row mb-0">
                            <div class="watchapp_col-md-4 offset-md-5">
                                <button style="border-radius: 50px;width: 100%" type="submit" class="btn btn-primary">
                                    <?php echo e(__('Register      ')); ?><i class="fa fa-check"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\WatchApp\resources\views/auth/register.blade.php ENDPATH**/ ?>