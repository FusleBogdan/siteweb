<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "mergipls";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Conectare nereușită.')</script>");
}

?>
