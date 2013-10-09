<?php
session_start();
mysql_connect("localhost", "root", "");
$_SESSION['matiere']=$_POST['mtr'];
require 'listingfiles.php';
?>
