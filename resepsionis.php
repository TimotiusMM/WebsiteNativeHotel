<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Reservasi | Hotellin</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background-color: #fff;
            padding-top: 56px;
            /* Set padding-top to accommodate the fixed navbar */
        }

        .navbar {
            margin-bottom: 20px;
        }

        .container-fluid {
            padding: 0;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="resepsionis.php">HOTELLIN</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">LOGOUT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="container mt-4">
        <h2 class="mt-4 mb-4">Data Reservasi</h2>
        <div class="col-md-12 mb-4">
            <form class="form-inline" method="GET" action="">
                <div class="form-group mx-sm-3 mb-2">
                    <label for="searchInput" class="sr-only">Search</label>
                    <input type="text" class="form-control" id="searchInput" name="search" placeholder="Search by name">
                </div>
                <button type="submit" class="btn btn-primary mb-2">Search</button>
            </form>
        </div>

        <div class="col-md-12">
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pemesan</th>
                        <th>Tanggal CekIn</th>
                        <th>Tanggal CekOut</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'koneksi.php';

                    // Check if a search query is submitted
                    if (isset($_GET['search'])) {
                        $search = $koneksi->real_escape_string($_GET['search']);
                        $query = "SELECT * FROM pesan WHERE namaPemesan LIKE '%$search%'";
                        $result = $koneksi->query($query);
                    } else {
                        $result = $koneksi->query("SELECT * FROM pesan");
                    }

                    if (!$result) {
                        echo "Error: " . $koneksi->error;
                    } else {
                        if ($result->num_rows > 0) {
                            $counter = 1;
                            while ($row = $result->fetch_assoc()) {
                                echo '<tr>
                    <td>' . $counter++ . '</td>
                    <td>' . $row['namaPemesan'] . '</td>
                    <td>' . $row['cekIn'] . '</td>
                    <td>' . $row['cekOut'] . '</td>
                </tr>';
                            }
                        } else {
                            echo '<tr><td colspan="4">No records found</td></tr>';
                        }
                    }
                    ?>

                </tbody>
            </table>
        </div>

        <!-- Sertakan skrip Bootstrap dan jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </div>
</body>

</html>

<?php
// Tutup koneksi database di akhir script
$koneksi->close();
?>