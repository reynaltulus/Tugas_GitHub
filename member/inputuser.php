<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama_member = $_POST['nama_member'];
$username = $_POST['username'];
$password = $_POST['password'];
$Tanggal_lahir = $_POST['Tanggal_lahir'];
$email = $_POST['email'];
$tanggal_bergabung = $_POST['tanggal_bergabung'];
$alamat = $_POST['alamat'];
$no_telepon = $_POST['no_telepon'];
$jenis_kelamin = $_POST['jenis_kelamin'];

// menginput data ke database
mysqli_query($koneksi,"INSERT INTO member (nama_member, alamat, no_telepon,email,tanggal_bergabung,Tanggal_lahir,jenis_kelamin,username,password) values('$nama_member','$alamat','$no_telepon', '$email','$tanggal_bergabung','$Tanggal_lahir','$jenis_kelamin','$username','$password')");
 
// mengalihkan halaman kembali ke index.php
header("location:tampil.php");

?>