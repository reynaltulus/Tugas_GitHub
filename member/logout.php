<?php
session_start();
include 'koneksi.php'; // Sesuaikan dengan file koneksi database Anda

// Fungsi untuk logout member
function logoutMember($id_member) {
    global $conn;

    // Perbarui status member di database menjadi 'offline'
    $query = "UPDATE members SET status = 'offline' WHERE id_member = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id_member);
    $stmt->execute();
    $stmt->close();
}

// Jika member sedang login
if (isset($_SESSION['id_member'])) {
    $id_member = $_SESSION['id_member'];

    // Panggil fungsi logoutMember
    logoutMember($id_member);

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
