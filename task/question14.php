<?php

$servername = "localhost:80";
$username = "root";
$password = "";

// Create a connection
$conn = mysqli_connect($servername, $username, $password);

$sql = "CREATE DATABASE namuna_college";
query($sql);


if (!$conn){
    die("Connecton error ". mysqli_connect_error());
}
else{
    echo "Connectted to database successfully";
}

?>