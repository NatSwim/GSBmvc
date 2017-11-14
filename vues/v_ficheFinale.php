<?php echo "<a href='controleurs/c_pdf.php?&id=$id&mois=$mois&ff=",serialize($infosFraisForfait),"&fh=",serialize($infosFraisHors),"'><img src='images/pdf.png' width='40px' align='right'></a>" ?>
<div id='contenu'>

    <h2>Fiche de <?php echo $nomVisiteur?> 
    </h2>
    <p>
        <b>Etat : <?php echo $libEtat?> <br>
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
    </table>
  	<table class="listeLegere">
  	   <caption>Descriptif des éléments hors forfait : <?php echo $nbJustificatifs ?> justificatifs reçus
       </caption>
             <tr>
                <th class="date">Date</th>
                <th class="libelle">Libellé</th>
                <th class='montant'>Montant</th>                  
             </tr>
        <?php      
          foreach ( $infosFraisHors as $unFraisHorsForfait ) 
		  {
			$date = $unFraisHorsForfait['date'];
			$libelle = $unFraisHorsForfait['libelle'];
      $montant = $unFraisHorsForfait['montant'];
		?>
             <tr>
                <td><?php echo $date ?></td>
                <td><?php echo $libelle ?></td>
                <td><?php echo $montant ?></td>
             </tr>
        <?php 
          }
		?>
    </table>
    <b>Montant Total de la Fiche : </b>
  </div>

  </div>
  
  </div>
<?php


 ?>