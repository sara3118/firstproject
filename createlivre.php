<?php
 session_start();

include "security/secure.php";
    include "includes/database.php";
    include "includes/functions.php";	
			
   if(@$_POST['titre']!="" && @$_POST['genre']!="" && @$_POST['id_bibliotheque']!="" ){

		  
		//--------database parameters
        //----forms informations
			
	    
			$titre=$_POST['titre'];
			$genre=$_POST['genre'];
			$id_auteur = $_POST['id_auteur'];
		    $id_editeur=$_POST['id_editeur'];
		    $date_publication=$_POST['date_publication'];
			//$logolivre=$_POST['logolivre'];
			$id_bibliotheque=$_POST['id_bibliotheque'];
			
			 $logolivre=uploadfile('logolivre',true);
			
			
           try{
     
	               
              //** echo 'Connexion réussie';
          
				$paramslivre=array(':titre' => $titre,
				':genre' => $genre,
				':id_bibliotheque'=>$id_bibliotheque,
				':logolivre' => $logolivre);
			
			            $sql = "INSERT INTO livre(titre,id_bibliotheque,genre,logolivre) VALUE (:titre,:id_bibliotheque,:genre,:logolivre)";
					
				$anyname= $dbco->prepare( $sql);	
				
                                    
				$anyname->execute($paramslivre);
				$id_livre=$dbco->lastInsertId();
				
				$paramspublier=[   
						':date_publication'=>$date_publication];
						
				$sql = "INSERT INTO publier(id_livre, id_auteur, id_editeur, date_publication)
					VALUES($id_livre,$id_auteur,$id_editeur,:date_publication)";
			
			       $anyname=$dbco->prepare($sql);
				   $anyname->execute($paramspublier);
						 
				  //$id_publier=$conn->lastInsertId();
						 header('Location:admin/starter.php?page=livrelist'); 
						              //  $conn->exec($sql);
									  echo 'Entrée ajoutée dans la table';
            }
            
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }
			
   }
   

   
   
?>