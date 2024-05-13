<?php
require_once 'config.php';
session_start();

// Vérifie si l'utilisateur est déjà connecté via la session
if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
    header("Location: ../dashboard.php");
    exit();
}

// Vérifie si un cookie de connexion persistante est défini
if (isset($_COOKIE['user_id']) && isset($_COOKIE['username']) && isset($_COOKIE['token'])) {
    $conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $userId = $_COOKIE['user_id'];
    $username = $_COOKIE['username'];
    $token = $_COOKIE['token'];

    try {
        $sth = $conn->prepare("SELECT * FROM user WHERE id=:userId AND username=:username AND token=:token");
        $sth->bindParam(':userId', $userId);
        $sth->bindParam(':username', $username);
        $sth->bindParam(':token', $token);
        $sth->execute();
        $row = $sth->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            // Connecte automatiquement l'utilisateur si les cookies correspondent à un utilisateur dans la base de données
            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            header("Location: ../dashboard.php");
            exit();
        } else {
            // Supprime les cookies si les cookies ne correspondent à aucun utilisateur dans la base de données
            unset($_COOKIE['user_id']);
            unset($_COOKIE['username']);
            unset($_COOKIE['token']);
            setcookie('user_id', '', time() - 3600);
            setcookie('username', '', time() - 3600);
            setcookie('token', '', time() - 3600);
        }
    } catch (PDOException $e) {
        // Gère les erreurs de base de données
        echo "Erreur de base de données : " . $e->getMessage();
    }
}

// Redirige vers la page de connexion si l'utilisateur n'est pas connecté
header("Location: index.php");
exit();
?>
