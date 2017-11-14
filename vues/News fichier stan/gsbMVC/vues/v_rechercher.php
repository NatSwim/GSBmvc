<div id="contenu">
<form action="index.php?uc=etatFrais&action=voirEtatFrais" method="post">


  
</form>

<fieldset disabled="disabled">
<table class="listeLegere">
<tr>
  <th class="date">Nom</th>
  <th class="libelle">Mois</th> 
  <th class='montant'>Justificatifs</th> 
  <th class='montant'>Fiche</th>                
</tr>

<?php 
foreach ($ficheVa AS $fiche) {
   echo "<tr>";
   echo '<td><p><b>'.$fiche['nom'].'</td><td>  '.$fiche['mois'].'</td><td> '.$fiche['nbJustificatifs'].'</td><td> <a href="123loges.fr"><img src="images/vvvv.png"/></a></b>';
   echo "</td>" ;
   echo "</tr>" ;
}

?>
</fieldset>