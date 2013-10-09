<?php
session_start();

mysql_connect("localhost", "root", "");
mysql_select_db("acces");

$username = $_POST['username'];
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$password = $_POST['password'];
$specialite=$_POST['specialite'];

$check="SELECT * FROM chef_departement WHERE username ='$username'" ;
$rs = mysql_query($check);
$data = mysql_fetch_array($rs);
if($data > 1) {
    echo "Username Already in Exists<br/>";
    require 'signup-chef.html';
}
else{





if(mysql_query("INSERT INTO `chef_departement`(`nom`, `prenom`, `username`, `password`, `specialite`) VALUES ('$nom','$prenom','$username','$password','$specialite')"))
{echo 'succes' ;
require 'signup-chef.html';
}
else
    echo ' Un Chef n\'est pas registrer' ;
    require 'signup-chef.html';
}
?>