<?php
@session_start();
$id_auteur=$_GET['id'];

include "../security/secure.php";          
include "../includes/database.php";


$sql = "select *  FROM Auteur WHERE id_auteur=$id_auteur";
			$sth = $dbco->prepare($sql);

			$sth->execute();
			$result = $sth->fetch(PDO::FETCH_ASSOC);

			$id_auteur=$result['id_auteur'];
			$nom=$result['nom'];
			$prenom=$result['prenom'];
			$nationalite=$result['nationalite'];

$sql = "select id-auteur, nom FROM auteur";
			$sth = $dbco->prepare($sql);
			//$sth->execute();
			$result = $sth->fetchAll(PDO::FETCH_ASSOC);
	
			 foreach ($result as $bi => $val){
				 @$optionbiblio .="<option value='".$val['id_auteur']."'>".$val['nom']."</option>";
			 }
			 
			 
			 
			 $sql = "select id_auteur, nom FROM auteur";
			$sth = $dbco->prepare($sql);

			$sth->execute();
			$result = $sth->fetchAll(PDO::FETCH_ASSOC);
	
			 foreach ($result as $bi => $val){
				 @$optionauteur .="<option value='".$val['id_auteur']."'>".$val['prenom']."</option>";
			 }
			



?>

		  	      <link rel="stylesheet" href="style.css">

<h1>UP DATE Auteur HTML</h1>
<form action="<?php echo $route['updateauteur'];?>" method="post">
     
		<input type="hidden" id="id_auteur" name="id_auteur" value="<?php echo $id_auteur;?>">

            <div class="c100">
                <label for="nom">Nom : </label>
                <input type="text" id="nom" name="nom" value="<?php echo $nom;?>">
            </div>
            <div class="c100">
                <label for="prenom">Prenom : </label>
                <input type="text" id="prenom" name="prenom" value="<?php echo $prenom;?>">
            </div>
               <div class="c100">
                <label for="nationalite">Nationalite : </label>
                <input type="text" id="nationalite" name="nationalite" value="<?php echo $nationalite;?>">
            </div>
			
			
			
			</div>
			
			
            <div class="c100" id="submit">
                <input type="submit" value="Send">
            </div>
        </form>
