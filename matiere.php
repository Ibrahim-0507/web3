<?php
session_start();
mysql_connect("localhost", "root", "");
mysql_select_db($_SESSION['specialite']);
$result = mysql_query("show tables");
while ($table = mysql_fetch_array($result)) {
    echo($table[0] . "<BR>");
}
?>
