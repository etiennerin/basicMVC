<?php 

class Modele
{
	/*
	*	Méthode getArticle
	*	Renvoie un tableau d'articles;
	*/
	public function getArticle()
	{
		/********************************************************************************
		*	Renvoie des données 														*
		********************************************************************************/
		return array("Bienvenue","Bienvenue sur mon site");
		/********************************************************************************
		*	Cette méthode pourrait également renvoyer plusieurs articles comme suit :	*
		*	return [["article1","les pommes"],{"article2","les poires"]];				*
		*	Ainsi dans la vue on retrouverais $donnees[0][0],$donnees[0][1],			*
		*	$donnees[1][0],$donnees[1][1]												*
		* 	Peu importe ce qu'elle renvoie cependant elle ne sert que des données		*
		*	un peu à la manière d'un serveur dans un réstaurant.						*
		********************************************************************************/
		
		/********************************************************************************
		*	Le contenu de cette méthode pourrait aussi bien être :						*
		*	return $bdd->query(SELECT * FROM articles LIMIT 10);						*
		*	ce qui renverrais les 10 derniers articles stockés dans la table articles	*
		********************************************************************************/
	}
}

?>