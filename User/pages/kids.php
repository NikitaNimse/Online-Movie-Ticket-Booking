<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Ticket Booking</title>
    <link rel="stylesheet" href=" ./../css/gallery.css">
    <link rel="stylesheet" href=" ./../css/kids.css">
   
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



  
<div class="centered-content">
        <h3>Kids Movies</h3>
       
    </div>

    <div class="card-container">

    
<?php
$databaseHost = "localhost";
$databaseName = "movieticketdb";
$databaseUsername = "root";
$databasePassword = "";

//Database connection 

$con = new mysqli($databaseHost, $databaseUsername, $databasePassword,$databaseName)or die($conn->connect_error());

// Fetch data in descending order (lastest entry first)
$sql = "SELECT * FROM movies WHERE category='Kids Movie' ORDER BY id DESC ";
$query_run=mysqli_query($con,$sql);
$check_movie=mysqli_num_rows($query_run)>0;

 if($check_movie)
 {
 while($row=mysqli_fetch_array($query_run))
 {
  ?>    
        <div class="movie-card">
            <img src="./../../Images/Movies/<?php echo $row['image'];?>" alt="Movie 2">
         
            <div class="card-content">
                <h3><?php echo $row['name'];?></h3>
                <p><?php echo $row['description'];?></p>
                    <p class="movie-genre"><h6>Time: <?php echo $row['show_time'];?></h6></p>
                    <p class="movie-genre">Date: <?php echo $row['show_date'];?></p>
                    <p class="movie-duration">Rs: <?php echo $row['price'];?></p>
                    <?php  echo "<a href='.\movie-details.php?id=$row[id]' class='book-button'>Book Ticket</a>";?>
            </div>
              </div>
  <?php
}
 }
?>


</div>
</div>

        <!-- <div class="movie-card">
            <img src="./../../Images/Movies/Frozen.jpg" alt="Movie 2">
            <div class="card-content">
                <h3> Frozen</h3>
                <p>"Frozen," the latest Disney musical extravaganza, preaches the importance of embracing your true nature.
            </p>

                <p class="movie-genre">Show-time: 7:00 to 9:00</p>
                    <p class="movie-duration">price: ₹500</p>
                <a href=".\movie-details.php" class="book-button">Book Ticket</a>
            </div>
        </div>
        <div class="movie-card">
            <img src="./../../Images/Movies/Dora.jpg" alt="Movie 2">
            <div class="card-content">
                <h3>Dora</h3>
                <p>The film is a blast for kids, and probably suitable for emotionally robust kids of all ages. Nobody actually dies.

                </p>
                <p class="movie-genre">Show-time:2:00 to 5:00</p>
                    <p class="movie-duration">price: ₹250</p>
                <a href=".\movie-details.php" class="book-button">Book Ticket</a>
            </div>
        </div>
        <div class="movie-card">
            <img src="./../../Images/Movies/childrenparty.jpg" alt="Movie 2">
            <div class="card-content">
                <h3>Chillar Party</h3>
                <p>Chillar Party is a small film with a big heart where a kiddo gang shows more maturity than the adult</p>
                     <p class="movie-genre">Show-time:9:00 to 12:00</p>
                    <p class="movie-duration">price: ₹300</p>
                <a href=".\movie-details.php" class="book-button">Book Ticket</a>
            </div>
        </div>
       
      </div> -->

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
                <p>&copy; 2024 STARLIGHT CINEMA.  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  Developed by Gaikwad Rutuja & Nimse Nikita</p>  
                 
            </div>
        </div>
    </div>
</div>

<!-- Font Awesome for social media icons -->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
