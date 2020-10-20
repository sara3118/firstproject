<?php
@session_start();
$id_livre=$_GET['id'];
include "security/secure.php";          
include "includes/database.php";


$sql = "select *  FROM livre WHERE id_livre=$id_livre";
			$sth = $dbco->prepare($sql);

			$sth->execute();
			$result = $sth->fetch(PDO::FETCH_ASSOC);

			$id_bibliotheque=$result['id_bibliotheque'];
			$titre=$result['titre'];
			$genre=$result['genre'];
			$description=$result['description'];
			$prix=$result['prix'];
			$logo=$result['logolivre'];

$sql = "select id_bibliotheque, nom FROM bibliotheque";
			$sth = $dbco->prepare($sql);

			$sth->execute();
			$result = $sth->fetchAll(PDO::FETCH_ASSOC);
	
			 foreach ($result as $bi => $val){
				 @$optionbiblio .="<option value='".$val['id_bibliotheque']."'>".$val['nom']."</option>";
			 }
			 
			 
			 
			 $sql = "select id_auteur, nom FROM auteur";
			$sth = $dbco->prepare($sql);

			$sth->execute();
			$result = $sth->fetchAll(PDO::FETCH_ASSOC);
	
			 foreach ($result as $bi => $val){
				 @$optionauteur .="<option value='".$val['id_auteur']."'>".$val['nom']."</option>";
			 }
			  $sql = "select id_editeur, nom FROM editeur";
			$sth = $dbco->prepare($sql);

			$sth->execute();
			$result = $sth->fetchAll(PDO::FETCH_ASSOC);
	
			 foreach ($result as $bi => $val){
				 @$optionediteur .="<option value='".$val['id_editeur']."'>".$val['nom']."</option>";
			 }



?>

		  	      <link rel="stylesheet" href="style.css">

<h1>UP DATE LIVRE HTML</h1>

<form action="<?php echo $route['updatelivre'];?>" method="post">
		<input type="hidden" id="id_livre" name="id_livre" value="<?php echo $id_livre;?>">

            <div class="c100">
                <label for="titre">Titre : </label>
                <input type="text" id="titre" name="titre" value="<?php echo $titre;?>">
            </div>
            <div class="c100">
                <label for="genre">Genre : </label>
                <input type="text" id="genre" name="genre" value="<?php echo $genre;?>">
            </div>
			
			 <div class="c100">
                <label for="description">Description : </label>
                <input type="text" id="description" name="description" value="<?php echo $description;?>">
            </div>
			 <div class="c100">
                <label for="prix">Prix : </label>
                <input type="text" id="prix" name="prix" value="<?php echo $prix;?>">
            </div>
               <div class="c100">
                <label for="logolivre">Logo livre : </label>
                <input type="file" id="logolivre" name="logolivre">
            </div>
			
			<div class="c100">
                <label for="id_auteur">Auteur :</label>
                <select id="id_auteur" name="id_auteur">  <!-- liste déroulante des bibliothèques disponibles-->
                    <option value="">--Selectionnez l'auteur</option>
                       <?php echo $optionauteur; 
                        ?>
				</select>
			</div>
			<div class="c100">
                <label for="date_publication">Date publication :</label>
                  <input type="date" name="date_publication">
			</div>
			<div class="c100">
                <label for="id_editeur">Editeur :</label>
                <select id="id_editeur" name="id_editeur">  <!-- liste déroulante des bibliothèques disponibles-->
                    <option value="">--Selectionnez l'editeur</option>
                       <?php echo $optionediteur; 
                        ?>
				</select>
			</div>
			
			<div class="c100">
                <label for="id_bibliotheque">Bibliothèque :</label>
                <select id="id_bibliotheque" name="id_bibliotheque">  <!-- liste déroulante des bibliothèques disponibles-->
                    <option value="">--Selectionnez la bibliotheque</option>
                       <?php echo $optionbiblio; 
                        ?>
				</select>
			</div>


            <div class="c100" id="submit">
                <input type="submit" value="Send">
            </div>
        </form>
