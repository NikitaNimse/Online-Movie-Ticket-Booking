<?php
$databaseHost = "localhost";
$databaseName = "movieticketdb";
$databaseUsername = "root";
$databasePassword = "";

// Database connection
$con = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Ensure ID is passed and is a valid integer
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    echo "Invalid or missing movie ID.";
    exit();
}

$id = intval($_GET['id']);

// Fetch data associated with this particular ID using a prepared statement
$stmt = $con->prepare("SELECT * FROM movies WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$query = $stmt->get_result();

if ($query->num_rows > 0) {
    $resultData = $query->fetch_assoc();
    $image = $resultData['image'];
    $name = $resultData['name'];
    $description = $resultData['description'];
    $show_time = $resultData['show_time'];
    $show_date = $resultData['show_date'];
    $price = $resultData['price'];
} else {
    echo "No movie found with ID: $id";
    exit();
}

$stmt->close();
$con->close();
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Ticket Booking</title>
    <link rel="stylesheet" href=" ./../css/gallery.css">
    <link rel="stylesheet" href=" ./../css/movie-details.css">
   
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
.show-date-time {
    display: flex;
    align-items: center;
    gap: 20px; /* Adjust spacing between date and time sections */
}

.show-date-time label {
    margin-right: 5px; /* Space between label and input */
    font-weight: bold; /* Make label text bold */
    color: #333; /* Dark grey color for labels */
    text-decoration: none; /* Remove text decoration */
}

.show-date-time input {
    border: none; /* Remove border */
    background: none; /* Remove background */
    font-size: 14px; /* Adjust font size */
    color: #333; /* Text color */
    padding: 0; /* Remove padding */
    width: auto; /* Adjust width to fit content */
    cursor: default; /* Change cursor to default (not editable) */
    display: inline; /* Keep inputs inline with labels */
    text-align: center; /* Center text inside the input */
}

.show-date-time input[readonly] {
    background-color: #f9f9f9; /* Light background color for readability */
    color: #333; /* Text color */
}







/* Container for seating arrangement */
.container {
    margin-top: 20px;
    text-align: center;
    max-width: 100%; /* Ensure it fits within the viewport */
    padding-bottom: 50px;
}

/* Screen display */
.screen {
    width: 50%;
    height: 50px;
    background-color: #ccc;
    margin-bottom: 20px;
    text-align: center;
    padding: 10px;
    font-size: 18px;
    font-weight: bold;
    margin-left: auto;
    margin-right: auto;
}

/* Seat row design */
.row-seat {
    display: flex;
    justify-content: center;
    flex-wrap: wrap; /* Allow seats to wrap into multiple rows */
    margin-bottom: 10px;
}

/* Seat design */
.seat {
    width: 30px; /* Smaller seat size */
    height: 30px; /* Smaller seat size */
    background-color: #444;
    margin: 5px;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s;
}

/* Seat selection state */
.seat.selected {
    background-color: #6c63ff;
}

/* Occupied seat state */
.seat.occupied {
    background-color: #f78a8a;
    cursor: not-allowed;
}

/* Hover effect for seats that are not occupied */
.seat:hover:not(.occupied) {
    background-color: #28a745;
}

/* Seat information display */
.seat-info {
    margin-top: 20px;
    font-size: 18px;
    text-align: center;
}

.seat-info span {
    margin-left: 5px;
    font-weight: bold;
}

    </style>





    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <div class="logo"><img src="./../../Images/logo2.png" class="logo-img" alt="Logo"></div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href=".\..\..\index1.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href=".\..\..\User\pages\movies.php">Movies</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            View More
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href=".\..\..\User\pages\about.php">About Us</a></li>
            <li><a class="dropdown-item" href=".\..\..\User\pages\contact.php">Contact Us</a></li>
            <li><a class="dropdown-item" href=".\..\..\User\pages\gallery.php">Gallery</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="d-flex align-items-center">
      <a href="#" class="btn btn-outline-primary">
      <i class="bi bi-person"></i> <img src =".\..\..\Images\login.png" style="height:40px;">
      </a>
    </div>
  </div>
</nav>


<!-- Navbar and other content remain unchanged -->

<!-- Main Content -->
<main>
    <div class="containers" >
        <div class="movie-image">
            <img src="./../../Images/movies/<?php echo htmlspecialchars($image); ?>" alt="Movie Image">
        </div>
        <div class="movie-details">
            <h1 id="name"><?php echo htmlspecialchars($name); ?></h1>
            <p>Rating: ⭐⭐⭐⭐☆</p>
            <p id="description"><?php echo htmlspecialchars($description); ?></p>

            <!-- Date and Time Inputs -->
      <!-- Date and Time Inputs -->
      <div class="show-date-time">
    <label for="visible_show_date"><strong>Date:</strong></label>
    <input type="date" id="visible_show_date" name="show_dates" value="<?php echo htmlspecialchars($show_date); ?>" required readonly>

    <label for="visible_show_time"><strong>Time:</strong></label>
    <input type="time" id="visible_show_time" name="show_times" value="<?php echo htmlspecialchars($show_time); ?>" required readonly>
</div>








<div class="container">
        <div class="screen">Select Seat</div>

        <div class="row-seat">
            
            <div class="seat" data-seat="A1"></div>
            <div class="seat occupied" style="background-color:#e60000" data-seat="A2"></div>
            <div class="seat" data-seat="A3"></div>
            <div class="seat" data-seat="A4"></div>
            <div class="seat" data-seat="A5"></div>

            <div class="seat" data-seat="A6"></div>
            <div class="seat occupied" style="background-color:#e60000" data-seat="A7"></div>
            <div class="seat" data-seat="A8"></div>
            <div class="seat" data-seat="A9"></div>
            <div class="seat" data-seat="A10"></div>
            
        </div>

        <div class="row-seat">
            <div class="seat" data-seat="B1"></div>
            <div class="seat" data-seat="B2"></div>
            <div class="seat" data-seat="B3"></div>
            <div class="seat" data-seat="B4"></div>
            <div class="seat occupied" style="background-color:#e60000" data-seat="B5"></div>
            <div class="seat" data-seat="B6"></div>
            <div class="seat occupied"  style="background-color:#e60000"data-seat="B7"></div>
            <div class="seat" data-seat="B8"></div>
            <div class="seat" data-seat="B9"></div>
            <div class="seat " data-seat="B10"></div>
        </div>

        <div class="row-seat">
            <div class="seat" data-seat="C1"></div>
            <div class="seat occupied" style="background-color:#e60000" data-seat="C2"></div>
            <div class="seat" data-seat="C3"></div>
            <div class="seat" data-seat="C4"></div>
            <div class="seat" data-seat="C5"></div>
            <div class="seat" data-seat="C6"></div>
            <div class="seat " data-seat="C7"></div>
            <div class="seat" data-seat="C8"></div>
            <div class="seat occupied"  style="background-color:#e60000"data-seat="C9"></div>
            <div class="seat" data-seat="C10"></div>
        </div>

        
        <div class="row-seat">
            <div class="seat" data-seat="D1"></div>
            <div class="seat " data-seat="D2"></div>
            <div class="seat" data-seat="D3"></div>
            <div class="seat occupied" style="background-color:#e60000" data-seat="D4"></div>
            <div class="seat occupied" style="background-color:#e60000" data-seat="D5"></div>
            <div class="seat" data-seat="D6"></div>
            <div class="seat " data-seat="D7"></div>
            <div class="seat" data-seat="D8"></div>
            <div class="seat" data-seat="D9"></div>
            <div class="seat " data-seat="D10"></div>
        </div>

        
        <div class="row-seat">
            <div class="seat" data-seat="E1"></div>
            <div class="seat " data-seat="E2"></div>
            <div class="seat" data-seat="E3"></div>
            <div class="seat" data-seat="E4"></div>
            <div class="seat" data-seat="E5"></div>
            <div class="seat" data-seat="E6"></div>
            <div class="seat occupied" style="background-color:#e60000" data-seat="E7"></div>
            <div class="seat" data-seat="E8"></div>
            <div class="seat" data-seat="E9"></div>
            <div class="seat  occupied" style="background-color:#e60000" data-seat="E10"></div>
        </div>

        <div class="seat-info">
            <p style="color:#e60000;">Price: ₹<?php echo htmlspecialchars($price); ?> per ticket</p>
            <span>Selected Seats: <b id="selectedseats">0</b></span>
            <p>Total Price: ₹<span id="total_price">0</span></p>
        </div>
    </div>

    <script>
        const seats = document.querySelectorAll('.seat:not(.occupied)');
        const selectedSeatsElement = document.getElementById('selectedseats');
        const totalPriceElement = document.getElementById('total_price');
        const ticketPrice = <?php echo $price; ?>;

        seats.forEach(seat => {
            seat.addEventListener('click', () => {
                seat.classList.toggle('selected');
                updateSelectedCount();
            });
        });

        function updateSelectedCount() {
            const selectedSeats = document.querySelectorAll('.seat.selected');
            const selectedSeatsCount = selectedSeats.length;
            selectedSeatsElement.innerText = selectedSeatsCount;
            totalPriceElement.innerText = selectedSeatsCount * ticketPrice;
        }
    </script>







            

            <form action="" method="POST">
                <input type="hidden" name="movie_id" value="<?php echo htmlspecialchars($id); ?>">
                <input type="hidden" name="name" value="<?php echo htmlspecialchars($name); ?>">
                <input type="hidden" name="image" value="./../../Images/movies/<?php echo htmlspecialchars($image); ?>">
                <input type="hidden" name="quantity" id="form_quantity" value="0">
               
                <input type="hidden" name="total_price" id="form_total_price" value="<?php echo htmlspecialchars($price); ?>">
                
                <!-- Hidden Date and Time Inputs for Form Submission -->
                <input type="hidden" name="show_date" id="form_show_date">
                <input type="hidden" name="show_time" id="form_show_time">

                <input type="submit" name="submit" value="Book Ticket" class="buy-button">
            </form>
            <script>
        document.querySelector('form').addEventListener('submit', function() {
            document.getElementById('form_quantity').value = document.querySelectorAll('.seat.selected').length;
            document.getElementById('form_total_price').value = document.getElementById('total_price').textContent;
        });
    </script>
        </div>
    </div>

    <script>
        let quantity = 1;
        const pricePerTicket = <?php echo $price; ?>;

        function increment() {
            quantity++;
            document.getElementById('quantity').value = quantity;
            document.getElementById('form_quantity').value = quantity;
            updatePrice();
        }

        function decrement() {
            if (quantity > 1) {
                quantity--;
                document.getElementById('quantity').value = quantity;
                document.getElementById('form_quantity').value = quantity;
                updatePrice();
            }
        }

        function updatePrice() {
            const totalPrice = quantity * pricePerTicket;
            document.getElementById('total_price').textContent = totalPrice;
            document.getElementById('form_total_price').value = totalPrice;
        }

        // Update hidden inputs with visible date and time inputs before form submission
        document.querySelector('form').addEventListener('submit', function() {
            document.getElementById('form_show_date').value = document.getElementById('visible_show_date').value;
            document.getElementById('form_show_time').value = document.getElementById('visible_show_time').value;
        });
    </script>
</main>










<?php
$databaseHost = "localhost";
$databaseName = "movieticketdb";
$databaseUsername = "root";
$databasePassword = "";

// Database connection
$con = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

if (isset($_POST['submit'])) {
    // Check the current number of records in the 'ticket' table
    $result = $con->query("SELECT COUNT(*) as count FROM ticket");
    $row = $result->fetch_assoc();
    
    if ($row['count'] < 50) {
        $name = $_POST['name'];
        $image = $_POST['image'];
        $quantity = $_POST['quantity'];
        $show_date = $_POST['show_date'];
        $show_time = $_POST['show_time'];
        $total_price = $_POST['total_price'];

        // Prepare and bind
        $stmt = $con->prepare("INSERT INTO ticket (`name`, `image`, `quantity`, `total_price`, `show_date`, `show_time`) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssisss", $name, $image, $quantity, $total_price, $show_date, $show_time);

        // Execute the prepared statement
        if ($stmt->execute()) {
            echo '<script type="text/javascript">
                  alert("Ticket booked successfully!");
                  window.location.href = "booked-ticket.php";
                  </script>';
        } else {
            echo '<script type="text/javascript">
                  alert("Error booking ticket: ' . $stmt->error . '");
                  </script>';
        }

        // Close the statement
        $stmt->close();
    } else {
        echo '<script type="text/javascript">
              alert("Booking limit reached. Only 10 tickets can be booked.");
              </script>';
    }
}

// Close the database connection
$con->close();
?>

