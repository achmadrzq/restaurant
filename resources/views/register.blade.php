<!-- <!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Laravel 10 Custom Login and Registration - Register Page</title>
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
<h1 class="card-title text-center">Register</h1>
</div>
<div class="card-body">
@if(Session::has('success'))
<div class="alert alert-success" role="alert">
{{ Session::get('success') }}
</div>
@endif
<form action="{{ route('register') }}" method="POST">
@csrf
<div class="form-group mb-3">
<input type="text" placeholder="Name" id="name"
class="form-control" name="name"
required autofocus>
@if ($errors->has('name'))
<span class="text-danger">{{ $errors->first('name') }}</span>
@endif
</div>
<div class="form-group mb-3">
<input type="text" placeholder="Email"
id="email_address" class="form-control"
name="email" required autofocus>
@if ($errors->has('email'))
<span class="text-danger">{{ $errors->first('email') }}</span>
@endif
</div>
<div class="form-group mb-3">
<input type="password" placeholder="Password"
id="password" class="form-control"
name="password" required>
@if ($errors->has('password'))
<span class="text-danger">{{ $errors->first('password') }}</span>
@endif
</div>
<div class="form-group mb-3">
<div class="checkbox">
</div>
</div>
<div class="mb-3">
<div class="d-grid">
<button class="btn btn-primary">Register</button>
</div>
</div>
</form>
</div>
</div>
</div> -->
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
                        <div class="card text-white" style="border-radius: 3rem; background: #090221;">
          <div class="card-body p-5 text-center">

              <div class="mb-md-5 mt-md-4 pb-5">
                  
              <h2 class="fw-bold mb-2 text-uppercase">Register</h2>
              <div class="card-body">
                  @if(Session::has('success'))
                <div class="alert alert-danger" role="alert">
                    {{ Session::get('success') }}
                </div>
                @endif
                <p class="text-white-50 mb-5">Register Now!</p>
              <form action="{{ route('register') }}" method="POST">
                  @csrf
                  <div class="form-outline form-white mb-4">
                  <input type="text" placeholder="Name" id="name"class="form-control" name="name"required autofocus>
                    @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                    <label class="form-label" for="typeNameX">Nama</label>
                   </div>
                  <div class="form-outline form-white mb-4">
                <input type="text" placeholder="Email"id="email" class="form-control" name="email" required autofocus>
                @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
                <!-- <input type="email" id="typeEmailX" class="form-control form-control-lg" /> -->
                <label class="form-label" for="typeEmailX">Email</label>
              </div>
              
              <div class="form-outline form-white mb-4">
                  <input type="password" placeholder="Password"id="password" class="form-control" name="password" required>
                  @if ($errors->has('password'))
                  <span class="text-danger">{{ $errors->first('password') }}</span>
                  @endif
                  <!-- <input type="password" id="typePasswordX" class="form-control form-control-lg" /> -->
                  <label class="form-label" for="typePasswordX">Password</label>
                </div>
                
                <!-- <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p> -->
                
                <div class="mb-3">
                    <div class="d-grid">
                        <button class="btn btn-primary">Register</button>
                        
                        <div class="d-flex justify-content-center text-center mt-4 pt-1">
                            <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>
              
            </div>

            <div>
              <!-- <p class="mb-0">Don't have an account? <a href="#!" class="text-white-50 fw-bold">Sign Up</a> -->
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
        </body>
        </html>