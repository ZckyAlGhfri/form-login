<?php

$id_petugas = $_GET['id_petugas'];

include '../koneksi.php';
$sql = "DELETE FROM petugas WHERE id_petugas = '$id_petugas'";
$query = mysqli_query($koneksi, $sql);

if($query){
    echo"<script>alert('Data Berhasil Dihapus!!'); window.location.assign('?url=petugas')</script>";
}else{
    echo"<script>alert('Maaf, Data tidak terhapus!!'); window.location.assign('?url=petugas')</script>";
}

?>