<?php
require_once './config.php';

define("EMAIL_ALREADY_EXISTS", "Email address already exists.");
define("CONNECTION_ERROR", "Connection error.");
define("INSERTION_ERROR", "Insertion error.");

function generateToken() {
    return bin2hex(random_bytes(32));
}

function isEmailExists($db, $tableName, $email) {
    try {
        $stmt = $db->prepare("SELECT email FROM ". $tableName. " WHERE email=:email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return ($row !== false);
    } catch(PDOException $e) {
        return "Error checking email existence: " . $e->getMessage();
    }
}

function insertUser($name, $email, $username, $password, $registration_date) {
    try {
        $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $pdo->beginTransaction(); // Début de la transaction
        
        if (isEmailExists($pdo, "user", $email)) {
            return EMAIL_ALREADY_EXISTS;
        }
        
        $token = generateToken(); // Génère un token unique
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $pdo->prepare("INSERT INTO user (name, email, username, password, registration_date, token) VALUES (:name, :email, :username, :password, :registration_date, :token)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->bindParam(':registration_date', $registration_date);
        $stmt->bindParam(':token', $token);
        $stmt->execute();
        
        if ($stmt->rowCount() > 0) {
            $pdo->commit(); // Valider la transaction
            
            // Créer une session avec le token généré
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['token'] = $token;
            
            return true; // Succès de l'insertion
        } else {
            $pdo->rollBack(); // Annuler la transaction
            return "No rows affected."; // Aucune ligne affectée
        }
    } catch(PDOException $e) {
        $pdo->rollBack(); // Annuler la transaction en cas d'erreur
        return INSERTION_ERROR . " " . $e->getMessage();
    }
}
?>
