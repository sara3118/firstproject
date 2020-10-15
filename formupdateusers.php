<?php
@session_start();
@$id_users=$_GET['id'];

include "security/secure.php";          
include "includes/database.php";
include "includes/define.php";

if($id_users!=""){
$sql = "select *  FROM users WHERE id_users='$id_users'";
$sth = $dbco->prepare($sql);

$sth->execute();
$result = $sth->fetch(PDO::FETCH_ASSOC);

$id_users=$result['id_users'];
$prenom=$result['prenom'];
$email=$result['email'];
$age=$result['age'];
$sex= $result['sex'];
$action = $route["updateuser"];
}
else {
	$action = $route["createuser"];

}




?>



		  	      <link rel="stylesheet" href="css/style.css">

<h1>UP DATE USERS</h1>
        
<form action="<?php echo $action?>" method="post">
		<input type="hidden" id="id_users" name="id_users" value="<?php echo @$id_users;?>">

            <div class="c100">
                <label for="prenom">Prénom : </label>
                <input type="text" id="prenom" name="prenom"value="<?php echo @$prenom;?>">
            </div>
            <div class="c100">
                <label for="mail">Email : </label>
                <input type="email" id="mail" name="mail"value="<?php echo @$email;?>">
            </div>
            <div class="c100">
                <label for="age">Age : </label>
                <input type="number" id="age" name="age"value="<?php echo @$age;?>">
            </div>
			  <div class="c100">
                <label for="password">Password : </label>
                <input type="text" id="password" name="password"value="">
            </div>
			
			<div class="c100">
                <label for="retypepassword">Retype Password : </label>
                <input type="text" id="retypepassword" name="retypepassword"value="">
            </div>
			
            <div class="c100">
                <input type="radio" id="femme" name="sexe" value="femme" <?php if(@$sex=="femme") echo "checked";?>>
                <label for="femme">Femme</label>
                <input type="radio" id="homme" name="sexe" value="homme" <?php if(@$sex=="homme") echo "checked";?>>
                <label for="homme">Homme</label>
                <input type="radio" id="autre" name="sexe" value="autre" <?php if(@$sex=="autre") echo "checked";?>>
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
