<?php
@ session_start();

include "security/secure.php";
    include "includes/database.php";
    include "includes/functions.php";	
			
   if(@$_POST['nom']!="" && @$_POST['prenom']!="" && @$_POST['telephone']!="" ){

		  
		//--------database parameters
        //----forms informations
			
	    
			$nom=$_POST['nom'];
			$prenom=$_POST['prenom'];
			$telephone = $_POST['telephone'];
		    
           try{
     
	               
              //** echo 'Connexion réussie';
          
				$paramsAuteur=array(':nom' => $nom,
				':prenom' => $prenom,
				 ':telephone'=>$telephone);
				 
				$sql = "INSERT INTO Client(nom,prenom,telephone) VALUE (:nom,:prenom,:telephone)";
				$anyname= $dbco->prepare( $sql);	
				
                                    
				$anyname->execute($paramsAuteur);
				$id_auteur=$dbco->lastInsertId();
				
				
header('Location:admin/starter.php?page=client'); 
						              //  $conn->exec($sql);
									  echo 'Entrée ajoutée dans la table';
            }
            
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }
			
   }
   

   
   
?>