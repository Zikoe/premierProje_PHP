<?php  
	require_once('Php-Produite/infoTableau.inc');   
	require_once('SQL.php');   
	session_start();
	
/*	
	$password= '123456';
	$mailUser = 'bob@mail.ca';        //// test pour functionalite de nouvelle function dans SQL.php
	$tabUs = selectUserEmail($mailUser , $password);
 	var_dump($tabUs);                                                   
*/	
//	var_dump($_SESSION['panier']);
	
	$produitTab = array(); 
	$produit = array();
	if(isset($_GET['shampoing'])){ 	$produitTab = selectProduitType("shampoing");  $prodActuel = "shampoing"; 	}
	if(isset($_GET['mousses'])){ 	$produitTab = selectProduitType("mousses");   $prodActuel = "mousses";       }
	
	//var_dump($produitTab);
	
	$produit = $produitTab;
	
	
	$textCheckBoxNonExiste = "";
	$textDefinision = "Choisissez le shampoing professionnel adapté à votre chevelure!";
	
	$tabPanier = array();
	
	if(isset($_POST['panier'])){
	//	echo('panier++++++');  echo('<br/>'); //  session_destroy();  /// pour detroit le session.
		if(isset($_SESSION['utilisateur'])){ 
		//	echo('commancer de ajouter a panier!');
			$checkBoxExiste = 0;
			$tableChoixPanier = array();
			
			

				//// charcher le produite choisise base sur son id:	
				foreach($produitTab as $cle=>$article){
					if(isset($_POST[$cle])){/// si il a acroche on moen un chexBox le client 
								$tableChoixPanier [] = $article;
								$checkBoxExiste++;		
							}
				}
				/*foreach($mousses as $cle=>$article){
					if(isset($_POST[$cle])){/// si il a acroche on moen un chexBox le client 
								$tableChoixPanier [] = $article;
								$checkBoxExiste++;		
							}
				}*/
	
			if($checkBoxExiste == 0){
				$textDefinision = "";
				$textCheckBoxNonExiste = "Vous douvez Choisir  aux moin un Article a Ajouter au Panier?";
			}
			else{ 
				if(!isset($_SESSION['panier'])){ /// si n'existe pas il va creer le SESSION 'panier'
					$_SESSION['panier'] = array();
				}
				foreach($tableChoixPanier as $cle=>$valeur){
					array_push($_SESSION['panier'], $valeur); /// ajouter dans table /Session 'PANIER';
				}
		
				
	///		var_dump($_SESSION['panier']);		
			}
			
			
			
		}
		else{ header("Location: login.php?panier"); }  //// si le utilisateur il poas loger oncore avan Ajouter a Panier
	
	}
	
	
	if(isset($_POST['acheter'])){
	///	echo($_POST['acheter']);
	///	echo('Acheter+++++++++');
		$checkBoxExiste = 0;
		$tableArticlePanier = array();
		
		foreach($produit as $cle=>$valeur){
			
			if(isset($_POST[$cle])){/// si il a acroche on moen un chexBox le client 
				$tableArticlePanier [] = $valeur;
				$checkBoxExiste++;		
			}		
		}
		
		if( (count($_SESSION['panier'])!=0)  &&  ( $checkBoxExiste == 0 )  ){
			   $textDefinision = "Choisissez le shampoing professionnel adapté à votre chevelure!";
			   $_SESSION['acheter'] = $_SESSION['panier'];
			   header("Location: panier.php");
			 } 
			 
	//	if(isset($_SESSION['panier'])){ $checkBoxExiste++;} 
		
		if( ($checkBoxExiste == 0) && (count($_SESSION['panier'])==0) ){
			$textDefinision = "";
			$textCheckBoxNonExiste = "Vous douvez Choisir  aux moin un Article a Ajouter a Acheter ?";
		}
		else{
			$_SESSION['acheter'] = $tableArticlePanier;
		//	echo('deriger vers acheter.php');			
			if(isset($_SESSION['panier'])){
				$tableArticlePanier = $_SESSION['panier']; 
			}
			if(count($_SESSION['acheter'])==0){
				$textDefinision = "";
				$textCheckBoxNonExiste = "Vous douvez Choisir  aux moin un Article a Ajouter a Acheter ?";
			}
			else{ /* echo('derige!!!!');   */
			   $_SESSION['acheter'] = $tableArticlePanier;
		///	   var_dump($_SESSION['acheter']);
		 //	   header("Location: panier.php");
			}
			
		 
		}
	//	var_dump($tableArticlePanier);
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
                    <p><a href="#"><img src="assets/images/salonC.jpg" id="salonC" alt=""/></a></p>
                    <p class="salon-text1">      <?php  echo($textDefinision);      ?></p>
					<p class="affichageLoginNon"><?php  echo($textCheckBoxNonExiste); ?></p>

                    <div id="form-container-produite">
                        <form action="produit.php?<?php echo($prodActuel); ?>" method="POST">
                            <ol class="productlistPitem-w180">
                                <?php  foreach($produit as $cle=>$article){

                                ?>
                                <li class="">
                                    <div class="imageandcheckbox">
                                        <div class="pimg-h158">
                                            <a class="link" href="detail.php?id=<?php echo($article['id']); ?>" title="Voir la fiche de Shampooing technique après coloration">
                                                <img class="image" alt="Shampooing" src="<?php  echo($produit[$cle]['images']);  ?>"/>
                                            </a>
                                        </div>
  <input id="cho001" class="product-selector" type="checkbox" value="<?php echo($article['id']); ?>" name="<?php echo($article['id']); ?>" title="Ajouter a Panier.">
                                    </div>
                                    <h2><a class="link" href="detail.php?id=<?php echo($cle); ?>" title="Voir la fiche de Shampooing technique après coloration"><?php     echo($produit[$cle]['description']); ?></a> - <?php echo($produit[$cle]['nom']) ?></h2>
                                    À partir de
                                    <div>
                                        <div class="tal">   </div>
                                        <div class="tar">
                                            <strong><?php echo($article['prix']) ?> €</strong>
                                            <a class="linkFixedTip" href="detail.php?id=<?php echo($article['id']); ?>" title="Voir le produit">
                                                <img src="assets/images/picto-fleche_bleue.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            <?php }  ?>
                            </ol>
		<input id="submitBt" class="submitBt" type="submit" name="panier" value="Panier" /><input id="submitBt" class="submitBt" name="acheter" type="submit" value="Acheter" />
                        </form>
                    </div>



                 </div>
            </div>


            <!--Footer:-->
            <?php         require_once('template/template-footer.php');     ?>
        </div>

    </body>
</html>
 
	
