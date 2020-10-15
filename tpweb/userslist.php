 <!DOCTYPE html>

<html>

    <head>

        <title>Cours PHP / MySQL</title>

        <meta charset='utf-8'>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="style.css">
	</head>

    <body>

        <h1>Bases de données MySQL</h1> 

<div class="container">
    <div class="row col-md-6 col-md-offset-2 custyle">
    <table class="table table-striped custab">


	  <?php
            $servname = "localhost"; $dbname = "bd_sara_biblio2"; $user = "root"; $password = "";
            
            try{
                $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $password);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                               /*Sélectionne les valeurs dans les colonnes prenom et mail de la table

                 *users pour chaque entrée de la table*/

                $anyname = $dbco->prepare("SELECT prenom,age,sex,id_users,email,password FROM users");

                $anyname->execute();

                

                /*Retourne un tableau associatif pour chaque entrée de notre table

                 *avec le nom des colonnes sélectionnées en clefs*/

                $users = $anyname->fetchAll(PDO::FETCH_ASSOC);

                

				foreach ($users as $row => $user) {

					

					echo "<tr>";

						echo "<td>". $user['prenom']."</td>";

						echo "<td>". $user['email']."</td>";
						echo "<td>". $user['age']."</td>";
						echo "<td>". $user['id_users']."</td>";
                        echo "<td>". $user['password']."</td>";
					    echo "<td>". $user['sex']."</td>";


						

						echo "<td> <a class='btn btn-info btn-xs' href='#'><span class='glyphicon glyphicon-edit'></span> Edit</a>";

						echo "<td> <a class='btn btn-danger btn-xs' href='#'><span class='glyphicon glyphicon-remove'></span> Delete</a>";


					echo "</tr>";

				

				}

				

			echo "</table>";

                /*print_r permet un affichage lisible des résultats,

                 *<pre> rend le tout un peu plus lisible*/

          

            }

                  

            catch(PDOException $e){

                echo "Erreur : " . $e->getMessage();

            }

        ?>
   </table>
    </div>
    </body>

</html>