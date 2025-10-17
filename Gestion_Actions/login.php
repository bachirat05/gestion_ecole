<?php
session_start();
require_once "../Acces_BD/Login.php";

if (isset($_GET['logout'])) {
    logout();
}

if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $user = login($_POST['email'], $_POST['password']);
    if ($user) {
        $_SESSION['email'] = $user['email'];
        header("Location: ../IHM/accueil.php");
    } else {
        echo "Identifiants invalides.";
    }
}
?>
