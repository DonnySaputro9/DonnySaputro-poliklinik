
<?php $__env->startSection('content'); ?>

<div class="login-box">
    <div class="d-flex justify-content-center">
        <a href="/"><img src="<?php echo e(asset('assets/img/logo.png')); ?>" width="40px"></a>
    </div>

    <div class="row justify-content-center text-center mt-3">
        <div class="col-md-4 col-12">
            <?php if(session()->has('status')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo e(session()->get('status')); ?>

                </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="row justify-content-center mt-3">
        <div class="col-md-4 col-12">
            <div class="card">
                <div class="card-body login-form">
                    <form action="<?php echo e(route('login.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="email" name="email" value="<?php echo e(old('email')); ?>">
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback">
                                    <?php echo e($message); ?>

                                </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="mb-1">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="password" name="password">
                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback">
                                    <?php echo e($message); ?>

                                </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="text-left">
                            <a href="<?php echo e(route('forgotPassword')); ?>">Forgot Password?</a>
                        </div>
                        <div class="mt-3">
                            <input type="submit" value="Login" class="form-control btn btn-primary text-white">
                        </div>
                    </form>
                </div>
            </div>
            <p class="m-0 mt-3">Don't have an account? <a href="<?php echo e(route('signup')); ?>">Sign up</a></p>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('auth.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\project-laravel\ZZZZZZZZZZZZZZZZZZZZ\OrangeGrowTogether\resources\views/auth/login/index.blade.php ENDPATH**/ ?>