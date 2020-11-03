<?php
include "database.php";
@$email=$_GET["email"];

//Instruction verifier si $email existe dans la table users
$sql="SELECT email 
        FROM users WHERE email='$email'";
     $sth=$dbco->prepare($sql);
     $sth->execute();
     $resultat=$sth->fetch(PDO::FETCH_ASSOC);


    if($sth->rowCount()>0){
	    echo"KO";
      }
     else 
     {

    echo "OK";
     }
?>