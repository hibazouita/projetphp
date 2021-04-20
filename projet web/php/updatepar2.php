<?php

include_once("../connexion/connexion.php");
$table='partenaire';
$cle_primaire='idPartenaire';
$val_cle_primaire=$_REQUEST['idPartenaire'];
$bdd=maConnexion();
if(isset($_REQUEST['nom']) and (strlen($_REQUEST['nom'])>=3))
$nom=$bdd->quote($_REQUEST['nom']);
else die ("<p>nom non correctement saisi</p>");
if(isset($_REQUEST['prenom']) and (strlen($_REQUEST['prenom'])>=3)){
$prenom=$bdd->quote($_REQUEST['prenom']);}
else{ 
    die ("<p>prenom  non correctement saisi</p>");}
    
    if (isset($_REQUEST['email']) && isset($_REQUEST['tel']) &&
        isset($_REQUEST['moyenTransport']) && isset($_REQUEST['abonnement']) &&
        isset($_REQUEST['modePayement']) ) {
        
            $email =$bdd->quote($_REQUEST['email']);
            $tel=$bdd->quote($_REQUEST['tel']);
            $moyenTransport=$bdd->quote($_REQUEST['moyenTransport']);
       // $abonnement=$bdd->quote($_REQUEST['abonnement']);
            $modePayement=$bdd->quote($_REQUEST['modePayement']); }

else {
    echo "All field are required.";}
    



$sql="update $table set 
nom= $nom,
prenom= $prenom,
tel=$tel,
moyenTransport=$moyenTransport,
email=$email

where $cle_primaire= $val_cle_primaire";
echo $sql;
$nblignes=$bdd->exec($sql);
if ($nblignes!=1)
die("<p>Impossible d'effectuer la requete de mise à jour!".$bdd->errorInfo()[2]."</p>");
else
?>
<p>vous etes a jour </p><br/>
