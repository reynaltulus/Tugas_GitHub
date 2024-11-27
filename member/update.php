<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_member = $_POST['id_member'];
$username = $_POST['username'];
$password = $_POST['password'];
$Tanggal_lahir = $_POST['Tanggal_lahir'];
$email = $_POST['email'];
$tanggal_bergabung = $_POST['tanggal_bergabung'];
$alamat = $_POST['alamat'];
$no_telpon = $_POST['no_telepon'];
$jenis_kelamin = $_POST['jenis_kelamin'];

// menginput data ke database
$query = "UPDATE member 
          SET 
              username = '$username',
              password = '$password',
              Tanggal_lahir = '$Tanggal_lahir',
              email = '$email',
              tanggal_bergabung = '$tanggal_bergabung',
              alamat = '$alamat',
              no_telepon = '$no_telpon',
              jenis_kelamin = '$jenis_kelamin' 
          WHERE 
              id_member = '$id_member'";

 
//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($koneksi->query($query)) {
    //redirect ke halaman tampil.php 
    header("location: tampil.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}
?>