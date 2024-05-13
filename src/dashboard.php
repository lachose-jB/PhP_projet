<?php
session_start();

if (!isset($_SESSION['registration_success']) || !$_SESSION['registration_success']) {
    header("Location: ../index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> BIENVENUE SUR VOTRE SPACE PERSONELLE </h1>
</body>
</html>