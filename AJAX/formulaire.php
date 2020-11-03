    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Formulaire HTML super simple à sérialiser -->
<link rel="stylesheet" href="../cssformulaire.css">


<form id="formulaire" method="POST" action="traitement.php">
    Nom<input type="text" name="nom" /><br/>
    Prenom<input type="text" name="prenom" /> <br/>
    Email<input type="text" name="email" id="email" /> <span id='error_email' style="color:red"> </span><br/>
    Password<input type="text" name="password" id="password" /><span id='error_password' style="color:red"> </span><br/>
	Retypeassword<input type="text" name="repassword" id="repassword" />

   <input type="submit" name="submit" />
</form>



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




</script>