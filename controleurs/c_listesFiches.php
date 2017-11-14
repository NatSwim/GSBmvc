<?php
include("vues/v_sommaireC.php");
		$idVisiteur = $_SESSION['idVisiteur'];
		$id = $_GET['id'] ;
		$mois = $_GET['mois'] ;
		$infosFraisHors = $pdo->getLesFraisHorsForfait($id,$mois);
		$infosFraisForfait = $pdo->getLesFraisForfait($id,$mois);
		$lesInfosFicheFrais = $pdo->getLesInfosFicheFrais($id, $mois);
		$libEtat = $lesInfosFicheFrais['libEtat'];
		$idEtat = $lesInfosFicheFrais['idEtat'];
		$infosVisiteur = $pdo->getIdVisiteur($id);
		$nomVisiteur = $infosVisiteur['nom'];
		$montantValide = $lesInfosFicheFrais['montantValide'];
		$nbJustificatifs = $lesInfosFicheFrais['nbJustificatifs'];
		$dateModif =  $lesInfosFicheFrais['dateModif'];
		$dateModif =  dateAnglaisVersFrancais($dateModif);
		include("vues/v_listeFiches.php");
		$action = null ;
		$action = $_REQUEST['action'] ;
		switch ($action) {
			case "Valider" :
				$etat = "VA" ;
				$pdo-> majEtatFicheFrais($id,$mois,$etat);
				header('Location: index.php?uc=listesFiches&id='.$id.'&mois='.$mois.'');     
				break;
			case "Refuser" :
				$libelle= "Refusé" ;
				$pdo-> modifLibelleFrais($libelle,$id,$mois);
				header('Location: index.php?uc=listesFiches&id='.$id.'&mois='.$mois.'');    
				break;
		}





?>