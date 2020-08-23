<?php
include_once 'db_config.php';
$sql = "SELECT * FROM the_list where id_real_estate=1";
$result = mysqli_query($con, $sql);

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
                    <a class="nav-link" href="#">Real Estate</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<!-- Update Section -->
<section class="update-section">
    <form name="user_form" method="post" action="">
        <div style="width:500px;">
            <table border="0" cellpadding="10" cellspacing="0" width="500" align="center" >
                <tr class="tableheader">
                    <td>Edit RealEstate</td>
                </tr>
                <?php
//                $record_count = count($_POST["the_list"]);
//                for ($i = 0;
//                     $i < $record_count;
//                     $i++) {
//                    $result = mysqli_query($con, "SELECT * FROM the_list WHERE id_real_estate='" . $_POST["id_real_estate"][$i] . "'");
//                    $record[$i] = mysqli_fetch_array($result);
                while ($record = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td>
                            <table border="0" cellpadding="10" cellspacing="0" width="500" align="center"
                                   class="tblSaveForm">
                                <tr>
                                    <td>
                                        Name:
                                    </td>
                                    <td>
                                        <input type="hidden" name="id_real_estate[]" class="text-field"
                                               value="<?php echo $record['id_real_estate']; ?>">
                                        <input type="text" name="name_real_estate[]" class="text-field"
                                               value="<?php echo $record['name_real_estate']; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Number Of Rooms:
                                    </td>
                                    <td>
                                        <input type="text" name="room_number[]" class="text-field"
                                               value="<?php echo $record['room_number']; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Address:
                                    </td>
                                    <td>
                                        <input type="text" name="address[]" class="text-field"
                                               value="<?php echo $record['address']; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        City:
                                    </td>
                                    <td>
                                        <input type="text" name="city[]" class="text-field"
                                               value="<?php echo $record['city']; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Country:
                                    </td>
                                    <td>
                                        <input type="text" name="country[]" class="text-field"
                                               value="<?php echo $record['country']; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Animals:
                                    </td>
                                    <td>
                                        <input type="text" name="animals[]" class="text-field"
                                               value="<?php
                                               if ($record['animals'] == 0) {
                                                   echo "yes";
                                               } elseif ($record['animals'] == 1) {
                                                   echo "no";
                                               }
                                               ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Smoking:
                                    </td>
                                    <td>
                                        <input type="text" name="smoking[]" class="text-field"
                                               value="<?php
                                               if ($record['smoking'] == 0) {
                                                   echo "yes";
                                               } elseif ($record['smoking'] == 1) {
                                                   echo "no";
                                               }
                                               ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Price:
                                    </td>
                                    <td>
                                        <input type="text" name="price[]" class="text-field"
                                               value="<?php echo $record['price']; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Size:
                                    </td>
                                    <td>
                                        <input type="text" name="size[]" class="text-field"
                                               value="<?php echo $record['size']; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Balcony:
                                    </td>
                                    <td>
                                        <input type="text" name="balcony[]" class="text-field"
                                               value="<?php
                                               if ($record['balcony'] == 0) {
                                                   echo "yes";
                                               } elseif ($record['balcony'] == 1) {
                                                   echo "no";
                                               }
                                               ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Date:
                                    </td>
                                    <td>
                                        <input type="text" name="date[]" class="text-field"
                                               value="<?php echo $record['date']; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Phone:
                                    </td>
                                    <td>
                                        <input type="text" name="phone[]" class="text-field"
                                               value="<?php echo $record['phone']; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Image:
                                    </td>
                                    <td>
                                        <input type="text" name="image[]" class="text-field"
                                               value="<?php echo $record['image']; ?>">
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                <?php } ?>
                <tr>
                    <td>
                        <input type="submit" name="submit" value="Submit" class="btnSubmit">
                    </td>
                </tr>
            </table>
        </div>
    </form>
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
</body>
</html>