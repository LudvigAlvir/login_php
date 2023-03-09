<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <?php include "./header.php"; ?>
 
    <main>
        <h1>Sign up</h1>
    <form action="signup-process.php" method="post">
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <label for="password-confirmation">Confirm password</label>
            <input type="password" name="password-confirmation" id="password-confirmation">
        </div>
        <button type="submit">Sign up</button>
    </form>
    </main>
</body>
</html>