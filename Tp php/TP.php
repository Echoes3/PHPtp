<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>BLOG</title>
	<link rel="stylesheet" href="style.css">
	<script src="script.js"> </script>
</head>

<body>
<form action="TP.php" method="POST">
<h1><center>BLOG</center></h1>
<p>



</p>


</form>




<footer>
<form action="TP.php" method="POST">

<h2><center>FORMULAIRE</center></h2>   <!-- Formulaire situé dans le footer en bas de page -->
<div>
<p>

	<center><label for="pseudo"><strong>Pseudo : </strong></label><input type="text" name="pseudo" /></center>  <!--- boite du pseudo du pseudo -->
	<br/>
	<br/>
	<center><label for="titre"><strong>Titre : </label><input type="text" name="titre" /></center> <!--- boite du tire -->
	<br/>
	<br/>
	
	<center><textarea name="message" for="message"  placeholder="Message ici!" rows="4" cols="20"></textarea></center>   <!--- boite du message -->
	
	<br/>
	<br/>
	<center><input type="submit" value="Envoyer" /></center>  <!--- bouton envoyer -->

	

</p>
</form>
</div>
</footer>
</body>
</html>




	 
	
	<div>
	<div class="scroll">
<?php

	date_default_timezone_set('Europe/Paris'); //regler le fuseau horaire
	$today = date("F j, Y, g:i a");    		// jour, date etc	

	if(isset($_POST['pseudo']) AND isset($_POST['titre']) AND isset($_POST['message']) )
	{
		$file = fopen("tp.txt", "a+");		//ouverture d'un fichier texte 
		echo '<br/>';
		fwrite($file,"Pseudo : ".$_POST['pseudo']."<br/>"."<br/>");     //ecriture du pseudo
		echo '<br/>';
		fwrite($file,"Titre : ".$_POST['titre']."<br/>"."<br/>");		//ecriture du titre
		echo '<br/>';
		fwrite($file,"Message : ".$_POST['message']."<br/>"."<br/>");	//ecriture du message
		echo '<br/>';
		fwrite($file,"Date : ".$today."<br/>"."<br/>");                 //ecriture de la date
		echo '<br/>';
		fwrite($file,"----------------------------------------------------------------------"."<br/>");  //ecriture de la séparation
		 echo '<br/>';
		 
		$lines = file("tp.txt");		
		foreach($lines as $n => $line)   //affichage du fichier texte
		{
		echo $line . "<br/>";
		}
	}
	
	
	
	
	
	
	
	 
	 
	
?>