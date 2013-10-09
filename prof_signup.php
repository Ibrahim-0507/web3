<?php

mysql_connect("localhost", "root", "");
mysql_select_db("acces");
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$username = $_POST['username'];
$password = $_POST['password'];

$check="SELECT * FROM chef_departement WHERE username ='$username'" ;
$rs = mysql_query($check);
$data = mysql_fetch_array($rs);
if($data > 1) {
    echo "User Already in Exists<br/>";
    require 'prof_signup.html';
}
else{


if(mysql_query("INSERT INTO `professeur`(`prenom`, `nom`, `username`, `password`) VALUES ('$prenom','$nom','$username','$password')"))
{echo 'succes' ;
require 'prof_signup.html';
}
else
    echo ' no succes' ;
require 'prof_signup.html';
}
?>