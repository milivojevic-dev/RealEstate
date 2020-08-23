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
                    <a class="nav-link" href="<?php
                    if(isset($_SESSION['login_user'])){
                    ?>
                welcome.php
        <?php
        } else{ ?>
           login.php
        <?php  }
        ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about-us.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Real Estate</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<!-- About Section -->
<section class="about-section">
    <div class="container">
        <h1>ABOUT US</h1>
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="about-description">
                    <p>We rely on knowledge and experience of traditional real estate agents and use new technologies to
                        improve our services. By introducing the online business model, we speed up the process of
                        buying and selling real estate. We also cut excessive costs and offered our users the lowest
                        commission on the market.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="business-background"></div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-4">
                <div class="vision-background"></div>
            </div>
            <div class="col-md-8">
                <div class="about-description">
                    <h3>Vision</h3>
                    <p>RealEstate is dedicated to becoming the first online real estate agency in Europe. We provide
                        online real estate services and aim to achieve the highest possible standard in the industry. As
                        a people-oriented company, we are taking real estate to the future.</p>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="about-description">
                    <h3>Mission</h3>
                    <p>RealEstate combines creative marketing solutions, state-of-the-art design and practical
                        experience in the real estate market to help individuals buy, sell, rent or lease their
                        property. We value your time and your money by holding transparency as our core value. Our
                        agents use professional, practical and proven customer-oriented approach. We use innovative
                        technologies to provide accurate and quick information to every individual.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mission-background"></div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-4">
                <div class="team-background"></div>
            </div>
            <div class="col-md-8">
                <div class="about-description">
                    <h3>RealEstate Team</h3>
                    <p>We are a full-service online real estate agency. Years of professional experience as a
                        traditional agency helped us to learn, grow and improve our services. In our team, we have
                        experienced real estate agents, IT and marketing experts, photographers, lawyers, and other
                        creative professionals who helped us to be where we are now. Our main goal is to make the entire
                        process of buying, selling or renting a property transparent and efficient.</p>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="about-description">
                    <h3>Trust</h3>
                    <p>It was a long and rocky road from traditional to the online agency. We had to work very hard to
                        successfully digitalize our services. From the very beginning, we earned sympathy and trust from
                        our loyal users and IT professionals. We had over 4500 successful realizations - sold or rented
                        properties, in less than 3 years. We are among top 3 online portals in the country, with 2.5
                        million of unique visitors and 10 million open pages. In 2017, we earned an award for the best
                        real estate website in Serbia. Our hard work and dedication were recognized and supported by
                        South Central Ventures (Enterprise Innovation Fund – ENIF). With their support and investment,
                        we are continuing to grow, expand and change the world of real estate.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="trust-background"></div>
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