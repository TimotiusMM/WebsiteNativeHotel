<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room | Hotellin</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>

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
                    <img src="assets/img/HD-wallpaper-luxurious-interior-bedroom-classic-design-luxury-hotel-room.jpg" class="card-img-top w-100" alt="Large Image 1">
                    <div class="card-body">
                        <h3 class="card-title mt-2">SUPERIOR ROOM</h3>
                        <p class="card-text mt-2">Fasilitas yang didapatkan :</p>

                        <ul class="list-unstyled">
                            <li>Semua fasilitas standard</li>
                            <li>Ruang tidur yang lebih luas</li>
                            <li>Kasur yang lebih nyaman</li>

                            <li>Minibar</li>
                            <li>Kulkas</li>
                            <li>Mesin pembuat kopi atau teh</li>
                            <li>Wi-Fi gratis</li>


                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4">
                    <img src="assets/img/Hotel-7-double-bedroom-1000x500_c.jpg" class="card-img-top w-100" alt="Large Image 1">
                    <div class="card-body">
                        <h3 class="card-title mt-2">STANDARD ROOM</h3>
                        <p class="card-text mt-2">Fasilitas yang didapatkan :</p>
                        <ul class="list-unstyled">
                            <li>Tempat tidur double</li>
                            <li>Lemari pakaian</li>
                            <li>Meja dan kursi</li>
                            <li>TV kabel</li>
                            <li>Air conditioner</li>
                            <li>Kamar mandi dengan shower</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card mb-4">
                    <img src="assets/img/desktop-wallpaper-hotel-room-and-hotel-room.jpg" class="card-img-top w-100" alt="Large Image 1">
                    <div class="card-body">
                        <h3 class="card-title mt-2">SUITE ROOM</h3>
                        <p class="card-text mt-2">Fasilitas yang didapatkan :</p>
                        <ul class="list-unstyled">
                            <li>Semua fasilitas deluxe</li>
                            <li>Ruang tamu</li>
                            <li>Kamar mandi tambahan</li>
                            <li>Balkon atau teras</li>
                            <li>Jacuzzi</li>
                            <li>Fasilitas rapat atau konferensi</li>
                            <li>Layanan butler</li>
                            <li>Layanan kamar 24 jam</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4">
                    <img src="assets/img/Deluxe-Pool-View-Twin-Room-new (1).jpg" class="card-img-top w-100" alt="Large Image 1">
                    <div class="card-body">
                        <h3 class="card-title mt-2">DELUXE ROOM</h3>
                        <p class="card-text mt-2">Fasilitas yang didapatkan :</p>
                        <ul class="list-unstyled">
                            <li>Tempat tidur queen size atau king size</li>
                            <li>Lemari pakaian</li>
                            <li>Meja dan kursi</li>
                            <li>TV kabel</li>
                            <li>Air conditioner</li>
                            <li>Kamar mandi dengan shower atau bathtub</li>
                            <li>Minibar</li>
                            <li>Kulkas</li>
                            <li>Mesin pembuat kopi atau teh</li>
                            <li>Rak pengering pakaian</li>
                            <li>Setrika dan papan setrika</li>
                            <li>Wi-Fi gratis</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>