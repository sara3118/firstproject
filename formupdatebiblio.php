<?php
@session_start();
$id_bibliotheque=$_GET['id'];

include "security/secure.php";          
include "includes/database.php";

$sql = "select *  FROM bibliotheque WHERE id_bibliotheque='$id_bibliotheque'";
$sth = $dbco->prepare($sql);

$sth->execute();
$result = $sth->fetch(PDO::FETCH_ASSOC);

$id_bibliotheque=$result['id_bibliotheque'];
$nom=$result['nom'];
$adresse=$result['adresse'];
$telephone=$result['telephone'];
?>

		  	      <link rel="stylesheet" href="css/style.css">

<h1>Formulaire HTML</h1>

        <form action="<?php echo $route['updatebiblio'];?>" method="post">

		<input type="hidden" id="id_bibliotheque" name="id_bibliotheque" value="<?php echo $id_bibliotheque;?>">

            <div class="c100">
                <label for="nom">nom : </label>
                <input type="text" id="nom" name="nom" value="<?php echo $nom;?>">
            </div>
            <div class="c100">
                <label for="mail">Email : </label>
                <input type="adresse" id="adresse" name="adresse" value="<?php echo $adresse;?>">
            </div>
            <div class="c100">
                <label for="telephone">telephone: </label>
                <input type="telephone" id="telephone" name="telephone" value="<?php echo $telephone;?>">
            </div>


            <div class="c100" id="submit">
                <input type="submit" value="Envoyer">
            </div>
        </form>
