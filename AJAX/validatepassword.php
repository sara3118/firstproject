<?php

$password=$_GET["password"];

if(strlen($password)<8){
    echo "notvalid";
}
else{
    echo "valid";  
}
?>