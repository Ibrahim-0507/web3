<?php
$spct=$_POST['spt'];
        mysql_connect("localhost", "root", "");
        mysql_select_db($spct);
        $query = "SELECT nom FROM ".$spct." WHERE nom="."'genie informatique'";
        $result = mysql_query($query) or die(mysql_error());
        if (mysql_num_rows($result) > 0) {
            $row = mysql_fetch_array($result);
            $name = $row['nom'];
            $_SESSION['nom'] = $name;
            echo $name;
        }
        ?>