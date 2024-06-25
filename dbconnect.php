<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gymfitness";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn) {
    // echo "connected";
}
else {
    echo "error connecting";
}  

