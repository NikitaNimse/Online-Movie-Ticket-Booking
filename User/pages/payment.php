<?php
$databaseHost = "localhost";
$databaseName = "movieticketdb";
$databaseUsername = "root";
$databasePassword = "";

$con = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Check if id is set and is a valid number
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Select data associated with this particular id
    $sql = "SELECT * FROM ticket WHERE id = $id";
    $query = $con->query($sql);

    if ($query) {
        $resultData = $query->fetch_assoc();
        $name = $resultData['name'];
        $quantity = $resultData['quantity'];
        $total_price = $resultData['total_price'];

        }    
    }
?>


     
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Ticket Booking</title>
    <link rel="stylesheet" href=" ./../css/gallery.css">
    <link rel="stylesheet" href=" ./../css/payment.css">
   
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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


   <!-- Main Content -->
<main>
    <div class="container">
        <div class="payment-container">
            <h2 style="color:#ff5500;">Payment Details</h2>
            <form method="POST" action="payment.php">

                <div class="form-group">
                    <label for="customerName">Name </label>
                    <input type="text" class="form-control" id="customerName" name="name" placeholder="Enter your name" required>
                </div>

                <div class="form-group">
                    <label for="customerEmail">Email</label>
                    <input type="email" class="form-control" id="customerEmail" name="email" placeholder="Enter your email" required>
                </div>

                <div class="form-group">
                    <label for="customerMobile">Mobile No</label>
                    <input type="tel" class="form-control" id="customerMobile" name="mobile_no" placeholder="Enter your mobile number" required>
                </div>

                <h3 style="color:#ff5500;">Payment Details</h3>
                <div class="form-group">
                    <label for="productName">Movie Name</label>
                    <input type="text" class="form-control" value="<?php echo $name; ?>" id="productName" name="movie_name" placeholder="Enter movie name" required readonly>
                </div>

                <div class="form-group">
                    <label for="paymentMode">Select Payment Mode</label>
                    <select class="form-control" id="paymentMode" name="payment_mode" required>
                        <option value="">Select Payment Mode</option>
                        <option value="creditCard">Credit Card</option>
                        <option value="debitCard">Debit Card</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="cardNumber">Card Number</label>
                    <input type="text" class="form-control" id="cardNumber" name="card_number" placeholder="Enter card number" required>
                </div>
                <div class="form-group">
                    <label for="totalPrice">Total Price</label>
                    <input type="text" class="form-control" value="<?php echo $total_price; ?>" id="totalPrice" name="total_price" placeholder="Enter total price" required readonly>
                </div>
                <button type="submit" name="submit" class="btn btn-primary btn-block">Make Payment</button>
            </form>
        </div>
    </div>
</main>


   <!-- Footer -->
   <div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3 class="footer-title">STARLIGHT CINEMA</h3>
                <p>Buy movie tickets easily with Starlight Cinema system nationwide</p>
                <a href="#" class="btn btn-warning">Get Your Ticket</a>
            </div>
            <div class="col-md-2">
                <h5 class="footer-title">Movies</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Comedy Shows</a></li>
                    <li><a href="#">Drama</a></li>
                    <li><a href="#">Kids Movie</a></li>
                    <li><a href="#">Marathi Movies</a></li>
                    <li><a href="#">Hindi Movies</a></li>
                    <li><a href="#">English Movies</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <h5 class="footer-title">Links</h5>
                <ul class="list-unstyled">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Login</a></li>
                </ul>
                </div>
                
            <div class="col-md-4">
                <h5 class="footer-title">Newsletter</h5>
                <p>Subscribe to STARLIGHT CINEMA .</p>
                <div class="newsletter">
                    <input type="email" class="form-control" placeholder="Email Address">
                    <button class="btn btn-warning mt-2">Subscribe</button>
                </div>
                <div class="mt-2">
                    <input type="checkbox" id="terms">
                    <label for="terms">I agree to all terms and policies of the company</label>
                </div>
                <div class="social-icons mt-3">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <p>&copy; Copyright 2024 by starlightcinema.com  &nbsp; &nbsp; &nbsp; &nbsp;    Developed By Gaikwad Rutuja & Nimse Nikita</p>
          
        </div>
    </div>
</div>



<!-- Font Awesome for social media icons -->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <!-- Font Awesome CDN for social media icons -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>  document.querySelector('.nav').addEventListener('click', function() {
            this.querySelector('ul').classList.toggle('show');
        });</script>
</body>
</html>

<?php


if (isset($_POST['submit'])) { 
	$name =  $_POST['name'];
  $email =  $_POST['email'];
 	$mobile_no =  $_POST['mobile_no'];
     $movie_name=  $_POST['movie_name'];
  $payment_mode	=  $_POST['payment_mode'];
  $card_number	 =  $_POST['card_number'];
   $total_price	 =  $_POST['total_price'];
  
     
		$sql = "INSERT INTO payment  (`name`,`email`,`mobile_no`,`movie_name`,`payment_mode`,`card_number`,`total_price`)
    VALUES ('$name','$email',  '$mobile_no','$movie_name', '$payment_mode','$card_number','$total_price')";
		
       if($con->query($sql))
        {
            echo    '<script type="text/javascript">
                    alert ("Your Payment is  Done..👍");
                    window.location="view-ticket.php";
                    </script>';
        }
        else
        {
            echo    '<script type="text/javascript">
            alert ("payment Not Done...!");
            window.location="payment.php";
            </script>';
        }
      }
      ?>

       
