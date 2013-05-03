<?php

	
///-----------  Function   -----------------------------------------
function dateHeurCouront(){
	date_default_timezone_set('America/Montreal'); //// mette a jour le heurs locale!!!!!!!!!!!!!!!
	$dateJour = date('D');
		  switch ($dateJour)   /// SWICHE pour mette mise a jour on francaise le Jour letres.
        	{
				case 'Mon':
                	$dateJour = "Lundi";
               		 break;
				case 'Tue':
                	$dateJour = "Mardi";
               		 break;
				case 'Wed':
                	$dateJour = "Mercredi";
               		 break;
				case 'Thu':
                	$dateJour = "Jeudi";
               		 break;	 
				case 'Fri':
                	$dateJour = "Vendredi";
               		 break;
				case 'Sat':
                	$dateJour = "Samedi";
               		 break;
				case 'Sun':
                	$dateJour = "Dimanche";
               		 break;
			}
		$dateAnne =  date('d/m/Y');	
		$dateCouront =$dateJour." - ".date('H:i:s')." ".$dateAnne;
		return $dateCouront;	
}

function save_file($chemin, $contenu_du_fichier){  //// pour souvgarde le fichier
	$fichier = fopen( $chemin, "w");
	fwrite($fichier,$contenu_du_fichier );
	fclose($fichier);
}

function open_file($chemin){ //// pour ouvrir le fichier
	$fichier = fopen( $chemin, "r");
	$contenu_du_fichier =  fread($fichier, filesize($chemin));
	fclose($fichier);
	return($contenu_du_fichier);
}
////----------------------------------------------------------------



/*----------------------------------         tableau USER     ---------------------------------------------------*/					
					
$users =  array(
				'1' =>array(
							'dateInscription'=> '13/02/2010 07:25:15',
							'sexe' => 'homme',
							'nom' => 'Jean',
							'prenom' => "Phillipe",
							'email' => 'jean.phillipe@gmail.com',
							'password'=> '1',
							'phone'=> '5146528998',
							'favorite' => array(
												'Shampoing',
												'Laque',
												'Mousse',
												'Soin',
												'Volumisant',
												'Gel'
												)
							)
				); 






/*----------------------------------         tableau Produit     ----------------------------------------------*/					
$shampoing = array( 
				'cho001' => array(
								 'nom' => 'Kerasoin',									
								 'images' => 'assets/images/c0.jpg',
								 'imagesBig' => 'assets/images/c00.jpg',								 
								 'description' => 'Shampoing technique apres coloration',
								 'definition' => 'Shampoing technique après coloration de la marque Kérasoin.Le shampoing technique après coloration de la marque
                                                  Kérasoin est au PH acide. Le shampoing technique après coloration de la marque Kérasoin utilise uniquement après
                                                  la coloration  pour régler le PH des cheveux. Le shampoing technique après coloration de la marque Kérasoin
                                                   procure douceur et résistance  à vos cheveux, facilite le démêlage e Le shampoing technique après col',
								 'referenceBoutique' => 4986651,
								 'id'=>'cho001', 
								 'disponible' => 120,
								 'prix' => '15.01',
								 'prixLitre' => 39.33,
								 'linkSite' => 'www.kerasoin.com'
								 ) ,
                'cho002' => array(
								'nom' => 'Eugène Perma',
                                'images' => 'assets/images/c2.jpg',
                                'imagesBig' => 'assets/images/c22.jpg',
                                'description' => 'Shampoing purifiant Pure 250ml ',
                                'definition' => 'Shampoing technique après coloration de la marque Kérasoin.Le shampoing technique après coloration de la marque
                                                              Kérasoin est au PH acide. Le shampooing technique après coloration de la marque Kérasoin utilise uniquement après
                                                              la coloration  pour régler le PH des cheveux. Le shampoing technique après coloration de la marque Kérasoin
                                                               procure douceur et résistance  à vos cheveux, facilite le démêlage e Le shampoing technique après col',
                                'referenceBoutique' => 4986651,
                                'id'=>'cho002',
							    'disponible' => 120,
                                'prix' => '3.95',
                                'prixLitre' => 39.33,
                                'linkSite' => 'www.kerasoin.com'
                                ) ,
                'cho003' => array(
								'nom' => ' Wella',
                                'images' => 'assets/images/c4.jpg',
                                'imagesBig' => 'assets/images/c44.jpg',
                                'description' => 'Shampoing cheveux gras purifiant  Eugène',
                                'definition' => 'Shampoing technique après coloration de la marque Kérasoin.Le shampoing technique après coloration de la marque
                                                              Kérasoin est au PH acide. Le shampoing technique après coloration de la marque Kérasoin utilise uniquement après
                                                              la coloration  pour régler le PH des cheveux. Le shampoing technique après coloration de la marque Kérasoin
                                                               procure douceur et résistance  à vos cheveux, facilite le démêlage e Le shampoing technique après col',
                                'referenceBoutique' => 4986651,
                                'id'=>'cho003',
								'disponible' => 120,
                                'prix' => '2.95',
                                'prixLitre' => 39.33,
                                'linkSite' => 'www.kerasoin.com'
                                ) ,
                'cho004' => array(
                    			'nom' => 'Softsheen Carson',
								'images' => 'assets/images/c6.jpg',
                                'imagesBig' => 'assets/images/c66.jpg',       
                                'description' => 'Shampoing volume pour cheveux fins',
                                'definition' => 'Shampoing technique après coloration de la marque Kérasoin.Le shampooing technique après coloration de la marque
                                                              Kérasoin est au PH acide. Le shampooing technique après coloration de la marque Kérasoin utilise uniquement après
                                                              la coloration  pour régler le PH des cheveux. Le shampoing technique après coloration de la marque Kérasoin
                                                               procure douceur et résistance  à vos cheveux, facilite le démêlage e Le shampoing technique après col',
                                'referenceBoutique' => 4986651,
                    			'id'=>'cho004',
					            'disponible' => 120,
                                'prix' => '8.21',
                                'prixLitre' => 39.33,
                                'linkSite' => 'www.kerasoin.com'
                                ) ,
                'cho005' => array(
								'nom' => 'Brilliance - Wella',
                                'images' => 'assets/images/c3.jpg',
                                'imagesBig' => 'assets/images/c33.jpg',                         
                                'description' => 'Shampoing pour cheveux normaux originel',
                                'definition' => 'Shampoing technique après coloration de la marque Kérasoin.Le shampoing technique après coloration de la marque
                                                              Kérasoin est au PH acide. Le shampoing technique après coloration de la marque Kérasoin utilise uniquement après
                                                              après col',
                                'referenceBoutique' => 4986651,
                                'id'=>'cho005',
								'disponible' => 120,
                                'prix' => '4.99',
                                'prixLitre' => 39.33,
                                'linkSite' => 'www.kerasoin.com'
                                 ) ,
				'cho006' => array(
                                'nom' => 'Eugène Perma',
								'images' => 'assets/images/c5.jpg',
                                'imagesBig' => 'assets/images/c55.jpg',
                                'description' => 'Shampoing anti-pelliculaire Clean ',
                                'definition' => 'Shampoing technique après coloration de la marque Kérasoin.Le shampoing technique après coloration de la marque
                                                              la coloration  pour régler le PH des cheveux. Le shampoing technique après coloration de la marque Kérasoin
                                                               rès col',
                                'referenceBoutique' => 4986651,
                                'id'=>'cho006',
								'disponible' => 120,
                                'prix' => '4.70',
                                'prixLitre' => 39.33,
                                'linkSite' => 'www.kerasoin.com'
								 )    
					
					);
					
					
/*===============================================    Mousse      ================================*/					
$mousses = array(
					'mou007' => array(
									'id'=>'mou007',
									'images' => 'assets/images/mousse/naturkos.jpg',
									'imagesBig' => 'assets/images/mousse/naturkos-big.jpg',
									'nom' => 'Naturkosmetik',
									'description' => 'Mousse coiffante bio volume naturel',
									'definition' => "La mousse coiffante met chaque jour vos cheveux tout naturellement en forme. Cette mousse procure volume et maintien souple de vos cheveux, sans coller. Les protéines de blé et de soie assurent brillance, ondulation et beauté",
									'reference-store' => '4511154',
									'disponible' => '38',
									'prix' => '3.55',
								 	'prixLitre' => 41.75,
									'linkSite' => 'www.naturkosmetik.com'													
									),

					'mou008' => array(
									'id'=>'mou008',
									'images' => 'assets/images/mousse/oriflame.jpg',
									'imagesBig' => 'assets/images/mousse/oriflame-big.jpg',
									'nom' => 'RENER FURTERER',
									'description' => 'Mousse Coiffante Volume et Style',
									'definition' => "Donne de la prise, du corps et du volume aux cheveux. Avec un agent revitalisant. 150  ml ",
									'reference-store' => '4515115',
									'disponible' => '21',
									'prix' => '4',
								 	'prixLitre' => 21.21,
									'linkSite' => 'www.oriflame.com'
									),

					'mou009' => array(
									'id'=>'mou009',
									'images' => 'assets/images/mousse/oreal.jpg',
									'imagesBig' => 'assets/images/mousse/oreal-big.jpg',
									'nom' => "L'Oreal",
									'description' => 'SOIN MOUSSE COIFFANTE VOLUME EXPAND 150 ML',
									'definition' => "Soin mousse volume expand 1ers soins ampliformes cheveux fins enrichis en MINERAL CA.",
									'reference-store' => '4512252',
									'disponible' => '52',
									'prix' => '7.45',
								 	'prixLitre' => 38.25,
									'linkSite' => 'www.oreal.com'
									),
									
					'mou010' => array(
									'id'=>'mou010',
									'images' => 'assets/images/mousse/eugene.jpg',
									'imagesBig' => 'assets/images/mousse/eugene-big.jpg',
									'nom' => 'EUGENE PERMA',
									'description' => "MOUSSE COIFFANTE ARTIST 200 ML",
									'definition' => "Peut être utilisée à la fois en brushing ou en finition. En brushing, apporte du corps et de la tenue au coiffage. Sur cheveux secs, structure la coiffure ou accentue l'effet mèche à mèche.",
									'reference-store' => '4514228',
									'disponible' => '27',
									'prix' => '5.50',
								 	'prixLitre' => 41.35,
									'linkSite' => 'www.eugene-perma.com'
									),		
									
					'mou011' => array(
									'id'=>'mou011',
									'images' => 'assets/images/mousse/revlon.jpg',
									'imagesBig' => 'assets/images/mousse/revlon-big.jpg',
									'nom' => 'Revlon',
									'description' => 'Mousse coiffante Volumizing Foam Equave',
									'definition' => "a mousse Volumizing Foam Equave de REVLON PROFESSIONNEL, est une mousse qui donne du volume aux cheveux fins.",
									'reference-store' => '4513131',
									'disponible' => '31',
									'prix' => '5.31',
								 	'prixLitre' => 40.31,
									'linkSite' => 'www.revlon.com'
									),	
										
					'mou012' => array(
									'id'=>'mou012',
									'images' => 'assets/images/mousse/jacquesd.jpg',
									'imagesBig' => 'assets/images/mousse/jacquesd-big.jpg',
									'nom' => 'Jacques Dessange',
									'description' => 'Mousse coiffante boucles sculpt 200ml',
									'definition' => "Grâce à ses agents bouclants associés à des agents fixants à tenue extra-longue durée, la Mousse Coiffante Vivelle DOP redessine vos boucles pour leur donner vigueur et ressort : elles restent belles et bien définies, toute la journée !",
									'reference-store' => '4512522',
									'disponible' => '36',
									'prix' => '6.29',
								 	'prixLitre' => 44.14,
									'linkSite' => 'www.jacques-dessange.com'
									)									
																								
					);					


?>