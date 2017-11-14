    <!-- Division pour le sommaire -->
    <div id="menuGauche">
      <div id="infosUtil">
    
      </div>  
      <ul id="menuList">
			  <li >
            Comptable :<br>
          <?php echo $_SESSION['prenom']."  ".$_SESSION['nom']  ?>
        </li>
            <li class="smenu">
                <a href="index.php?uc=rechercherFrais&action=rechercherFrais" title="Rechercher Fiche ">Suivi des Fiches de Frais</a>
            </li>
            <li class="smenu">
                <a href="index.php?uc=bibliothequeFrais&action=bibliothequeFrais" title="Bibliothèque de fiche">Validation des Fiches </a>
            </li>
        <li class="smenu">
          <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
        </li>
      </ul>
          
    </div>
    