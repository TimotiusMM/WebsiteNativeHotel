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

    .navbar {
        margin-bottom: 20px;
    }

    .container-fluid {
        padding: 0;
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
                            <a class="nav-link active" href="admin.php">Room</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="fKamar.php">Room Facilities</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="fHotel" href="fHotel.php">Hotel Facilities</a>
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