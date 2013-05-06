<?php 
	include_once('Php-Produite/infoTableau.inc');
	require_once('SQL.php');  
	session_start();  
 	  			
	if(isset($_GET['log'])){ $logonNonPanier = "et pour voir le panier vous douver conecter ?";  	}
	else{ 	$logonNonPanier =""; 	}
	
	if(isset($_GET['deconexion'])) { //// on clicant sur deconexion.
		if(isset($_SESSION['utilisateur']) ){
			echo('conexion detroit-tuer');
			$textDeconexion = "";
			$textConnexion = "Connectez vous";
					
			$user[$cle] = $_SESSION['utilisateur'];
	
			session_destroy();  /// pour detroit le session.		
			header("Location: index.php");
		}
		
	}
	
	

 	$textCompte = "Si vous possedez deja un compte client ou vous devez vous inscrire!";
	$logonNon = "";
 	
	
	if(isset($_POST['loginBt'])){
			$recupererMail = $_POST['login'];	
			$recupererPWD = $_POST['pwd'];	
			
			$tabUser = selectUserEmail($recupererMail, $recupererPWD);
			
			if($tabUser == null){
				$textCompte = "";
				$logonNon = "Dessole Votre Conte User N'existe Pas !" ;
			}
			else{
				$_SESSION['utilisateur'] = $tabUser; /// je cree le  nouvelle  sesion
				if (!$tabUser['admin']){ 	 header("Location: utilisateur.php");	}
				else{	header("Location: admin.php");	}		
				
			}
			
					
			/*      /// procedur pour php pour login			
			/// trete le fichier  'user.txt'   :   				
			$fichier_contunu = open_file("Php-Produite/data/user.txt"); /// pour verification je uver le 'user.txt'
			$users = unserialize($fichier_contunu);
			save_file("Php-Produite/data/user.txt", serialize($users));	///  je fermer et je souvgard le 'user.txt'
			var_dump($users);
			
		
			$trouve = 0;
			foreach($users as $cle =>$valeur){				
				//// si le eMail USER  il est  existe  avec son Password
				if($users[$cle]['email'] == $recupererMail &&  $users[$cle]['password'] == $recupererPWD ){   
					
					if($recupererMail == 'anni@gmail.com' && $recupererPWD == '123abc' ){
						header("Location: admin.php"); }
					$trouve++ ;
					$textCompte = "Si vous possedez deja un compte client ou vous devez vous inscrire!";
					$logonNon = "";
					
					if(isset($_SESSION['utilisateur'])){ 
					//	echo('sesion Existe?????????');
					session_destroy();  /// pour detroit le session.
					}
					else{
						$users[$cle]['preparationDernierLog']=dateHeurCouront();
					
						$_SESSION['utilisateur'] = $users[$cle]; /// je cree le  nouvelle  sesion
					//	echo('sesion cree');
						if( $users[$cle]['email'] == "anni@gmail.com" && $users[$cle]['password'] == "123abc"){
							
						}
					}
				 //  session_destroy();  /// pour detroit le session.
					if($trouve != 0 && ($recupererMail != 'anni@gmail.com' || $recupererPWD != '123abc' ) ){
						header("Location: utilisateur.php");	
					}					
					break;
				}
				//// si le user il n'existe  pas
				if( $trouve == 0){
				$textCompte = "";
				$logonNon = "Dessole Votre Conte User N'existe Pas !" ;
				}		
				
			
			}
			*/
	}
	
		if(isset($_GET['panier'])){ /// si il pas conecter on antre choisise dans panier
			$logonNon = "Pour Ajouter dans Panier vous douvez Connecter!" ;
			$textCompte = "";
		}
 
 
 /*=============================================  COOKIE  ==============================================*/
 ///  initialisation
$nomducookie = "loginCookie";

// les champs a leur valeur par défaut
$champs_login = "";
$champs_pw = "";

$contenu_cookie = "";

// voir s'il y a un cookie'
// on lit sa valeur (son contenu)
if (isset($_COOKIE["loginCookie"])){
	$contenuCookie = $_COOKIE["loginCookie"];
	$tab1 = explode("#",$contenuCookie);
	$tabuser= explode("=",$tab1[0]);
	
	// recuperation de la value login
	$champs_login = $tabuser[1];
	

	$tabupw= explode("=",$tab1[1]);
	
	// recuperation de la value login
	$champs_pw = $tabupw[1];
	
}

// Y a-t-il qq chose dans les champs du formulaire
// Autrement dit : est-ce un submit
if(isset($_POST['login']) && isset($_POST['pwd'])){
	
	// je cree le contenu 
	$contenuCookie = "username=".$_POST['login']."#"."mot_de_passe=".$_POST['pwd'];
	
	// je sauvegarde le cookie
	setcookie($nomducookie, $contenuCookie, time()+(30*60*60));
	
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
                    
					<p class="salon-text1">      <?php  echo($textCompte);      ?></p>
					<p class="affichageLoginNon"><?php  echo($logonNon); ?></p>
					<p class="affichageLoginNon"><?php  echo($logonNonPanier); ?></p>
					
                    
					<div id="form-container-login">
	                        <form action="login.php" method="post">
	                        	<fieldset class="fieldset-container-login">
				                    <legend class="definition-legend" >S'identifier</legend>
								 <p><span class="definition-login">Si vous possedez deja un compte client, il vous suffit de vous identifier a l aide de votre adresse e-mail et du mot de passe</span></p>
									
									<table>
										<tr>
											<td>Votre Email :</td>
				     			<td><input type="text" name = "login" value="<?php echo($champs_login); ?>" /></td>
										</tr>
										<tr>
											<td>Votre mot de passe :</td>
								<td> <input type="password" name="pwd" value = "<?php echo($champs_pw); ?>"/></td>
										</tr>
										<tr>
											<td></td>
							<td><input class="resetBt" type="reset" /><input class="submitBt" name="loginBt" type="submit" /></td>
										</tr>
									</table>
								</fieldset>
	                        </form>
						
						
							<div id="login-separ"></div>
							
						
	                        	<form action="inscription.php" method="post">
	                        		<fieldset class="fieldset-container-login">
				                    	<legend class="definition-legend">Creer un compte</legend>
									<span class="definition-login">Pour passer votre commande, vous devez vous inscrire sur le site. Il vous suffit de cliquer sur le bouton ci-dessous pour continuer votre commande.</span>
		                    			<table id="table-cree">
											<tr>
												<td></td>
												<td><input id="submitCreer" type="submit"  value="Creer Compte"/></td>
											</tr>
										</table>
									</fieldset>
								</form>							
						   </div>
					</div>
                 </div>
            </div>


            <!--Footer:-->
            <?php         require_once('template/template-footer.php');     ?>
        </div>

    </body>
</html>
<?php  
	$textCompte = "Si vous possedez deja un compte client ou vous devez vous inscrire!";
	$logonNon = "";	
  ?>