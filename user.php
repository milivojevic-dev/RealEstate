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
                    <a class="nav-link" href="welcome.php">Home <span class="sr-only">(current)</span></a>
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
                <li class="nav-item">
                    <a class="nav-link" href="update-data.php">Change</a>
                </li>
            </ul>
            <div class="my-2 my-lg-0 header-user">
                <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                <a href="user.php" class="profile"><?php echo $login_session; ?></a>
                <a class="logout" href="login.php">Sign Out</a>
            </div>
        </div>
    </nav>
</header>

<section class="user-section">
    <div class="container">
        <?php
        if(isset($_SESSION['login_user'])){
            ?>
            <table>
                <tbody>
                <tr>
                    <td>
                        <p class="user-title">Username: </p>
                    </td>
                    <td>
                        <p class="user-info"><?php echo $row['username']; ?></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="user-title">First name: </p>
                    </td>
                    <td>
                        <p class="user-info"><?php echo $row['first_name']; ?></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="user-title">Last name: </p>
                    </td>
                    <td>
                        <p class="user-info"><?php echo $row['last_name']; ?></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="user-title">Email: </p>
                    </td>
                    <td>
                        <p class="user-info"><?php echo $row['email']; ?></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="user-title">Date of birth: </p>
                    </td>
                    <td>
                        <p class="user-info"><?php echo $row['date_birth']; ?></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="user-title">Gender: </p>
                    </td>
                    <td>
                        <p class="user-info"><?php
                            if ($row['gender'] == 0) {
                                echo "man";
                            } elseif ($row['gender'] == 1) {
                                echo "women";
                            }
                            ?>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="user-title">Age: </p>
                    </td>
                    <td>
                        <p class="user-info"><?php echo $row['age']; ?></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="user-title">Contact: </p>
                    </td>
                    <td>
                        <p class="user-info"><?php echo $row['contact']; ?></p>
                    </td>
                </tr>
                </tbody>
            </table>
        <?php } ?>
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
                <a href="">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
                <a href="">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>
</footer>
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