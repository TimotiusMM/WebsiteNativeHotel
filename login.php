<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Multi User Level</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <link rel="stylesheet" href="desain.css"> <!-- Link to your external CSS file -->
    <link rel="stylesheet" href="/assets/css/sb-admin-2.min.css">
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body>

    <div class="container">
        <div class="kotak_login">
            <?php
            if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == "gagal") {
                    echo "<div class='alert'>Username dan Password tidak sesuai!</div>";
                }
            }
            ?>
            <p class="tulisan_login">Selamat Datang</p>

            <form action="cek_login.php" method="post">
                <div class="input-group">
                    <input type="text" name="username" class="form_login" placeholder="Username" required="required">
                </div>

                <div class="input-group">
                    <input type="password" name="password" class="form_login" id="password" placeholder="Password" required="required">
                </div>

                <input type="submit" class="tombol_login" value="LOGIN">
            </form>

            <div class="register-link">
                Belum punya akun? <a href="register.php">Daftar disini</a>
            </div>

        </div>
    </div>

    <script>
        document.querySelector('.toggle-password').addEventListener('click', function() {
            const passwordInput = document.querySelector(this.getAttribute('toggle'));
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
            } else {
                passwordInput.type = 'password';
            }
        });
    </script>

</body>

</html>