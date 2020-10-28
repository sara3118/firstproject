<?php

session_start();

include "../security/secure.php";          
include "../includes/database.php";  	
  if(@$_POST['id_client']!=""){
	        $id_client = $_POST['id_client'];
			$nom=$_POST['nom'];
			$adresse=$_POST['adresse'];
			$telephone=$_POST['telephone'];
			
try{
	

$sql = "UPDATE client set nom=:nom,adresse=:adresse,telephone=:telephone WHERE id_client=:id_client";
$sth = $dbco->prepare($sql);
$params=array(
                                
                                    ':nom' => $nom,
                                    ':adresse' => $adresse,
									':telephone' => $telephone,
                                    
                                    ':id_client' => $id_client
									);
	$sth->execute($params);
  //header('Location:client.php');  
	header('Location:../admin/starter.php?page=client'); 
  
}
catch(PDOException $e){
  echo "Erreur : " . $e->getMessage();
}
 
 }
?>