<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cnam</title>
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
    
    <?php
        if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
            ?>
        <?php
        mysql_connect("localhost", "root", "");
        mysql_select_db("acces");
        $query = "SELECT nom FROM chef_departement WHERE username='" . $_SESSION['username'] . "'" . "AND password='" . $_SESSION['password'] . "'";
        $result = mysql_query($query) or die(mysql_error());
        if (mysql_num_rows($result) > 0) {
            $row = mysql_fetch_array($result);
            $name = $row['nom'];
            $_SESSION['nom'] = $name;
        }
        $query2 = "SELECT prenom FROM chef_departement WHERE username='" . $_SESSION['username'] . "'" . "AND password='" . $_SESSION['password'] . "'";
        $result2 = mysql_query($query2) or die(mysql_error());
        if (mysql_num_rows($result2) > 0) {
            $row2 = mysql_fetch_array($result2);
            $prenom = $row2['prenom'];
            $_SESSION['prenom'] = $prenom;
        }
        $query3 = "SELECT specialite FROM chef_departement WHERE username='" . $_SESSION['username'] . "'" . "AND password='" . $_SESSION['password'] . "'";
        $result3 = mysql_query($query3) or die(mysql_error());
        if (mysql_num_rows($result3) > 0) {
            $row3 = mysql_fetch_array($result3);
            $spec = $row3['specialite'];
            $_SESSION['specialite'] = $spec;
        }
        ?><?php }?>

<br />
<br />
<br />
<table align="center" cellpadding="0" width="800" border="0">
  <tr>
    <td><h1 align="center" class="heading"><img src="images/di.png" width="304" height="42" /></h1>
      <h1 align="center" class="heading"><img src="images/cnam.png" width="830" height="51" alt="Welcome to Site" /></h1>
      <p align="center"><h1> Bienvenu Ms.:<?php echo $_SESSION['nom']." ".$_SESSION['prenom']; ?><h1>
       <table>
	    <tr>
<ol>

      <li><a href="chef-choixmatiere.php">Telecharger une matiere</a></li>
      <li><a href="chef-upload.php">Surcharger une matiere</a></li>
	  <li><a href="enlever-matiere-chef.php">Enlever une matiere</a></li>
          <li><a href="ajouter-matiere-chef.php">Ajouter une matiere</a></li>
          <p align="left">&nbsp;</p></td>
  </tr>
</table>
<h1 align="center" class="heading">&nbsp;</h1>
</body>
</html>