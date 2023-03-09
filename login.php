<?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        require __DIR__ . "/database.php";
        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        $sql = "SELECT * FROM users
        WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_assoc($result);
        print_r($user);
    } 
   

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<?php include "./header.php"; ?>

<main>
    <form method="post">
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>
        <button type="submit">Login</button>
    </form>
</main>


</body>
</html>