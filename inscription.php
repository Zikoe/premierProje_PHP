<?php 
	// inclusion du tableau de USERS :      '
 	require_once('Php-Produite/infoTableau.inc');
 	require_once("Php-Produite/data/user.txt");

///-----------  Function   -----------------------------------------
function save_file($chemin, $contenu_du_fichier){
	$fichier = fopen( $chemin, "w");
	fwrite($fichier,$contenu_du_fichier );
	fclose($fichier);
}

function open_file($chemin){
	$fichier = fopen( $chemin, "r");
	$contenu_du_fichier =  fread($fichier, filesize($chemin));
	fclose($fichier);
	return($contenu_du_fichier);
}
////----------------------------------------------------------------
	/// traitmen  et recupere le info/donne   :
	if(isset($_POST['inscrBt'])){
			echo('ok..............  inscrBt');
			$recupererMail = $_POST['email'];
		    $existe = 0;
		  	foreach($users as $id => $user){
		  		if($user['email'] == $recupererMail ){
					echo('<br/>'); echo('Desole Votre Nas de nouvelle User est Existe!!!!!!!!!!!!'); echo('<br/>');
					echo('Resseyer a nouvelle ?');echo('<br/>');echo('#############################################################');
					$existe++;
					break ;			
				}		
			}
					
			if($existe == 0){
				/// je rajouter le nouvel USER  dans tableau:		
					$userRecuperer = array();
					$userRecuperer['dateInscription'] = $_POST['date'];
					if(isset($_POST['homme'])){ $userRecuperer['sexe'] = 'homme'; }
					if(isset($_POST['famme'])){ $userRecuperer['sexe'] = 'famme'; }
					$userRecuperer['nom'] = $_POST['nom'];
					$userRecuperer['prenom'] = $_POST['prenom'];
					$userRecuperer['email'] = $_POST['email'];
					$userRecuperer['password'] = $_POST['password'];
							
					$favoriteUser = array();		
					if(isset( $_POST['Shampoing'])){ $favoriteUser[$_POST['Shampoing']] = "Shampoing"; 	}
					if(isset( $_POST['Laque'])){ $favoriteUser[$_POST['Laque']] = "Laque"; 	}
					if(isset( $_POST['Mousse'])){ $favoriteUser[$_POST['Mousse']] = "Mousse";	}
					if(isset( $_POST['Volumisant'])){ $favoriteUser[$_POST['Volumisant']] = "Volumisant";		}
					if(isset( $_POST['Gel'])){ $favoriteUser[$_POST['Gel']] = "Gel"; 	}
					if(isset( $_POST['Soin'])){ $favoriteUser[$_POST['Soin']] = "Soin";	}				
					
					$userRecuperer['favorite'] = $favoriteUser;		

					/// trete le fichier  'user.txt'   :   	
					$contenu_du_tableau = serialize($users);			
					$fichier_contunu = open_file("Php-Produite/data/user.txt");
					$users = unserialize($fichier_contunu);
					$nombreUsers = count($users);  echo("NOmbre Users:::::::::::".$nombreUsers);  echo('<br/>');
					$nombreUsers++ ; /// encrementer pour prochen ID de users! 
					$users[$nombreUsers] = $userRecuperer;
					var_dump($users);  /* afficher le tablea apres ajoiuter le etudiante.*/ 
					save_file("Php-Produite/data/user.txt", serialize($users));	
					echo(serialize($users)); //// afficher le fichier serialise apres souvgarde! 					
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
                    <p class="salon-text1">Si vous possedez deja un compte client ou vous devez vous inscrire!</p>

                    <div id="form-container-login">
	                        <form action="inscription.php" method="POST">
	                        	<fieldset class="fieldset-container-inscription">
				                    <legend class="definition-legend-inscription">Inscription Formulare</legend>							
									<table>
										<tr>
											<td>Date d'inscription:</td>
											<td><input type="text" name="date" value="<?php print(date('d/m/Y' .' '.'H:i:s'));   ?>"/></td>
										</tr>
										<tr>
											<td><input type="radio" name="homme" />Homme</td>
											<td><input type="radio" name="famme" />Famme</td>
										</tr>
										<tr>
											<td>Nom</td>
											<td><input type="text" name="nom" /></td>
										</tr>
										<tr>
											<td>Prenom</td>
											<td><input type="text" name="prenom" /></td>
										</tr>
											<tr>
											<td>eMail</td>
											<td><input type="text" name="email" /></td>
										</tr>
										<tr>
											<td>Password</td>
											<td><input type="password" name="password" /></td>
										</tr>
										<tr>
											<td>Confirmer Password</td>
											<td><input type="password" name="password" /></td>
										</tr>
										<tr>
											<td>Telephone :</td>
											<td><input type="text" name="phone" /></td>
										</tr>
									</table>
								
									<fieldset class="fieldset-container-sous">
				                    	<legend class="definition-legend-inscription1">A quels produit vous interese plus?</legend>
										<table>			
											<tr>
												<td><input type="checkbox" name="Shampoing" value="Shampoing" />Shampoing</td>
												<td><input type="checkbox" name="Laque"     value="Laque"/>Laque</td>
											</tr>
											<tr>
												<td><input type="checkbox" name="Mousse"      value="Mousse"/>Mousse</td>
												<td><input type="checkbox" name="Volumisant"  value="Volumisant"/>Volumisant</td>
											</tr>
											<tr>
												<td><input type="checkbox" name="Gel"   value="Gel"/>Gel</td>
												<td><input type="checkbox" name="Soin"  value="HTML"/>Soin</td>
											</tr>
										</table>
									</fieldset>	
									<table>
										<tr>
											<td></td>
											<td><input class="resetBt"  type="reset" />
												<input class="submitBt" name="inscrBt" type="submit" /></td>
									</table>
								</fieldset>
	                        </form>
						
						
							<div id="login-separ"></div>
									
					</div>
                 </div>
            </div>


            <!--Footer:-->
            <?php         require_once('template/template-footer.php');     ?>
        </div>

    </body>
</html>