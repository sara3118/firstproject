<?php
@ session_start();

include "../security/secure.php";
    include "../includes/database.php";
    include "../includes/functions.php";	
			
   if(@$_POST['nom']!="" && @$_POST['prenom']!="" && @$_POST['nationalite']!="" ){

		  
		//--------database parameters
        //----forms informations
			
	    
			$nom=$_POST['nom'];
			$prenom=$_POST['prenom'];
			$nationalite = $_POST['nationalite'];
		    
           try{
     
	               
              //** echo 'Connexion réussie';
          
				$paramsAuteur=array(':nom' => $nom,
				':prenom' => $prenom,
				 ':nationalite'=>$nationalite);
				 
				$sql = "INSERT INTO Auteur(nom,prenom,nationalite) VALUE (:nom,:prenom,:nationalite)";
				$anyname= $dbco->prepare( $sql);	
				
                                    
				$anyname->execute($paramsAuteur);
				$id_auteur=$dbco->lastInsertId();
				
				
header('Location:../admin/starter.php?page=auteur'); 
						              //  $conn->exec($sql);
									  echo 'Entrée ajoutée dans la table';
            }
            
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }
			
   }
   

   
   
?>