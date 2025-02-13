<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>School | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset('public/assets/school/css/all.min.css')); ?>">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo e(asset('public/assets/school/css/icheck-bootstrap.min.css')); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('public/assets/school/css/adminlte.min.css')); ?>">
  <style>
      .login-card-body, .register-card-body {
  background-color: #00000000;
  border-top: 0;
  color: #fff;
  padding: 20px;
box-shadow: -1px 4px 28px 0px rgb(9 197 242);
}

.card1 {
  position: relative;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-flex-direction: column;
  -ms-flex-direction: column;
  flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  background-color: #00000091 !important;
  background-clip: border-box;
  border: 0 solid rgba(0,0,0,.125);
  border-radius: .25rem;
}
span {
    color: #09c5f2;
}
.btn.btn-primary {
    background: #09c5f2;
    border: 1px solid #09c5f2;
    color: #fff;
}
.btn.btn-primary:hover {
    border: 1px solid #ffffff;
    background: transparent;
    color: #ffffff;
}
  </style>
</head>
<body class="hold-transition login-page" style="background-image: url('https://images.unsplash.com/photo-1599725427295-6ed79ff8dbef?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8c2Nob29sJTIwYnVpbGRpbmd8ZW58MHx8MHx8&w=1000&q=80'); background-repeat: no-repeat;
  background-size: 100% 100%;">


<div class="login-box">

    <div class="card card1 mt-4">
      <div class="card-body login-card-body">
          
          <center><img src="public/images/header-logo.png" width="60%"></center>
        <div>
            <h1 class="pt-3 pb-3 text-center">Welcome to School</h1>
            
         

        <form action="<?php echo e(url('is-login')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo $__env->make('layout.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          <div class="input-group mb-3">
            <input type="text" name="user_name" class="form-control <?php $__errorArgs = ['user_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="User  Name" value="<?php echo e(old('user_name')); ?>">
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
            <div class="input-group-append">
              <div class="input-group-text">
                <span>&#9993;</span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Password" value="<?php echo e(old('Password')); ?>">
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
            <div class="input-group-append">
              <div class="input-group-text">
                <span>&#128274;</span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-10">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  I'm a Student
                </label>
              </div>
            </div><br><br>
            <!-- /.col -->
            <div class="col-4"></div>
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <div class="col-4"></div>
            <!-- /.col -->
          </div>
        </form>
                <br>

        <!-- /.social-auth-links -->
  
        <!--<p class="mb-1">-->
        <!--  <a href="forgot-password.html">I forgot my password</a>-->
        <!--</p>-->

      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
 </div>
 <!-- jQuery -->
<script src="<?php echo e(URL::asset('public/assets/school/js/jquery.min.js')); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(URL::asset('public/assets/school/js/bootstrap.bundle.min.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(URL::asset('public/assets/school/js/adminlte.min.js')); ?>"></script>
</body>
</html><?php /**PATH /home/rukmanisoftware/public_html/web/resources/views/auth/login.blade.php ENDPATH**/ ?>