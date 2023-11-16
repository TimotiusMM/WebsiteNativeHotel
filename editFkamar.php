<?php
include 'koneksi.php';

// Initialize variables
$roomNo = $roomType = $roomFasilitas = '';

// Check if the form is submitted for updating
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $roomNo = mysqli_real_escape_string($koneksi, $_POST['roomNo']);
    $updatedRoomType = mysqli_real_escape_string($koneksi, $_POST['roomType']);
    $updatedRoomFasilitas = mysqli_real_escape_string($koneksi, $_POST['roomFasilitas']);

    // Update data in the database
    $updateSql = "UPDATE fkamar SET tipe_kamar = '$updatedRoomType', fasilitas = '$updatedRoomFasilitas' WHERE no = '$roomNo'";

    if ($koneksi->query($updateSql) === TRUE) {
        // Set success message in session
        session_start();
        $_SESSION['success_message'] = "Data Berhasil Diupdate";

        // Redirect to the admin page to avoid form resubmission
        header('Location: fKamar.php');
        exit();
    } else {
        echo '<script>alert("Error updating data: ' . $koneksi->error . '");</script>';
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['no'])) {
    // Fetch room details based on the no
    $roomNo = mysqli_real_escape_string($koneksi, $_GET['no']);

    $result = $koneksi->query("SELECT * FROM fkamar WHERE no = '$roomNo'");

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $roomType = $row['tipe_kamar'];
        $roomFasilitas = $row['fasilitas'];
    } else {
        echo 'Room not found.';
        exit();
    }
} else {
    echo 'Invalid request.';
    exit();
}

// Close the database connection at the end of the script
$koneksi->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Room - HOTELLIN</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Your existing stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="desain.css"> <!-- Link to your external CSS file -->
</head>

<body>
    <div class="container">
        <div class="card mt-3 mb-4">
            <div class="card-body">
                <h2 class="card-title mt-2">Edit Room</h2>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <input type="hidden" name="roomNo" value="<?php echo $roomNo; ?>">
                    <div class="row g-3 mt-2">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="roomType" class="form-label">Room Type</label>
                                <input type="text" class="form-control" name="roomType" id="roomType" value="<?php echo $roomType; ?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="roomFasilitas" class="form-label">Nama Fasilitas</label>
                                <input type="text" class="form-control" name="roomFasilitas" id="roomFasilitas" value="<?php echo $roomFasilitas; ?>" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary" aria-label="Submit Form">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>