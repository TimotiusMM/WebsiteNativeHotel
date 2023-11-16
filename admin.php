<?php
include 'koneksi.php'; // Include the database connection file

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate inputs
    if (empty($_POST['roomType']) || empty($_POST['roomCount'])) {
        echo '<script>alert("Silakan isi semua kolom.");</script>';
    } else {
        // Escape user inputs for security
        $roomType = mysqli_real_escape_string($koneksi, $_POST['roomType']);
        $roomCount = mysqli_real_escape_string($koneksi, $_POST['roomCount']);

        // Insert data into the database
        $sql = "INSERT INTO kamar (tipe_kamar, jumlah_kamar) VALUES ('$roomType', '$roomCount')";

        if ($koneksi->query($sql) === TRUE) {
            // Set success message in session
            session_start();
            $_SESSION['success_message'] = "Data Berhasil Disimpan";

            // Redirect to the same page to avoid form resubmission
            header('Location: ' . $_SERVER['PHP_SELF']);
            exit();
        } else {
            echo '<script>alert("Error: ' . $sql . '<br>' . $koneksi->error . '");</script>';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room | Hotellin</title>
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

        /* Style for sticky navbar */
        .sticky-top {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            transition: top 0.5s;
        }

        /* Style for the plus icon */
        .plus-icon {
            font-size: 24px;
            color: #007bff;
            cursor: pointer;
            margin-bottom: 10px;
        }
    </style>
</head>

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
                            <a class="nav-link" aria-current="admin" href="admin.php">Room</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="fKamar.php">Room Facilities</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="fHotel.php">Hotel Facilities</a>
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

        <div class="container mt-4">
            <?php
            // Check for success message in session
            session_start();
            if (isset($_SESSION['success_message'])) {
                echo '<div class="alert alert-success" role="alert">' . $_SESSION['success_message'] . '</div>';
                unset($_SESSION['success_message']); // Clear the session variable
            }
            ?>

            <h2 class="mt-4">Room List</h2>
            <button class="btn btn-primary mt-2 mb-4" onclick="showRoomForm()">input</button>

            <div class="col-md-12">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tipe Kamar</th>
                            <th>Jumlah Kamar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $result = $koneksi->query("SELECT * FROM kamar");

                        if (!$result) {
                            echo "Error: " . $koneksi->error;
                        } else {
                            if ($result->num_rows > 0) {
                                $counter = 1;
                                while ($row = $result->fetch_assoc()) {
                                    echo '<tr>
    <td>' . $counter++ . '</td>
    <td>' . $row['tipe_kamar'] . '</td>
    <td>' . $row['jumlah_kamar'] . '</td>
    <td>
        <a href="editDataKamar.php?no=' . $row['no'] . '" class="btn btn-warning">Edit</a>
        <button class="btn btn-danger" onclick="prepareDelete(' . $row['no'] . ')">Delete</button>
    </td>
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
        </div>
        <!-- Add a modal for confirmation -->
        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Delete Confirmation</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete this room?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <a href="#" id="confirmDelete" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Formulir untuk menambahkan data kamar (sembunyikan awalnya) -->
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="container">
                <div id="roomForm" style="display: none;" class="mt-3">
                    <div class="card mt-3 mb-4">
                        <div class="card-body">
                            <h2 class="card-title mt-2">Add Room</h2>
                            <div class="row g-3 mt-2">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="roomType" class="form-label">Tipe Kamar</label>
                                        <input type="text" class="form-control" name="roomType" id="roomType" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="roomCount" class="form-label">Jumlah Kamar</label>
                                        <input type="number" class="form-control" name="roomCount" id="roomCount" required>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary" aria-label="Submit Form">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <script src="assets/js/bootstrap.bundle.min.js"></script>

        <script>
            function showRoomForm() {
                // Tampilkan formulir ketika tombol diklik
                var roomForm = document.getElementById("roomForm");
                roomForm.style.display = "block";

                // Gulir halaman ke formulir
                roomForm.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start',
                });
            }

            // Function to set the room id for deletion and show the modal
            function prepareDelete(id) {
                // Set the href of the confirmation button in the modal
                document.getElementById("confirmDelete").href = "deleteDataKamar.php?no=" + id;

                // Show the delete confirmation modal
                $('#deleteModal').modal('show');
            }
        </script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

<?php
// Close the database connection at the end of the script
$koneksi->close();
?>