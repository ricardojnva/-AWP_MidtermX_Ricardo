<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "Db_LabLogging";

$db_connect = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (!$db_connect) {
    die("Connection failed: " . mysqli_connect_error());
}