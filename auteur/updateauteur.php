<?php


 include "../security/secure.php";
 include "../includes/database.php";
 include "../includes/functions.php";

  if(@$_POST['id_auteur']!=""){
		$id_auteur = $_POST['id_auteur'];
		
		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		
		$nationalite=$_POST['nationalite'];
		
		
		
try{

$sql = "UPDATE Auteur set nom=:nom,prenom=:prenom,nationalite=:nationalite WHERE id_auteur=:id_auteur";
$sth = $dbco->prepare($sql);
$params=array(
                                
                                    ':nom' => $nom,
									':prenom' => $prenom,
                                    
									':nationalite' => $nationalite,
                                    ':id_auteur' => $id_auteur,
									);
$sth->execute($params);
  //header('Location:auteur.php');
header('Location:../admin/starter.php?page=auteur');   
}
catch(PDOException $e){
echo "Erreur : " . $e->getMessage();
}
 
 }
?>