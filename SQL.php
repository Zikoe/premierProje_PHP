<?php
	
function connectDB(){
	// conection de basse de donne                     
	$con=mysqli_connect("localhost", "root", "", "basedonetp");
	
	//// gestion d'erreur: 
	if (mysqli_connect_errno())	{
		echo "Failed to connect to MySQL : " . mysqli_connect_error();
		return;	
	}
	return $con;
}

function selectProduitType($x){  /// $x = type de produit,   exp: $shompoing ou $mousse
	
	$con = connectDB();  /// je appele le conexion.
	/// 
	// var_dump($con); /// si pas null dit il ya erreur
	$result = mysqli_query($con, "SELECT * FROM produit WHERE produit.typeProduit = '".$x."'");
	$i = 0;
	while($row = mysqli_fetch_array($result)){
		$produit[$i] = $row;
		$i++;
	}
	
	mysqli_close($con);
	
	//var_dump($produit);
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
?>