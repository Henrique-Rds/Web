<?php

  /**
  * Améliorations à apporter :
  */


  // Restreint l'accès aux utilisateurs connectés
  if (!is_user_logged_in()) {
    echo("loggin to access this page");
	  exit();
  }

  $current_user = wp_get_current_user();
  $email = $current_user->user_email;
  
// CONNEXION A LA BD
  require("codes snippet/GestionBdd.php");
  $bdd = new GestionBdd();
  $req = $bdd->getObservationsNonValide();
  
  
    
  ?> 
  <table>
    <!-- largeur des colonnes -->
		<col width="9%">
		<col width="18%">
		<col width="13%">
		<col width="50%">
    <col width="10%">
    <thead>
				<tr>
					
					
					<th class="dateFormat-ddmmyyyy">Date de saisie</th>
          <th>Agent ou usager</th>
          <th>Type d'observation</th>
          <th>Observation</th>
          <th class="sortless"></th>
				</tr>
    </thead>
				<?php
          
					if(isset($req)){
						while($row = $req->fetch()){
              $username = ($row['nom'])." ".($row['prenom']);
              $dateSaisie = ($row['date_saisie']);
              
             
				?>
              <tbody>
							<tr>
                <td><?php echo date('d/m/y', strtotime($dateSaisie));?></td>
                <td><?php echo ($username); ?></td>
								<td><?php echo ucfirst($row['sujet']); ?></td>
                <td><?php echo ucfirst($row['observations']); ?></td>
                <td><a href="http://ica.cnrs.fr/completer-lobservation/?id=<?php echo ($row['id']);?>">Ajouter une observation</a></td>
               
							 </tr>
              </tbody>
    <?php
					
				    }
			     }
    ?>
	</table>