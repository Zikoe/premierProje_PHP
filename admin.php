<?php 
	session_start();  
		
	include_once('Php-Produite/infoTableau.inc');
	
	if(isset($_SESSION['utilisateur'])){	
		$tabUser =  $_SESSION['utilisateur'];
		$nomUser = $tabUser['nom'];	
		$prenomUser = $tabUser['prenom'];	
		$textCompte = "Bonjour ".$nomUser." ".$prenomUser;
		$textCompteBienvenue = "Bon journee sur poste de travaille et Sans erreur!";
	
	}
	
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head>
        <title>Admin Salon Reviera</title>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <link rel="stylesheet" type="text/css" href="assets/stylesheet/stylesheet.css" />
        <link rel="shortcut icon" href="assets/images/favicon(7).ico" />
        <script src="assets/javascript/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script type="text/javascript"  src="assets/javascript/jquery.validate.js"></script>
        <script src="assets/javascript/javascript.js" type="text/javascript"></script>
    </head>
	
    <body>
        <!--google analysics   script-->
       <script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-39960575-1']);
		  _gaq.push(['_setDomainName', 'gyoki2005.tk']);
		  _gaq.push(['_setAllowLinker', true]);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>
        <div id="page">

                <?php   require_once('template/template-header.php');  ?>

                <div id="main-container">
                    <h1>Salon Reviera - " Admin "</h1>
                    <p><a href="#"><img src="assets/images/f1.jpg" id="salonC" alt=""/></a></p>
                    
					<p id="salon-textTitre">      <?php  echo($textCompte);      ?></p>
                    <p class="salon-text1">      <?php  echo($textCompteBienvenue);      ?></p>
					
                    
					<div id="form-container-produite">
						<div id="div-infoTextUser">
						 	<span id="infoTextUser" >Votre information registre Actuel jusqua <?php echo(dateHeurCouront()); ?> </span>
                    	</div>
						<fieldset class="fieldset-container-utilisateur">
							 <legend class="definition-legend">Information detaille </legend>
							<ul>		
		                        <li>Nom : <span class="group" ><?php echo($tabUser['nom']); ?></span></li>
		                        <li>Prenom : <span class="group" ><?php echo($tabUser['prenom']); ?></span></li>
							</ul>
							
							<table id="tab-static">	
                               <?php   $prixTotal = 0;
							   			/// trete le fichier  'user.txt'   :   		
									$fichier_contunu = open_file("Php-Produite/data/listeComandeSociete.txt");
									if(filesize("Php-Produite/data/listeComandeSociete.txt")>0){
										$usersClient = unserialize($fichier_contunu);	}
									else{ 	$usersClient = array(); }
								//	$usersClient[] = $clientNouvel;	
									foreach($usersClient as $cle =>$valeur){		
										$prixTotal.= $valeur['prixTotalCommande'];
									}
									
									var_dump($usersClient);
									save_file("Php-Produite/data/listeComandeSociete.txt", serialize($usersClient));							   ?>
							    <tr>
                                    <td  class='titreNom' >Nombre Comande</td>
                                    <td><?php      echo(count($usersClient));     ?></td>	
                                </tr>
								 <tr>
                                    <td  class='titreNom' >Prix Total de Commande :</td>
                                    <td><?php    /// $prixTotal = float($prixTotal);
													echo($prixTotal." $");     ?></td>	
                                </tr>
								
								              
							<?php    ?>
	                        </table>
						</fieldset>
						
						<fieldset class="fieldset-container-utilisateur">
							 <legend class="definition-legend">Information detaille </legend>
							<ul>		
		                        <li>Nom : <span class="group" ><?php echo($tabUser['nom']); ?></span></li>
		                        <li>Prenom : <span class="group" ><?php echo($tabUser['prenom']); ?></span></li>
							</ul>
							
							<table id="tab-static">	
                                <tr>
                                    <td  class='titreNom' >Date Inscription:</td>
                                    <td><?php      echo($tabUser['dateInscription']);     ?></td>	
                                </tr>  
								<tr>
                                    <td  class='titreNom' >Email Courant:</td>
                                    <td><?php      echo($tabUser['email']);     ?></td>	
                                </tr>
								<tr>
                                    <td  class='titreNom' >Favorite prefere:</td>
                                    <td><?php      $favoritePrefere = "";												   
												   foreach($tabUser['favorite'] as $cle=>$valeur){
												   	 $favoritePrefere.=$valeur.", "; 
												   }
												   if($favoritePrefere==""){ $favoritePrefere= "Aucun Favorite Choissise!"; }
												   echo($favoritePrefere);
												      ?></td>	
                                </tr>       
								
								              
							<?php   ?>
	                        </table>
						</fieldset>
						
                    </div>
            	</div>


            <!--Footer:-->
            <?php         require_once('template/template-footer.php');     ?>
        </div>

    </body>
</html>
