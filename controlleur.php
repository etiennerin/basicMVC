<?php 
/************************************************************************************************
*	Inclusion du modele																			*
************************************************************************************************/
require_once("modele.php");

/************************************************************************************************
* Déclaration de la classe controlleur															*
************************************************************************************************/
class Controlleur
{
	/************************************
	*	Déclaration d'un atribut modele	*
	************************************/
	protected $model;
	
	/********************************************************************************************
	*	Constructeur sert ici à initialiser les attributes										*
	*	Mais nous pourrions aussi rediriger directement l'utilisateur sur une nouvelle page 	*
	*	de la manière suivante :																*
	*	$this->pagePrincipale();																*
	*	Ainsi l'utilisateur est redirigé vers la page principale directement lors de 			*
	*	l'instanciation de cette classe															*
	********************************************************************************************/
	public function __construct()
	{
		$this->model=new Modele();
	}
	
	/********************************************************************************************
	* Méthode pagePrincipale()																	*
	*	affiche la vue 																			*
	********************************************************************************************/
	public function pagePrincipale()
	{
		/****************************************************************************************
		*	Récupération des données de la base de données										*
		****************************************************************************************/
		$donnees=$this->model->getArticle();
		/****************************************************************************************
		*	Affichage de la vue (pas de nécéssité de lui envoyer des paramètres ou quoi que 	*
		*	ce soit puisque la vue se trouve toujours dans la mème méthode, on peut donc à 		*
		*	l'intérieur faire appel à tous les attributs et méthodes de la classe ainsi que		*
		*	les variables déclarés précédement dans la méthode.									*
		****************************************************************************************/
		require_once("vue.php");
	}
	
	/********************************************************************************************
	* Méthode autrePage()																		*
	*	affiche une autre page 																	*
	********************************************************************************************/
	public function autrePage()
	{
		/****************************************************************************************
		*	Si la valeur qui as pour clef hello existe et n'est pas vide						*
		*	alors on affiche un message, ou une page confirmant que tout s'est bien passé		*
		*	si non on le redirige vers une page d'erreur										*
		****************************************************************************************/
		if(isset($_POST["hello"])&&!empty($_POST["hello"]))
			echo "tout s'est bien passé";
		else require_once("erreur.php");
		/****************************************************************************************
		*	Il aurait ici été très bien possible de faire appel aux données en base de données	*
		*	et de les afficher sur la page en question de la manière suivante :					*
		*	if(isset($_POST["hello"])&&!empty($_POST["hello"]))									*
		*	{																					*
		*		$donnees=$this->model->getArticle();											*
		*		require_once("vue.php");														*
		*	}																					*
		*	else require_once("erreur.php");													*
		****************************************************************************************/
	}
}
?>