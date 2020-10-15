<?php
@ session_start();

include "security/secure.php";
include "includes/database.php";
include "includes/functions.php";	
	//	var_dump($_POST);
   if(@$_POST['prenom']!="" && @$_POST['mail']!="" && @$_POST['age']!="" ){

		 $prenom=$_POST['prenom'];
	  $email=$_POST['mail'];
	  $age=$_POST['age'];
	  $sex=$_POST['sexe'];
	  $pays=$_POST['pays'];
	  $password=$_POST['password'];
        
		
			
           try{
     
	               
              //** echo 'Connexion réussie';
          
				$paramsAuteur=array(':prenom' => $prenom,
				 ':email' => $email,
				 ':age'=>$age,
				 ':password'=>$password,
				 ':sex'=>$sex,
				 ':pays'=>$pays,
				 ':role'=>"admin",
				 );
				 
				$sql = "INSERT INTO users(prenom,email,age,password,sex,pays,role) VALUE (:prenom,:email,:age,:password,:sex,:pays,:role)";
				$anyname= $dbco->prepare( $sql);	
				
                                    
				$anyname->execute($paramsAuteur);
				$id_users=$dbco->lastInsertId();
				
				
header('Location:admin/starter.php?page=userslist'); 
						              //  $conn->exec($sql);
									  echo 'Entrée ajoutée dans la table';
            }
            
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }
			
   }
   

   
   
?>