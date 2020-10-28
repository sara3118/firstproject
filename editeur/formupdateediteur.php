<?php
@session_start();
$id_editeur=$_GET['id'];

include "../security/secure.php";          
include "../includes/database.php";


$sql = "select *  FROM Editeur WHERE id_editeur=$id_editeur";
			$sth = $dbco->prepare($sql);

			$sth->execute();
			$result = $sth->fetch(PDO::FETCH_ASSOC);

			$id_editeuro=$result['id_editeur'];
			$nom=$result['nom'];
			$adresse=$result['adresse'];


$sql = "select id-editeur, nom FROM editeur";
			$sth = $dbco->prepare($sql);
			//$sth->execute();
			$result = $sth->fetchAll(PDO::FETCH_ASSOC);
	
			 foreach ($result as $bi => $val){
				 @$optionbiblio .="<option value='".$val['id_editeur']."'>".$val['nom']."</option>";
			 }
			 
			 
			 
			 $sql = "select id_editeur, nom FROM editeur";
			$sth = $dbco->prepare($sql);

			$sth->execute();
			$result = $sth->fetchAll(PDO::FETCH_ASSOC);
	
			 foreach ($result as $bi => $val){
				 @$optionauteur .="<option value='".$val['id_editeur']."'>".$val['adresse']."</option>";
			 }
			


?>

		  	      <link rel="stylesheet" href="style.css">

<h1>UP DATE Editeur HTML</h1>
<form action="<?php echo $route['updateediteur'];?>" method="post">

		<input type="hidden" id="id_editeur" name="id_editeur" value="<?php echo $id_editeur;?>">

            <div class="c100">
                <label for="nom">Nom : </label>
                <input type="text" id="nom" name="nom" value="<?php echo $nom;?>">
            </div>
            <div class="c100">
                <label for="adresse">Adresse : </label>
                <input type="text" id="adresse" name="adresse" value="<?php echo $adresse;?>">
            </div>
               
			
			
			</div>
			
			
            <div class="c100" id="submit">
                <input type="submit" value="Send">
            </div>
        </form>
