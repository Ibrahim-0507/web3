<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to Student Information Center:: Institute of Computing</title>
        <style type="text/css">
            <!--
            .heading {
                color: #F90;
                font-family: "Comic Sans MS", cursive;
            }
            .options {
                font-family: "Comic Sans MS", cursive;
                font-size: 16px;
                font-style: oblique;
                color: #F93;
            }
            -->
            .html { 
                background: url(images/isae.jpg) no-repeat center center fixed; 
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
        </style>
</head>

<body class="html">
    <form>
<br />
<br />
<br />
<table align="center" cellpadding="0" width="800" border="0">
  <tr><td><input type="button" onClick="window.print()" value="Printed Results"/></td></tr>
  <tr>
        <td><head><center><h3><p align="center"></P><h3>CNAM</h3><p align="center"></P></center></head>

<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("online");
if(isset($_SESSION['qaz'])){$qid=$_SESSION['qaz'];}
$title = "Quiz Results";
$tab=array();
echo "<title>$title</title>";
if (isset ($_POST['rep1'])) {
$tab[1]=$_POST['rep1'] ;}
if (isset ($_POST['rep2'])) {
$tab[2]=$_POST['rep2'] ;}
if (isset ($_POST['rep3'])) {
$tab[3]=$_POST['rep3'] ;}
if (isset ($_POST['rep4'])) {
$tab[4]=$_POST['rep4'] ;}
if (isset ($_POST['rep5'])) {
$tab[5]=$_POST['rep5'] ;}
if (isset ($_POST['rep6'])) {
$tab[6]=$_POST['rep6'] ;}
if (isset ($_POST['rep7'])) {
$tab[7]=$_POST['rep7'] ;}
if (isset ($_POST['rep8'])) {
$tab[8]=$_POST['rep8'] ;}
if (isset ($_POST['rep9'])) {
$tab[9]=$_POST['rep9'] ;}
if (isset ($_POST['rep10'])) {
$tab[10]=$_POST['rep10'] ;}
if (isset ($_POST['rep11'])) {
$tab[11]=$_POST['rep11'] ;}
if (isset ($_POST['rep12'])) {
$tab[12]=$_POST['rep12'] ;}
if (isset ($_POST['rep13'])) {
$tab[13]=$_POST['rep13'] ;}
if (isset ($_POST['rep14'])) {
$tab[14]=$_POST['rep14'] ;}
if (isset ($_POST['rep15'])) {
$tab[15]=$_POST['rep15'] ;}
if (isset ($_POST['rep16'])) {
$tab[16]=$_POST['rep16'] ;}
if (isset ($_POST['rep17'])) {
$tab[17]=$_POST['rep17'] ;}
if (isset ($_POST['rep18'])) {
$tab[18]=$_POST['rep18'] ;}
if (isset ($_POST['rep19'])) {
$tab[19]=$_POST['rep19'] ;}
if (isset ($_POST['rep20'])) {
$tab[20]=$_POST['rep20'] ;}
$score = 0;
$cr1="SELECT correct from question where id ='" . $qid. "' ORDER BY correct";
$res=  mysql_query($cr1);
$ct=1;
while ($rows = mysql_fetch_array($res)) {
    if(isset($tab[$ct])){
        $p=$tab[$ct];
    if($p==$rows['correct']){$score++;}
    $ct++;
}
}
echo'<h1 align=center> votre note est :<p >'.$score.'</p><h1>';
$uu= $_SESSION['coo'] ;
$ii=$_SESSION['username'];
$trt="INSERT INTO `note`(`note`, `code`, `nomet`) VALUES ('$score','$uu','$ii')" ;
mysql_query($trt) ;
?>


</form>
</html>