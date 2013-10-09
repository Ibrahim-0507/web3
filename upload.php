<?php
session_start();
mysql_connect("localhost", "root", "");
mysql_select_db($_SESSION['specialite']);

$type=$_POST['s1'];
$anne=$_POST['anne'];
$matiere=$_POST['matiere'];

//upload examen
$target="D:/wamp/www/web3/sessions/".$_SESSION['specialite']."/";
$tar=$target;
$target.=$_FILES['examen']['name'];
$path_parts = pathinfo($target);
$ext = strtolower($path_parts["extension"]);
switch ($ext) {
case "pdf":
    move_uploaded_file($_FILES['examen']['tmp_name'],$target);
    $r=$tar."examen".$type.$anne.".pdf";
    rename($target, $r);
    break;
case "doc":
    move_uploaded_file($_FILES['examen']['tmp_name'],$target);
    $r=$tar."examen".$type.$anne.".doc";
    rename($target, $r);
    break;
case "docx":
    move_uploaded_file($_FILES['examen']['tmp_name'],$target);
    $r=$tar."examen".$type.$anne.".docx";
    rename($target, $r);
    break;
}
//upload correction
//....................
$target2="D:/wamp/www/web3/sessions/".$_SESSION['specialite']."/";
$tar2=$target2;
$target2.=$_FILES['correction']['name'];
$path_parts2 = pathinfo($target2);
$ext2 = strtolower($path_parts2["extension"]);
switch ($ext2) {
case "pdf":
    move_uploaded_file($_FILES['correction']['tmp_name'],$target2);
    $s=$tar2."correction".$type.$anne.".pdf";
    rename($target2, $s);
    break;
case "doc":
    move_uploaded_file($_FILES['correction']['tmp_name'],$target2);
    $s=$tar2."correction".$type.$anne.".doc";
    rename($target2, $s);
    break;
case "docx":
    move_uploaded_file($_FILES['correction']['tmp_name'],$target2);
    $s=$tar2."correction".$type.$anne.".docx";
    rename($target2, $s);
    break;
}


//................
mysql_query("INSERT INTO ".$matiere." (anne,type,examen,correction) VALUES ('$anne','$type','$r','$s')") or die( mysql_error());
echo "Upload done";
require 'profileprof.php';
?>