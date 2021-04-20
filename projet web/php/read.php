<!DOCTYPE HTML> 
<html lang="fr">
<head>
<meta charset="utf-8">
<title> inscription  </title>
<meta  name= "description" content="agence de transport public" />
<meta name="keyword" content="transport, public,reserver,enligne,reservation,taxi,bus,train ,louage "/>
<!--link js -->
<script src="../js/script.js"></script>
<!--link css-->
<link rel="stylesheet" href="../css/style.css" />
<!--link icon-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/7c364b56f3.js" crossorigin="anonymous"></script>
<!--lik boostrap-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head> 
<body>


<?php
     include_once("../connexion/connexion.php");
     $bdd=maConnexion();
$table='client';
$cle_primaire='idClient';
$val_cle_primaire=$_REQUEST["idClient"];
$sql="select * from $table where $cle_primaire= $val_cle_primaire";
$reponse = $bdd->query($sql) or die ($bdd->errorInfo()[2]);
if($reponse->rowCount()==1){
$ligne = $reponse->fetchObject();
?>
<p> nom: <?=$ligne->nom; ?><br />
prenom: <?=$ligne->prenom; ?></p></br>
<p> email: <?=$ligne->email; ?><br />
<p> telephone: <?=$ligne->tel; ?><br />
<p> moyen de transport : <?=$ligne->moyenTransport; ?><br />
<p> abonnement: <?=$ligne->abonnement; ?><br />
<p> dateAbonnement: <?=$ligne->dateAbonnement; ?><br />

<?php
} else echo"<p> client non existe </p>";
?>
</body>
</html>