<?php
//not good validation for security
if (empty($_POST["name"])){
    die("No name provided");
}
//not good validation for security
if (empty($_POST["email"])){
    die("No email provided");
}

if (strlen($_POST["password"])<5){
    die("Password must be 5 characters or more");
}
if ($_POST["password"] !== $_POST["password-confirmation"]){
    die("passwords are not equal");
}


$hashed_password = password_hash($_POST["password"], PASSWORD_DEFAULT);

require __DIR__ . "/database.php";

$name = $_POST["name"];
$email = $_POST["email"];

$sql = "INSERT INTO users (name, email, password) 
VALUES ('$name', '$email', '$hashed_password')";


try{
if(mysqli_query($conn, $sql)){
    header("Location: signup-success.php");
    exit;
} 
} catch(Exception $e){
    if (mysqli_errno($conn) == 1062){
        echo "<h2>Email already exists</h2>";
    } else{
        echo "<h2> Custom error: " . mysqli_error($conn) . "</h2>";
    }
   
} 


?>