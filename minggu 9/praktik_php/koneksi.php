<?php
$namaHost = "localhost";
$username = "root";
$password = "";
$database = "prakwebdb";

try {
    $connect = mysqli_connect($namaHost, $username, $password, $database);
} catch (exception $e) {
    echo $e_->getMessage();
}