    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Formulaire HTML super simple à sérialiser -->
<link rel="stylesheet" href="../cssformulaire.css">

<div class="container" style="background-color:#CEE3F6; border-radius:50px;">
        <div class="row">
			<div class="col-md-5 mx-auto">
			<div id="first">
				<div class="myform form ">
					 <div class="logo mb-3">
						 <div class="col-md-12 text-center">
							<h1>Formulaire</h1>
						 </div>
					</div>
<form id="formulaire" method="POST" action="traitement.php">

                         <div class="form-group">
                              <label for="exampleInputNom1">Nom</label>
                              <input type="text" name="nom"  class="form-control" id="nom" aria-describedby="nomHelp" placeholder="Enter name">
                           </div>
                         <div class="form-group">
                              <label for="exampleInputPrenom">Prenom</label>
                              <input type="text" name="prenom"  class="form-control" id="prenom" aria-describedby="emailPrenom" placeholder="Enter prenom">
                           </div>
						   <div class="c100">
                <label for="age">Age : </label>
                <input type="number" id="age" name="age" aria-describedby="age" placeholder="Enter age"value="<?php echo @$age;?>">
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
					    <option value="egypte">Egypte</option>
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
						   <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="text" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email"><span id='error_email' style="color:red"> </span>
                           </div>
						   <div class="form-group">
                              <label for="exampleInputpassword">Password</label>
                              <input type="text" name="password" id="password"  class="form-control" aria-describedby="passwordHelp" placeholder="Enter Password"><span id='error_password' style="color:red"> </span>
                           </div>
						   <div class="form-group">
                              <label for="exampleInputretypepassword">Retypeassword</label>
                              <input type="text" id="retypepassword" name="retypepassword" class="form-control" aria-describedby="retypepasswordHelp" placeholder="retype Password">
                           </div>
                    <div class="col-md-12 text-center ">
                              <button type="submit" class="mybtn btn-success tx-tfm">Submit</button>
                           </div>
</form>
</div></div></div>


<script>
 
function validateEmail($email) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  return emailReg.test( $email );
}

$(document).ready(function(){

 $("#email").on("blur",function(){
	 
	 var $email= $("#email").val();
	 
		if(validateEmail($email)){
			
		$.ajax({

     url : 'traitement.php',
       type : 'GET',
	   data:'email='+$("#email").val(),
	   
       dataType : 'text',
       success : function(resultat, statut){
			//alert(resultat);
			if(resultat=="OK"){
				//Mettre la bordure en vert
				$("#email").css('color','green');
				$('#error_email').html("");
			}
			else if(resultat=="KO"){
				//Mettre la bordure en rouge
					$("#email").css('color','red');
					$('#error_email').html("Email already exist");
			}
       },

       error : function(resultat, statut, erreur){
			alert(resultat);
       },

       complete : function(resultat, statut){

       }


    });
		}
		else {
			$('#email').focus();
			$('#error_email').html("Email non Valide");
		}
	 
 });
 $("#password").on("input",function(){
	 
	 var $password= $("#password").val();
	 
	
        		
		$.ajax({

     url : 'validatepassword.php',
       type : 'GET',
	   data:'password='+$("#password").val(),
	   
       dataType : 'text',
       success : function(resultat, statut){
			//alert(resultat);
			if(resultat.trim()=="valid"){
				//Mettre la bordure en vert
				$("#password").css('color','green');
				$('#error_password').html("");
			}
			else if(resultat!="valid"){
				//Mettre la bordure en rouge
					$("#password").css('color','red');
					$('#error_password').html("Password not valid");
			}
       },

       error : function(resultat, statut, erreur){
			alert(resultat);
       },

       complete : function(resultat, statut){

       }
	   
	   
	   });
	   
	});
	   
	   


});

$("#retypepassword").on("input",function(){
				var $password= $("#password").val();
				var $retypepassword= $("#retypepassword").val();

									
				if($password==$retypepassword)
				{
					$("#retypepassword").css({color :'green', borderColor :'green'});
					$('#error_retypepassword').html("");
				}
				 
				 else
				 {
						$("#retypepassword").css({color :'red', borderColor :'red'});
						$('#error_retypepassword').html("password non indentiques");
				}
								
								
		});
		


</script>