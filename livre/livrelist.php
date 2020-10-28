 <?php
@session_start();

include "../security/secure.php";
include "../includes/define.php";
?>
 <!DOCTYPE html>
<html>
    <head>
        <title>LIVRE LIST</title>
        <meta charset='utf-8'>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
           <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
          <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    </head>
    <body>
        <h1>LIVRE LIST</h1> 
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
	
<div class="container">
    <div class="row col-md-6 col-md-offset-2 custyle">
<a class='btn btn-success btn-xs' href='?page=formlivre'><span class='glyphicon glyphicon-add'></span> Ajouter</a>
<table class="table table-striped custab"> 		
        <?php
             include "../includes/database.php";

            
            try{
                
                
                /*Sélectionne les valeurs dans les colonnes prenom et mail de la table
                 *users pour chaque entrée de la table*/
                $sth = $dbco->prepare("SELECT livre.titre,livre.id_livre,livre.genre,livre.logolivre,livre.description,livre.prix,livre.page,auteur.nom as autor_name,editeur.nom as editor_name
FROM livre,publier,auteur,editeur
WHERE publier.id_livre=livre.id_livre
AND publier.id_auteur=auteur.id_auteur
AND publier.id_editeur=editeur.id_editeur");
                $sth->execute();
                
                /*Retourne un tableau associatif pour chaque entrée de notre table
                 *avec le nom des colonnes sélectionnées en clefs*/
                $result = $sth->fetchAll(PDO::FETCH_ASSOC);
                
				foreach ($result as $row => $livre) {
					
					     echo "<tr>";
						
						echo "<td>". $livre['titre']."</td>";
						echo "<td>". $livre['genre']."</td>";
						echo "<td > <img src='../uploads/". $livre['logolivre']."'></img></td>";
						echo "<td>". $livre['autor_name']."</td>";
						echo "<td>". $livre['editor_name']."</td>";
						echo "<td>". $livre['description']."</td>";
						echo "<td>". $livre['prix']."</td>";
						echo "<td>". $livre['page']."</td>";
						
						
						echo "<td> <a class='btn btn-info btn-xs' href='?page=formupdatelivre&id=".$livre['id_livre']."'><span class='glyphicon glyphicon-edit'></span> Edit</a>";
						echo "<td> <a class='btn btn-danger btn-xs' href='".$route['deletelivre']."?id=".$livre['id_livre']."'><span class='glyphicon glyphicon-remove'></span> Delete</a>";
						

				
					echo "</tr>";
					
					
				
				}
				
			echo "</table>";
                /*print_r permet un affichage lisible des résultats,
                 *<pre> rend le tout un peu plus lisible*/
          
            }
                  
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }
        ?>
		
		</table>
    </div>
    </body>
</html>