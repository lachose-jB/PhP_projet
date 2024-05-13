<?php

function validateLoginForm($username, $password) {
    if (!isValidText($username)) {
        return "Invalid Username format for Username";
    }

    if (!isValidText($password)) {
        return "Invalid password format for Password";
    }

    return null; // Aucune erreur de validation
}

function validateSignupForm($email, $username, $password, $repassword, $name, $dateNais) {
    $errors = [];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }

    if (strlen($password) < 8) {
        $errors[] = "Password must be at least 8 characters long";
    }

    if ($password !== $repassword) {
        $errors[] = "Passwords do not match";
    }

    if (empty($name)) {
        $errors[] = "Name field is required";
    }

    if (empty($dateNais)) {
        $errors[] = "Date of Birth field is required";
    }

    return $errors;
}

function isValidText($text) {
    return !preg_match("/<[^<]+>/", $text);
}
