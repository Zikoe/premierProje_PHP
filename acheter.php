<?php 
		session_start();  
		
	 	include_once('Php-Produite/infoTableau.inc');
		
		if(isset($_GET['prix'])){
		//	echo($_GET['prix']);
			 $clientNouvel = array();
			 $_SESSION['prixTotalCommande'] =  $_GET['prix'];
			 	}
	
		$textCheckBoxNonExiste = "";
		$textDefinision = "Verifier avan acheter le liste de choix S.V.P ?";
		
		if(isset($_SESSION['panier'])){
			$tabArticleAcheter = $_SESSION['panier'];
		}
		
		
		if(isset($_GET['valider'])){
			$article = $_SESSION['panier'];
	//		var_dump($article);
			
	//		var_dump($_SESSION['utilisateur']);
			$clientNouvel['nom'] = $_SESSION['utilisateur']['nom'];			
			$clientNouvel['prenom'] = $_SESSION['utilisateur']['prenom'];			
			$clientNouvel['email'] = $_SESSION['utilisateur']['email'];
			$clientNouvel['prixTotalCommande'] = $_SESSION['prixTotalCommande'] ;			
			$articleDetaile = array();
			
			foreach($article as $cle=>$valeur){ $articleDetaile[]=$valeur['nom']; 	}
			
			
			$clientNouvel['achete'] = $articleDetaile;
		//	var_dump($clientNouvel);
		
/*  ----------------          ici je peux ajouter le code pour envoyer le mail a client pour acheter ---------------*/
		
	// --------------------------------------------------------------------------------------------------------------
			/// trete le fichier  'user.txt'   :   	
			$contenu_du_tableau = serialize($clientNouvel);			
			$fichier_contunu = open_file("Php-Produite/data/listeComandeSociete.txt");
			if(filesize("Php-Produite/data/listeComandeSociete.txt")>0){
				$usersClient = unserialize($fichier_contunu);
			}
			else{
				$usersClient = array();
			}
			$usersClient[] = $clientNouvel;	
		//	var_dump($usersClient);
			save_file("Php-Produite/data/listeComandeSociete.txt", serialize($usersClient));	
			 
			// on vider le panier on derige vers pages produit.php on commancer a nouvel acheter:
			$_SESSION['panier'] = array();
			header("Location: produit.php?shampoing");
		}
 	
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head>
        <title>Contact Salon Reviera</title>
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
            _gaq.push(['_setAccount', 'UA-39033374-1']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
        <div id="page">

                <?php   require_once('template/template-header.php');  ?>


                <div id="main-container">
                    <h1>Salon Reviera</h1>
                    <p><a href="#"><img src="assets/images/hea.jpg" id="salonC" alt=""/></a></p>
                     <p class="salon-text1">      <?php  echo($textDefinision);      ?></p>
                   
					
					<div id="form-container-produite">
						<div id="div-infoTextUser">
						 	<span id="infoTextUser" >Votre information registre Actuel jusqua <?php echo(dateHeurCouront()); ?> </span>
                    	</div>
						<fieldset class="fieldset-container-utilisateur">
							 <legend class="definition-legend">Formulaire de paiement !</legend>      
								<div class="span9">
				      	    		<div id="element2">
									    <div>
									    	<label class="label1">Nom</label><input id="nom"></div>
									    </div>
									    <div>
									     	 <label class="label1">Prénom</label><input id="prenom">
										</div>
									    <div>
									    	<label class="label1">Email</label><input id="email">
									    </div>
									    <div>
									      <label class="label1">Url</label><input id="url">
									    </div>
									    <div>
										    <div>
										        <label class="label1">Carte de crédit</label>
											</div>
										      <input id="creditcard_type_visa" name="creditcard[type]" value="visa" type="radio"><label>Visa</label>
										      <input id="creditcard_type_master" name="creditcard[type]" value="master" type="radio"><label> MasterCard</label>
										    </div>
										</div>
									    <h3 class="visacard">Visa</h3>
									    <div class="visacard">
									      	<label class="label1"> Numero</label><input id="visanumber">
									    </div>
									    <div class="visacard">
									    	<label class="label1">Exp mois</label><select id="visa_month">
																        <option selected="selected" value="01">Janvier</option>
																        <option value="02">Fevrier</option>
									      							</select>
									    </div>
									    <div class="visacard">
									      <label class="label1">Exp annee</label><select id="visa_month">
																				        <option selected="selected" value="2013">2013</option>
																				        <option value="2014">2014</option>
																					</select>
									    </div>
									    <h3 class="mastercard">Mastercard</h3>
									    <div class="mastercard">
									    	<label class="label1">Numero</label><input id="masternumber">
									    </div>
									    <div class="mastercard">
									    	<label class="label1">Exp mois</label><select id="visa_month">
																					        <option selected="selected" value="01">Janvier</option>
																					        <option value="02">Fevrier</option>
																					      </select>
									    </div>
									    <div class="mastercard">
									    	<label class="label1">Exp annee</label><select id="visa_month">
																					        <option selected="selected" value="2013">2013</option>
																					        <option value="2014">2014</option>
																					      </select>
									    </div>									    
				<div id="confirmerPeyerCart">			    
			         <a id="ajouter-panier" href="acheter.php?valider" title="Valider de Peyemont">Valider</a>
				</div>
									</div>
									
								</div>
								
							</fieldset>
						
						</div>
					</div>
				</div>
			
					
	
            <!--Footer:-->
            <?php         require_once('template/template-footer.php');     ?>
        </div>

    </body>
</html>