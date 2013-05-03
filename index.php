<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head>
        <title>Accueille Salon Reviera</title>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta name="description" content="coiffure,  coiffure homme, idées coiffure de famme, coiffure de homme à adopter - ">
        <meta name="keywords" content="coiffure, coiffee, bien, maquillee, mariage, bien, maquillage, coiffures, chignons, chignon, fete, look, sublime, belle, beaute, robe">

        <link rel="stylesheet" type="text/css" href="assets/stylesheet/stylesheet.css" />
        <link href="assets/stylesheet/js-image-slider.css" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="assets/images/favicon(7).ico" />
        <script src="assets/javascript/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="assets/javascript/js-image-slider.js"  type="text/javascript"></script>
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

        <div id="wrapper">
           <!--Menu:-->
<?php 
 require('template/template-header.php');
?>

           <div id="sliderFrame">
               <div id="slider">
                   <img src="assets/images/slider-5.jpg" alt="#htmlcaption1" />
                   <img src="assets/images/slider-2.jpg" alt="#htmlcaption2" />
                   <img src="assets/images/slider-3.jpg" alt="#htmlcaption3" />
                   <img src="assets/images/slider-4.jpg" alt="#htmlcaption4" />
                   <img src="assets/images/slider-6.jpg" alt="#htmlcaption5" />
                   <img src="assets/images/slider-1.jpg" alt="#htmlcaption6" />
               </div>

               <!--Custom navigation buttons on both sides-->
               <div class="group1-Wrapper">
                   <a onclick="imageSlider.previous()" class="group1-Prev"></a>
                   <a onclick="imageSlider.next()" class="group1-Next"></a>
               </div>

               <!--thumbnails-->
               <div id="thumbs">
                   <!-- navigation buttons in the thumbnails bar -->
                   <a onclick="imageSlider.previous()" class="group2-Prev"></a>
                   <a id='auto' onclick="switchAutoAdvance()"></a>
                   <a onclick="imageSlider.next()" class="group2-Next" style="margin-right:30px;"></a>
                   <!--Each thumb-->
                   <div class="thumb"><img src="assets/images/thumb-4.png" alt="img"/></div>
                   <div class="thumb"><img src="assets/images/thumb-6.png" alt="img"/></div>
                   <div class="thumb"><img src="assets/images/thumb-2.png" alt="img"/></div>
                   <div class="thumb"><img src="assets/images/thumb-7.png" alt="img"/></div>
                   <div class="thumb"><img src="assets/images/thumb-1.png" alt="img"/></div>
                   <div class="thumb"><img src="assets/images/thumb-5.png" alt="img"/></div>
               </div>
               <div id="htmlcaption1" style="display: none;">
                   <div style="width:190px;height:280px;display:inline-block;background:white url(assets/images/caption1.jpg) no-repeat 0 0;border-radius:4px;"></div>
               </div>
               <div id="htmlcaption2" style="display: none;">
                   <div style="width:190px;height:240px;display:inline-block;background:transparent url(assets/images/caption-1.jpg) no-repeat 0 0;border-radius:4px;"></div>
               </div>
               <div id="htmlcaption3" style="display: none;">
                   <div style="width:190px;height:240px;display:inline-block;background:white url(assets/images/caption-3.jpg) no-repeat 0 0;border-radius:4px;"></div>
               </div>
               <div id="htmlcaption4" style="display: none;">
                   <div style="width:190px;height:240px;display:inline-block;background:white url(assets/images/caption2.gif) no-repeat 0 0;border-radius:4px;"></div>
               </div>
               <div id="htmlcaption5" style="display: none;">
                   <div style="width:190px;height:240px;display:inline-block;background:white url(assets/images/caption-2.jpg) no-repeat 0 0;border-radius:4px;"></div>
               </div>
               <div id="htmlcaption6" style="display: none;">
                   <div style="width:190px;height:240px;display:inline-block;background:white url(assets/images/caption-4.jpg) no-repeat 0 0;border-radius:4px;"></div>
               </div>
           </div>
        </div>

        <div id="main-container">
            <h1>Salon Reviera</h1>
            <p><a href="#"><img src="assets/images/salon2.jpg" id="salon-img" alt=""/></a></p>

            <p class="salon-text1">Vous cherchez un salon dynamique, professionnel avec une réputation d’excellence?</p>
            <p></p>
            <p class="salon-text">Ne cherchez plus, <strong> Le Salon de Coiffure Reviera</strong>
                sité sur la <a href="#" title="Promenade Masson"> Promenade </a>
                à Montréal, dans l’arrondissement Verdun -<a  href="#" title="Rosemont - La Petite-Patrie"> Verdun-rue Iglise,</a>
                 sera répondre à vos attentes sera répondre.
            </p>
            <p class="salon-text">Venez vivre une expérience personalisée en compagnie d&#8217;une équipe de styliste et coloriste d’expérience.
                La passion et le savoir-faire est notre devise. Nous saurons vous conseiller selon votre personnalité et vos goûts.</p>
            <p class="salon-text">Nous vous offrons des <a title="Produits utilisés et disponibles au Salon de Coiffure Folichonne" href="#">
                produits </a>et <a title="Services offerts au Salon de Coiffure Folichonne" href="http://coiffurefolichonne.com/services/">
                services </a>que vous attendez d&#8217;un salon professionnel.</p>
            <p></p>
            <p class="salon-text1">Bienvenu à tous ...! </p>
            <p class="salon-text1"><img class="alignnone size-full wp-image-352" title="Wi-Fi_Logo" src="assets/images/Wi-Fi_Logo.png" alt="" /><br />
                L&#8217;accès WI-FI est maintenant disponible!</p>

            <div id="definision-ecole">
                <p class="salon-text3">Nos coiffeurs et coiffeuses offrent:</p>
                <p class="salon-text2">Coloration (teinture) - Coupe de cheveux - Mise en plis - Mèches - Permanente - Extension de cheveux (rallonge capillaire)
                    Pose d'ongles (manucure). Défrisant de cheveux</p>
                <p class="salon-text4"> Et on plus ...</p>
                <p class="salon-text1">Nous sommes toujours à la recherche de modèles, pour des séances de photos et des participations à des congrès.
                    Les employés voyagent à travers le monde pour s'inspirer.</p>
                <p class="salon-text2">Vous êtes coiffeur(e)s?  Pour vous joindre à notre équipe dynamique, envoyez-nous votre curriculum vitae par courriel.</p>
                <p class="salon-text2"><a href="#"><img src="assets/images/plumes-1.jpg" id="cours-couffeur" alt=""/></a></p>
            <!--  adrees ici  -->
            </div>
        </div>


       <!--Footer:-->

<?php 
 require_once('template/template-footer.php');
?>

        <script src="assets/javascript/javascript.js" type="text/javascript"></script>
    </body>
</html>