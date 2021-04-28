<?php

include('db_config.php');

$date_lekki = $_POST['date_lekki'];
$upstairs = $_POST['upstairs'];
$position = $_POST['position'];
$price = $_POST['price'];

$bdd->exec("INSERT INTO data ( date_lekki, upstairs, position, price) VALUE ('$date_lekki', '$upstairs', '$position', '$price')");
