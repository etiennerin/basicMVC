<!-----------------------------------------------------------------------
-	Utilisation des données stockés dans la première case du tableau    -
------------------------------------------------------------------------>
<h1><?php echo $donnees[0]; ?></h1>
<!-----------------------------------------------------------------------
-	Utilisation des données stockés dans le deuxième case du tableau    -
------------------------------------------------------------------------>
<strong><?php echo $donnees[1]; ?></strong>
<!-----------------------------------------------------------------------
-	Création d'un formulaire qui as pour cible une autre page		    -
------------------------------------------------------------------------>
<form action="nextPage.php" method="post">
	<input type="text" name="hello" />
	<input type="submit" value="envoyer"></input>
</form>