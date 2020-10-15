<br/>
<br/>
<br/>
<br/>
<div class="card-group">
<?php
    include "includes/database.php";  
		try{
                
                
                $sth = $dbco->prepare("SELECT livre.titre,livre.id_livre,livre.genre,livre.logolivre,auteur.nom as autor_name,editeur.nom as editor_name
FROM livre,publier,auteur,editeur
WHERE publier.id_livre=livre.id_livre
AND publier.id_auteur=auteur.id_auteur
AND publier.id_editeur=editeur.id_editeur");
                $sth->execute();
                
              
                $result = $sth->fetchAll(PDO::FETCH_ASSOC);
                
				foreach ($result as $row => $livre) {
					
		  
           echo'<div class="col-4">';
		   echo'<div class="card text-black border-success mb-3 livrecard">';
		   echo'<div class="card-header">Header</div>';
           echo'<img class="card-img-top" src="uploads/'.$livre['logolivre'].'"alt="Card image cap">';
           echo'<div class="card-body">';
           echo'<h5 class="card-title">'.$livre['titre'].'</h5>';
           echo'<p class="card-text">'.$livre['genre'].'</p>';
           echo'<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>';
		   
		   echo'<a class="btn btn-success" href="?id='.$livre['id_livre'].'&page=livre">Details</a>';
           echo'</div>';
           echo'</div>';
		   echo'</div>';
	}   
	
            }
                  
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }
	
	

?>
</div>
  
		<style>
	.custab{
    border: 1px solid #ccc;
    padding: 5px;
    margin: 5% 0;
    box-shadow: 3px 3px 2px #ccc;
    transition: 0.5s;
    }
.custab:hover{
    box-shadow: 3px 3px 0px transparent;
    transition: 0.5s;
    }
	img {
		width:50px;
		height:20px;
	}
	</style>

    </body>
</html>	
