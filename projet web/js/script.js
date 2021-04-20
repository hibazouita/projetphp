function reserver(){
    if (document.contact.name.value.length<3)
    {
		alert('le nom doit être 3 caractères au moins !!');
		document.contact.name.focus();
		return false;
		
    }
     else if (document.contact.phoneNumber.value.length<8)
     {
		alert('verifier votre numero de telephone!!!');
		document.contact.phoneNumber.focus();
		return false;
    }
    
else
{
    alert('Hi !! ' +' ' +document.contact.name.value +' '+ 'vous avez reserver : \n' +'  ' +document.contact.
    moyen[document.contact.moyen.selectedIndex].value+' '+' à' +' '+ document.contact.date.value +' : ' +' '+document.contact.time.value+
	' \nMerci pour votre confiance !!');
	return true;
}
   
}
function contact(){
    if (document.f2.nom.value.length<3)
    {
		alert('le nom doit être 3 caractères au moins !!');
		document.f2.nom.focus();
		
    }
    else if   (document.f2.prenom.value.length<3)
    {
		alert('le prenom doit être 3 caractères au moins !!');
		document.f2.prenom.focus();
		
    }
    else if (document.f2.tel.value.length<8)
     {
		alert('verifier votre numero de telephone!!!');
		document.f2.tel.focus();
		
    }
    else {
        alert('HI !! ' +' '+document.f2.prenom.value +' '+document.f2.nom.value+'  '+'\n' +'nous vousrepondons le plus tot possible !!');
    }

}
function client()
{
    if (document.abonnementClient.nom.value.length<3){
		alert('le nom doit être 3 caractères au moins !!');
		document.abonnementClient.nom.focus();
		
    }
    else if (document.abonnementClient.prenom.value.length<3){
		alert('le nom doit être 3 caractères au moins !!');
		document.abonnementClient.prenom.focus();
		
    }
     else if (document.abonnementClient.tel.value.length<8) {
		alert('verifier votre numero de telephone,\n il doit comporter 8 caractères au moins!!!');
		document.abonnementClient.tel.focus();
		
    }
	else{
  
    
alert('Hi !! ' +' ' +document.abonnementClient.prenom.value +' '+document.abonnementClient.nom.value +' '+ '\n vous avez un abonnement \n' +' au moyen: ' 
        + ' '+ document.abonnementClient.moyen[document.abonnementClient.moyen.selectedIndex].value)+ ' ' + 'pendant '+ ' '+document.abonnementClient.abonnement[document.abonnementClient.abonnement.selectedIndex].value +
    ' \nMerci pour votre confiance !!'  ;
	}

    


}

function controle(nom,prenom,tel) {
	if (nom.value.length<3  ){
		alert('le nom doit être 3 caractères au moins !!');
	nom.focus();
	return false;
	}
	else if (prenom.value.length<3  ){
		alert('le prenom doit être 3 caractères au moins !!');
	prenom.focus();
	return false;
	}
	
	else if (tel.value.length<8  ){
		alert('verifier votre numero de telephone!!! \n il doit comporte 8 caractères');
	tel.focus();
	return false;
	}
	else {
        alert('Hi !! ' +' ' +document.abonnementPar.prenom.value +' '+document.abonnementPar.nom.value +' '+ '\n vous etes notre partenaire \n' +' au moyen: ' 
        + ' '+ document.abonnementPar.moyen[document.abonnementPar.moyen.selectedIndex].value)+ ' ' + 'pendant '+ ' '+document.abonnementPar.abonnement[document.abonnementPar.abonnement.selectedIndex].value  ;
    }
	return true;
}

function enquetec(){
    alert('Hi !!'+ ' '+ document.enquete.prenom.value +document.enquete.nom.value +'\n votre reponse a été envoyé avec succés');
}

function controleRecherche(ChampRecherche){
	if (ChampRecherche.value.length<3){
	alert('le champ doit contenir au minimum 3 caractères');
	ChampRecherche.focus();
	return false;
	}
		return true;
	
}
function charger(){
	alert('la page est en train de charger !! attendez un peu  ');
}
function sourisform(){
	alert('si vous voulez reserver remplir ce formulaire');
}
function moveform(){
	alert('si vous un questionn hésiter de nous contacter ' );
}
function bustrain(){
	alert('si vous voulez avoir ticket remplir le formulaire de reservation !!');

}
function position(){
	alert('vous devez saisir votre destination !!')

}
function abonner(){
	alert('si vous voulez abonner remplir le formulaire')
}

function confirme( identifiant ){
    var confirmation = confirm( "Voulez vous vraiment supprimer cet enregistrement ?" ) ;
   if( confirmation )
   document.location.href = "../php/delete.php?idClient="+identifiant ;
   }
   function confirmepar( identifiant ){
    var confirmation = confirm( "Voulez vous vraiment supprimer cet enregistrement ?" ) ;
   if( confirmation )
   document.location.href = "../php/deletepar.php?idPartenaire="+identifiant ;
   }