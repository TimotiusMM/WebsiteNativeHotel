<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fasility | Hotellin</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

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
                            <a class="nav-link" aria-current="page" href="fasilitas.php">Fasility</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="room.php">Room</a>
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

    <div class="container mt-4">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/1.jpg" class="d-block w-100" alt="Image 1" style="object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/2.jpg" class="d-block w-100" alt="Image 2" style="object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/3.jpg" class="d-block w-100" alt="Image 3" style="object-fit: cover;">
                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <h1 class="mt-4">Fasilitas Hotel</h1>

        <div class="row mt-4">
            <div class="col-md-3 mb-4">
                <img src="assets/img/ryunosuke-kikuno-FKqxZ58bVjU-unsplash.jpg" class="img-fluid" alt="Large Image 1">
                <p class="mt-2">Perpustakaan</p>
            </div>
            <div class="col-md-3 mb-4">
                <img src="assets/img/nicola-pavan-BbFJfk49Pgg-unsplash.jpg" class="img-fluid" alt="Large Image 2">
                <p class="mt-2">Ballroom</p>
            </div>
            <div class="col-md-3 mb-4">
                <img src="assets/img/jason-leung-poI7DelFiVA-unsplash.jpg" class="img-fluid" alt="Large Image 3">
                <p class="mt-2">Restaurant</p>
            </div>
            <div class="col-md-3 mb-4">
                <img src="assets/img/john-matychuk-yvfp5YHWGsc-unsplash.jpg" class="img-fluid" alt="Large Image 4">
                <p class="mt-2">Tempat Parkir</p>
            </div>
            <div class="col-md-3 mb-4">
                <img src="assets/img/sicong-li-btr4w-vpsVo-unsplash.jpg" class="img-fluid" alt="Large Image 1">
                <p class="mt-2">Lapangan Tennis Outdoor</p>
            </div>
            <div class="col-md-3 mb-4">
                <img src="assets/img/QDgYm324.jpg" class="img-fluid" alt="Large Image 2">
                <p class="mt-2">Kantin</p>
            </div>
            <div class="col-md-3 mb-4">
                <img src="assets/img/QK0dw3q6.jpg" class="img-fluid" alt="Large Image 3">
                <p class="mt-2">Gym</p>
            </div>
            <div class="col-md-3 mb-4">
                <img src="assets/img/6yVor2m7.jpg" class="img-fluid" alt="Large Image 4">
                <p class="mt-2">Kolam Renang Outdoor</p>
            </div>
        </div>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>