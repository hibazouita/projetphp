<?php

include_once("../connexion/connexion.php");
$table='client';
$cle_primaire='idClient';
$val_cle_primaire=$ligne->idClient;

$bdd=maConnexion();
$sql = "DELETE FROM $table 
WHERE
$cle_primaire=$val_cle_primaire";
$nblignes=$bdd->exec($sql) or die ($bdd->errorInfo()[2]);
if ($nblignes!=1)
die("<p>Impossible d'effectuer la requete de suppression! </p>");
else echo "<p>Suppression effectuée avec succès</p>";

?>