<?php
   
    require_once('Php-Produite/infoTableau.inc');

    $idProduite = $_GET['id'];
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
		    <!--Menu: -->
 			<?php     require_once('template/template-header.php'); ?>
            
			<div id="container">
            
           

                <div id="main-container">
                    <h1>Salon Reviera</h1>
                    <p><a href="#"><img src="assets/images/deta.jpg" id="salonC" alt=""/></a></p>
                    <p class="salon-text1">Choisissez le shampooing professionnel adapté à votre chevelure!</p>

                    <div id="form-container-produite">
                        <form action="#product-list-title" method="post">
                            <h1 class="shompoing-titre"><?php echo($produit[$idProduite]['description']); ?></h1>
                            <div id="left-container">
                                <img class="image" lang="fr" alt="Shampooing" src="<?php  echo($produit[$idProduite]['imagesBig']);  ?>"/>
                            </div>
                            <div id="right-container">
                                <div class="subtitle">Le produit</div>
                            </div>
                            <div id="footer-container">
                                <?php echo($produit[$idProduite]['definition']);  ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!--Footer:-->
            <?php    require_once('template/template-footer.php');  ?>



    </body>
</html>