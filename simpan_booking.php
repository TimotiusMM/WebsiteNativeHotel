<?php
// Sambungkan ke database (sesuaikan dengan informasi database Anda)
$servername = "localhost";
$username = "root";
$password = "";
$database = "lsphotel";

$conn = new mysqli($servername, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Periksa apakah form disubmit
if (isset($_POST['saveBooking'])) {
    // Ambil data dari formulir
    $bookerName = $_POST['bookerName'];
    $bookerPhone = $_POST['bookerPhone'];
    $roomType = $_POST['roomType'];
    $bookerEmail = $_POST['bookerEmail'];
    $guestName = $_POST['guestName'];
    $checkinDate = $_POST['checkinDate'];
    $checkoutDate = $_POST['checkoutDate'];
    $roomCount = $_POST['roomCount'];

    // Query SQL untuk menyimpan data ke dalam tabel pesan
    $sql = "INSERT INTO pesan (namaPemesan, notelp, tipeKamar, email, namaTamu, cekIn, cekOut, jumlah) 
            VALUES ('$bookerName', '$bookerPhone', '$roomType', '$bookerEmail', '$guestName', '$checkinDate', '$checkoutDate', '$roomCount')";

    if ($conn->query($sql) === TRUE) {
        // Mendapatkan nomor pemesanan yang baru saja dibuat
        $bookingNumber = $conn->insert_id;
        echo "Reservation successful. Your booking data is saved.";
        // Redirect to tamu.php after successful reservation
        header("Location: tamu.php");
        exit(); // Pastikan tidak ada kode ekstra yang dijalankan setelah pengalihan

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Tutup koneksi
$conn->close();
