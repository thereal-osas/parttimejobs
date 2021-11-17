<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "bolt";

$conn = mysqli_connect($server, $username, $password, $database,);

if(!$conn)
{
    die("<script>alert('Connection failed.')</script>");
}


?>