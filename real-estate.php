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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Real Estate</title>
</head>
<body>

<!-- Header -->
<header>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <a class="navbar-brand" href="#"></a>
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

<section class="real-estate-page">
    <div class="container">
        <h1>REAL ESTATE</h1>
        <div class="row">
            <?php
            $sql = "SELECT * FROM the_list ORDER BY date ASC";
            $result = mysqli_query($con, $sql) or die(mysqli_error($con));
            while ($record = mysqli_fetch_assoc($result)) {
                ?>
                <div class="col-sm-4">
                    <div class="card hovercard">
                        <div class="cardheader">
                            <div class="avatar" style="background-image: url(images/<?php echo $record['image']; ?>)">
                            </div>
                        </div>
                        <div class="card-body info">
                            <div class="title">
                                <h3><?php echo $record['name_real_estate']; ?></h3>
                            </div>
                            <div class="description model-toggle">
                                <p>Number of rooms: <span><?php echo $record['room_number']; ?></span></p>
                                <p>Address: <span><?php echo $record['room_number']; ?></span> </p>
                                <p>City: <span><?php echo $record['city']; ?></span></p>
                                <p>Country: <span><?php echo $record['country']; ?></span></p>
                                <p>Animals: <span><?php
                                        if ($record['animals'] == 0) {
                                            echo "yes";
                                        } elseif ($record['animals'] == 1) {
                                            echo "no";
                                        }
                                        ?></span></p>
                                <p>Smoking: <span><?php
                                        if ($record['smoking'] == 0) {
                                            echo "yes";
                                        } elseif ($record['smoking'] == 1) {
                                            echo "no";
                                        }
                                        ?></span></p>
                                <p>Size: <span><?php echo $record['size']; ?></span></p>
                                <p>Balcony: <span><?php
                                        if ($record['balcony'] == 0) {
                                            echo "yes";
                                        } elseif ($record['balcony'] == 1) {
                                            echo "no";
                                        }
                                        ?></span></p>
                                <p class="contact-number">Contact: </p>
                                <a href="tel:<?php echo $record['phone']; ?>"><?php echo $record['phone']; ?></a>
                                <p class="price">Price: <span><?php echo $record['price']; ?></span></p>
                                <p class="date">Date: <span><?php echo $record['date']; ?></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }
            ?>
        </div>
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="row justify-content-between">
        <div class="col-lg-3 col-md-4">
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