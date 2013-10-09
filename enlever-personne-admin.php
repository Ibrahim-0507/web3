<?php
session_start();
mysql_connect('localhost', 'root', "");
mysql_select_db("acces");
$personne=$_POST['per'];
$p=$_SESSION['personne'];
$results = mysql_query("DELETE FROM `".$p."` WHERE username='".$personne."'");
        if($results){
    echo 'Personne a ete enlever';
    require 'choix-personne.php';
}
 else {
    echo 'Personne n\'a pas ete enlever';
    require 'choix-personne.php';
}
        
?>