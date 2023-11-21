<?php

function hash_password($password) {
    // Wybrany algorytm, np. SHA256
    $hashed_password = hash('sha256', $password);
    return $hashed_password;
}


$password_to_save = "hash_haslo";
$hashed_password = hash_password($password_to_save);

function check_password($entered_password, $stored_password) {
    return hash('sha256', $entered_password) == $stored_password;
}


$entered_password = "hash_haslo";
$is_password_correct = check_password($entered_password, $hashed_password);

if ($is_password_correct) {
    echo "Poprawne logowanie! ";
} else {
    echo "Błędne hasło.";
}

echo "Zaszyfrowane hasło: " . $hashed_password;

?>