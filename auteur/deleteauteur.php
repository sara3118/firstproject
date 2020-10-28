<?php
session_start();
include "../security/secure.php";          
include "../includes/database.php"; 
$id_auteur=$_GET['id'];

try{

	$sql="DELETE FROM auteur WHERE id_auteur='$id_auteur'";
	$sth=$dbco->prepare($sql);
	$sth->execute();
    header('Location:../admin/starter.php?page=auteur'); 

$count = $sth->rowCount();
                print('Effacement de ' .$count. ' entrées.');
            }
                  
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }
?>
