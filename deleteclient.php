<?php
 include "includes/database.php";
 $id_client=$_GET['id'];

try{
	
	$sql="DELETE FROM client WHERE id_client='$id_client'";
	$sth=$dbco->prepare($sql);
	$sth->execute();
	
	$sql="DELETE FROM client WHERE id_client='$id_client'";
	$sth=$dbco->prepare($sql);
	$sth->execute();
	
//header('location:livrelist.php');
 header('Location:admin/starter.php?page=client'); 

}

catch(PDOException $e){
	echo "Erreur:".$e->getMessage();
}
?>
