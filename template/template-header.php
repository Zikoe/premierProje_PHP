
<?php   
	
/*----------------------  Si le utilisateur c'est connecter ou Non il va afficher le text Conexion ---------------------*/  	
	if(isset($_SESSION['utilisateur'])){
		$textConnexion ="";
		$textDeconexion = $_SESSION['utilisateur']['nom']. " deconexion ?" ;
		
	}
	else{
		$textDeconexion = "";
		$textConnexion = "Connectez vous";
		if(!isset($_GET['merci'])){ /// pour page merci
			session_destroy();  /// pour detroit le session.
		}
		
	}
	
/*--------------------  Si le existe le panier il va afficher le panier et nombre Produit dans panier ------------------*/	
	if(isset($_SESSION['panier'])){
		$textPanier = "Mon panier ";
		$comp = 0;
		unset($_SESSION['panier']['PrixTotal']); /// avan afficher je suprimme le  cle =>'PrixTotal'
		$comp = count($_SESSION['panier']);
	//	var_dump($_SESSION['panier']);
		
		$textPanierNombre = " ".$comp;
	}
	else{		
		$textPanier = "Mon panier ";
		$textPanierNombre="";
	}


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head>
    	 <title></title>
	</head>
	<body>
		 <div id="container-search">
                <a href="http://www.facebook.com/"><img id="facebook" title="Facebook" class="social" src="assets/images/facebook.png"  alt="logo facebook" /></a>
                <a href="http://www.google.com/"  ><img id="googleplus" title="Google+"  class="social" src="assets/images/googleplus.png"   alt="logo google"/></a>
                <a href="http://www.twitter.com/" ><img id="twitter" title="Twitter" class="social" src="assets/images/twitter-bird.png"  alt="logo twitter"/></a>
                <div id="shopping_cart_wrapper">
                    <a class="link-scart-bullet" href="login.php?deconexion=1"><img id="user" align="bottom" title="Connectez vous" alt="ConecterUser" src="assets/images/user.jpg">
                        <span id="spanConect"><?php echo($textConnexion); ?></span</a>
                        <span id="spanDeconexion"><?php echo($textDeconexion); ?></span</a>
                    <a id="shopping_cart" href="panier.php"><img width="36" height="40" align="bottom" title=" Mon panier " alt="Mon panier" src="assets/images/pan.jpg">
                        <span><?php echo($textPanier); ?></span><span id="spanPanier"><?php echo($textPanierNombre); ?> </a>
                </div>
            </div>	
				
               <div id="top-container">
                   <div id="menu">
                       <ul id="navigation" class="nav-main">
                            <li><a href="index.php">Home</a></li>
                            <li class="list"><a href="#">Produit</a>
                                <ul class="nav-sub">
                                    <li><a href="produit.php?shampoing">Shampoing</a></li>
                                    <li><a href="laque-coiffantes.php">Laque Coiffante</a></li>
                                    <li><a href="produit.php?mousses">Mousse</a></li>
                                    <li><a href="volumisants.php">Volumisant</a></li>
                                    <li><a href="gel-stimulant.php">Gel stimulant</a></li>
                                </ul>
                           </li>
                            <li class="list"><a href="#">About</a>
                                <ul class="nav-sub">
                                    <li><a href="">About PSDGraphics</a></li>
                                    <li><a href="">Commercial Use</a></li>
                                    <li><a href="">PSDGraphics Of Use</a></li>
                                </ul>
                            </li>
                            <li class="list"><a href="galerie.php">Galerie</a></li>
                            <li class="list"><a href="formulare.php">Contact</a></li>
                       </ul>
                   </div>
                   <div id="clearfix"></div>
               </div>	
	 
	 </body>
</html>