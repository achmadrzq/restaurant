<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<style>
    body{
         background-image: url('http://127.0.0.1/laravel-app/img/bg.png');
         height: 150px;
    }
    .rest{
        font-size: 130px;
        text-align: center;
        font-family: arial;
    }
     /* About Section */
  .about,
  .menu,
  .products,
  .contact {
    padding: 1rem 7% 1.4rem;
    margin-top: 24rem;
    background-color:white;
  }
  
  .about h2,
  .menu h2,
  .products h2,
  .contact h2 {
    text-align: center;
    font-size: 2.6rem;
    margin-bottom: 3rem;
  }
  
  .about h2 span,
  .menu h2 span,
  .products h2 span,
  .contact h2 span {
    color: black;
  }
  .about h2 ,
  .menu h2 ,
  .products h2 ,
  .contact h2  {
    color: var(--primary);
  }
  
  
  .about .row {
    display: flex;
  }
  
  .about .row .about-img {
    flex: 1 1 40rem;
  }
  
  .about .row .about-img img {
    width: 100%;
    -webkit-mask-bg-size: 50%;
    -webkit-mask-repeat-style: no-repeat;
    position: center;
  }
  
  .about .row .content {
    flex: 1 1 35rem;
    padding: 0 1rem;
    color: black;
  }
  
  .about .row .content h3 {
    font-size: 1.8rem;
    margin-bottom: 1rem;
  }
  
  .about .row .content p {
    margin-bottom: 0.8rem;
    font-size: 1.3rem;
    font-weight: 300;
    line-height: 1.6;
  }
</style>
<body>
    
    <?php $__env->startSection('content'); ?>
    <!-- home -->
    <section id="home">
    <div class="rest">
        <div class="container " style="margin-top:150px">
        <b><p style="color:white">Restaur<span style="color:#ff7412">ant</span>.</p></b>
        </div>
    </div>
    <h6 style="color:white; text-align:center; ">------------------Welcome To My Restaurant Blog------------------</h6>
    <!-- about -->
    <section id="about" class="about">
    <h2 class="pt-10"><b>About Resto</b></h2>
    <div class="row">
      <div class="about-img">
        <img src="http://127.0.0.1/laravel-app/img/pp.png" alt="Tentang Kami">
      </div>
      <div class="content">
        <h3 style="color: #ff7412">Giving Promotions</h3>
        <p>A restaurant is a place that people visit to look for various kinds of food and drinks. Restaurants usually also present thei uniqueness.?</p>
        <h3 style="color: #ff7412">Satisfactory Service</h3>
        <p>A restaurant is a place that people visit to look for various kinds of food and drinks. Restaurants usually also present thei uniqueness.</p>
      </div>
    </div>
    <div class="row " style="margin-top:150px;">
      <div class="content">
        <h3 style="color: #ff7412">Giving Promotions</h3>
        <p>A restaurant is a place that people visit to look for various kinds of food and drinks. Restaurants usually also present thei uniqueness.?</p>
        <h3 style="color: #ff7412">Satisfactory Service</h3>
        <p>A restaurant is a place that people visit to look for various kinds of food and drinks. Restaurants usually also present thei uniqueness.</p>
      </div>
      <div class="about-img">
        <img src="http://127.0.0.1/laravel-app/img/ww.png" alt="Tentang Kami">
      </div>
    </div>
  <!-- Menu Resto -->
  <section id="menu" style="background-color:white">
  <h2 class="pt-20 mt-5 "><b>Menu Resto</b></h2>
  <div class="container">
  <div class="row align-items-start">
  <?php $__empty_1 = true; $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <div class="col "> 
    <div class="card" style="width: 18rem;">
    <img src="<?php echo e(asset('storage/blog/'.$post->image)); ?>" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title"><b><?php echo e($post->title); ?></b></h5>
    <p class="card-text"><?php echo $post->content; ?></p>
  </div>
</div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
  <?php endif; ?>
  </section>
    <?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-app\resources\views/resto/index.blade.php ENDPATH**/ ?>