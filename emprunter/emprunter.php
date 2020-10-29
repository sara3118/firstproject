<?php
	 include "includes/database.php";
 include "includes/define.php";


			
		if(@$_GET['id']!=""){
			$id_livre=$_GET['id'];
				
			

			$sql = "select *  FROM livre WHERE id_livre=$id_livre";
			$sth = $dbco->prepare($sql);

			$sth->execute();
			$result = $sth->fetch(PDO::FETCH_ASSOC);

			$action="emprunter/traitementemprunt.php";
			$titre=$result['titre'];
			$genre=$result['genre'];
			$logo=$result['logolivre'];
		
		$titreForm=" EMPRUNTER ";
			
		}
			
		

?>
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		  	      <link rel="stylesheet" href="css/style.css">
				  		  	      <link rel="stylesheet" href="style.css">


<h1><?php echo $titreForm;?></h1>
        
		<div class="container">
        <form action="<?php echo $action;?>" method="post" enctype="multipart/form-data">
		
		
           <div class="c100">
                <label for="id_livre">Titre : <?php echo $titre; ?></label>
              
					<img src="uploads/<?php echo $logo ?>"/>
				</div>
			
        <input type="hidden" id="id_livre" name="id_livre" value="<?php echo @$id_livre;?>">
			
            
				
			
		
            <div class="c100">
                <label for="client">Nom :</label>
				<input type="text" id="nom" name="nom" >
				</div>
               
            <div class="c100">
                <label for="prenom">Prenom : </label>
                <input type="text" id="prenom" name="prenom" >
            </div>
			
			
			<div class="c100">
                <label for="telephone">Telephone : </label>
                <input type="text" id="telephone" name="telephone" >
            </div>
			
			
			
			
			
			
						
            
		   <button class="btn btn-success" type="submit" >Valide</button>
                </a>
          
        </form>
		</div>