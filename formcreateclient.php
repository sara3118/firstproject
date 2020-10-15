 <?php
@session_start();

include "security/secure.php";
include "includes/define.php";


?>
		  	      <link rel="stylesheet" href="style.css">

<h1>Form create CLIENT HTML</h1>
        
        <form action="<?php echo $route['createclient'];?>" method="post" enctype="multipart/form-data">
            <div class="c100">
                <label for="nom">Nom : </label>
                <input type="text" id="nom" name="nom">
            </div>
            <div class="c100">
                <label for="prenom">Prenom : </label>
                <input type="prenom" id="prenom" name="prenom">
            </div>
            <div class="c100">
                <label for="telephone">Telephone : </label>
                <input type="text" id="telephone" name="telephone">
            </div>
			
			
			
            <div class="c100" id="submit">
                <input type="submit" value="Envoyer">
            </div>
        </form>

