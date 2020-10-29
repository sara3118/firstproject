<?php
include "../includes/database.php";
 include "../includes/functions.php";
 $titre = securisation(@$_GET['titre']);
 $sql = "SELECT * FROM livre WHERE $titre LIKE '%".$titre."%'";

    $sth = $dbco->prepare($sql);
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    $livreList=array();
    foreach ($result as $row => $livre) {
        $livreList[]=$livre;
    }
    echo json_encode($livreList);

?>