<?php 
// koneksi database
include 'koneksi.php';

// Check if the form data is set
$id_pembayaran = isset($_POST['id_pembayaran']) ? $_POST['id_pembayaran'] : '';
$status = isset($_POST['status']) ? $_POST['status'] : '';
$id_member = isset($_POST['id_member']) ? $_POST['id_member'] : '';
$id_paket = isset($_POST['id_paket']) ? $_POST['id_paket'] : '';

// Check if all necessary data is provided
if ($id_pembayaran && $status && $id_member && $id_paket) {
    // Ensure correct table and column names here
    mysqli_query($koneksi, "INSERT INTO pembayaran (id_pembayaran, status, id_member, id_paket) VALUES ('$id_pembayaran', '$status', '$id_member', '$id_paket')");
} else {
    echo "Please ensure all fields are filled out.";
}

// Redirect to another page
header("location:tampil.php");
?>
