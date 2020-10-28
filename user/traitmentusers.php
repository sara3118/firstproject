<?php
    @session_start();
@$id_users=$_GET['id'];

include "../security/secure.php";          
include "../includes/database.php";
include "../includes/define.php";        
			
   if(@$_POST['prenom']!="" && @$_POST['age']!="" && @$_POST['mail']!="" ){

		  
		
			
	    //-----------user input
			$prenom=$_POST['prenom'];
			$email=$_POST['mail'];
			$age=$_POST['age'];
			$password=$_POST['password'];
			$sex=$_POST['sexe'];
			$pays=$_POST['pays'];
			
           try{
       
	   
	                   $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              //** echo 'Connexion réussie';
          
			
			
			            $sql = "INSERT INTO users(prenom,email,age,password,sex,pays,role) VALUE (:prenom,:mail,:age,:password,:sex,:pays,:role)";
					
				$anyname = $dbco->prepare( $sql);
				
				$params=array(
				
                                 
                                    ':prenom' => $prenom,
                                    ':mail' => $email,
                                    ':password' => $password,
                                    ':sex' => $sex,
                                    ':pays' => $pays,
                                    ':role' => "admin",//**because it's not var we don't add $----
									':age' => $age);
				$anyname->execute($params);
						 
						
						              //  $conn->exec($sql);
                echo 'Entrée ajoutée dans la table';
            }
            
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }
			
   }
?>