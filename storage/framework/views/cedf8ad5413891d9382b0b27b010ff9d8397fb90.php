<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Orange Grow Together</title>

    <!-- Bootstrap -->
    <link href="<?php echo e(asset('template-admin/vendors/bootstrap/dist/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo e(asset('template-admin/vendors/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="<?php echo e(asset('template-admin/build/css/custom.min.css')); ?>" rel="stylesheet">

    
    <link rel="stylesheet" href="<?php echo e(asset('css/mystyle.css')); ?>">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view print">
            <div class="navbar nav_title" style="border: 0;">
              <a href="/" class="site_title icon-style"><i class="fa fa-paw"></i> <span>Orange Grow Together</span></a>
            </div>

            <div class="clearfix"></div>
            <br />

            <!-- sidebar menu -->
              <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- /sidebar menu -->

          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle print">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right print">
                <?php if(auth()->guard()->check()): ?>
                    <li class="">
                      <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        Hello, <?php echo e(auth()->user()->nama_pengguna); ?>

                      </a>
                    </li>
                  <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link active" href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                    </li>
                <?php endif; ?>
              </ul>

            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col print-content" role="main" >
          
          <?php echo $__env->yieldContent('content'); ?>

        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right print">
            2021 &copy Orange Grow Together
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo e(asset('template-admin/vendors/jquery/dist/jquery.min.js')); ?>"></script>
    
    <!-- Bootstrap -->
    <script src="<?php echo e(asset('template-admin/vendors/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="<?php echo e(asset('template-admin/build/js/custom.min.js')); ?>"></script>

    <?php echo $__env->yieldPushContent('script'); ?>
	
  </body>
</html>
<?php /**PATH D:\WORK\project\OrangeGrowTogether\resources\views/layouts/main.blade.php ENDPATH**/ ?>