<?php
require_once "connexion.php";
function getAllProfs() {
    $pdo = Connect();
    $sql = "SELECT * FROM prof";
    return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}
function addProf($data) {
    $pdo = Connect();
    $sql = "INSERT INTO prof (code, nom, prenom, email, langues, specialite)
            VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$data['code'],$data['nom'],$data['prenom'],$data['email'],$data['langues'],$data['specialite']]);
}
?>
