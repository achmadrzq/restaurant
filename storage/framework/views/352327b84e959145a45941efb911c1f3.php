<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
</head>
<body>

<?php $__env->startSection('content'); ?>
<div class="container mt-3">
<h1>Daftar Siswa</h1>
<br>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">NISN</th>
      <th scope="col">Alamat</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Aan Fatkhurrohman</td>
      <td>0056273195</td>
      <td>Pule</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Arya Endsha Wira Setia</td>
      <td>0066870052</td>
      <td>Karangan</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Erico Kurniawan</td>
      <td>0054332385</td>
      <td>Bendungan</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Apriza Wahyu Setiawan</td>
      <td>0053101195</td>
      <td>NgulanWetan</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Bagas Dwi Cahyo</td>
      <td>0066034687</td>
      <td>Pule</td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>Diaz Ibanez Kaka Aulia Hadi</td>
      <td>0064920982</td>
      <td>Pule</td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>Achmad Rozaqi</td>
      <td>0051613467</td>
      <td>NgulanKulon</td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>Arkan Arya Reza Maulana</td>
      <td>0055870959</td>
      <td>Suruh</td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td>Aditya Dwi Purnomo</td>
      <td>0088178022</td>
      <td>Pule</td>
    </tr>
    <tr>
      <th scope="row">10</th>
      <td>Desta Catur Wijaya</td>
      <td>0055652004</td>
      <td>Pogalan</td>
    </tr>
  </tbody>
</table>
</div>
<?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-app\resources\views/siswa.blade.php ENDPATH**/ ?>