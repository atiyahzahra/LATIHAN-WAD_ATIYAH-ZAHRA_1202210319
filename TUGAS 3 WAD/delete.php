<?php

require 'dbconn.php';

$id = $_GET['id'];
$product = mysqli_query($conn, "DELETE FROM sports_equipments WHERE product_id=$id");

if ($product) {
    header("location:index.php");
} else {
    echo mysqli_error($conn);
}