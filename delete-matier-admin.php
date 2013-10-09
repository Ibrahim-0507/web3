<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
mysql_connect("localhost", "root", "");
mysql_select_db($_SESSION['spec']);
$sql = "DROP TABLE `".$_POST['matr']."`";
$qu=mysql_query($sql);

if ($qu)
  {
  echo "Matiere ".$_POST['matr']." est enlever";
  require 'admin-choix-specialite.php';
  }
else
  {
  echo "Error enlever: " . $_POST['matr'];
  require 'admin-choix-specialite.php';
  }
?>