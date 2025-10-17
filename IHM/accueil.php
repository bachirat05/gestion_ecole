<?php
session_start();
if(!isset($_SESSION['email'])) header("Location: ../index.php");
include("public/header.php");
include("public/nav_barre.php");
?>
<h2>Bienvenue, <?php echo $_SESSION['email']; ?></h2>
<p>Choisissez une action dans la barre de navigation.</p>
<?php include("public/footer.php"); ?>
