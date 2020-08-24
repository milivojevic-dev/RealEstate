<?php
require('db_config.php');
$id=$_REQUEST['id_real_estate'];
$query = "DELETE FROM the_list WHERE id_real_estate=$id";
$result = mysqli_query($con,$query);
header("Location: update-process.php");
?>