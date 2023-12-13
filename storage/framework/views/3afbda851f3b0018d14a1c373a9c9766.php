<!DOCTYPE html>
<html>
<head>
    <title>Blog Restoran Lezat</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url("/img/AchmadRzq.jpg");
        }

        header {
            background-color: #333;
            color: #c30071;
            text-align: center;
            padding: 20px;
        }

        h1 {
            font-size: 36px;
        }

        article {
            margin: 20px;
            padding: 20px;
            background-color: #ddd;
        }
    </style>
</head>
<body>
    
    <?php $__env->startSection('content'); ?>
    <div class="container mt-3">
    <header>
        <img src="img/AchmadRzq.jpg" >
        <h1>Blog Restoran Lezat</h1>
        <p>Selamat datang di blog kami!</p>
    </header>
    <article>
        <h2>Selamat Datang di Restoran Kami</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor, libero sed pellentesque facilisis, justo ex volutpat tortor, non varius lorem elit eu metus.</p>
        <p>Restoran kami menawarkan berbagai hidangan lezat dan minuman yang segar. Dari hidangan penutup yang manis hingga hidangan utama yang gurih, kami memiliki semua yang Anda inginkan.</p>
        <p>Jangan lupa mencoba spesialitas kami: <strong>Nasi Goreng Spesial</strong> dan <strong>Pizza Tandoori</strong>. Kami yakin Anda akan menyukainya!</p>
    </article>
    <?php $__env->stopSection(); ?>
    </div>
</body>
</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-app\resources\views/blog.blade.php ENDPATH**/ ?>