<?php
@ session_start();

include "security/secure.php";
    include "includes/database.php";
    include "includes/functions.php";	
			
   if(@$_POST['nom']!="" && @$_POST['adresse']!="" && @$_POST['telephone']!="" ){

		  
		//--------database parameters
        //----forms informations
			
	    
			$nom=$_POST['nom'];
			$adresse=$_POST['adresse'];
			$telephone = $_POST['telephone'];
		    
           try{
     
	               
              //** echo 'Connexion réussie';
          
				$paramsAuteur=array(':nom' => $nom,
				':adresse' => $adresse,
				 ':telephone'=>$telephone);
				 
				$sql = "INSERT INTO bibliotheque(nom,adresse,telephone) VALUE (:nom,:adresse,:telephone)";
				$anyname= $dbco->prepare( $sql);	
				
                                    
				$anyname->execute($paramsAuteur);
				$id_auteur=$dbco->lastInsertId();
				
				
header('Location:admin/starter.php?page=bibliolist'); 
						              //  $conn->exec($sql);
									  echo 'Entrée ajoutée dans la table';
            }
            
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }
			
   }
   

   
   
?>