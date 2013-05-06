<?php 
		session_start();  
		
	 	include_once('Php-Produite/infoTableau.inc');
		$textErreur = "";
		
		if(isset($_SESSION['utilisateur'])){			
			$tabUser =  $_SESSION['utilisateur'];
			var_dump($tabUser);
			$nomUser = $tabUser['nom'];
			$textCompte = "Bonjour ".$nomUser.".";
			$textCompteBienvenue = "Bienvenue a la Boutique Salon Reviera!";
			$textPublicite = "Choisissez le Produit professionnel adapte a votre choix! Et a Bon Prix";	
		}
		else{ 		
			header("Location: login.php");
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
                    <p id="salon-textTitre">      <?php  echo($textCompte);      ?></p>
                    <p class="salon-text1">      <?php  echo($textCompteBienvenue);      ?></p>
                    <p class="affichageLoginNon">      <?php  echo($textErreur);      ?></p>
                    <p class="salon-text-utilisateur"><a id="lienA" href="produit.php?shampoing=1"><?php  echo($textPublicite); ?></a></p>
					
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
								<!--<tr>
                                    <td  class='titreNom' >Dernier Log :</td>
                                    <td><?php      echo($tabUser['dernierLog']);     ?></td>	
                                </tr>     -->   
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
                                    <td><?php   	
										
												   if($tabUser['favorite'] == ''){ $favoritePrefere= "Aucun Favorite Choissise!"; }
												   else{
												   	$favoritePrefere = $tabUser['favorite'];
												   }
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