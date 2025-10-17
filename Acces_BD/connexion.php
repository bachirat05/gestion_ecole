<?php
function Connect() {
    $env = parse_ini_file(_DIR_ . '/.env');
    $host = $env['Serveur'];
    $user = $env['Utilisateur'];
    $pass = $env['Password'];
    $db   = $env['db_name'];
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("Erreur de connexion : " . $e->getMessage());
    }
}
?>