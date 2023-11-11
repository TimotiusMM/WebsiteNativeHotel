<?php
// Koneksi ke database
include 'koneksi.php';

// Inisialisasi variabel error dan pesan
$error = '';
$message = '';

// Cek apakah form registrasi disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil nilai input dari form
    $username = $_POST['username'];
    $password = $_POST['password'];
    $jabatan = $_POST['jabatan'];

    // Validasi input
    if (empty($username) || empty($password) || empty($jabatan)) {
        $error = 'Semua field harus diisi';
    } else {
        // Cek apakah username sudah digunakan
        $query = $koneksi->prepare("SELECT * FROM tinput WHERE username = ?");
        $query->bind_param("s", $username);
        $query->execute();
        $result = $query->get_result();

        if ($result->num_rows > 0) {
            $error = 'Username sudah digunakan';
        } else {
            // Hash password
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // Simpan data pengguna ke database
            $query = $koneksi->prepare("INSERT INTO tinput (username, password, jabatan) VALUES (?, ?, ?)");
            $query->bind_param("sss", $username, $hashedPassword, $jabatan);

            if ($query->execute()) {
                $message = 'Registrasi berhasil. Silakan login dengan akun Anda.';
            } else {
                $error = 'Terjadi kesalahan saat melakukan registrasi.';
            }

            $query->close();
        }
    }
}

$koneksi->close();
?>

<!-- Tampilkan formulir registrasi -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            max-width: 400px;
            padding: 20px;
        }

        .card-title {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .error-message {
            color: red;
            font-size: 14px;
            margin-top: 10px;
        }

        .form-label {
            font-weight: bold;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .btn-register {
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="card">
        <h2 class="card-title">Registrasi Pengguna</h2>
        <?php if (!empty($error)) { ?>
            <div class="error-message"><?php echo $error; ?></div>
        <?php } ?>
        <?php if (!empty($message)) { ?>
            <div class="alert alert-success"><?php echo $message; ?></div>
        <?php } ?>
        <form method="POST" action="pasien.php">
            <div class="form-group">
                <label for="username" class="form-label">Username:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>

            <div class="form-group">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="jabatan" class="form-label">Jabatan:</label>
                <input type="text" class="form-control" id="jabatan" name="jabatan" required>
            </div>
            <button type="submit" class="btn btn-primary btn-register">Daftar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>