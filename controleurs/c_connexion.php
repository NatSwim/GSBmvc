<?php
if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'demandeConnexion';
}
$action = $_REQUEST['action'];
switch($action){
	case 'demandeConnexion':{
		include("vues/v_connexion.php");
		break;
	}
	case 'valideConnexion':{
		$login = $_REQUEST['login'];
		$mdp = $_REQUEST['mdp'];
		md5($mdp);
		$visiteur = $pdo->getInfosVisiteur($login,$mdp);
		if (preg_match("#^(?=.'*)#", $mdp) == 1 ) {
			if(!is_array( $visiteur)){
				ajouterErreur("Login ou mot de passe incorrect");
				include("vues/v_erreurs.php");
				include("vues/v_connexion.php");
			}
			else{
				$id = $visiteur['id'];
				$nom =  $visiteur['nom'];
				$prenom = $visiteur['prenom'];
				$comptable = $visiteur['comptable'];
				if($visiteur['comptable'] == 1 ) {
					connecter($id,$nom,$prenom);
					include("vues/v_sommaireC.php");
				}
				else {
					connecter($id,$nom,$prenom);
				}

			}
		}
		else{
			print"Erreur de saisie";
			include("vues/v_connexion.php");
		}
		
		break;
	}
	default :{
		include("vues/v_connexion.php");
		break;
	}
}
?>