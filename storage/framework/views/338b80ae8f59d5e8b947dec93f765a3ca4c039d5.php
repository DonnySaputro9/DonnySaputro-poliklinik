<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login | Orange Grow Together</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('template-login/vendor/bootstrap/css/bootstrap.min.css')); ?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('template-login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')); ?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('template-login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')); ?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('template-login/vendor/animate/animate.css')); ?>">
<!--===============================================================================================-->	
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('template-login/vendor/css-hamburgers/hamburgers.min.css')); ?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('template-login/vendor/animsition/css/animsition.min.css')); ?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('template-login/vendor/select2/select2.min.css')); ?>">
<!--===============================================================================================-->	
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('template-login/vendor/daterangepicker/daterangepicker.css')); ?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('template-login/css/util.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('template-login/css/main.css')); ?>">
<!--===============================================================================================-->
</head>
    <body>
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">

                    <form action="/login" method="POST" class="login100-form validate-form flex-sb flex-w">
                    <?php echo csrf_field(); ?>  
                        
                        <img class="login100-form-title" src="img/zlogo-ogt.png" alt="" style="width: 350px;">

                        <span class="txt1 p-b-11">Username</span>
                        <div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
                            <input type="text" name="username" class="input100" id="username" placeholder="Username" value="<?php echo e(old('username')); ?>" required>
                            <span class="focus-input100"></span>
                        </div>
                        
                        <span class="txt1 p-b-11">Password</span>
                        <div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
                            <span class="btn-show-pass">
                                <i class="fa fa-eye"></i>
                            </span>
                            <input type="password" name="password" class="input100" id="password" placeholder="Password" required>
                            <span class="focus-input100"></span>
                        </div>

                        <div class="container-login100-form-btn">
                            <button type="submit" class="login100-form-btn">Login</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        
        <div id="dropDownSelect1"></div>
        
    <!--===============================================================================================-->
        <script src="<?php echo e(asset('template-login/vendor/jquery/jquery-3.2.1.min.js')); ?>"></script>
    <!--===============================================================================================-->
        <script src="<?php echo e(asset('template-login/vendor/animsition/js/animsition.min.js')); ?>"></script>
    <!--===============================================================================================-->
        <script src="<?php echo e(asset('template-login/vendor/bootstrap/js/popper.js')); ?>"></script>
        <script src="<?php echo e(asset('template-login/vendor/bootstrap/js/bootstrap.min.js')); ?>"></script>
    <!--===============================================================================================-->
        <script src="<?php echo e(asset('template-login/vendor/select2/select2.min.js')); ?>"></script>
    <!--===============================================================================================-->
        <script src="<?php echo e(asset('template-login/vendor/daterangepicker/moment.min.js')); ?>"></script>
        <script src="<?php echo e(asset('template-login/vendor/daterangepicker/daterangepicker.js')); ?>"></script>
    <!--===============================================================================================-->
        <script src="<?php echo e(asset('template-login/vendor/countdowntime/countdowntime.js')); ?>"></script>
    <!--===============================================================================================-->
        <script src="<?php echo e(asset('template-login/js/main.js')); ?>"></script>

    </body>
</html><?php /**PATH D:\WORK\project\OrangeGrowTogether\resources\views/login/index.blade.php ENDPATH**/ ?>