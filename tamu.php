<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Hotellin</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<style>
    body {
        background-color: #fff;
        padding-top: 56px;
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
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="tamu.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="fasilitas.php">Fasility</a>
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

        <div class="mt-5">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Reservation Details</h5>
                    <form class="row g-3" action="simpan_booking.php" method="post">
                        <div class="col-md-6">
                            <label for="bookerName" class="form-label">Name of Booker</label>
                            <input type="text" class="form-control" id="bookerName" name="bookerName" required>
                        </div>
                        <div class="col-md-6">
                            <label for="bookerEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="bookerEmail" name="bookerEmail" required>
                        </div>
                        <div class="col-md-6">
                            <label for="bookerPhone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="bookerPhone" name="bookerPhone" required>
                        </div>
                        <div class="col-md-6">
                            <label for="guestName" class="form-label">Guest Name</label>
                            <input type="text" class="form-control" id="guestName" name="guestName" required>
                        </div>
                        <div class="col-md-6 mt-4">
                            <label for="roomType" class="form-label">Room Type</label>
                            <select class="form-select" id="roomType" name="roomType" required>
                                <option value="" disabled selected>Select Room Type</option>
                                <option value="standard">Standard Room</option>
                                <option value="deluxe">Deluxe Room</option>
                                <option value="suite">Suite Room</option>
                                <option value="suite">Superior Room</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="checkinDate" class="form-label">Check-in Date</label>
                            <input type="date" class="form-control" id="checkinDate" name="checkinDate" required>
                        </div>
                        <div class="col-md-3">
                            <label for="checkoutDate" class="form-label">Check-out Date</label>
                            <input type="date" class="form-control" id="checkoutDate" name="checkoutDate" required>
                        </div>
                        <div class="col-md-2">
                            <label for="roomCount" class="form-label">Jumlah Kamar</label>
                            <input type="number" class="form-control mb-2" id="roomCount" name="roomCount" required>
                            <div class="d-flex w-100">
                                <button type="submit" class="btn btn-primary mt-2" id="" name="saveBooking">Simpan</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="mt-5 text-center">
            <h5 class="card-title">About Hotel</h5>
            <p>

                Nikmati pengalaman menginap yang tak terlupakan di Hotellin!
                Dengan desain modern dan pelayanan yang ramah, Hotellin menyajikan kenyamanan terbaik untuk setiap tamu.
                Rasakan kemewahan kamar-kamar kami yang elegan, bersantailah di kolam renang yang menenangkan,
                dan nikmati hidangan lezat di restoran kami yang eksklusif.
                Dengan lokasi strategis di pusat kota, Hotellin memberikan akses mudah ke tempat-tempat wisata terkenal, pusat perbelanjaan, dan hiburan malam. Segera pesan kamar Anda sekarang dan nikmati promo spesial serta diskon eksklusif untuk pengalaman menginap yang istimewa di Hotellin!
            </p>
        </div>
    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>