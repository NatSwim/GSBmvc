<div id="contenu">
<center><p>SUIVI DES FICHES</p></center>
<form action="index.php?uc=etatFrais&action=voirEtatFrais" method="post">



</form>

<fieldset disabled="disabled">
<table class="listeLegere">

<tr>
<th class="date">Nom</th>
<th class="libelle">Mois</th> 
<th class='montant'>Fiche</th>                
</tr>

<?php 
foreach ($ficheVa AS $fiche) {
 echo "<tr>";
 echo "<p><b><td>".$fiche['Nom'].'</td><td>  '.$fiche['mois']."'</td><td><a href='index.php?uc=listesFichesFinale&id=",$fiche['idVisiteur'],"&mois=",$fiche['mois'],"'><img src='images/vvvv.png'/></a>";
 echo "</td>" ;
 echo "</tr>" ;
}

?>
</fieldset>