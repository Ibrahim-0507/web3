<?php 
session_start();
mysql_connect("localhost", "root", "");
mysql_select_db($_SESSION['specialite']);
$sql = "DROP TABLE ".$_POST['matr'];
$qu=mysql_query($sql);

if ($qu)
  {
  echo "Matiere ".$_POST['matr']." est enlever";
  require 'enlever-matiere-chef.php';
  }
else
  {
  echo "Error enlever: " . $_POST['matr'];
  require 'enlever-matiere-chef.php';
  }
?>