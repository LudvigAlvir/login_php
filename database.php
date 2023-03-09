<?php
// not the best way to use database.
$conn = mysqli_connect("localhost", "root", "", "user-lecture");

if (!$conn){
    die("Error: Could not connect to database");
} 


?>