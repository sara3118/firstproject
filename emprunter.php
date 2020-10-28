<?php
	 include "includes/database.php";
 include "includes/define.php";


			
		//if(@$_GET['id']!=""){
			//$id_livre=$_GET['id'];
				
			

			//$sql = "select *  FROM livre WHERE id_livre=$id_livre";
			//$sth = $dbco->prepare($sql);

			//$sth->execute();
			//$result = $sth->fetch(PDO::FETCH_ASSOC);

			//$id_bibliotheque=$result['id_bibliotheque'];
			//$titre=$result['titre'];
			//$genre=$result['genre'];
			//$logo=$result['logolivre'];
		
				// $action=$route["updatelivre"];
				 //$titreForm=" MODIFIER LIVRE ";
		//}
		//else {
			//$action= $route["createlivre"];
		$titreForm=" EMPRUNTER ";
			
		//}
			/*REQUETE LISTE DE TOUTES LES BIBLIOTHEQUES */ 
			/************************************/
			
			$sql = "select id_bibliotheque, nom FROM bibliotheque";
			$sth = $dbco->prepare($sql);
			$sth->execute();
			$result = $sth->fetchAll(PDO::FETCH_ASSOC); /* on récupère toute la liste dans la base de donnée*/
			 foreach ($result as $biblio => $val){
				 @$optionb .="<option value='".$val['id_bibliotheque']."'>".$val['nom']."</option>";
				 /* equivalent à $option= "<option value='1'>Ma biblio</option><option value='2'>biblio de quartier</option><option value='3'>Alain Quillot</option><option value='6'>mediatheque</option><option value='7'>Hogwarts library</option>" */
			 }


			/*REQUETE LISTE DE TOUS LES livre */ 
			/************************************/
			
			$sql = "select id_livre, titre FROM livre ";
			$sth = $dbco->prepare($sql);
			$sth->execute();
			$result = $sth->fetchAll(PDO::FETCH_ASSOC);
			foreach ($result as $livre => $val){
				 @$optionl .="<option value='".$val['id_livre']."'>".$val['titre']."</option>";
				
			 }
			 
			 
			 /*REQUETE LISTE DE TOUS LES EDITEURS */ 
			 /*************************************/
			 
			$sql = "select id_client, nom as client_nom,prenom,telephone FROM client";
			$sth = $dbco->prepare($sql);
			$sth->execute();
			$result = $sth->fetchAll(PDO::FETCH_ASSOC);
			foreach ($result as $client => $val){
				 @$optione .="<option value='".$val['id_client']."'>".$val['client_nom']."".$val['prenom']."".$val['telephone']."</option>";
				
			 }
			 
		

?>
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		  	      <link rel="stylesheet" href="css/style.css">
				  		  	      <link rel="stylesheet" href="style.css">


<h1><?php echo $titreForm;?></h1>
        
		<div class="container">
        <form action="<?php echo $action;?>" method="post" enctype="multipart/form-data">
		
		
               <div class="c100">
                <label for="id_livre">Titre :</label>
                <select id="livre" name="id_livre">  <!-- liste déroulante des livres disponibles-->
                    <option value="">--Sélectionnez livre</option>
                       <?php echo @$optionl; 
					   /* ==  <option value='id_biblio1'>Ma biblio</option><option value='2'>biblio de quartier</option><option value='3'>Alain Quillot</option><option value='6'>mediatheque</option><option value='7'>Hogwarts library</option>*/
                        ?>
				</select>
			</div>
			
<input type="hidden" id="id_client" name="id_client" value="<?php echo @$id_client;?>">
			
            <div class="c100">
                <label for="client">Nom :</label>
				<input type="text" id="nom" name="nom" value ="<?php echo @$id_client;?>">
				</div>
               
            <div class="c100">
                <label for="prenom">Prenom : </label>
                <input type="text" id="prenom" name="prenom" value="<?php echo @$logo;?>">
            </div>
			
			
			<div class="c100">
                <label for="telephone">Telephone : </label>
                <input type="text" id="telephone" name="telephone" value="<?php echo @telephone;?>">
            </div>
			
			
			<div class="c100">
			<label for="date_emprunter">Date de emprunter</label>
			<input type="date" id="date_emprunter" name="date_emprunter">  
			</div>
			
			
			
						
            <a href="?id='.$emprunterlist['id_emprunter'].'&page=emprunterlist">
		   <button class="btn btn-success" type="button" >Valide</button>
                </a>
           </div>
        </form>
		</div>