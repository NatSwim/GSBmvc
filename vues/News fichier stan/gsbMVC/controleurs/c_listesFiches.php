<?php
include("vues/v_sommaireC.php");

$idVisiteur = $_SESSION['idVisiteur'];
$t_fiches = $pdo->listeFiches() ;
include("vues/v_listeFiches.php");



?>