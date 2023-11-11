<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi, "select * from users where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if ($cek > 0) {

    $data = mysqli_fetch_assoc($login);

    // cek jika user login sebagai admin
    if ($data['level'] == "admin") {

        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";
        // alihkan ke halaman dashboard admin
        header("location:admin.php");

        // cek jika user login sebagai resepsionis
    } else if ($data['level'] == "resepsionis") {
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "resepsionis";
        // alihkan ke halaman dashboard resepsionis
        header("location:resepsionis.php");

        // cek jika user login sebagai tamu
    } else if ($data['level'] == "tamu") {
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "tamu";
        // alihkan ke halaman dashboard tamu
        header("location:tamu.php");
    } else {

        // alihkan ke halaman login kembali
        header("location:index.html?pesan=gagal");
    }
} else {
    header("location:index.html?pesan=gagal");
}
