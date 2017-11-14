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
		include("vues/v_ficheFinale.php");





?>