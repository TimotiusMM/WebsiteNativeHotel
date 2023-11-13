<?php
include 'koneksi.php';

// Initialize variables
$roomNo = $roomType = $roomCount = '';

// Check if the form is submitted for updating
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $roomNo = mysqli_real_escape_string($koneksi, $_POST['roomNo']);
    $updatedRoomType = mysqli_real_escape_string($koneksi, $_POST['roomType']);
    $updatedRoomCount = mysqli_real_escape_string($koneksi, $_POST['roomCount']);

    // Update data in the database
    $updateSql = "UPDATE kamar SET tipe_kamar = '$updatedRoomType', jumlah_kamar = '$updatedRoomCount' WHERE no = '$roomNo'";

    if ($koneksi->query($updateSql) === TRUE) {
        // Set success message in session
        session_start();
        $_SESSION['success_message'] = "Data Berhasil Diupdate";

        // Redirect to the admin page to avoid form resubmission
        header('Location: admin.php');
        exit();
    } else {
        echo '<script>alert("Error updating data: ' . $koneksi->error . '");</script>';
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['no'])) {
    // Fetch room details based on the no
    $roomNo = mysqli_real_escape_string($koneksi, $_GET['no']);

    $result = $koneksi->query("SELECT * FROM kamar WHERE no = '$roomNo'");

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $roomType = $row['tipe_kamar'];
        $roomCount = $row['jumlah_kamar'];
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

<!-- Add the following form to editDataKamar.php to allow users to modify room details -->
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="hidden" name="roomNo" value="<?php echo $roomNo; ?>">
    <div class="container">
        <div class="card mt-3 mb-4">
            <div class="card-body">
                <h2 class="card-title mt-2">Edit Room</h2>
                <div class="row g-3 mt-2">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="roomType" class="form-label">Room Type</label>
                            <input type="text" class="form-control" name="roomType" id="roomType" value="<?php echo $roomType; ?>" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="roomCount" class="form-label">Room Count</label>
                            <input type="number" class="form-control" name="roomCount" id="roomCount" value="<?php echo $roomCount; ?>" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" aria-label="Submit Form">Update</button>
                </div>
            </div>
        </div>
    </div>
</form>