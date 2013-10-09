<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insert matiere</title>
<script language="javascript">
function updateKey()
{
    var key=$("#title").val();
  key=key.replace(/ /g,"_");
    $("#url_key").val(key);
}

</script>

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
session_start();
if (isset($_SESSION['username']) && isset($_SESSION['password'])) { ?>
    <form name="form12" method="POST" action="ajoute-matiere2.php">
<br />
<br />
<br />
<table align="center" cellpadding="0" width="800" border="0">
  <tr>
    <td><h1 align="center" class="heading"><img src="images/di.png" width="304" height="42" /></h1>
      <h1 align="center" class="heading"><img src="images/cnam.png" width="830" height="51" alt="Welcome to Site" /></h1>
      <p align="center"><h1>
        
        Bienvenu: <?php echo " " . $_SESSION['username'];
        $qe=$_POST['spec'];
        $_SESSION['spec']=$qe;
        ?>
          </h1>
       <table>
	    <tr>
<ol>

       Ajouter une matiere: <input type="text" name="amatiere">
       
          <br/>
        <input type="submit" value="Ajouter" name="b2">
<p align="left">&nbsp;</p></td>
  </tr>
</table>
<h1 align="center" class="heading">&nbsp;</h1>
<?php } ?>
</form>
</body>
</html>