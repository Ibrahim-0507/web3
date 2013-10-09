<?php
session_start();
$st=$_SESSION['spec'];
mysql_connect("localhost", "root", "");
mysql_select_db($st);
$sql="CREATE TABLE `".$_POST['amatiere']."`(anne CHAR(4),type CHAR(25),examen CHAR(150),correction CHAR(150))";
$res=mysql_query($sql);

if ($res)
  {
  echo "Table ".$_POST['amatiere']." created successfully";
  require 'admin-choix-specialite2.php';
  }
else
  {
  echo "Matiere existe. ";
  require 'admin-choix-specialite2.php';
  }
  ?>