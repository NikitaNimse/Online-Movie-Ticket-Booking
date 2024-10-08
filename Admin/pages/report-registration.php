<?php
$databaseHost = "localhost";
$databaseName = "movieticketdb";
$databaseUsername = "root";
$databasePassword = "";

//Database connection 
$con = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName) or die($con->connect_error());

// Fetch data in descending order (latest entry first)
$sql = "SELECT * FROM user_registration ORDER BY id DESC";
$query = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Ticket Booking</title>
    <link rel="stylesheet" href="./../css/addmovie.css">
    <link rel="stylesheet" href="./../css/manage-registration.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        /* Print styles */
        @media print {
            body * {
                visibility: hidden;
            }

            .print-container, .print-container * {
                visibility: visible;
            }

            .print-container {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <!--- Header --->
    <header class="header">
        <div class="logo"><img src=".\..\..\Images\logo2.png" class="logo-img"></div>
        <nav class="nav">
            <ul>
                <li><a href="./admin-dashboard.php" style="margin-right:50px; font-size:30px;">Home</a></li>

                <div class="d-flex align-items-center">
                    <a href="./login.php" class="btn btn-outline-primary">
                        <i class="bi bi-person"></i><img src=".\..\..\Images\login.png" style="height:40px;">
                    </a>
                </div>
            </ul>
        </nav>
    </header>

    <div class="containers print-container">
        <h2> User Registration Report</h2>

        <table class="movie-table">
            <thead>
                <tr>
                    <th>User Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Confirm Password</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    // Fetch the next row of a result set as an associative array
                    $i = 0;
                    while ($res = $query->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . ++$i . "</td>";
                        echo "<td>" . $res['user_name'] . "</td>";
                        echo "<td>" . $res['email'] . "</td>";
                        echo "<td>" . $res['password'] . "</td>";
                        echo "<td>" . $res['confirm_password'] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tr>
            </tbody>
        </table>
    </div>

    <div style="text-align: center;">
    Click Here To Print Report 👉
    <button  onclick="window.print()" style="color: white; text-align: center; background-color:#4CAF50;">  Print Report</button>
</div>


    <!-- Footer -->
    <div class="footer bg-dark text-light py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="logo"><img src="./../../Images/logo2.png" class="logo-img" alt="Logo"></div>
                    <p style="margin-top:10px;">Experience seamless ticket booking with STARLIGHT CINEMA across the nation. Watch the latest movies in comfort and style.</p>
                </div>
                <div class="col-md-2">
                    <h5 class="footer-title">Explore Movies</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-light">Comedy Shows</a></li>
                        <li><a href="#" class="text-light">Drama</a></li>
                        <li><a href="#" class="text-light">Kids Movies</a></li>
                        <li><a href="#" class="text-light">Marathi Movies</a></li>
                        <li><a href="#" class="text-light">Hindi Movies</a></li>
                        <li><a href="#" class="text-light">English Movies</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <h5 class="footer-title">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-light">About Us</a></li>
                        <li><a href="#" class="text-light">Contact Us</a></li>
                        <li><a href="#" class="text-light">Gallery</a></li>
                        <li><a href="#" class="text-light">FAQ</a></li>
                        <li><a href="#" class="text-light">Login</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5 class="footer-title">Rate Us</h5>
                    <p>We value your feedback! Please rate your experience with us:</p>
                    <div class="rating">
                        <p>Rating: ⭐⭐⭐⭐☆</p>
                    </div>
                    <p>Your rating helps us improve our service!</p>
                </div>
            </div>
            <div class="row mt-3 text-center">
                <div class="col-12">
                    <p>&copy; 2024 STARLIGHT CINEMA. Developed by Gaikwad Rutuja & Nimse Nikita</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>