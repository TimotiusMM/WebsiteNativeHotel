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
        /* Warna biru */
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

    /* Tambahkan margin pada navbar */
    .navbar {
        margin-bottom: 20px;
    }

    .container-fluid {
        padding: 0;
    }
</style>

<body>
    <div class="container-fluid ">
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

        <!-- Carousel -->
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
        <!-- Card for input form -->
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Reservation Details</h5>
                <form class="row g-3">
                    <div class="col-md-4">
                        <label for="checkinDate" class="form-label">Check-in Date</label>
                        <input type="date" class="form-control" id="checkinDate" required>
                    </div>
                    <div class="col-md-4">
                        <label for="checkoutDate" class="form-label">Check-out Date</label>
                        <input type="date" class="form-control" id="checkoutDate" required>
                    </div>
                    <div class="col-md-2">
                        <label for="roomCount" class="form-label">Number of Rooms</label>
                        <input type="number" class="form-control" id="roomCount" required>
                    </div>
                    <div class="col-md-2 d-flex align-items-end ms-auto me-auto">
                        <button type="button" class="btn btn-primary" onclick="saveBooking()">Simpan</button>
                    </div>
                </form>
            </div>
        </div>

        <script>
            // Function to save booking data
            function saveBooking() {
                var checkinDate = document.getElementById('checkinDate').value;
                var checkoutDate = document.getElementById('checkoutDate').value;
                var roomCount = document.getElementById('roomCount').value;

                // Do something with the saved data, e.g., send it to the server or display a message
                alert('Booking saved!\nCheck-in Date: ' + checkinDate + '\nCheck-out Date: ' + checkoutDate + '\nNumber of Rooms: ' + roomCount);
            }
        </script>






        <script src="assets/js/bootstrap.bundle.min.js"></script>
    </div>
</body>

</html>