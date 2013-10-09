<!DOCTYPE html>
<html>
    <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>choix specialite</title>
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
        //if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
            ?>
            <form method="POST" action="uploadchef.php" enctype="multipart/form-data">
                <table align="center" cellpadding="0" width="800" border="0">
  <tr>
    <td><h1 align="center" class="heading"><img src="images/di.png" width="304" height="42" /></h1>
      <h1 align="center" class="heading"><img src="images/cnam.png" width="830" height="51" alt="Welcome to Site" /></h1>
      <p align="center"><h1>
          </h1><div align="left">
                <b><div style="color:#01471A">examen</b><input name="examen" type="file"></div></b>&nbsp;
                <br/>
                <b><div style="color:#01471A">Type :<select name="s1"><option>partiel</option>
                    <option>final</option>
                </select></div></b><br/>
                <b><div style="color:#01471A">Correction :<input name="correction" type="file"></div></b>&nbsp;<br/>
                <b><div style="color:#01471A">Anne :<input name="anne" type="text" maxlength="4"></div></b><br/>
                <?php
                mysql_connect("localhost", "root", "");
                mysql_select_db($_SESSION['specialite']);
                $result = mysql_query("show tables");
                echo '<br/>';
                echo 'les matiere accessible:';
                echo '<br/>';
                echo'<select name="matiere">';
                while ($table = mysql_fetch_array($result)) {
                    echo"<option>";
                    echo($table[0]);
                    echo"</option>";
                }
                ?>
            <?php //} ?>
        </select>
        <br/><br/>
                <input type="submit" value="Upload" style="width: 150px"></div></b><br/>
          </div>
        </tr>
        </table>
    </form>
</body>
</html>