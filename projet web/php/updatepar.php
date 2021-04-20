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
<h1>mise a jour de partenaire </h1>

 
<?php
if(isset($_REQUEST['idPartenaire'])){
    include_once("../connexion/connexion.php");
    $table='partenaire';
    $cle_primaire='idPartenaire';
    $val_cle_primaire=$_REQUEST['idPartenaire'];
    $bdd=maConnexion();
    $sql="SELECT * FROM $table where $cle_primaire= $val_cle_primaire";
    $reponse = $bdd->query($sql) or die ($bdd->errorInfo()[2]);
    if($reponse->rowCount()==1){
    $ligne = $reponse->fetchObject();

?>
<form name="update2" method="POST" action="../php/updatepar2.php">
 <div class="form-group  col-md-3"><label for="id">idPartenaire</label><input type="number" name="idPartenaire"  id="id"readonly class="form-control  "
value="<?=$ligne->idPartenaire; ?>"/> </div>
 <div class="form-group col-md-3"><label for="nom">nom</label> <input type="text" name="nom" id ="nom" class="form-control " value="<?=$ligne->nom;  ?>"/></div>

<div class="form-group col-md-3"><label for="prenon">prenom</label> <input type="text" name="prenom"  id ="prenom"class="form-control "value="<?=$ligne->prenom; ?>"/></div>
 <div class="form-group col-md-3"><label for="email">email</label><input type="text" name="email" id="email" class="form-control " value="<?=$ligne->email; ?>"/></div>

 <div class="form-group col-md-3"><label for="tel">telephone</label><input type="text" name="tel" id="tel" class="form-control " value="<?=$ligne->tel; ?>"/></div>

 <div class="form-group col-md-3"><label for="transport">moyen Transport</label><select class="form-control"  id="transport" name="moyenTransport" value="<?=$ligne->moyenTransport; ?>">
                                   
                                   <option value="Bus" >Bus</option>
                                   <option value="Louage" >Louage</option>
                                   <option value="Train" > Train </option>
                                   
                               </select>
<br />

<br />
<button type="submit" class="btn btn-primary btn-shadow btn-lg " id="design">Update</button>
<button type="reset" class="btn btn-primary btn-shadow btn-lg " id ="design">Effacer</button>
</form>
<?php
}
else echo"<p> partenaire inexistant</p>";
}
?>
</body>
</html>

