<?php 
		session_start(); 
		
		if(!isset($_SESSION['utilisateur'])){
			header("Location: login.php?log");
		}
		
		if(isset($_GET['vider'])){
			$_SESSION['panier'] = array();
			header("Location: produit.php?shampoing");
		}
		
		
	 	include_once('Php-Produite/infoTableau.inc');
		require_once('SQL.php'); 
		
		$tabArticleAcheter = array();
		$textCheckBoxNonExiste = "";
		$textDefinision = "Verifier avan acheter le liste de Produit dans Panier S.V.P !";
		
		if(isset($_SESSION['panier'])){
		//	var_dump($_SESSION['panier']);
			$tabArticleAcheter = $_SESSION['panier'];
		//	var_dump($tabArticleAcheter);
		}
		
		if(isset($_GET['enlever'])){//// si on clicant sur onlever il existe  
			$ArticleEnleverID = $_GET['enlever']; //// il envoyer le valeur
		//	echo($ArticleEnleverID);
			foreach($tabArticleAcheter as $cle=>$valeur){
				$artic = "'".$valeur['id']."'";
				if( $artic == $_GET['enlever'] ){
				/// il onlever  le artique  de  table array: 					//// suprimer le article:					
				///	echo('suprimer .. OK......');
					unset($tabArticleAcheter[$cle]);/// je suprim le article du tableau par a por de son cle id .
					$_SESSION['acheter'] = 	array();		/// on metter a jour le table de session.
					$_SESSION['acheter'] = 	$tabArticleAcheter;	/// on metter a jour le table de session.	
					$_SESSION['panier'] = $_SESSION['acheter']; /// on metter a jour le table de session.
					break;
				}		
				
			}
			if(count($_SESSION['panier']) == 1 ){ /// si le panier il reste rien il va derige vers le page produite.
				header("Location: produit.php?shampoing"); 
			}
					
		}
		/// on ajouter :
		if(isset($_GET['ajouter'])){//// si on clicant sur onlever il existe  
		//	echo('ajouter++++++++++');
			
			unset($tabArticleAcheter['PrixTotal']);/// je suprime le element
			foreach($tabArticleAcheter as $cle=>$valeur){
					
					$artic = "'".$valeur['id']."'";
					if( $artic == $_GET['ajouter'] ){
						$tabArticleAcheter[] = $valeur;
						$_SESSION['panier'] = $tabArticleAcheter;
					//	var_dump($_SESSION['panier']);
						break;				
					}
							
			}			
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
                   
					
					<div id="form-container-panier">
						<div id="div-infoTextUser">
						 	<span id="infoTextUser" >Votre Panier  Actuel jusqua <?php echo(dateHeurCouront()); ?> </span>
                    	</div>
						<fieldset class="fieldset-container-utilisateur-panier">
							 <legend class="definition-legend">Arctiques dans Panier !</legend>      
								 <div id="circulairePropo">
			                        <ul>
			                           	<?php  	unset($tabArticleAcheter['PrixTotal']);/// je suprime le element
												foreach($tabArticleAcheter as $cle=>$valeur){
													
													
										?>								   
									    <li class="circulairePropoDetaile">
											<span id="spanPrix"><?php echo($valeur['prix']." $"); ?></span>
			                                <img src="<?php  echo($valeur['images']); ?>" alt="imgPanier"/>
			                                <h2><?php  echo($valeur['nom']); ?></h2>
			                                <ul>
			                                    <li><?php  echo($valeur['description']); ?></li>
			                                    <li><?php  echo($valeur['definition']); ?></li>
			                                </ul>
											<a href="panier.php?enlever='<?php echo($valeur['id']); ?>' " title="Onlever de Panier">Enlever </a>
											<a id="ajouter-panier" href="panier.php?ajouter='<?php echo($valeur['id']); ?>' " title="Ajouter ou Panier" >Ajouter oncore +1</a>          
			                            </li>	
																			
										<?php  }  $tabArticleAcheter['PrixTotal']=0; ?>
									</ul>
								
								</div>
								<div class="clearfix"></div>
								
								<div id="soldes">Total prix :<?php 	$prixTotal = 0;
																	foreach($tabArticleAcheter as $cle=>$valeur){
																		$prixTotal+= $valeur['prix'];
																	}
																	$_SESSION['panier']['PrixTotal'] = $prixTotal;
																	echo(" ".$prixTotal." $");  ?></div>
								<div id="confirmer"><a id="ajouter-panier" href="<?php echo('acheter.php?prix='.$prixTotal); ?>" title="Confirmer et Peyer"> Confirmer Acheter? </a></div>					
								<div id="anuler"><a id="ajouter-panier" href="panier.php?vider=1" title="Vider Panier">Vider Panier</a></div>
							</fieldset>
						
						</div>
					</div>
				</div>
			
					
	
            <!--Footer:-->
            <?php         require_once('template/template-footer.php');     ?>
        </div>

    </body>
</html>