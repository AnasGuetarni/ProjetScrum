function verifChamps(champs)
{
	if(champs.value.length == 0)
	{
		console.log("err");
		erreur(champs, "Merci de remplir tous les champs");
		return false;
	}
	
	return true;
}

function noProblemo(champs){
	champs.style.border = "2px inset rgb(238, 238, 238)";
	return true;
}

function erreur(champs, msg){
	champs.style.border = "2px solid red";
}

function verifMail(champs)
{
   var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
   if(!regex.test(champs.value))
   {
      erreur(champs, "Adresse mail incorrecte");
	  return false;
   }
   return true;
}

function verifMDP(champs)
{
   if(champs.value.length < 2)
   {
      erreur(champs, "MDP incorrect");
	  return false;
   }
   return true;
}

function verifCP(champs)
{
   var regex = /^[0-9]{5}$/;
   if(!regex.test(champs.value))
   {
      erreur(champs, "Code postal incorrect");
	  return false;
   }
   return true;
}

function verifForm(f)
{
	var OkNom = verifChamps(f.htr_nom);
	var OkPrenom = verifChamps(f.htr_prenom);
	var OkEmail = verifMail(f.htr_mel);
	var OkMdp = verifMDP(f.htr_motpasse);
	var OkReMdp = f.htr_motpasse.value == f.no_mdp.value;
	var OkAdresse = verifChamps(f.htr_adrligne1);
	var OkCodePostal = verifCP(f.htr_cp);
	var OkVille = verifChamps(f.htr_ville);
	var OkEtat = verifChamps(f.htr_etat);
   
   if(OkNom &&OkPrenom && OkEmail && OkMdp && OkReMdp && OkAdresse && OkComplementadresse && OkCodePostal && OkVille && OkEtat)
      return true;
   else
   {
      alert("Veuillez remplir correctement tous les champs");
      return false;
   }
}