<?php
	
function connectDB(){    /// function pour connexion
	// conection de basse de donne 
	//                 "mysql1.000webhost.com" ,"a9344992_edis" , "mon_mot_passe", "a9344992_bd"                       
	$con=mysqli_connect("mysql1.000webhost.com", "a9344992_edis", "Edis12131985.../", "a9344992_bd");  //// connexion sur phpAdmin a 000WEBHOST.

//	$con=mysqli_connect("localhost", "root", "", "basedonetp");   //// connexion sur mon phpAdmin Local
	//                  ou IP de server /root'racin'/ nom de basedonne
	//// gestion d'erreur: 
	if (mysqli_connect_errno())	{
		echo "Failed to connect to MySQL : " . mysqli_connect_error();         
		echo('<br/>');
		echo "Connect inposible avec server  MySQL : " . mysqli_connect_error();
		return;	
	}
	
	return $con;
}

function selectProduitType($x){  /// $x = type de produit,   exp: $shompoing ou $mousse
	
	$con = connectDB();  /// je appele le conexion.

	/// var_dump($con); /// si pas 'null' dit il ya erreur!!!!
	$result = mysqli_query($con, "SELECT * FROM produit WHERE produit.typeProduit = '".$x."'");
	$i = 0;
	while($row = mysqli_fetch_array($result)){
		$produit[$i] = $row;
		$i++;
	}
	
	mysqli_close($con);
	
	///var_dump($produit);   //// dans produit (tableau array) il tout donne pour type on choisise/ ou champoing ou mousse! 
	return $produit;	
	
}


function selectProduitId($id){	
	
	$con = connectDB();  /// je appele le conexion.
	/// 
	// var_dump($con); /// si pas null dit il ya erreur
	$result = mysqli_query($con, "SELECT * FROM produit WHERE produit.id = '".$id."'");
	while($row = mysqli_fetch_array($result)){
		$produit = $row;
	}
	
	mysqli_close($con);
	
	//var_dump($produit);
	return $produit;	
}


/*  
//// pour contunur sur insere ajouter :

function insertProduit($nom, $prix, $desc...){ //// 8 colone qui existe:
	$con ...
	$result = mysqli_query($con, "INSERT INTO produit VALUES ('".$nom."','".$prix."','".$desc."','','','','','')");
	mysqli_close($con);//// pour fermer envite le Hack
}

////    Update Changer :
function updateProduit($id, $nom, $prix ... ){
	$con ...
	$result = mysqli_query($con, "UPDATE produit SET nom = '".$nom."' WHERE id = ".$id);
	mysqli_close($con);
}

//// pour suprimer DELETE:
//// fair un delete de ligne

*/

function selectUserEmail($eMail, $password){  /// $eMail = email  de user,   exp: $bob@mail.com	
	$con = connectDB();  /// je appele le conexion.
	/// var_dump($con); /// si pas 'null' dit il ya erreur!!!!
	$result = mysqli_query($con, "SELECT * FROM users  WHERE users.email = '".$eMail."' AND users.password = '".$password."'");
	///                                        tab-users     tab.colon   =  'mail_exact_user';
	$i = 0;
	while($row = mysqli_fetch_array($result)){
		$user = $row;
		$i++;
	}	
	mysqli_close($con);	
	///var_dump($user);   //// dans user (tableau array) il a de user qui on charche avec son user ! 
	if($i == 0 ){
		return ; //// il return rien
	}
	return $user;	
}

?>