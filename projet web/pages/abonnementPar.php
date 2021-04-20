<?php
include_once("../connexion/connexion.php");
$bdd = maConnexion();
$table='partenaire';
if(isset($_REQUEST['nom']) && (strlen($_REQUEST['nom'])>=3))
$nom=$bdd->quote($_REQUEST['nom']);
else die ("<p>nom non correctement saisi</p>");
if(isset($_REQUEST['prenom']) && (strlen($_REQUEST['prenom'])>=3))
$prenom=$bdd->quote($_REQUEST['prenom']);
else die ("<p>prenom  non correctement saisi</p>");
if (isset($_REQUEST['email']) && isset($_REQUEST['tel']) &&
        isset($_REQUEST['moyenTransport']) && isset($_REQUEST['abonnement'])) {
        
            $email =$bdd->quote($_REQUEST['email']);
          $tel=$bdd->quote($_REQUEST['tel']);
         $moyenTransport=$bdd->quote($_REQUEST['moyenTransport']);
        $abonnement=$bdd->quote($_REQUEST['abonnement']); }
       
else {
    echo "All field are required.";}

    $date= date('yyyy-mm-dd');
    $sql="insert into $table values (NULL, $nom, $prenom,$email,$tel, $moyenTransport,$abonnement,$date)" ;

$nblignes=$bdd->exec($sql);
if ($nblignes!=1)
die("<p>Impossible d'effectuer la requete! ".$bdd->errorInfo()[2]."</p>");
else {
?> <p>Enregistrement ajoute! <br/>
<?php echo " <h1>votre identifiant  est : " .$bdd->lastInsertId()."</h1>";}?>
<img src="../images/qrcode.png" height="100" width="100" >