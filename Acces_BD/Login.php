<?php
require_once "connexion.php";

function login($email, $password) {
    $pdo = Connect();
    $sql = "SELECT * FROM utilisateur WHERE email=? AND password=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$email, $password]);
    return $stmt->fetch();
}

function logout() {
    session_destroy();
    header("Location: ../index.php");
    exit;
}
?>
