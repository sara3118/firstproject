<?php
@ session_start();

include "security/secure.php";
    include "includes/database.php";
    include "includes/functions.php";	
			
   if(@$_POST['nom']!="" && @$_POST['adresse']!=""){

		  
		//--------database parameters
        //----forms informations
			
	    
			$nom=$_POST['nom'];
			$adresse=$_POST['adresse'];
		    
           try{
     
	               
              //** echo 'Connexion réussie';
          
				$paramsAuteur=array(':nom' => $nom,
				':adresse' => $adresse);
				 
				$sql = "INSERT INTO Editeur(nom,adresse) VALUE (:nom,:adresse)";
				$anyname= $dbco->prepare( $sql);	
				
                                    
				$anyname->execute($paramsAuteur);
				$id_editeur=$dbco->lastInsertId();
				
				
header('Location:admin/starter.php?page=editeur'); 
						              
									  echo 'Entrée ajoutée dans la table';
            }
            
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }
			
   }
   

   
   
?>