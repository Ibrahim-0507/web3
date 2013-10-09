<?php
mysql_connect("localhost", "root", "");
$x=$_POST['sp2'];
$query="DROP DATABASE `".$x."`";
$results=  mysql_query($query);
if($results){
mysql_select_db("specialite");
$query2="DELETE FROM `specialite`.`specialite` WHERE `specialite`.`nom` = '$x'";
$results2=  mysql_query($query2);
if($results2){
        echo 'Specialite '.$x.' a ete delete';
        require 'ajoute-specialite-admin.php';
}
 else {
        echo 'erreur delete de la specialite';
        require 'ajoute-specialite-admin.php';
 }
}
?>


