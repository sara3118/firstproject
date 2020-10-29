<?php
	 include "includes/database.php";
 include "includes/define.php";
include "security/secure.php";
include "includes/functions.php";


			
		if(@$_GET['id']!=""){
			$id_users=$_GET['id'];
				
			

			$sql = "select *  FROM Users WHERE id_users=$id_users";
			$sth = $dbco->prepare($sql);

			$sth->execute();
			$result = $sth->fetch(PDO::FETCH_ASSOC);

			$id_users=$result['id_users'];
			$prenom=$result['prenom'];
			$email=$result['email'];
			$age=$result['age'];
		
				 $action=$route["updateusers"];
				 $titreForm=" MODIFIER users ";
		}
		else {
			$action= $route["createusers"];
			$titreForm=" AJOUT DU USERS ";
			
		}
			
			
			$sql = "select id_users, nom FROM users";
			$sth = $dbco->prepare($sql);
			$sth->execute();
			$result = $sth->fetchAll(PDO::FETCH_ASSOC); /* on récupère toute la liste dans la base de donnée*/
			 foreach ($result as $users => $val){
				 @$optionb .="<option value='".$val['id_users']."'>".$val['prenom']."</option>";
				 /* equivalent à $option= "<option value='1'>Ma biblio</option><option value='2'>biblio de quartier</option><option value='3'>Alain Quillot</option><option value='6'>mediatheque</option><option value='7'>Hogwarts library</option>" */
			 }


			
			 
		

?>
		  	      <link rel="stylesheet" href="style.css">

<h1>Formulaire HTML</h1>
                <form action="<?php echo $action;?>" method="post" enctype="multipart/form-data">
        <form action="traitmentusers.php" method="post">
            <div class="c100">
                <label for="prenom">Prénom : </label>
                <input type="text" id="prenom" name="prenom">
            </div>
            <div class="c100">
                <label for="mail">Email : </label>
                <input type="email" id="mail" name="mail">
            </div>
            <div class="c100">
                <label for="age">Age : </label>
                <input type="number" id="age" name="age">
            </div>
			  <div class="c100">
                <label for="password">Password : </label>
                <input type="text" id="password" name="password">
            </div>
			
			<div class="c100">
                <label for="retypepassword">Retype Password : </label>
                <input type="text" id="retypepassword" name="retypepassword">
            </div>
			
            <div class="c100">
                <input type="radio" id="femme" name="sexe" value="femme">
                <label for="femme">Femme</label>
                <input type="radio" id="homme" name="sexe" value="homme">
                <label for="homme">Homme</label>
                <input type="radio" id="autre" name="sexe" value="autre">
                <label for="autre">Autre</label>
            </div>
            <div class="c100">
                <label for="pays">Pays de résidence :</label>
                <select id="pays" name="pays">
                    <optgroup label="Europe">
                        <option value="france">France</option>
                        <option value="belgique">Belgique</option>
                        <option value="suisse">Suisse</option>
                    </optgroup>
                    <optgroup label="Afrique">
                        <option value="algerie">Algérie</option>
                        <option value="tunisie">Tunisie</option>
                        <option value="maroc">Maroc</option>
                        <option value="madagascar">Madagascar</option>
                        <option value="benin">Bénin</option>
                        <option value="togo">Togo</option>
                    </optgroup>
                    <optgroup label="Amerique">
                        <option value="canada">Canada</option>
                    </optgroup>
                </select>
            </div>
            <div class="c100" id="submit">
                <input type="submit" value="Envoyer">
            </div>
        </form>

