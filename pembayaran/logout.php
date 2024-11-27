<?php
session_start();
include 'koneksi.php'; // Sesuaikan dengan file koneksi database Anda

// Fungsi untuk logout member
function logoutMember($id_pembayaran) {
    global $conn;

    // Perbarui status member di database menjadi 'offline'
    $query = "UPDATE karyawan SET status = 'offline' WHERE id_pembayaran = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id_pembayaran);
    $stmt->execute();
    $stmt->close();
}

// Jika member sedang login
if (isset($_SESSION['id_pembayaran'])) {
    $id_pembayaran = $_SESSION['id_pembayaran'];

    // Panggil fungsi logoutMember
    logoutMember($id_pembayaran);

    // Hapus semua data sesi
    session_unset();
    session_destroy();

    // Redirect ke halaman login atau halaman lain
    header("Location: login.php");
    exit();
} else {
    // Jika tidak ada sesi aktif, langsung ke halaman login
    header("Location: login.php");
    exit();
}
?>
