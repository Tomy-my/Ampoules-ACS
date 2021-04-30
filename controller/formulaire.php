<?php

include('db_config.php');

$phpCnul=false;

if (isset($_POST['date'])) {
    $date = $_POST['date'];
}
else $phpCnul = true;

if (isset($_POST['upstairs'])) {
    $upstairs = $_POST['upstairs'];
}
else $phpCnul = true;

if (isset($_POST['position'])) {
    $position = $_POST['position'];
}
else $phpCnul = true;

if (isset($_POST['price'])) {
    $price = $_POST['price'];
}
else $phpCnul = true;

if (!$phpCnul) $bdd->exec("INSERT INTO data ( date, upstairs, position, price) VALUE ('$date', '$upstairs', '$position', '$price')");