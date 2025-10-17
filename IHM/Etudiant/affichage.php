<?php
require_once "../../Acces_BD/Etudiant.php";
$etudiants = getAllEtudiants();
?>
<h3>Liste des étudiants</h3>
<table border="1" align="center">
<tr><th>Code</th><th>Nom</th><th>Prénom</th><th>Email</th><th>Sexe</th><th>Filière</th></tr>
<?php foreach($etudiants as $e): ?>
<tr>
    <td><?= $e['code'] ?></td>
    <td><?= $e['nom'] ?></td>
    <td><?= $e['prenom'] ?></td>
    <td><?= $e['email'] ?></td>
    <td><?= $e['sexe'] ?></td>
    <td><?= $e['filiere'] ?></td>
</tr>
<?php endforeach; ?>
</table>
