<?php
include "includes/database.php";


if(@$_GET['id']!=""){
$id_livre=$_GET['id'];

$sql = "SELECT livre.titre,livre.id_livre,livre.genre,livre.logolivre,livre.description,livre.prix,livre.page,auteur.nom as auteur_name,
editeur.nom as editeur_name,publier.date_publication                
FROM livre,publier,auteur,editeur                
WHERE publier.id_livre=livre.id_livre AND publier.id_auteur=auteur.id_auteur
 AND publier.id_editeur=editeur.id_editeur 
 and livre.id_livre=$id_livre";		
 
 
 $sth = $dbco->prepare($sql);

			$sth->execute();
			
			/*
			 Methode 1 have to delete the html code
			
			$result = $sth->fetchAll(PDO::FETCH_ASSOC);

			
			   
                
				foreach ($result as $row => $livre) 
			
			echo'<h5 class="card-title">'.$livre['titre'].'</h5>';
			echo'<p class="card-text">'.$livre['genre'].'</p>';
            echo'<img class="card-img-top" src="uploads/'.$livre['logolivre'].'"alt="Card image cap">';
			echo'<p class="card-text">'.$livre['auteur_name'].'</p>';
			echo'<p class="card-text">'.$livre['editeur_name'].'</p>';
			
            echo'<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>';
            echo'</div>';
            echo'</div>';
		    echo'</div>';
		
		*/
		
		
			//$id_bibliotheque=$result['id_bibliotheque'];
			//--------------------Debut Methode 1  just give the var and then add for the html the echo.
			 $result = $sth->fetch(PDO::FETCH_ASSOC);
			$titre=$result['titre'];
			$genre=$result['genre'];
			$logo=$result['logolivre'];
			$description=$result['description'];
			$prix=$result['prix'];
			$page=$result['page'];
			$auteur=$result['auteur_name'];
			$editeur=$result['editeur_name'];
			$publier=$result['date_publication'];
		    $emprunter=$result['emprunter'];
			  $id_livre=$result['id_livre'];

		}	



?>


<html>
<br/>

<br/>
 <div class="row">
    <div class="col-12">
		   <div class="card text-black border-success mb-3 livrecard">

		   <div class="card-header">Header</div>
		   <img class="card-img-top" src="uploads/<?php echo $logo;?>" alt="Card image cap">
           <div class="card-body">
           <h5 class="card-title"><?php echo $titre;?></h5>
		   <p class="card-text"><?php echo $description;?></p>
		   <p class="card-text"><?php echo $prix;?></p>
           <p class="card-text"><?php echo $auteur;?></p>
		   <p class="card-text"><?php echo $editeur;?></p>
		   
           <p class="card-text"><small class="text-muted"><?php echo $publier;?></small></p>
           </div>
		   
		   
		   <a href="<?php echo "?id=".$id_livre."&page=emprunter";?>">
		   <button class="btn btn-success" type="button" ><?php echo $emprunter;?>Borrow</button>
                </a>
           </div>
    </div>
 </div>

</html>  