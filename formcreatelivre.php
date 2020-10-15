<?php
session_start();

include "security/secure.php";

$servname = "localhost"; $dbname = "bd_sara_biblio2"; $dbuser = "root"; $dbpass = "";
$dbco = new PDO("mysql:host=$servname;dbname=$dbname", $dbuser, $dbpass);
			$dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

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

<h1>Form create livre HTML</h1>
        
        <form action="<?php echo $route['createlivre'];?>" method="post" enctype="multipart/form-data">
            <div class="c100">
                <label for="titre">Titre : </label>
                <input type="text" id="titre" name="titre">
            </div>
            <div class="c100">
                <label for="genre">Genre : </label>
                <input type="genre" id="genre" name="genre">
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
                <input type="submit" value="Envoyer">
            </div>
        </form>

