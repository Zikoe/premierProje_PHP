<?php 
	session_start();  
		
	include_once('Php-Produite/infoTableau.inc');
	require_once('SQL.php');   //// SQL base de Donne
	
	$idProduit = "";
	
	if(isset($_GET['sup'])){
		$idProduit = $_GET['sup'];
	//	echo($idProduit); 
		echo('ok');
		suprimerProduitId($idProduit);	
	}
	
	if(isset($_SESSION['utilisateur'])){	
		$tabUser =  $_SESSION['utilisateur'];
		$nomUser = $tabUser['nom'];	
		$prenomUser = $tabUser['prenom'];	
		$textCompte = "Bonjour ".$nomUser." ".$prenomUser;
		$textCompteBienvenue = "Belle Journee  sur poste de travaille et Sans erreur-Bon Chance!";
	
	}
		
	$tabUsers =  usersTab('0');
	$produitTabShampoing = selectProduitType("shampoing");
	$produitTabMousses = selectProduitType("mousses");
	//var_dump($produitTabShampoing);
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
					
                    
					<div id="form-container-admin">
						<div id="div-infoTextUser">
						 	<span id="infoTextUser" >Votre information registre Actuel jusqua <?php echo(dateHeurCouront()); ?> </span>
                    	</div>
						<div id="div-infoTextUser"><span id="infoTextUser" >----________________ Nombre   Users __________________---</span></div>
						<!--	 Affichage  User     -->
						<fieldset class="fieldset-container-utilisateur">
							 <legend class="definition-legend">Produit Shampoing : </legend>
							
							 <table id="tab-static">	
							                            				   
							    <tr>
                                    <td  class='titreNom' ></td>
                                    <td  class='titreNom' >Images Produit :</td>
                                    <td  class='titreNom' > Nom </td>
									<td  class='titreNom' > Prix </td>
									<td  class='titreNom' >Disponibilite </td>
									<td  class='titreNom' >Type Produit </td>
									<td  class='titreNom' >Suprimer</td>									
                                </tr>  
								<?php	$nb = 0; 
										 foreach($produitTabShampoing as $cle=>$articleShampoing ){                                     												$nb++;
											?>
								<tr> 
									<td  class='titreNom' ><?php echo($nb); ?> </td>                                   
                                    <td>
							<img class="image" alt="Shampooing" src="<?php  $img = $articleShampoing["images"]; echo($img); ?>"/>
									</td>	
                                    <td><?php  echo($articleShampoing['nom']);  ?></td>	
                                    <td><?php  echo($articleShampoing['prix']."$");  ?></td>	
                                    <td><?php  echo($articleShampoing['disponible']);  ?></td>	
                                    <td><?php  echo($articleShampoing['typeProduit']);  ?></td>	
                                    <td><a href="admin.php?sup=<?php echo($articleShampoing['id']); ?>">
									<input id="suprimeBt" class="supr" type="button" name="suprime" value="Suprime" /></a>												</td>	
                                </tr>
													      
							<?php }  ?>
	                        </table>							
	                        
						</fieldset>
						
						
						
					    <!--	Produit Affichage     -->			
						<div id="div-infoTextUser"><span id="infoTextUser" >----_______________ Afichage de Produit _______________---</span></div>
						<!--	Produit Shampoing :      -->
						<fieldset class="fieldset-container-utilisateur">
							 <legend class="definition-legend">Produit Shampoing : </legend>
							
							 <table id="tab-static">	
							                            				   
							    <tr>
                                    <td  class='titreNom' ></td>
                                    <td  class='titreNom' >Images Produit :</td>
                                    <td  class='titreNom' > Nom </td>
									<td  class='titreNom' > Prix </td>
									<td  class='titreNom' >Disponibilite </td>
									<td  class='titreNom' >Type Produit </td>
									<td  class='titreNom' >Suprimer</td>									
                                </tr>  
								<?php	$nb = 0; 
										 foreach($produitTabShampoing as $cle=>$articleShampoing ){                                     												$nb++;
											?>
								<tr> 
									<td  class='titreNom' ><?php echo($nb); ?> </td>                                   
                                    <td>
							<img class="image" alt="Shampooing" src="<?php  $img = $articleShampoing["images"]; echo($img); ?>"/>
									</td>	
                                    <td><?php  echo($articleShampoing['nom']);  ?></td>	
                                    <td><?php  echo($articleShampoing['prix']."$");  ?></td>	
                                    <td><?php  echo($articleShampoing['disponible']);  ?></td>	
                                    <td><?php  echo($articleShampoing['typeProduit']);  ?></td>	
                                    <td><a href="admin.php?sup=<?php echo($articleShampoing['id']); ?>">
									<input id="suprimeBt" class="supr" type="button" name="suprime" value="Suprime" /></a>												</td>	
                                </tr>
													      
							<?php }  ?>
	                        </table>							
	                        
						</fieldset>
						
					<!--	Produit Mousses :      -->
					<fieldset class="fieldset-container-utilisateur">
							 <legend class="definition-legend">Produit Mousses : </legend>
							
							 <table id="tab-static">	
							                            				   
							    <tr>
                                    <td  class='titreNom' ></td>
                                    <td  class='titreNom' >Images Produit :</td>
                                    <td  class='titreNom' > Nom </td>
									<td  class='titreNom' > Prix  </td>
									<td  class='titreNom' >Disponibilite </td>
									<td  class='titreNom' >Type Produit </td>
									<td  class='titreNom' >Suprimer</td>									
                                </tr>  								
								<?php	$nb = 0; 
											 foreach($produitTabMousses as $cle=>$articleMousses ){                                     												$nb++;
												?>
									<tr> 
										<td  class='titreNom' ><?php echo($nb); ?> </td>                                   
	                                    <td>
								<img class="image" alt="Shampooing" src="<?php  $img = $articleMousses["images"]; echo($img); ?>"/>
										</td>	
	                                    <td><?php  echo($articleMousses['nom']);  ?></td>	
	                                    <td><?php  echo($articleMousses['prix']."$");  ?></td>	
	                                    <td><?php  echo($articleMousses['disponible']);  ?></td>	
	                                    <td><?php  echo($articleMousses['typeProduit']);  ?></td>	
	                                    <td><a href="admin.php?sup=<?php echo($articleMousses['id']); ?>">
										<input id="suprimeBt" class="supr" type="button" name="suprime" value="Suprime" /></a>												</td>	
	                                </tr>
														      
								<?php }  ?>
	                        </table>							
	                        
						</fieldset>
						
 <!--  ========     Ajouter	Produit  :     ========================================================						-->
 					  <div id="div-infoTextUser"><span id="infoTextUser" >___________________________________________________</span></div>
					 
					  <form action="admin.php?ajouter" method="POST">
							<fieldset class="fieldset-container-utilisateur">
									 <legend class="definition-legend"> Ajouter un Produit dans Base Donne MySQL</legend>									
									 <table id="tab-static">	
									                            				   
									    <tr>
		                                    <td  class='titreNom' >Images Produit :</td>						
		                                	<td><input type="file" name="fileAdd" id="file"></td>
										</tr> 
										<tr>
		                                    <td  class='titreNom' >Nom Produit:</td>						
		                                	<td><input type="text" name="nomProduit" /></td>
										</tr> 								
										<tr>
		                                    <td  class='titreNom' >Prix :</td>						
		                                	<td><input type="text" name="prixProduit"/>$</td>
										</tr>
										<tr>
		                                    <td  class='titreNom' >Description Produit :</td>						
		                                	<td><textarea  rows="1" cols="14" name="descriptionProduit" ></textarea></td>
										</tr>
										<tr>
		                                    <td  class='titreNom' >Definition Produit:</td>						
		                                	<td><textarea  rows="1" cols="14" name="definitionProduit" ></textarea></td>
										</tr>
										<tr>
		                                    <td  class='titreNom' >Disponibilite Produit :</td>						
		                                	<td><input type="text" name="disponibleProduit"/></td>
										</tr>
										<tr>
		                                    <td  class='titreNom' >Type Produit :</td>						
		                                	<td>
												<input type="radio" name="shampoingProduit" />Shampoing</br>
												<input type="radio" name="mousseProduit" />Mousses</br>
												<input type="radio" name="laqueProduit" />Laque Coiffante</br>
												<input type="radio" name="volumisantProduit" />Volumisant</br>
												<input type="radio" name="gelProduit" />Gel Stimulante</br>
											</td>
										</tr>
																			
										
			                        </table>							
			                        
								</fieldset>
						</form>
                    </div>
            	</div>


            <!--Footer:-->
            <?php         require_once('template/template-footer.php');     ?>
        </div>

    </body>
</html>
