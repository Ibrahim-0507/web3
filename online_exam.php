<html><head><script language="javascript">

var mins
var secs;

function cd() {
    <?php  session_start();
           mysql_connect("localhost","root","");
           mysql_select_db("online");
    $rt="SELECT `temp` FROM `exam` WHERE `code`='" . $_POST['qaz'] . "'" ;
    $r= mysql_query($rt) or die();
           $ro=  mysql_fetch_array($r);
           $_SESSION['coo']=$_POST['qaz'] ;
    ?>

 	mins = 1 * m("<?php echo $ro['temp']; ?>"); // change minutes here
 	secs = 0 + s(":01"); 
 	redo();
}

function m(obj) {
 	for(var i = 0; i < obj.length; i++) {
  		if(obj.substring(i, i + 1) == ":")
  		break;
 	}
 	return(obj.substring(0, i));
}

function s(obj) {
 	for(var i = 0; i < obj.length; i++) {
  		if(obj.substring(i, i + 1) == ":")
  		break;
 	}
 	return(obj.substring(i + 1, obj.length));
}

function dis(mins,secs) {
 	var disp;
 	if(mins <= 9) {
  		disp = " 0";
 	} else {
  		disp = " ";
 	}
 	disp += mins + " .";
 	if(secs <= 9) {
  		disp += "0" + secs;
 	} else {
  		disp += secs;
 	}
 	return(disp);
}

function redo() {
 	secs--;
 	if(secs == -1) {
  		secs = 59;
  		mins--;
 	}
 	document.cd.disp.value = dis(mins,secs); 
 	if((mins == 0) && (secs == 0)) {
  		window.alert(" Hey Time is up. Press OK to continue."); 
  		 window.location = "note.php" 
 	} else {
 		cd = setTimeout("redo()",1000);
 	}
}

function init() {
  cd();
}
window.onload = init;
</script>
    <style type="text/css">
            <!--
            .heading {
                color: #000000;
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
    <form method="POST" action="note.php" name="cd">
<h1 align="center" class="heading"><img src="images/di.png" width="304" height="42" /></h1>
            <h1 align="center" class="heading"><img src="images/cnam.png" width="830" height="51" alt="Welcome to Site" /><br>
                <table align="center">
                    <tr align="center">
<center><h2><u> Bon Chance</u></h2></center>

  <span class="labe">Remaining Time</span>:
  <input name="disp" type="text" class="clock" id="txt" value="10:00" size="10" readonly="true" align="right" border="1" />
  <span class="labe">Minutes</span><br><br><br>
<?php 
$i=$_POST['qaz'] ;
$_SESSION['qaz']=$i;
$sql="SELECT * FROM `question` WHERE id ='" .$i. "'" ." ORDER BY correct;";
$res=  mysql_query($sql);
$count=1;
while($row=mysql_fetch_array($res)){
echo ($row["question"]) ;
echo '<br><br>' ;
echo "<input type='radio' name='rep".$count."' value=".($row['reponse1'])." >".($row['reponse1']) ; echo '<br>' ;
echo "<input type='radio' name='rep".$count."' value=".($row['reponse2'])." >".($row['reponse2']) ; echo '<br>' ;
echo "<input type='radio' name='rep".$count."' value=".($row['reponse3'])." >".($row['reponse3']) ;echo '<br>' ;
echo "<input type='radio' name='rep".$count."' value=".($row['reponse4'])." >".($row['reponse4']) ;echo '<br><br><br>' ;
$count=$count+1;
}
?>
</tr>
    <input type="submit" value="finish">
</table>
    </form>
    </body>
</html>