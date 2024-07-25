<?php

$id_kelas = $_GET['id_kelas'];

include '../koneksi.php';
$sql = "DELETE FROM kelas WHERE id_kelas= '$id_kelas'";
$query = mysqli_query($koneksi, $sql);

if($query){
    echo"<script>alert('Data Berhasil Dihapus!!'); window.location.assign('?url=kelas')</script>";
}else{
    echo"<script>alert('Maaf, Data tidak terhapus!!'); window.location.assign('?url=kelas')</script>";
}

?>