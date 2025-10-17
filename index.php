<?php
session_start();
require_once "Acces_BD/connexion.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion École</title>
    <link rel="stylesheet" href="IHM/public/style.css">
</head>
<body>
<?php include("IHM/public/header.php"); ?>
<?php include("IHM/public/nav_barre.php"); ?>

<h2>Authentification</h2>
<form method="POST" action="Gestion_Actions/login.php">
    <label>Email :</label>
    <input type="email" name="email" required>
    <label>Mot de passe :</label>
    <input type="password" name="password" required>
    <input type="submit" value="Se connecter">
</form>

<?php include("IHM/public/footer.php"); ?>
</body>
</html>
