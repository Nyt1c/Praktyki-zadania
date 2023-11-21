<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>

</head>
<body>

<?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $usernameInput = $_POST["username"];
        $passwordInput = $_POST["password"];

      
        if ($usernameInput === "admin" && $passwordInput === "test") {
            echo "<p>Zalogowano pomyślnie</p>";
        
        } 
        else {
            echo "<p>Błąd, wprowadzono złe dane</p>";
        }
    }
?>

<form method="post">
    <h2>Logowanie</h2>
    <label for="username">Login:</label>
    <input type="text" id="username" name="username" required><br>

    <label for="password">Hasło:</label>
    <input type="password" id="password" name="password" required><br>

    <button type="submit">Zaloguj</button>
</form>

</body>
</html>