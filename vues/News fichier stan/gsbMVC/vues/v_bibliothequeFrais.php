<div id="contenu">
<h3>Mois à sélectionner : </h3>
<form action="index.php?uc=etatFrais&action=voirEtatFrais" method="post">
<div class="corpsForm">
   
<p>

  <label for="lstMois" accesskey="n">Mois : </label>
  <select id="lstMois" name="lstMois">
      <?php
      foreach ($lesMois as $unMois)
      {
          $mois = $unMois['mois'];
          $numAnnee =  $unMois['numAnnee'];
          $numMois =  $unMois['numMois'];
          if($mois == $moisASelectionner){
          ?>
          <option selected value="<?php echo $mois ?>"><?php echo  $numMois."/".$numAnnee ?> </option>
          <?php 
          }
          else{ ?>
          <option value="<?php echo $mois ?>"><?php echo  $numMois."/".$numAnnee ?> </option>
          <?php 
          }
      
      }
     
     ?>    
      
  </select>
</p>
</div>

<p>
  <input id="ok" type="submit" value="Valider" size="20" />
  <input id="annuler" type="reset" value="Effacer" size="20" />
</p> 

  
    </form>
    
    <fieldset disabled="disabled">
    <table class="listeLegere">
    <tr>
    <th>Selectionner</th>
    <th class="date">Nom</th>
    <th class="libelle">Mois</th> 
    <th class='montant'>Justificatifs</th> 
    <th class='montant'>Fiche</th>                
    </tr>

    <?php 
    foreach ($t_user AS $user) {
        echo "<tr>";
        echo '<td><center><input type="checkbox" id="selectionner"/><center></td>' ;
        echo '<td><p><b>'.$user['Nom'].'</td><td>  '.$user['mois'].'</td><td> '.$user['nbJustificatifs'].'</td><td> <a href="123loges.fr"><img src="images/vvvv.png"/></a></b>';
        echo "</td>" ;
        echo "</tr>" ;
    }

    ?>
    <form action="v_rechercher.php"></form>
        <input type="button" id="valider"  value="Valider le(s) fiche(s)"></a>
        <input type="button" id="Supprimer" value="Non Valide">
    </form>
    </fieldset>
    