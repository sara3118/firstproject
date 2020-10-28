<?php

@session_start();
 include "../security/secure.php";
 include "../includes/database.php";
  include "../includes/functions.php";


  if(@$_POST['id_livre']!=""){
		$id_livre = $_POST['id_livre'];
		$id_bibliotheque=$_POST['id_bibliotheque'];
		$titre=$_POST['titre'];
		$genre=$_POST['genre'];
		$description=$_POST['description'];
		$prix=$_POST['prix'];
		$page=$_POST['page'];
		$logo=uploadfile('logolivre',true);//$_POST['logo'];
		$id_auteur=$_POST['id_auteur'];
		$id_editeur=$_POST['id_editeur'];
		$date_publication=$_POST['date_publication'];
		
		
try{

$sql = "UPDATE livre set titre=:titre, id_bibliotheque=:id_bibliotheque, genre=:genre,description=:description,prix=:prix,page=:page, logolivre=:logo WHERE id_livre=$id_livre";

$params=array(':id_bibliotheque' => $id_bibliotheque,

                                    ':titre' => $titre,

                                    ':genre' => $genre,
									':description' => $description,
									':prix' => $prix,
									':page' => $page,

									':logo' => $logo         

									);
echo $logo;
$sth = $dbco->prepare($sql);
$sth->execute($params);

$params=array(':id_auteur'=>$id_auteur,
					':id_editeur'=>$id_editeur,
					':date_publication'=>$date_publication         

									);
$sql = "UPDATE publier set  id_auteur=:id_auteur, id_editeur=:id_editeur, date_publication=:date_publication WHERE id_livre=$id_livre";

$sth = $dbco->prepare($sql);



$sth->execute($params);

 // header('Location:livrelist.php');      
  header('Location:../admin/starter.php?page=livrelist'); 

}
catch(PDOException $e){

echo "Erreur : " . $e->getMessage();

}
  }
 ?>