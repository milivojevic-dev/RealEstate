<?php
include('session.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="Real Estate sell place house building">
    <meta name="description" content="If you want to buy or sell a house, feel free to contact us!">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Real Estate</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<!-- Header -->
<header>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <a class="navbar-brand" href="welcome.php"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about-us.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="real-estate.php">Real Estate</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<!-- Contact Background Section -->
<section class="contact-background-section"></section>

<!-- Contact Section -->
<section class="contact-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <form action="mail.php" method="post" id="form">
                    <div class="text-center py-2">
                        <h3><i class="fa fa-envelope"></i> Contact us</h3>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-user"></i></div>
                            </div>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                                   required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-envelope"></i></div>
                            </div>
                            <input type="email" class="form-control" id="mail" name="email"
                                   placeholder="example@gmail.com" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-comment"></i></div>
                            </div>
                            <textarea class="form-control" name="message" id="message" placeholder="Message"
                                      required></textarea>
                        </div>
                    </div>
                    <div class="text-center">
                        <input type="submit" value="Submit" class="btn btn-block">
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="row justify-content-between">
        <div class="col-md-3">
            <p>&copy; Real Estate 2020</p>
        </div>
        <div class="col-md-6">
            <div class="social-media">
                <a href="facebook.com">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="instagram.com">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
                <a href="twitter.com">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>
</footer>

<script src="script.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
</body>
</html>