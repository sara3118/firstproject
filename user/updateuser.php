<?php
session_start();

include "../security/secure.php";          
include "../includes/database.php";  
include "../includes/functions.php";	
 
 if(@$_POST['id_users']!=""){
	  $id_users = $_POST['id_users'];
	  $prenom=$_POST['prenom'];
	  $email=$_POST['mail'];
	  $age=$_POST['age'];
	  $sex=$_POST['sexe'];
	  $pays=$_POST['pays'];
try{
	

$sql = "UPDATE Users set prenom=:prenom,email=:email,age=:age,pays=:pays,sex=:sex WHERE id_users=:id_users";
$sth = $dbco->prepare($sql);
$params=array(
                                
                                    ':prenom' => $prenom,
                                    ':email' => $email,
									':age' => $age,
                                    ':sex' => $sex,
                                    ':pays' => $pays,
                                    ':id_users' => $id_users,
									);
$sth->execute($params);
header('Location:../admin/starter.php?page=userslist'); 
}
catch(PDOException $e){
echo "Erreur : " . $e->getMessage();
}
 
 }
?>