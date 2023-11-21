<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Logowanie</title>

</head>
<body>



<div class="con">
<form method="post">
    <h1>Logowanie</h1>
    <label for="username">Login:</label>
    <input type="text" id="username" name="username" required><br>

    <label for="password">Hasło:</label>
    <input type="password" id="password" name="password" required><br>

    <button type="submit">Zaloguj</button>
</form>
</div>


<?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $usernameInput = $_POST["username"];
        $passwordInput = $_POST["password"];

      
        if ($usernameInput === "admin" && $passwordInput === "test") {
            $message = "Zalogowano prawidlowo";
            echo "<script type='text/javascript'>alert('$message');</script>";
        } 
        else {
            $message = "Błąd, wprowadzono złe dane";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }
?>

</body>
</html>