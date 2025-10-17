<?php
require_once "../../Acces_BD/Professeur.php";
$profs = getAllProfs();
?>
<h3>Liste des professeurs</h3>
<table border="1" align="center">
<tr><th>Code</th><th>Nom</th><th>Prénom</th><th>Email</th><th>Langues</th><th>Spécialité</th></tr>
<?php foreach($profs as $p): ?>
<tr>
    <td><?= $p['code'] ?></td>
    <td><?= $p['nom'] ?></td>
    <td><?= $p['prenom'] ?></td>
    <td><?= $p['email'] ?></td>
    <td><?= $p['langues'] ?></td>
    <td><?= $p['specialite'] ?></td>
</tr>
<?php endforeach; ?>
</table>
