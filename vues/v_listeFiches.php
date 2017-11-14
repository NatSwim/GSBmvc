<?php echo "<a href='index.php?uc=listesFiches&id=$id&mois=$mois&action=Valider'><img src='images/tick.png' width='50px' align='right'></a>" ?>
<div id='contenu'>

    <h2>Fiche de <?php echo $nomVisiteur?> 
    </h2>
    <p>
        <b>Etat : <?php echo $libEtat?>  <br> Montant validé :  <?php echo $montantValide?><br>
          Dernère Modification : <?php echo $dateModif ?> <br>
              
                     
    </p>
  	<table class="listeLegere">
        <tr>
        <table class="listeLegere">
  	   <caption>Eléments forfaitisés
       </caption>
         <?php

         foreach ( $infosFraisForfait as $unFraisForfait ) 
		 {
			$libelle = $unFraisForfait['libelle'];
		?>	
			<th> <?php echo $libelle?></th>
		 <?php
        }
		?>
		</tr>
        <tr>
        <?php
          foreach (  $infosFraisForfait as $unFraisForfait  ) 
		  {
				$quantite = $unFraisForfait['quantite'];
		?>
                <td class="qteForfait"><?php echo $quantite?> </td>
		 <?php
          }
		?>
		</tr>
     <tr>
        <?php
          foreach (  $infosFraisForfait as $unFraisForfait  ) 
      {
        $montant = $unFraisForfait['montant'];
    ?>          
                <td class="qteForfait"><?php echo $montant?> </td>
     <?php
          }
    ?>
    </tr>
         <tr>
        <?php
          foreach (  $infosFraisForfait as $unFraisForfait  ) 
      {
        $tt = 0 ;
        $montant = $unFraisForfait['montant'];
        $qte = $unFraisForfait['quantite'];
        $total = $qte * $montant;
        $tt = $tt + $total ; 

    ?>          
                <td class="qteForfait"><?php echo $tt?> </td>
     <?php
          }

        ?>
    </tr>

    </table>
    <?php 
    ?>

  	<table class="listeLegere">
  	   <caption>Descriptif des éléments hors forfait : <?php echo $nbJustificatifs ?> justificatifs reçus
       </caption>
             <tr>
                <th class="date">Date</th>
                <th class="libelle">Libellé</th>
                <th class='montant'>Montant</th>   
                <th class='montant'>Action</th>                
             </tr>
        <?php      
          foreach ( $infosFraisHors as $unFraisHorsForfait ) 
		  {
			$date = $unFraisHorsForfait['date'];
			$libelle = $unFraisHorsForfait['libelle'];
      $montant = $unFraisHorsForfait['montant'] ;
      $montant = $unFraisHorsForfait['montant'];
		?>
             <tr>
                <td><?php echo $date ?></td>
                <td><?php echo $libelle ?></td>
                <td><?php echo $montant ?></td>
                <td><?php echo "<a href='index.php?uc=listesFiches&id=$id&mois=$mois&action=Refuser'>" ?> Refuser </td>
             </tr>
        <?php 
          }
		?>
    </table>

  </div>

  </div>
  
  </div>
<?php
 echo "$tt";

 ?>