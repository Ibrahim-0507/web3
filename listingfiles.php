<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Liste-examen</title>
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

.html { 
  background: url(images/isae.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
-->
</style>
</head>
<body class="html">
<table align="center" cellpadding="0" width="800" border="0">
  <tr>
    <td><p align="center"><img src="images/cnam.png" width="830" height="51" alt="About" /></p>
        <table width="759" border="0" align="center" cellpadding="0">



    <?php
    // Connect to the database
    $dbLink = new mysqli('localhost', 'root', '', $_SESSION['specialite']);
    if(mysqli_connect_errno()) {
        die("MySQL connection failed: ". mysqli_connect_error());
    }
     
    // Query for a list of all existing files
    $sql = 'SELECT `anne`, `type`, `examen`, `correction` FROM '."`".$_SESSION['matiere']."`";
    $result = $dbLink->query($sql);
     
    // Check if it was successfull
    if($result) {
        // Make sure there are some files in there
        if($result->num_rows == 0) {
            echo '<p>There are no files in the database</p>';
        }
        else {
            // Print the top of a table
            echo '<table width="90%" align="center" border="2" style="background:#FFFFFF">
                    <tr>
                        <td><b>Anne</b></td>
                        <td><b>Type</b></td>
                        <td><b>Examen</b></td>
                        <td><b>Correction</b></td>
                    </tr>';
     
            // Print each file
            while($row = $result->fetch_assoc()) {
                echo "
                    <tr>
                        <td>{$row['anne']}</td>
                        <td>{$row['type']}</td>
                        <td><a href='download.php?download_file={$row['examen']}'>Download</a></td>
                        <td><a href='download.php?download_file={$row['correction']}'>Download</a></td>
                    </tr>";
            }
     
            // Close table
            echo '</table>';
        }
     
        // Free the result
        $result->free();
    }
    else
    {
        echo 'Error! SQL query failed:';
        echo "<pre>{$dbLink->error}</pre>";
    }
     
    // Close the mysql connection
    $dbLink->close();
    ?>
<h1 align="center" class="heading">&nbsp;</h1>
</body>
</html>
