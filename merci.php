
<?php
	If(isset($_POST[''])){
	$nom = $_POST['prenom'];
	// echo($nom);
		 
	 $to= 'edidik85@gmail.com';
     $subject='Merci '.$nom.', pour votre inscription / Message et Commenter !';
     $message='Bonjour '.$nom.'!/n Ce message vous est automatiquement envoyer afin de confirmer votre inscription aux site du salon Reviera.com';
     $headers='From: france1@mail.bg' . "\r\n" .
     'Reply-To: edidik85@gmail.com' . "\r\n" .
     'X-Mailer: PHP/';// . phpversion();

     mail('edidik85@gmail.com', $subject, $message, $headers);
		
		
	}
	

     
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head>
        <title>Merci Salon Reviera</title>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <link rel="stylesheet" type="text/css" href="assets/stylesheet/stylesheet.css" />
        <link href="assets/stylesheet/js-image-slider.css"  rel="stylesheet" type="text/css" />
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
        <!--Menu:-->

<?php 
 require_once('template/template-header.php');
?>

        <div id="main-container">
            <h1>Salon Reviera</h1>
            <p><a href="#"><img src="assets/images/salon2.jpg" id="salon-img" alt=""/></a></p>

            <div class="mask">
                <div class="slider-body">
                    <div class="panel" id="panel-1">
                        <div class="form-wrapper">
                            <div id="form-container">
                               <p class="salon-merci">Merci <?php echo($_POST['prenom']); ?> ! Votre mesage est bien Recue.</p>
                            </div>
                        </div>
                     </div>
                </div>

                <div id="bas-addrese">
                    <p class="salon-text5"> Vien nous visiter ......</p>
                    <fieldset class="fieldset-container">
                        <legend class="definition-legend"> Contact </legend>
                        <p class="salon-text2">À côté de la clinique d'esthétique Profusions rive sud, Montreal</p>
                        <div id="iframe-conteiner">
                            <iframe  src="https://maps.google.ca/maps?f=q&source=s_q&hl=fr&geocode=&q=1467,+boul.+Saint-Martin+O,+Laval&aq=&sll=45.449608,
                                     -75.735669&sspn=0.01126,0.027874&gl=ca&ie=UTF8&hq=&hnear=1467+Boulevard+Saint-Martin+Ouest,+Laval,
                                     +Qu%C3%A9bec&t=m&z=14&iwloc=r3&ll=45.569828,-73.724522&output=embed">
                            </iframe>
                        </div>
                        <div id="text-addrese">
                            <div id="addrese-salon">
                                <p class="name-text"><strong>Salon Reviera - Coiffure</strong></p>
                                <p class="salon-text2"><strong>123  boul. Victoria, Suitte 2121</strong></p>
                                <p class="salon-text2"><strong>Laval Quebec G1G 1G1 Canada</strong></p>
                                <p class="salon-text2"><strong>Pour prendre rendez-vous tel: 514 123-1234</strong></p>
                                <p class="salon-text2"><strong>Tel: 514 123-1234</strong></p>
                                <p id="dernier-tel" class="salon-text2"><strong>Sans frais: 877 123-1234</strong></p>
                            </div>
                            <div id="heures-salon">
                                <p class="salon-text2"><strong>Heures d'ouverture :</strong></p>
                                <ul>
                                    <li>
                                        <ul class="">
                                            <li class="li-jour"><label> Lundi </label></li>
                                            <li class="li-jour"><label> 9h30 à 18h00 </label></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul class="">
                                            <li class="li-jour"><label> Mardi </label></li>
                                            <li class="li-jour"><label>9h30 à 18h00</label></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </li>
                                    <li>
                                        <ul class="">
                                            <li class="li-jour"><label> Mercredi </label></li>
                                            <li class="li-jour"><label>9h30 à 18h00 </label></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </li>
                                    <li>
                                        <ul class="">
                                            <li class="li-jour"><label> Jeudi </label></li>
                                            <li class="li-jour"><label>9h30 à 21h00 </label></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </li>
                                    <li>
                                        <ul class="">
                                            <li class="li-jour"><label> Vendredi </label></li>
                                            <li class="li-jour"><label>9h30 à 17h00 </label></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </li>
                                    <li>
                                        <ul class="">
                                            <li class="li-jour"><label> Samedi </label></li>
                                            <li class="li-jour"><label>9h00 à 16h00 </label></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </li>
                                    <li>
                                        <ul class="dernier-jour">
                                            <li class="li-jour"><label> Dimanche </label></li>
                                            <li class="li-jour"><label class="rouge">Fermer </label></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
         </div>

        <!--Footer:-->
<?php 
 require_once('template/template-footer.php');
?>

    </body>
	
</html>