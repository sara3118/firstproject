<?php
@session_start();
$id_client=$_GET['id'];
include "security/secure.php";          
include "includes/database.php";


$sql = "select *  FROM Client WHERE id_client=$id_client";
			$sth = $dbco->prepare($sql);

			$sth->execute();
			$result = $sth->fetch(PDO::FETCH_ASSOC);

			$id_client=$result['id_client'];
			$nom=$result['nom'];
			$prenom=$result['prenom'];
			$telephone=$result['telephone'];

$sql = "select id-client, nom FROM client";
			$sth = $dbco->prepare($sql);
			//$sth->execute();
			$result = $sth->fetchAll(PDO::FETCH_ASSOC);
	
			 foreach ($result as $bi => $val){
				 @$optionbiblio .="<option value='".$val['id_client']."'>".$val['nom']."</option>";
			 }
			 
			 
			 
			 $sql = "select id_client, nom FROM client";
			$sth = $dbco->prepare($sql);

			$sth->execute();
			$result = $sth->fetchAll(PDO::FETCH_ASSOC);
	
			 foreach ($result as $bi => $val){
				 @$optionauteur .="<option value='".$val['id_client']."'>".$val['prenom']."</option>";
			 }
			


?>

		  	      <link rel="stylesheet" href="style.css">

<h1>UP DATE Auteur HTML</h1>

        <form action="<?php echo $route['createclient'];?>" method="post">

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
                <label for="telephone">telephone : </label>
                <input type="text" id="telephone" name="telephone" value="<?php echo $telephone;?>">
            </div>
			
			
			
			</div>
			
			
            <div class="c100" id="submit">
                <input type="submit" value="Send">
            </div>
        </form>
