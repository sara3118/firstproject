 <?php
@session_start();

include "security/secure.php";
include "includes/define.php";


?>
 <!DOCTYPE html>
		  	      <link rel="stylesheet" href="style.css">

<h1>Form create biblio HTML</h1>
        
        <form action="<?php echo $route['createbiblio'];?>" method="post">
            <div class="c100">
                <label for="nom">Nom : </label>
                <input type="text" id="nom" name="nom">
            </div>
            <div class="c100">
                <label for="adresse">Adresse : </label>
                <input type="adresse" id="adresse" name="adresse">
            </div>
            <div class="c100">
                <label for="telephone">Telephone : </label>
                <input type="text" id="telephone" name="telephone">
           
            <div class="c100" id="submit">
                <input type="submit" value="Envoyer">
            </div>
        </form>

