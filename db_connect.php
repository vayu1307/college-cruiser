<?php
$server = "localhost";
$username = "root";
$password = "";
$db_name = "bus_mang";

$conn = mysqli_connect($server, $username, $password, $db_name);
if (!$conn) {
    echo "Connection Error : " . mysqli_connect_error();
}
