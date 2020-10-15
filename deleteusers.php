<?php
session_start();
include "security/secure.php";          
include "includes/database.php"; 
$id_users=$_GET['id'];

try{

	$sql="DELETE FROM users WHERE id_users='$id_users'";
	$sth=$dbco->prepare($sql);
	$sth->execute();
    header('Location:admin/starter.php?page=userslist'); 

	//header('location:userslist.php');
$count = $sth->rowCount();
 print('Effacement de ' .$count. ' entrées.');
}
                  
catch(PDOException $e){
 echo "Erreur : " . $e->getMessage();
                      }
?>
