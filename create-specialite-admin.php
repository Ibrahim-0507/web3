<?php
mysql_connect("localhost", "root", "");
$x=$_POST['amatiere'];
$query="CREATE DATABASE `".$x."`";
$results=  mysql_query($query);
if($results){
        echo 'Specialite '.$x.' a ete cree';
        require 'ajoute-specialite-admin.php';
}
 else {
        echo 'erreur pas de creation de la specialite';
        require 'ajoute-specialite-admin.php';
 }
?>
