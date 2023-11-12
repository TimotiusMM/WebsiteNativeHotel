<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room | Hotellin</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<style>
    body {
        background-color: #fff;
        padding-top: 56px;
        /* Set padding-top to accommodate the fixed navbar */
    }

    #carouselExampleCaptions {
        max-width: 100%;
        margin: auto;
        height: 300px;
    }

    .carousel-inner {
        max-width: 100%;
        max-height: 100%;
        text-align: center;
    }

    .carousel-item img {
        width: 100%;
        max-width: 100%;
        max-height: 100%;
        height: auto;
        object-fit: cover;
    }

    .navbar {
        margin-bottom: 20px;
    }

    .container-fluid {
        padding: 0;
    }

    .row img {
        width: 100%;
        max-width: 100%;
        height: auto;
        object-fit: cover;
    }

    /* Style for sticky navbar */
    .sticky-top {
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 1000;
        transition: top 0.5s;
    }
</style>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <div class="container">
                <a class="navbar-brand" href="tamu.php">HOTELLIN</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="tamu.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="fasilitas.php">Fasility</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="room.php">Room</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">LOGOUT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>


    <div class="container ">
        <h1 class="mt-4">Kamar Hotel</h1>

        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card mb-4">
                    <img src="assets/img/Amorgos-Standard-Room1-e1464286427430 (1).jpg" class="card-img-top w-100" alt="Large Image 1">
                    <div class="card-body">
                        <h3 class="card-title mt-2">Deskripsi tentang gambar 1.</h3>
                        <p class="card-text mt-2">Deskripsi tentang gambar 1.</p>

                        <ul class="list-unstyled">
                            <li>Barang 1</li>
                            <li>Barang 2</li>
                            <li>Barang 3</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4">
                    <img src="assets/img/Amorgos-Standard-Room1-e1464286427430 (1).jpg" class="card-img-top w-100" alt="Large Image 1">
                    <div class="card-body">
                        <h3 class="card-title mt-2">Deskripsi tentang gambar 1.</h3>
                        <p class="card-text mt-2">Deskripsi tentang gambar 1.</p>
                        <ul class="list-unstyled">
                            <li>Barang 1</li>
                            <li>Barang 2</li>
                            <li>Barang 3</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card mb-4">
                    <img src="assets/img/Amorgos-Standard-Room1-e1464286427430 (1).jpg" class="card-img-top w-100" alt="Large Image 1">
                    <div class="card-body">
                        <h3 class="card-title mt-2">Deskripsi tentang gambar 1.</h3>
                        <p class="card-text mt-2">Deskripsi tentang gambar 1.</p>
                        <ul class="list-unstyled">
                            <li>Barang 1</li>
                            <li>Barang 2</li>
                            <li>Barang 3</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4">
                    <img src="assets/img/Amorgos-Standard-Room1-e1464286427430 (1).jpg" class="card-img-top w-100" alt="Large Image 1">
                    <div class="card-body">
                        <h3 class="card-title mt-2">Deskripsi tentang gambar 1.</h3>
                        <p class="card-text mt-2">Deskripsi tentang gambar 1.</p>
                        <ul class="list-unstyled">
                            <li>Barang 1</li>
                            <li>Barang 2</li>
                            <li>Barang 3</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>