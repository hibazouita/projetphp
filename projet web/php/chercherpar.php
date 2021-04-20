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
<form name="chercher" action="../php/chercherpar.php" method="GET">
        <label for="nom">votre nom</label>
        <input type="text" name="nom" id="nom" placeholder="votre nom" class="form-control"
     value="<?php if(isset($_REQUEST["nom"])){echo $_REQUEST["nom"];} ?>" />
<button type="submit" id="design">Chercher</button>
        
    </form>



<?php 

     include_once("../connexion/connexion.php");
     $bdd=maConnexion();
     $table='partenaire';
     if(isset($_REQUEST['nom'])&& strlen($_REQUEST['nom'])>=3){
        $nom="%".$_REQUEST["nom"]."%";
        $nom=$bdd->quote($nom);
        $sql="select * from $table  where nom like  $nom"; 
     }else {
     $sql="select * from $table ";
     }
     $reponse=$bdd->query($sql) or die($bdd->errorInfo()[2]);
     $nb=$reponse->rowCount();
     if ($nb===0){
         echo "aucun partenaire ";
     }
     else {
        echo "<p>nombre de partenaire :  $nb</p>";
     }
     echo "<table>";
     echo"<tr>";
     echo"<th >nom</th>";
     echo"<th >prenom </th>";
     echo"<th >email </th>"; 
     echo"<th >telephone </th>";
     echo"<th >moyen transport </th>";
     echo"<th >abonnement </th>";
     echo"<th >dateAbonnement </th>";
     echo"<th >details </th>";
     echo"<th >modification </th>";
     echo"<th >suppression </th>";
     echo"</tr>";
     while ($ligne = $reponse->fetchObject()){
        echo "<tr>";
        echo"<td >".$ligne->nom."</td>";
        echo"<td >".$ligne->prenom."</td>";
        echo"<td >".$ligne->email."</td>";
        echo"<td >".$ligne->tel."</td>";
        echo"<td >".$ligne->moyenTransport."</td>";
        echo"<td >".$ligne->abonnement."</td>";
        echo"<td>".$ligne->dateAbonnement."</td>";

        echo"<td ><a href='../php/readpar.php?idPartenaire=".$ligne->idPartenaire."'>details</a></td>";
        echo"<td ><a href='../php/updatepar.php?idPartenaire=".$ligne->idPartenaire."'>modifier</a></td>";
        echo"<td ><a href='../php/deletepar.php' onclick='confirmepar(".$ligne->idPartenaire.")'>supprimer</a></td>";
        echo"</tr>";
        echo"</br>";
        
      
    }
    echo "</table>";

     
     
    ?> 
    </body>
    </html> 