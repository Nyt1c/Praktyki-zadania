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
    <input type="text" id="username" name="login" required><br>

    <label for="password">Hasło:</label>
    <input type="password" id="password" name="password" required><br>

    <button type="submit">Zaloguj</button>
</form>
</div>


<?php
    $conn = new mysqli("127.0.0.1","admin","test","baza");
    
    if ($conn->connect_error) {
        die("nie wyszło: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $login = $conn->real_escape_string($_POST["login"]);
        $haslo = $conn->real_escape_string($_POST["password"]);


        $query = "SELECT * FROM users WHERE login='$login' AND password='$haslo'";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            $message = "Zalogowano pomyślnie!";
            echo "<script type='text/javascript'>alert('$message');</script>";
        } 
        else 
        {
            $message = "Błąd!";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }

        
        $conn->close();
    }
?>

</body>
</html>