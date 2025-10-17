<?php
require_once "../Acces_BD/Etudiant.php";
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    addEtudiant($_POST);
    header("Location: ../IHM/Etudiant/affichage.php");
}
?>
