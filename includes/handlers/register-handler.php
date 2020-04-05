<?php

function sanitizeFormUsername($inputText) {
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText);
    // Prevents the user from submitting usernames with spaces
    return $inputText;
}

function sanitizePassword($inputText) {
    $inputText = strip_tags($inputText);
    return $inputText;
}

function sanitizeFormString($inputText) {
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText);
    $inputText = ucfirst(strtolower($inputText));
    // Changes the input text to lowercase then changes first character to uppercase
    return $inputText;
}

if (isset($_POST['registerButton'])) {
    // Register button was pressed
    $username = sanitizeFormUsername($_POST['username']);
    $firstName = sanitizeFormString($_POST['firstName']);
    $lastName = sanitizeFormString($_POST['lastName']);
    $email = sanitizeFormString($_POST['email']);
    $email2 = sanitizeFormString($_POST['email2']);
    $password = sanitizePassword($_POST['password']);
    $password2 = sanitizePassword($_POST['password2']);

    $successful = $account->register($username, $firstName, $lastName, $email, $email2, $password, $password2);

    if ($successful == true) {
        // If registration was successful takes user to the index/home page
        header("Location: index.php");
    }
}

?>
