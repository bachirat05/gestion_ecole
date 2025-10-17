<?php
require_once "connexion.php";
function getAllEtudiants() {
    $pdo = Connect();
    $sql = "SELECT * FROM etudiant";
    return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}
function addEtudiant($data) {
    $pdo = Connect();
    $sql = "INSERT INTO etudiant (code, nom, prenom, email, sexe, filiere)
            VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$data['code'],$data['nom'],$data['prenom'],$data['email'],$data['sexe'],$data['filiere']]);
}
?>
