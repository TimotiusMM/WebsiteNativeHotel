<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Hotellin</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

</head>

<style>
    body {
        background-color: #fff;
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
</style>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="tamu.php">HOTELLIN</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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

    <div class="container">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/suite-room.jpeg" class="d-block w-100" alt="Image 1" style="object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/Superior-kffing.jpg" class="d-block w-100" alt="Image 2" style="object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/deluxe-roomsss.jpeg" class="d-block w-100" alt="Image 3" style="object-fit: cover;">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/Amorgos-Standard-Room1-e1464286427430 (1).jpg" class="d-block w-100" alt="Image 4" style="object-fit: cover;">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
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
                        <div class="col-md-6">
                            <label for="roomType" class="form-label">Room Type</label>
                            <select class="form-select" id="roomType" name="roomType" required>
                                <option value="" disabled selected>Select Room Type</option>
                                <option value="standard">Standard Room</option>
                                <option value="deluxe">Deluxe Room</option>
                                <option value="suite">Suite Room</option>
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
                            <div class="col-md-12 d-flex align-items-end">
                                <button type="submit" class="btn btn-primary mt-2" id="" name="saveBooking">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="mt-5 text-center">
            <h5 class="card-title">About Hotel</h5>
            <p>
                Welcome to Hotellin! Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Welcome to Hotellin! Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </div>
    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>