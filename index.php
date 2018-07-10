<?php 

/************************************************************
*	inclusion du fichier contenant la classe controlleur	*
************************************************************/
require_once("controlleur.php");

/************************************************************
*	Instanciation d'un controlleur							*
************************************************************/
$conr=new Controlleur();

/************************************************************
*	Appel de la méthode pagePrincipale					  	*
************************************************************/
$conr->pagePrincipale();

/************************************************************
*	C'est ici le travail que devrais effectuer le routeur:	*
*	a savoir instancier un controlleur et appeler ses 		*
*	différentes méthodes(généralement découpés en pages)	*
*	ainsi un autre fichier nextPage.php ne serais pas 		*
*	nécessaire car le routeur se chargerais de gérer 		*
*	l'appel des méthodes et cela permettrais d'instancier 	*
*	une seule fois la classe controlleur					*
************************************************************/

?>