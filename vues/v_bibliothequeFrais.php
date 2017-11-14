<div id="contenu">
     <div class="corpsForm">
        
     </div>

    
       
     </form>
     <center><p>FICHE DE SAISIE</p></center>
<form method="POST"  action="index.php?uc=listesFiches">
<fieldset disabled="disabled">

<?php 
$result = count($t_user) ;
      if ($result == 0) {
      echo "<tr><b>Aucune Fiche n'est disponible pour le moment<b></tr>" ;
      }
      else {
?>
<table class="listeLegere">
    <tr>
       <th class="libelle">Nom</th>
       <th class="date">Mois</th> 
       <th class='montant'>Justificatifs</th> 
       <th class='montant'>Fiche</th>                
    </tr>
<?php      


     
    foreach ($t_user AS $user) {
        
        echo "<tr>";
  
        echo "<td>" ;
    
        echo "<p><b>".$user['Nom'].'</td><td>  '.$user['mois'].'</td><td> '.$user['nbJustificatifs']."</td><td><a href='index.php?uc=listesFiches&id=",$user['idVisiteur'],"&mois=",$user['mois'],"'><img src='images/vvvv.png'/></a>";
        echo "</td>" ;
        echo "</tr>" ;
       
    }
    }
 ?>

 </fieldset>
 </form>