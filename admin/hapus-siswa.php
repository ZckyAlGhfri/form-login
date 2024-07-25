<?php

$nisn = $_GET['nisn'];

include '../koneksi.php';
$sql = "DELETE FROM siswa WHERE nisn = '$nisn'";
$query = mysqli_query($koneksi, $sql);

if($query){
    echo"<script>alert('Data Berhasil Dihapus!!'); window.location.assign('?url=siswa')</script>";
}else{
    echo"<script>alert('Maaf, Data tidak terhapus!!'); window.location.assign('?url=siswa')</script>";
}

?>