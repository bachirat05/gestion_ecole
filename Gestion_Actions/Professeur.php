<?php
require_once "../Acces_BD/Professeur.php";
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    addProf($_POST);
    header("Location: ../IHM/Prof/affichage.php");
}
?>
