<?php

$servname = "localhost"; 
$dbname = "bd_sara_biblio2"; 
$dbuser = "root"; $dbpass = "";

try{	
	$dbco = new PDO("mysql:host=$servname;dbname=$dbname", $dbuser, $dbpass);
	$dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){

echo "Erreur : " . $e->getMessage();

}