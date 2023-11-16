<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['no'])) {
    $no = $_GET['no'];

    // Perform the deletion for table 'kamar'
    $sql_kamar = "DELETE FROM kamar WHERE no = '$no'";
    if ($koneksi->query($sql_kamar) !== TRUE) {
        echo '<script>alert("Error: ' . $sql_kamar . '<br>' . $koneksi->error . '");</script>';
    }

    // Perform the deletion for table 'fkamar'
    $sql_fkamar = "DELETE FROM fkamar WHERE no = '$no'";
    if ($koneksi->query($sql_fkamar) !== TRUE) {
        echo '<script>alert("Error: ' . $sql_fkamar . '<br>' . $koneksi->error . '");</script>';
    }

    // Set success message in session
    session_start();
    $_SESSION['success_message'] = "Data Berhasil Dihapus";

    // Redirect to the room list page
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
}

$koneksi->close();
