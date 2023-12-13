<!-- <!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyData</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
    <body style="background: lightgray">
        <div class="container mt-5">
            <div class="row">
            <div class="col-md-12">
            <div>
            <h3 class="text-center my-4">HALAMAN ADMIN</h3>
            <form  action="search" method="GET" class="d-flex mb-5">
            <input class="form-control me-2" type="search" placeholder="search" aria-label="search" name="search" autofocus value="<?php echo e(old('search')); ?>">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        </div>
        <div class="card border-0 shadow-sm rounded">
        <div class="card-body">
        <a href="<?php echo e(route('blog.create')); ?>" class="btn btn-sm btn-success mb-3">TAMBAH POST</a>
        <table class="table table-bordered">
        <thead>
        <tr>
        <th scope="col">GAMBAR</th>
        <th scope="col">JUDUL</th>
        <th scope="col">CONTENT</th>
        <th scope="col">AKSI</th>
        </tr>
        </thead>
        <tbody>
        <?php $__empty_1 = true; $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tr>
        <td class="text-center">
        <img src="<?php echo e(asset('/storage/blog/'.$post->image)); ?>" class="rounded" style="width:
        150px">

        </td>
        <td><?php echo e($post->title); ?></td>
        <td><?php echo $post->content; ?></td>
        <td class="text-center col-2">
        <form onsubmit="return

        confirm('Apakah Anda Yakin ?');" action="<?php echo e(route('blog.destroy', $post->id)); ?>" method="POST">

        <a href="<?php echo e(route('blog.show',$post->id)); ?>" class="btn btn-sm btn-dark">SHOW</a>

        <a href="<?php echo e(route('blog.edit',$post->id)); ?>" class="btn btn-sm btn-primary">EDIT</a>
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button type="submit"class="btn btn-sm btn-danger">HAPUS</button>
        </form>
        </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <div class="alert alert-danger">
        Data Post belum Tersedia.
        </div>
        <?php endif; ?>
        </tbody>
        </table>
        <?php echo e($blog->links()); ?>

        </div>
        </div>

            </div>
        </div>
    </div>
 </body>
</html> -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Restaur<span style="color:#ff7412">ant</span></a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form  action="search" method="GET" class="d-flex mb-5 d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                        <div class="input-group">
                        <input class="form-control me-2" type="search" placeholder="search" aria-label="search" name="search" autofocus value="<?php echo e(old('search')); ?>">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                </div>
            </form>
            <div>
                 <p style="color:white; margin-top:15px; margin-left:20px;">Hii, <?php echo e(Auth::user()->name); ?></p>
            </div>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class=""><i class="fas fa-user fa-fw mt-2 ms-2 "></i></a>
                        <li><hr class="dropdown-divider" /></li>
                        <form action="<?php echo e(route('logout')); ?>" method="POST" class="d-flex"
                        role="search">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button class="btn btn-danger ms-3" type="submit">Logout</button>
        </form>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small"></div>
                        Restaurant
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                            <a href="<?php echo e(route('blog.create')); ?>" class="btn btn-sm btn-success mb-1">TAMBAH POST</a>
                            </div>
                            <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                <th scope="col">GAMBAR</th>
                                <th scope="col">JUDUL</th>
                                <th scope="col">CONTENT</th>
                                <th scope="col">AKSI</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                <td class="text-center">
                                <img src="<?php echo e(asset('/storage/blog/'.$post->image)); ?>" class="rounded" style="width:
                                150px">

                                </td>
                                <td><?php echo e($post->title); ?></td>
                                <td><?php echo $post->content; ?></td>
                                <td class="text-center col-2">
                                <form onsubmit="return

                                confirm('Apakah Anda Yakin ?');" action="<?php echo e(route('blog.destroy', $post->id)); ?>" method="POST">

                                <a href="<?php echo e(route('blog.show',$post->id)); ?>" class="btn btn-sm btn-dark">SHOW</a>

                                <a href="<?php echo e(route('blog.edit',$post->id)); ?>" class="btn btn-sm btn-primary">EDIT</a>
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit"class="btn btn-sm btn-danger">HAPUS</button>
                                </form>
                                </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <div class="alert alert-danger">
                                Data Post belum Tersedia.
                                </div>
                                <?php endif; ?>
                                </tbody>
                                </table>
                                <?php echo e($blog->links()); ?>

                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>

<?php /**PATH C:\xampp\htdocs\laravel-app\resources\views/blog/index.blade.php ENDPATH**/ ?>