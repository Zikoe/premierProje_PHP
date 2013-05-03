<?php 
		session_start();  

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
		
		<?php  require('template/template-header.php');   ?>
        <div id="container">
            <!--Menu:-->


            <div id="main-container">
                <h1>Salon Reviera</h1>
                <p><a href="#"><img src="assets/images/salon2.jpg" id="salon-img" alt=""/></a></p>
                <p class="salon-text1">Vous cherchez un salon dynamique, professionnel avec une réputation d’excellence?</p>

                <div id="form-container">
                    <form action="merci.php?merci=1" method="POST"  id="commentForm">
                        <fieldset class="fieldset-container">
                            <legend class="definition-legend">Laissez nous votre commenter ?</legend>
                            <ul>
                                <li>
                                    <ul class="colorActiv">
                                        <li class="li_label"><label>Prénom :</label></li>
                                        <li><input type="text" name="prenom" class="required"/></li>
                                    </ul>
                                </li>
                                <li>
                                    <ul class="colorActiv">
                                        <li class="li_label"><label>Nom :</label></li>
                                        <li><input  type="text" name="nom"/></li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </li>
                                <li>
                                    <ul class="colorActiv">
                                        <li class="li_label"><label>Votre Age :</label></li>
                                        <li><input   type="text" name="age"/></li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </li>
                                <li>
                                    <ul class="colorActiv">
                                        <li class="li_label"><label>eMail :</label></li>
                                        <li><input   type="text" name="email"/></li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </li>
                                <li>
                                    <ul class="colorActiv">
                                        <li class="li_label"><label>Quelle Origine Etes Vous  :</label></li>
                                        <li>
                                            <select id="select-option" name="pays">
                                                <option selected="selected" value="0">-- Faites Votre Choix --</option>
                                                <option value="1">Canada</option>
                                                <option value="2">USA</option>
                                                <option value="3">Russie</option>
                                                <option value="4">Bulgarie</option>
                                                <option value="5">France</option>
                                                <option value="6">Tunisie</option>
                                                <option value="7">Brasil</option>
                                                <option value="8">Grece</option>
                                            </select>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </li>
                                <li>
                                   <div id="container-pays"><img  id="images-pays" src="assets/images/9.jpg" alt="abcde" /></div>
                                </li>
                                <li>
                                    <ul class="colorActiv">
                                        <li class="li_label"><label>Sexe :</label></li>
                                        <li>
                                            <ul>
                                                <li><input type="radio" name="myoptions[]"/><label>Homme</label></li>
                                                <li><input type="radio" name="myoptions[]"/><label>Femme</label></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </li>
                                <li>
                                    <ul class="colorActiv" >
                                        <li class="li_label"><label>Passions :</label></li>
                                        <li>
                                            <ul>
                                                <li><input type="checkbox"/><label>Moto</label></li>
                                                <li><input type="checkbox"/><label>Bateau</label></li>
                                                <li><input type="checkbox"/><label>Vélo</label></li>
                                                <li><input type="checkbox"/><label>Télévision</label></li>
                                                <li><input type="checkbox"/><label>Cuisine</label></li>
                                                <li><input type="checkbox"/><label>Voyages</label></li>
                                                <li><input type="checkbox"/><label>Skateboard</label></li>
                                                <li><input type="checkbox"/><label>Télévision</label></li>
                                                <li><input type="checkbox"/><label>Cuisine</label></li>
                                                <li><input type="checkbox"/><label>Voyages</label></li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </li>
                                <li>
                                    <ul class="colorActiv">
                                        <li class="li_label"><label>Commentaires :</label></li>
                                        <li><textarea  rows="3" cols="35" name="user[comment]" ></textarea></li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </li>
                            </ul>
                            <div class="clearfix"></div>

                        </fieldset>
                        <div class="clearfix"></div>
                        <p>
                            <input class="submit-style" type="submit" value="Envoyer" />
                        </p>
                    </form>
                </div>

                <div id="bas-addrese">
                    <p class="salon-text5"> Viens nous visiter ......</p>
                    <fieldset class="fieldset-container">
                        <legend class="definition-legend"> Contact </legend>
                        <p class="salon-text2">À côté de la clinique d'esthétique Profusions rive sud, Montreal</p>
                        <div id="iframe-conteiner">
                            <iframe src="http://maps.google.fr/maps/ms?ie=UTF8&amp;msa=0&amp;msid=200798205017374645131.0004484f73bea6145ef6b&amp;s=AARTsJqhzeyiqiLGEqDCDC7ar_q7Q1nmAw&amp;t=m&amp;z=17&amp;output=embed">
                            </iframe>
                            <small>Afficher <a href="http://maps.google.fr/maps/ms?ie=UTF8&amp;msa=0&amp;msid=200798205017374645131.0004484f73bea6145ef6b&amp;s=AARTsJqhzeyiqiLGEqDCDC7ar_q7Q1nmAw&amp;t=m&amp;z=17&amp;source=embed" style="color:#0000FF;text-align:left">Mes adresses</a> sur une carte plus grande</small>
                        </div>
                        <div id="text-addrese">
                            <div id="addrese-salon">
                                <p class="name-text"><strong>Salon Reviera - Coiffure</strong></p>
                                <p class="salon-text2"><strong>123  boul. Victoria, Suitte 2121</strong></p>
                                <p class="salon-text2"><strong>Laval Quebec G1G 1G1 Canada</strong></p>
                                <p class="salon-text2"><strong>Pour prendre rendez-vous: 514 123-1234</strong></p>
                                <p class="salon-text2"><strong>Fax: 514 123-1234</strong></p>
                                <p id="dernier-tel" class="salon-text2"><strong>Sans frais Tel: 877 123-1234</strong></p>
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