<?php
// koneksi database
include 'koneksi.php';

// Check if the form data is set
$nama_karyawan = isset($_POST['nama_karyawan']) ? $_POST['nama_karyawan'] : '';
$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$tanggal_lahir = isset($_POST['tanggal_lahir']) ? $_POST['tanggal_lahir'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$karyawan_aktif = isset($_POST['karyawan_aktif']) ? $_POST['karyawan_aktif'] : '';
$alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
$no_telepon = isset($_POST['no_telepon']) ? $_POST['no_telepon'] : '';
$jenis_kelamin = isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : '';

// Insert data into database if all required fields are present
if ($nama_karyawan && $username && $password) {
    mysqli_query($koneksi, "INSERT INTO karyawan (nama_karyawan, alamat, no_telepon, email, karyawan_aktif, tanggal_lahir, jenis_kelamin, username, password) VALUES ('$nama_karyawan', '$alamat', '$no_telepon', '$email', '$karyawan_aktif', '$tanggal_lahir', '$jenis_kelamin', '$username', '$password')");
}

// Redirect to another page
header("location:tampil.php");
?>
