<?php


 include "../security/secure.php";
 include "../includes/database.php";
 include "../includes/functions.php";

  if(@$_POST['id_editeur']!=""){
		$id_editeur = $_POST['id_editeur'];
		
		$nom=$_POST['nom'];
		$adresse=$_POST['adresse'];

		
try{

$sql = "UPDATE Editeur set nom=:nom,adresse=:adresse WHERE id_editeur=:id_editeur";
$sth = $dbco->prepare($sql);
$params=array(
                                
                                    ':nom' => $nom,
									':adresse' => $adresse,

                                    ':id_editeur' => $id_editeur,
									);
$sth->execute($params);

	header('Location:../admin/starter.php?page=editeur'); 
}
catch(PDOException $e){
echo "Erreur : " . $e->getMessage();
}
 
 }
?>