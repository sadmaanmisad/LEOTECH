<?php

$servername = "localhost";

$username = "root";

$password = "";

$dbname = "learn-php";



$conn = mysqli_connect($servername, $username, $password, $dbname);



if(!$conn){

    die("Connection Failed" .mysqli_connect_error());

}

// echo "Connected Succesfully";

?>