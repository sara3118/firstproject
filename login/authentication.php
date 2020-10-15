<?php
session_start();

 include "../includes/database.php";
 
 
		$email=$_POST['email'];
		$password=$_POST['password'];
		 $email = htmlspecialchars(stripslashes(strip_tags($email)));
        $password = htmlspecialchars(stripslashes(strip_tags($password)));
	
		if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$sql = "select *  FROM users WHERE email='$email'";
		
			$sth = $dbco->prepare($sql);
			
			$sth->execute();
			if($sth->rowCount())
			{
				$result = $sth->fetch(PDO::FETCH_ASSOC);
				$prenom=$result['prenom'];
				$actualpassword=$result['password'];
				$role=$result['role'];
				//echo "user exist<br>".$password.'----'.$actualpassword;
				
				if( $password==$actualpassword){
					
					$_SESSION["user_firstname"]=$prenom;
					$_SESSION["user_email"]=$email;
					$_SESSION["user_role"]=$role;
					header("location:../admin/starter.php");
					exit();
				} 
				else {
				    
					$_SESSION["error_message"]="Password doesn't match";           

				}
			}
			else
			{
			
				$_SESSION["error_message"]="User not found";      				
			}
			 
			
	    }
		else {
        
        $_SESSION["error_message"]="Enter your email";       
        //echo "user not found";
    }
		
		
 header("location:login.php");
		
		
		
?>