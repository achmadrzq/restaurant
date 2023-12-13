<!-- <!DOCTYPE html>
<html>
<head>
<title>TeacherSpace</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-
alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-
KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-
alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-
ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
crossorigin="anonymous"></script>
</head>
<body>
<div class="row justify-content-center mt-5">
<div class="col-lg-4">
<div class="card">
<div class="card-header">
<h1 class="card-title text-center">Login</h1>
</div>
<div class="card-body">
<?php if(Session::has('error')): ?>
<div class="alert alert-danger" role="alert">
<?php echo e(Session::get('error')); ?>

</div>
<?php endif; ?>
<form action="<?php echo e(route('login')); ?>" method="POST">
<?php echo csrf_field(); ?>
<div class="form-group mb-3">
<input type="text" placeholder="Email"
id="email" class="form-control" name="email" required
autofocus>
<?php if($errors->has('email')): ?>
<span class="text-danger"><?php echo e($errors->first('email')); ?></span>
<?php endif; ?>
</div>
<div class="form-group mb-3">
<input type="password" placeholder="Password"
id="password" class="form-control" name="password" required>
<?php if($errors->has('password')): ?>
<span class="text-danger"><?php echo e($errors->first('password')); ?></span>
<?php endif; ?>
</div>
<div class="form-group mb-3">
<div class="checkbox">
<label>
<input type="checkbox" name="remember">
Remember Me
</label>
</div>
</div>
<div class="mb-3">
<div class="d-grid">
<button class="btn btn-primary">Login</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</body>
</html> -->
<!DOCTYPE html>
<html>
    <head>
    <title>TeacherSpace</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"crossorigin="anonymous"></script>
    </head>
    <body class="bg-secondary">
        </div>
        <section class="vh-100 gradient-custom ">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card text-white" style="border-radius: 3rem; background: #090221; box-shadow: inset 2px ">
          <div class="card-body p-5 text-center">

              <div class="mb-md-5 mt-md-4 pb-5">
                  
              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <div class="card-body">
                  <?php if(Session::has('error')): ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo e(Session::get('error')); ?>

                </div>
                <?php endif; ?>
                <p class="text-white-50 mb-5">Please enter your login and password!</p>
              <form action="<?php echo e(route('login')); ?>" method="POST">
                  <?php echo csrf_field(); ?>
                  <div class="form-outline form-white mb-4">
                <input type="text" placeholder="Email"id="email" class="form-control" name="email" required autofocus>
                <?php if($errors->has('email')): ?>
                <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                <?php endif; ?>
                <!-- <input type="email" id="typeEmailX" class="form-control form-control-lg" /> -->
                <label class="form-label" for="typeEmailX">Email</label>
              </div>
              
              <div class="form-outline form-white mb-4">
                  <input type="password" placeholder="Password"id="password" class="form-control" name="password" required>
                  <?php if($errors->has('password')): ?>
                  <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                  <?php endif; ?>
                  <!-- <input type="password" id="typePasswordX" class="form-control form-control-lg" /> -->
                  <label class="form-label" for="typePasswordX">Password</label>
                </div>
                
                <!-- <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p> -->
                
                <div class="mb-3">
                    <div class="d-grid">
                        <button class="btn btn-primary">Login</button>
                        
                        <div class="d-flex justify-content-center text-center mt-4 pt-1">
                            <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>
              
            </div>

            <div>
              <p class="mb-0">Don't have an account? <a href="<?php echo e(route('register')); ?>" class="text-white-50 fw-bold">Sign Up</a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
        </body>
        </html><?php /**PATH C:\xampp\htdocs\laravel-app\resources\views/login.blade.php ENDPATH**/ ?>