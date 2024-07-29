<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Ticket Booking</title>
    <link rel="stylesheet" href="./index.css">
   
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <!--- Header --->
    <header class="header">
        <div class="logo"><img src=".\Images\logo2.png" class="logo-img"></div>
        <nav class="nav">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Movies</a></li>
            </ul>
        </nav>
    </header>

    <!--- Main Content --->
    <main>
      
<div id="movieCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#movieCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#movieCarousel" data-slide-to="1"></li>
        <li data-target="#movieCarousel" data-slide-to="2"></li>
        <li data-target="#movieCarousel" data-slide-to="3"></li>
        <li data-target="#movieCarousel" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active" style="background-image:url('Images/banner1.jpg');">
            <div class="carousel-caption d-none d-md-block">
                <h5>Movie Title 1</h5>
                <p>Brief description of the movie.</p>
            </div>
        </div>
        <div class="carousel-item" style="background-image: url('Images/banner2.jpg');">
            <div class="carousel-caption d-none d-md-block">
                <h5>Movie Title 2</h5>
                <p>Brief description of the movie.</p>
            </div>
        </div>
        <div class="carousel-item" style="background-image: url('Images/banner3.jpg');">
            <div class="carousel-caption d-none d-md-block">
                <h5>Movie Title 3</h5>
                <p>Brief description of the movie.</p>
            </div>
        </div>
        <div class="carousel-item" style="background-image: url('Images/banner4.jpg');">
            <div class="carousel-caption d-none d-md-block">
                <h5>Movie Title 4</h5>
                <p>Brief description of the movie.</p>
            </div>
        </div>
        <div class="carousel-item" style="background-image: url('Images/banner5.jpg');">
            <div class="carousel-caption d-none d-md-block">
                <h5>Movie Title 5</h5>
                <p>Brief description of the movie.</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#movieCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#movieCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>



<div class="centered-content">
        <h5>Watch new movies</h5>
        <h2>Movie Now Playing</h2>
    </div>
<div class="card-container">
        
        <div class="movie-card">
            <img src=".\Images\movie2.jpg" alt="Movie 2">
            <div class="card-content">
                <h3>Movie Title 2</h3>
                <p>Short description of the movie.</p>
                <a href="#" class="book-button">Book Ticket</a>
            </div>
              </div>

        <div class="movie-card">
            <img src=".\Images\movie4.jpg" alt="Movie 2">
            <div class="card-content">
                <h3>Movie Title 4</h3>
                <p>Short description of the movie.</p>
                <a href="#" class="book-button">Book Ticket</a>
            </div>
        </div>
        <div class="movie-card">
            <img src=".\Images\movie5.jpg" alt="Movie 2">
            <div class="card-content">
                <h3>Movie Title 5</h3>
                <p>Short description of the movie.</p>
                <a href="#" class="book-button">Book Ticket</a>
            </div>
        </div>
        <div class="movie-card">
            <img src=".\Images\movie6.jpg" alt="Movie 2">
            <div class="card-content">
                <h3>Movie Title 6</h3>
                <p>Short description of the movie.</p>
                <a href="#" class="book-button">Book Ticket</a>
            </div>
        </div>
        <!-- Add more movie cards as needed -->
    </div>




    <div class="centered-content">
        <h5>New upcoming movies</h5>
        <h2>Movies Coming Soon</h2>
    </div>
<div class="card-container">
        
        <div class="movie-card">
            <img src=".\Images\movie2.jpg" alt="Movie 2">
            <div class="card-content">
                <h3>Movie Title 2</h3>
                <p>Short description of the movie.</p>
                <a href="#" class="book-button">Book Ticket</a>
            </div>
              </div>

        <div class="movie-card">
            <img src=".\Images\movie4.jpg" alt="Movie 2">
            <div class="card-content">
                <h3>Movie Title 4</h3>
                <p>Short description of the movie.</p>
                <a href="#" class="book-button">Book Ticket</a>
            </div>
        </div>
        <div class="movie-card">
            <img src=".\Images\movie5.jpg" alt="Movie 2">
            <div class="card-content">
                <h3>Movie Title 5</h3>
                <p>Short description of the movie.</p>
                <a href="#" class="book-button">Book Ticket</a>
            </div>
        </div>
        <div class="movie-card">
            <img src=".\Images\movie6.jpg" alt="Movie 2">
            <div class="card-content">
                <h3>Movie Title 6</h3>
                <p>Short description of the movie.</p>
                <a href="#" class="book-button">Book Ticket</a>
            </div>
        </div>
        <!-- Add more movie cards as needed -->
    </div>


    <section class="container mt-4">
        <div id="movieIconSlider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-flex justify-content-around">
                        <img src=".\Images\movie6.jpg" class="rounded-circle img-fluid small-icon" alt="Movie 1" style="width:150px;height:150px">
                        <img src="movie2.jpg" class="rounded-circle img-fluid small-icon" alt="Movie 2">
                        <img src="movie3.jpg" class="rounded-circle img-fluid small-icon" alt="Movie 3">
                        <img src="movie4.jpg" class="rounded-circle img-fluid small-icon" alt="Movie 4">
                        <img src="movie5.jpg" class="rounded-circle img-fluid small-icon" alt="Movie 5">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex justify-content-around">
                        <img src="movie6.jpg" class="rounded-circle img-fluid small-icon" alt="Movie 6">
                        <img src="movie7.jpg" class="rounded-circle img-fluid small-icon" alt="Movie 7">
                        <img src="movie8.jpg" class="rounded-circle img-fluid small-icon" alt="Movie 8">
                        <img src="movie9.jpg" class="rounded-circle img-fluid small-icon" alt="Movie 9">
                        <img src="movie10.jpg" class="rounded-circle img-fluid small-icon" alt="Movie 10">
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#movieIconSlider" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#movieIconSlider" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>


    </main>








   <!-- Footer -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3 class="footer-title">STARLIGHT CINEMA</h3>
                <p>Buy movie tickets easily with Aovis system nationwide</p>
                <a href="#" class="btn btn-warning">Get Your Ticket</a>
            </div>
            <div class="col-md-2">
                <h5 class="footer-title">Movies</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Adventure</a></li>
                    <li><a href="#">Animation</a></li>
                    <li><a href="#">Comedy</a></li>
                    <li><a href="#">Crime</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <h5 class="footer-title">Links</h5>
                <ul class="list-unstyled">
                    <li><a href="#">About</a></li>
                    <li><a href="#">My Account</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Latest Events</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                </div>
            <div class="col-md-4">
                <h5 class="footer-title">Newsletter</h5>
                <p>Subscribe to Leitmotif newsletter this very day.</p>
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
            <p>&copy; Copyright 2023 by Ovatheme.com</p>
        </div>
    </div>
</div>



<!-- Font Awesome for social media icons -->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <!-- Font Awesome CDN for social media icons -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>
</html>

