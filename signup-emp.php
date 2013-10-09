<?php
session_start();

mysql_connect("localhost", "root", "");
mysql_select_db("acces");

$username = $_POST['username'];
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$password = $_POST['password'];

$check="SELECT * FROM employer WHERE username ='$username'" ;
$rs = mysql_query($check);
$data = mysql_fetch_array($rs);
if($data > 1) {
    echo "Username Already in Exists<br/>";
    require 'signup-emp.html';
}
else{





if(mysql_query("INSERT INTO `employer`(`nom`, `prenom`, `username`, `password`) VALUES ('$nom','$prenom','$username','$password')"))
{echo 'succes' ;
require 'signup-emp.html';
}
else
    echo ' no succes' ;
    require 'signup-emp.html';
}
?>