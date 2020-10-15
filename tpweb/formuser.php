
		  	      <link rel="stylesheet" href="style.css">

<h1>Formulaire HTML</h1>
        
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

<?php
            
			
   if(@$_POST['prenom']!="" && @$_POST['age']!="" && @$_POST['mail']!="" ){

		  
		//--------database parameters
	        $servername = 'localhost';
            $dbusername = 'root';
            $dbpassword = '';
			
	    //-----------user input
			$prenom=$_POST['prenom'];
			$email=$_POST['mail'];
			$age=$_POST['age'];
			$password=$_POST['password'];
			$sex=$_POST['sexe'];
			$pays=$_POST['pays'];
			
           try{
       $conn = new PDO("mysql:host=$servername;dbname=bd_sara_biblio2", $dbusername, $dbpassword);
	   
	   
	                   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              //** echo 'Connexion réussie';
          
			
			
			            $sql = "INSERT INTO users(prenom,email,age,password,sex,pays,role) VALUE (:prenom,:mail,:age,:password,:sex,:pays,:role)";
					
				$anyname = $conn->prepare( $sql);
				
				$params=array(
				
                                 
                                    ':prenom' => $prenom,
                                    ':mail' => $email,
                                    ':password' => $password,
                                    ':sex' => $sex,
                                    ':pays' => $pays,
                                    ':role' => "admin",//**because it's not var we don't add $----
									':age' => $age);
				$anyname->execute($params);
						 
						
						              //  $conn->exec($sql);
                echo 'Entrée ajoutée dans la table';
            }
            
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
            }
			
   }
?>