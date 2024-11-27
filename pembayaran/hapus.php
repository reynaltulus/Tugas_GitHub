<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id_pembayaran'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from karyawan where id_pembayaran='$id'");

 
// mengalihkan halaman kembali ke index.php
header("location:tampil.php");
 
?>