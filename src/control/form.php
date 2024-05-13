<?php
require_once './validate.php';
require_once './insert.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    handleFormSubmission();
} else {
    header("Location: ../index.php");
}

function handleFormSubmission() {
    if (isset($_POST['login'])) {
        handleLogin($_POST['username'], $_POST['password']);
    } elseif (isset($_POST['signup'])) {
        handleSignup($_POST['email'], $_POST['username'], $_POST['password'], $_POST['repassword'], $_POST['name'], $_POST['dateNais']);
    } else {
        header("Location: ../index.php");
    }
}

function handleLogin($username, $password) {
    $validationError = validateLoginForm($username, $password);
    if ($validationError) {
        showError($validationError);
    } else if (isset($username) && isset($password)) {
        try {
            // Connexion à la base de données
            $conn = new PDO("mysql:host=localhost;dbname=your_database", "your_username", "your_password");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Requête pour obtenir les informations de l'utilisateur
            $sth = $conn->prepare("SELECT * FROM user WHERE username=:username");
            $sth->bindParam(':username', $username);
            $sth->execute();
            $row = $sth->fetch(PDO::FETCH_ASSOC);
            $hash = $row['password'];

            // Vérification du mot de passe
            if (password_verify($password, $hash)) {
                session_start();
                $_SESSION['id'] = $row['id'];
                $_SESSION['username'] = $row['username'];
                header('Location: index.php');
            } else {
                echo "Wrong password or username.";
            }
        } catch (PDOException $e) {
            // Gestion des erreurs de connexion à la base de données
            showError("Database connection error: " . $e->getMessage());
        }
    } else {
        echo "";
    }
}

function handleSignup($email, $username, $password, $repassword, $name, $dateNais) {
    $errors = validateSignupForm($email, $username, $password, $repassword, $name, $dateNais);
    if (empty($errors)) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $registration_date = date('Y-m-d H:i:s'); // Ajout de la date d'inscription actuelle
        $inserted = insertUser($name, $email, $username, $hashedPassword, $registration_date);
        if ($inserted === true) {
            // Utiliser une variable de session pour indiquer que l'insertion est réussie
            session_start();
            $_SESSION['registration_success'] = true;
            header("Location: ../dashboard.php");
            exit(); // Assurez-vous d'arrêter l'exécution du script après la redirection
        } else {
            showError($inserted);
        }
    } else {
        showError(implode("\\n", $errors));
    }
}

function showError($message) {
    echo "<script>alert('$message');</script>";
    echo "<script>window.history.back();</script>";
}
?>

<!-- Ajoutez ce script JavaScript pour réinitialiser les champs input -->
<script>
    // Attendez que la page soit entièrement chargée
    document.addEventListener("DOMContentLoaded", function() {
        // Réinitialisez les champs input
        var inputs = document.querySelectorAll('input[type="text"], input[type="password"], input[type="email"]');
        inputs.forEach(function(input) {
            input.value = ''; // Effacez la valeur du champ
        });
    });
</script>
