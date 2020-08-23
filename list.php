<?php

require("db_config.php");


$sql = "SELECT id_user,name_real_estate,address,price
        FROM the_list
        ORDER BY date ASC";

$result = mysqli_query($con, $sql) or die(mysqli_error($con));

if (mysqli_num_rows($result) > 0) {

    $data = array();

    while ($record = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $data[] = array('id_user' => (int)$record['id_user'], 'name_real_estate' => $record['name_real_estate'], 'address' => $record['address'], 'price' => (int)$record['price']);
    }

    header('Content-Type:application/json;charset=utf-8');
    echo json_encode($data);
} else
    echo "No data!";

?>