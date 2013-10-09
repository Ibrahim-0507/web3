<?php
session_start();

mysql_connect("localhost", "root", "");
mysql_select_db("acces");

$username = $_POST['username'];
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$password = $_POST['password'];

$check="SELECT * FROM etudiant WHERE username ='$username'" ;
$rs = mysql_query($check);
$data = mysql_fetch_array($rs);
if($data > 1) {
    echo "User Already in Exists<br/>";
    require 'signup_etudiant.html';
}
else{





if(mysql_query("INSERT INTO `etudiant`(`prenom`, `nom`, `username`, `password`) VALUES ('$prenom','$nom','$username','$password')"))
{echo 'etudiant registrer';
require 'signup_etudiant.html';
}
else
    echo ' ma meche l 7al' ;
}
?>