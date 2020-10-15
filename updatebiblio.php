<?php

session_start();

include "security/secure.php";          
include "includes/database.php";  	
  if(@$_POST['id_bibliotheque']!=""){
	        $id_bibliotheque = $_POST['id_bibliotheque'];
			$nom=$_POST['nom'];
			$adresse=$_POST['adresse'];
			$telephone=$_POST['telephone'];
			
try{
	

$sql = "UPDATE bibliotheque set nom=:nom,adresse=:adresse,telephone=:telephone WHERE id_bibliotheque=:id_bibliotheque";
$sth = $dbco->prepare($sql);
$params=array(
                                
                                    ':nom' => $nom,
                                    ':adresse' => $adresse,
									':telephone' => $telephone,
                                    
                                    ':id_bibliotheque' => $id_bibliotheque
									);
	$sth->execute($params);
  //header('Location:bibliolist.php');  
	header('Location:admin/starter.php?page=bibliolist'); 
  
}
catch(PDOException $e){
  echo "Erreur : " . $e->getMessage();
}
 
 }
?>