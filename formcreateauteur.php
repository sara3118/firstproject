 <?php
@session_start();

include "security/secure.php";
include "includes/define.php";


?>
		  	      <link rel="stylesheet" href="style.css">

<h1>Form create Auteur HTML</h1>
        
        <form action="<?php echo $route['createauteur'];?>" method="post" enctype="multipart/form-data">
            <div class="c100">
                <label for="nom">Nom : </label>
                <input type="text" id="nom" name="nom">
            </div>
            <div class="c100">
                <label for="prenom">Prenom : </label>
                <input type="prenom" id="prenom" name="prenom">
            </div>
            <div class="c100">
                <label for="nationalite">Nationalite : </label>
                <input type="text" id="nationalite" name="nationalite">
            </div>
			
			
			
            <div class="c100" id="submit">
                <input type="submit" value="Envoyer">
            </div>
        </form>

