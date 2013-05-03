<?php 
		session_start();  

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">

     <head>
            <title>Galerie Salon Revira</title>
            <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
            <link rel="stylesheet" type="text/css" href="assets/stylesheet/stylesheet.css" />

            <link rel="shortcut icon" href="assets/images/favicon(7).ico" />
            <script src="assets/javascript/jquery-1.9.1.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/javascript/jquery.fancybox.js"></script>
            <script type="text/javascript" src="assets/javascript/javascript-fancybox.js"></script>
            <script src="assets/javascript/javascript.js" type="text/javascript"></script>
            <link rel="stylesheet" type="text/css" href="assets/stylesheet/jquery.fancybox.css?v=2.1.4" media="screen" />

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
            
            <?php  require('template/template-header.php'); ?>
 			
			<div id="container">
             <div id="main-container">
                <h1>Salon Reviera</h1>
                <p class="salon-text1">N'oublier pas de nous Envoyer votre commentère</p>
                <p class="salon-text1">et une Photo pour la Galerie</p>

                <div id="galerie">
                    <!--Début de la page:-->
                    <div id="photo-conteiner">
                        <div id="galeri1">
                            <a class="fancybox" rel="gallery1" href="assets/images/galeri-3.jpg" title="The Trail (Msjunior-Check out my galleries)">
                            <img src="assets/images/galeri-3mini.jpg" alt="" />
                            </a>
                            <a class="fancybox" rel="gallery1" href="assets/images/galeri-5.jpg" title="Trees (Joerg Marx)">
                            <img src="assets/images/galeri-5mini.jpg" alt="" />
                            </a>
                            <a class="fancybox" rel="gallery1" href="assets/images/galeri-2.jpg" title="Templanza (Chico Team)">
                            <img src="assets/images/galeri-2mini.jpg" alt="" />
                            </a>
                            <a class="fancybox" rel="gallery1" href="assets/images/galeri-1.jpg" title="Misty Tree Orchard (Stanley Zimny)">
                            <img src="assets/images/galeri-1mini.jpg" alt="" />
                            </a>
                            <a class="fancybox" rel="gallery1" href="assets/images/galeri-4.jpg" title="Misty Tree Orchard (Stanley Zimny)">
                            <img src="assets/images/galeri-4mini.jpg" alt="" />
                            </a>
                            <a class="fancybox" rel="gallery1" href="assets/images/galeri-6.jpg" title="Misty Tree Orchard (Stanley Zimny)">
                            <img src="assets/images/galeri-6mini.jpg" alt="" />
                            </a>
                        </div>

                        <div id="galeri2">
                            <a class="fancybox" rel="gallery2" href="assets/images/galeri1.jpg" title="The Trail (Msjunior-Check out my galleries)">
                            <img src="assets/images/galeri1mini.jpg" alt="" />
                            </a>
                            <a class="fancybox" rel="gallery2" href="assets/images/galeri2.jpg" title="Trees (Joerg Marx)">
                            <img src="assets/images/galeri2mini.jpg" alt="" />
                            </a>
                            <a class="fancybox" rel="gallery2" href="assets/images/galeri3.jpg" title="Templanza (Chico Team)">
                            <img src="assets/images/galeri3mini.jpg" alt="" />
                            </a>
                            <a class="fancybox" rel="gallery2" href="assets/images/galeri4.jpg" title="Misty Tree Orchard (Stanley Zimny)">
                            <img src="assets/images/galeri4mini.jpg" alt="" />
                            </a>
                            <a class="fancybox" rel="gallery2" href="assets/images/galeri5.jpg" title="Misty Tree Orchard (Stanley Zimny)">
                            <img src="assets/images/galeri5mini.jpg" alt="" />
                            </a>
                            <a class="fancybox" rel="gallery2" href="assets/images/galeri6.jpg" title="Misty Tree Orchard (Stanley Zimny)">
                            <img src="assets/images/galeri6mini.jpg" alt="" />
                            </a>
                        </div>

                        <div id="bouton-container">
                            <button id="Homme" class="submit-style" >Coupe pour Homme</button>
                            <button id="Femme" class="submit-style">Coupe pour Femme</button>
                        </div>
                    </div>
                </div>

            </div>
         </div>
         <!--Footer:-->
<?php 
 require_once('template/template-footer.php');
?>


     </body>
</html>