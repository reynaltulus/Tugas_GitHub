<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_karyawan = $_POST['id_karyawan'];
$username = $_POST['username'];
$password = $_POST['password'];
$Tanggal_lahir = $_POST['Tanggal_lahir'];
$email = $_POST['email'];
$karyawan_status = $_POST['karyawan_status'];
$alamat = $_POST['alamat'];
$no_telpon = $_POST['no_telepon'];
$jenis_kelamin = $_POST['jenis_kelamin'];

// menginput data ke database
$query = "UPDATE karyawan 
          SET 
              username = '$username',
              password = '$password',
              Tanggal_lahir = '$Tanggal_lahir',
              email = '$email',
              karyawan_status = '$karyawan_status',
              alamat = '$alamat',
              no_telepon = '$no_telpon',
              jenis_kelamin = '$jenis_kelamin' 
          WHERE 
              id_karyawan = '$id_karyawan'";

 
//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($koneksi->query($query)) {
    //redirect ke halaman tampil.php 
    header("location: tampil.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}
?>