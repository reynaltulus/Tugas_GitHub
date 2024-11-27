<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id_member'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from member where id_member='$id'");

 
// mengalihkan halaman kembali ke index.php
header("location:tampil.php");
 
?>