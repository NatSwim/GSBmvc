    <!-- Division pour le sommaire -->
    <div id="menuGauche">
      <div id="infosUtil">
    
        <h2>Bonjour <?php $_SESSION['prenom']?></h2>
    
      </div>  
      <ul id="menuList">
			  <li >
            Comptable :<br>
          <?php echo $_SESSION['prenom']."  ".$_SESSION['nom']  ?>
        </li>
            <li class="smenu">
                <a href="index.php?uc=gererFrais&action=saisirFrais" title="Rechercher Fiche ">Rechercher Fiche</a>
            </li>
            <li class="smenu">
                <a href="index.php?uc=etatFrais&action=selectionnerMois" title="Bibliothèque de fiche">Bibliothèque de fiche</a>
            </li>
        <li class="smenu">
          <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
        </li>
      </ul>
          
    </div>
    