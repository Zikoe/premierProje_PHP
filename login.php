<?php 

 	include_once('Php-Produite/infoTableau.inc');
 
 	if(isset($_POST['loginBt'])){
		echo('ok_Domande_Login!!!!');
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
	                        <form action="login.php" method="post">
	                        	<fieldset class="fieldset-container-login">
				                    <legend class="definition-legend">S'identifier</legend>
									<spam class="definition-login">Si vous possedez deja un compte client, il vous suffit de vous identifier a l aide de votre adresse e-mail et du mot de passe</spam>
									<table>
										<tr>
											<td>Votre Email :</td>
											<td><input type="text" name = "login" /></td>
										</tr>
										<tr>
											<td>Votre mot de passe :</td>
											<td> <input type="password" name="pwd"/></td>
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
									<spam class="definition-login">Pour passer votre commande, vous devez vous inscrire sur le site. Il vous suffit de cliquer sur le bouton ci-dessous pour continuer votre commande.</spam>
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


            <!--Footer:-->
            <?php         require_once('template/template-footer.php');     ?>
        </div>

    </body>
</html>