<?php
    include("vues/v_sommaireC.php");
    $idVisiteur = $_SESSION['idVisiteur'];
    $ficheVa = $pdo->recupVa() ;
    include("vues/v_rechercher.php");
?>