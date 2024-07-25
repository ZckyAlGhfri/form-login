<?php
session_start();
if($_SESSION['level']!='admin'){
    echo"<script>alert('Maaf maaf aja nih, loe bukan admin!!!'); window.location.assign('../index.php')</script>";
}
if(empty($_SESSION['id_petugas'])){
    echo"<script>alert('Maaf maaf aja nih, loe login dulu dong!!!'); window.location.assign('../index.php')</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Aplikasi SPP</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<style>
    body{
        background-image: url(../img/bg.jpg);
        background-size: 100%;
    }
</style>
<body>
<div class="container mt-5">
    <h3>Aplikasi Pembayaran SPP</h3>
    <div class="alert alert-info">
        Selamat Datang di Aplikasi Pembayaran SPP, <b><?= $_SESSION['nama_petugas'] ?>!</b>, Anda Adalah Admin
    </div>
    <a href="admin.php" class="btn btn-primary">Administrator</a>
    <a href="admin.php?url=spp" class="btn btn-primary">SPP</a>
    <a href="admin.php?url=kelas" class="btn btn-primary">Kelas</a>
    <a href="admin.php?url=siswa" class="btn btn-primary">Siswa</a>
    <a href="admin.php?url=petugas" class="btn btn-primary">Petugas</a>
    <a href="admin.php?url=pembayaran" class="btn btn-primary">Pembayaran</a>
    <a href="admin.php?url=laporan" class="btn btn-primary">Laporan</a>
    <a href="admin.php?url=logout" class="btn btn-primary">Logout</a>

    <div class="card mt-2">
        <div class="card-body">
            <!-- ISI WEB -->
            <?php
            $file = @$_GET['url'];
            if(empty($file)){
                echo"<h4>Selamat Datang Di Administrator</h4>";
                echo"Aplikasi Pembayaran SPP digunakan untuk mempermudah dalam mencatat pembayaran Siswa / Siswi disekolah.";
            }else{
                include $file. '.php';
            }
            ?>
        </div>
    </div>

</div>

<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>