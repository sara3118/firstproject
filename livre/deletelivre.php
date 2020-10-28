<?php
 include "../includes/database.php";
 $id_livre=$_GET['id'];

try{
	
	$sql="DELETE FROM publier WHERE id_livre='$id_livre'";
	$sth=$dbco->prepare($sql);
	$sth->execute();
	
	$sql="DELETE FROM livre WHERE id_livre='$id_livre'";
	$sth=$dbco->prepare($sql);
	$sth->execute();
	
//header('location:livrelist.php');
 header('Location:../admin/starter.php?page=livrelist'); 

}

catch(PDOException $e){
	echo "Erreur:".$e->getMessage();
}
?>
