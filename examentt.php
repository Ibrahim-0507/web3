

<?php 
session_start();
mysql_connect("localhost","root","");
mysql_select_db("online");
if(isset($_POST['1r1'])){

if($_POST['question1']=="r1"){
  
    $_SESSION['cor1']=$_POST['1r1'] ;   
}
if($_POST['question1']=="r2"){
    $_SESSION['cor1']=$_POST['1r2'] ;   
}
if($_POST['question1']=="r3"){
    $_SESSION['cor1']=$_POST['1r3'] ;   
}
if($_POST['question1']=="r4"){
    $_SESSION['cor1']=$_POST['1r4'] ;   
} }
if (isset($_POST['question2'])){
if($_POST['question2']=="r1"){
    $_SESSION['cor2']=$_POST['2r1'] ;   
}
if($_POST['question2']=="r1"){
    $_SESSION['cor2']=$_POST['2r1'] ;   
}
if($_POST['question2']=="r2"){
    $_SESSION['cor2']=$_POST['2r2'] ;   
}
if($_POST['question2']=="r3"){
    $_SESSION['cor2']=$_POST['2r3'] ;   
}
if($_POST['question2']=="r4"){
    $_SESSION['cor2']=$_POST['2r4'] ;   
}}
if (isset($_POST['question3'])){
if($_POST['question3']=="r4"){
    $_SESSION['cor3']=$_POST['3r4'] ;   
}
if($_POST['question3']=="r1"){
    $_SESSION['cor3']=$_POST['3r1'] ;   
}if($_POST['question3']=="r2"){
    $_SESSION['cor3']=$_POST['3r2'] ;   
}if($_POST['question3']=="r3"){
    $_SESSION['cor3']=$_POST['3r3'] ;   
}}
if (isset($_POST['question4'])){
if($_POST['question4']=="r4"){
    $_SESSION['cor4']=$_POST['4r4'] ;   
}
if($_POST['question4']=="r3"){
    $_SESSION['cor4']=$_POST['4r3'] ;   
}
if($_POST['question4']=="r2"){
    $_SESSION['cor4']=$_POST['4r2'] ;   
}
if($_POST['question4']=="r1"){
    $_SESSION['cor4']=$_POST['4r1'] ;   
} }
if (isset($_POST['question5'])){
if($_POST['question5']=="r4"){
    $_SESSION['cor5']=$_POST['5r4'] ;   
}
if($_POST['question5']=="r3"){
    $_SESSION['cor5']=$_POST['5r3'] ;   
}
if($_POST['question5']=="r2"){
    $_SESSION['cor5']=$_POST['5r2'] ;   
}

if($_POST['question5']=="r1"){
    $_SESSION['cor5']=$_POST['5r1'] ;   
}}
if (isset($_POST['question6'])){
if($_POST['question6']=="r4"){
    $_SESSION['cor6']=$_POST['6r4'] ;   
}
if($_POST['question6']=="r3"){
    $_SESSION['cor6']=$_POST['6r3'] ;   
}
if($_POST['question6']=="r2"){
    $_SESSION['cor6']=$_POST['6r2'] ;   
}
if($_POST['question6']=="r1"){
    $_SESSION['cor6']=$_POST['6r1'] ;   
}}
if (isset($_POST['question7'])){
if($_POST['question7']=="r4"){
    $_SESSION['cor7']=$_POST['7r4'] ;   
}
if($_POST['question7']=="r3"){
    $_SESSION['cor7']=$_POST['7r3'] ;   
}
if($_POST['question7']=="r2"){
    $_SESSION['cor7']=$_POST['7r2'] ;   
}
if($_POST['question7']=="r1"){
    $_SESSION['cor7']=$_POST['7r1'] ;   
}}
if (isset($_POST['question8'])){
if($_POST['question8']=="r4"){
    $_SESSION['cor8']=$_POST['8r4'] ;   
}
if($_POST['question8']=="r3"){
    $_SESSION['cor8']=$_POST['8r3'] ;   
}
if($_POST['question8']=="r2"){
    $_SESSION['cor8']=$_POST['8r2'] ;   
}
if($_POST['question8']=="r1"){
    $_SESSION['cor8']=$_POST['8r1'] ;   
}
if($_POST['question8']=="r4"){
    $_SESSION['cor8']=$_POST['8r4'] ;   
}}
if (isset($_POST['question9'])){
if($_POST['question9']=="r4"){
    $_SESSION['cor9']=$_POST['9r4'] ;   
}
if($_POST['question9']=="r3"){
    $_SESSION['cor9']=$_POST['9r3'] ;   
}
if($_POST['question9']=="r2"){
    $_SESSION['cor9']=$_POST['9r2'] ;   
}
if($_POST['question9']=="r1"){
    $_SESSION['cor9']=$_POST['9r1'] ;   
}}
if (isset($_POST['question10'])){
if($_POST['question10']=="r4"){
    $_SESSION['cor10']=$_POST['10r4'] ;   
}
if($_POST['question10']=="r3"){
    $_SESSION['cor10']=$_POST['10r3'] ;   
}
if($_POST['question10']=="r2"){
    $_SESSION['cor10']=$_POST['10r2'] ;   
}
if($_POST['question10']=="r1"){
    $_SESSION['cor10']=$_POST['10r1'] ;   
}}
if($_POST['question11']=="r1"){
  
    $_SESSION['cor11']=$_POST['11r1'] ;   
}
if($_POST['question11']=="r2"){
    $_SESSION['cor11']=$_POST['11r2'] ;   
}
if($_POST['question11']=="r3"){
    $_SESSION['cor11']=$_POST['11r3'] ;   
}
if($_POST['question11']=="r4"){
    $_SESSION['cor11']=$_POST['11r4'] ;   
} 
if (isset($_POST['question12'])){
if($_POST['question12']=="r1"){
    $_SESSION['cor12']=$_POST['12r1'] ;   
}
if($_POST['question12']=="r1"){
    $_SESSION['cor12']=$_POST['12r1'] ;   
}
if($_POST['question12']=="r2"){
    $_SESSION['cor12']=$_POST['12r2'] ;   
}
if($_POST['question12']=="r3"){
    $_SESSION['cor12']=$_POST['12r3'] ;   
}
if($_POST['question12']=="r4"){
    $_SESSION['cor12']=$_POST['12r4'] ;   
}}
if (isset($_POST['question13'])){
if($_POST['question13']=="r4"){
    $_SESSION['cor13']=$_POST['13r4'] ;   
}
if($_POST['question13']=="r1"){
    $_SESSION['cor13']=$_POST['13r1'] ;   
}if($_POST['question13']=="r2"){
    $_SESSION['cor13']=$_POST['13r2'] ;   
}if($_POST['question13']=="r3"){
    $_SESSION['cor13']=$_POST['13r3'] ;   
}}
if (isset($_POST['question14'])){
if($_POST['question14']=="r4"){
    $_SESSION['cor14']=$_POST['14r4'] ;   
}
if($_POST['question14']=="r3"){
    $_SESSION['cor14']=$_POST['14r3'] ;   
}
if($_POST['question14']=="r2"){
    $_SESSION['cor14']=$_POST['14r2'] ;   
}
if($_POST['question14']=="r1"){
    $_SESSION['cor14']=$_POST['14r1'] ;   
} }
if (isset($_POST['question15'])){
if($_POST['question15']=="r4"){
    $_SESSION['cor15']=$_POST['15r4'] ;   
}
if($_POST['question15']=="r3"){
    $_SESSION['cor15']=$_POST['15r3'] ;   
}
if($_POST['question15']=="r2"){
    $_SESSION['cor15']=$_POST['15r2'] ;   
}

if($_POST['question15']=="r1"){
    $_SESSION['cor15']=$_POST['15r1'] ;   
}}

$_SESSION['q1']=$_POST['q1'] ;
$_SESSION['q2']=$_POST['q2'] ;
$_SESSION['q3']=$_POST['q3'] ;
$_SESSION['q4']=$_POST['q4'] ;
$_SESSION['q5']=$_POST['q5'] ;
$_SESSION['q6']=$_POST['q6'] ;
$_SESSION['q7']=$_POST['q7'] ;
$_SESSION['q8']=$_POST['q8'] ;
$_SESSION['q9']=$_POST['q9'] ;
$_SESSION['q10']=$_POST['q10'] ;
$_SESSION['q11']=$_POST['q11'] ;
$_SESSION['q12']=$_POST['q12'] ;
$_SESSION['q13']=$_POST['q13'] ;
$_SESSION['q14']=$_POST['q14'] ;
$_SESSION['q15']=$_POST['q15'] ;

$q1=$_SESSION['q1'];
$r11=$_POST['1r1'];
$r12=$_POST['1r2'];
$r13=$_POST['1r3'] ;
$r14=$_POST['1r4'] ;
if(isset($_SESSION['cor1'])){
$rep1=$_SESSION['cor1'] ;}
if(isset($_SESSION['q2'])){
$q2=$_SESSION['q2'];}
$r21=$_POST['2r1'];
$r22=$_POST['2r2'];
$r23=$_POST['2r3'] ;
$r24=$_POST['2r4'] ;
if(isset($_SESSION['cor2'])){
$rep2=$_SESSION['cor2'] ; }
if(isset($_SESSION['q3'])){
$q3=$_SESSION['q3'];}
$r31=$_POST['3r1'];
$r32=$_POST['3r2'];
$r33=$_POST['3r3'] ;
$r34=$_POST['3r4'] ;
if(isset($_SESSION['cor3'])){
$rep3=$_SESSION['cor3'] ;}
if(isset($_SESSION['q4'])){
$q4=$_SESSION['q4'];}
$r41=$_POST['4r1'];
$r42=$_POST['4r2'];
$r43=$_POST['4r3'] ;
$r44=$_POST['4r4'] ;
if(isset($_SESSION['cor4'])){
$rep4=$_SESSION['cor4'] ;}
if(isset($_SESSION['q5'])){
$q5=$_SESSION['q5'];}
$r51=$_POST['5r1'];
$r52=$_POST['5r2'];
$r53=$_POST['5r3'] ;
$r54=$_POST['5r4'] ;
if(isset($_SESSION['cor5'])){
$rep5=$_SESSION['cor5'] ;}
if(isset($_SESSION['q6'])){
$q6=$_SESSION['q6'];}
$r61=$_POST['6r1'];
$r62=$_POST['6r2'];
$r63=$_POST['6r3'] ;
$r64=$_POST['6r4'] ;
if(isset($_SESSION['cor6'])){
$rep6=$_SESSION['cor6'] ;}
if(isset($_SESSION['q7'])){
$q7=$_SESSION['q7'];}
$r71=$_POST['7r1'];
$r72=$_POST['7r2'];
$r73=$_POST['7r3'] ;
$r74=$_POST['7r4'] ;
if(isset($_SESSION['cor7'])){
$rep7=$_SESSION['cor7'] ;}
if(isset($_SESSION['q8'])){
$q8=$_SESSION['q8'];}
$r81=$_POST['8r1'];
$r82=$_POST['8r2'];
$r83=$_POST['8r3'] ;
$r84=$_POST['8r4'] ;
if(isset($_SESSION['cor8'])){
$rep8=$_SESSION['cor8'] ;}
if(isset($_SESSION['q9'])){
$q9=$_SESSION['q9'];}
$r91=$_POST['9r1'];
$r92=$_POST['9r2'];
$r93=$_POST['9r3'] ;
$r94=$_POST['9r4'] ;
if(isset($_SESSION['cor9'])){
$rep9=$_SESSION['cor9'] ;}
if(isset($_SESSION['q10'])){
$q10=$_SESSION['q10'];}
$r101=$_POST['10r1'];
$r102=$_POST['10r2'];
$r103=$_POST['10r3'] ;
$r104=$_POST['10r4'] ;
if(isset($_SESSION['cor10'])){
$rep10=$_SESSION['cor10'] ;}
if(isset($_SESSION['q11'])){
$q11=$_SESSION['q11'];}
$r111=$_POST['11r1'];
$r112=$_POST['11r2'];
$r113=$_POST['11r3'] ;
$r114=$_POST['11r4'] ;
if(isset($_SESSION['cor11'])){
$rep11=$_SESSION['cor11'] ;}
if(isset($_SESSION['q12'])){
$q12=$_SESSION['q12'];}
$r121=$_POST['12r1'];
$r122=$_POST['12r2'];
$r123=$_POST['12r3'] ;
$r124=$_POST['12r4'] ;
if(isset($_SESSION['cor12'])){
$rep12=$_SESSION['cor12'] ; }
if(isset($_SESSION['q13'])){
$q13=$_SESSION['q13'];}
$r131=$_POST['13r1'];
$r132=$_POST['13r2'];
$r133=$_POST['13r3'] ;
$r134=$_POST['13r4'] ;
if(isset($_SESSION['cor13'])){
$rep13=$_SESSION['cor13'] ;}
if(isset($_SESSION['q14'])){
$q14=$_SESSION['q14'];}
$r141=$_POST['14r1'];
$r142=$_POST['14r2'];
$r143=$_POST['14r3'] ;
$r144=$_POST['14r4'] ;
if(isset($_SESSION['cor14'])){
$rep14=$_SESSION['cor14'] ;}
if(isset($_SESSION['q15'])){
$q15=$_SESSION['q15'];}
$r151=$_POST['15r1'];
$r152=$_POST['15r2'];
$r153=$_POST['15r3'] ;
$r154=$_POST['15r4'] ;
if(isset($_SESSION['cor15'])){
$rep15=$_SESSION['cor15'] ;}

if(isset($_SESSION['temp'])){
$te=$_SESSION['temp'] ;
}
if(isset($_SESSION['code'])){
    $co=$_SESSION['code'] ;
}
if(isset($_SESSION['nom'])){
$plm=$_SESSION['nom'];
}
       
$sql="INSERT INTO `exam`(`id`, `prof`,`temp`,`code`) VALUES (null,'$plm','$te','$co')";

    mysql_query($sql) ;
  

     
    echo '<h1 align="center">le code d\'examen est ' .$co.' </h1>' ;
  
$query1="INSERT INTO `online`.`question` (`id`, `reponse1`, `reponse2`, `reponse3`, `reponse4`, `correct`, `question`) VALUES ('$co', '$r11', '$r12', '$r13', '$r14', '$rep1' ,'$q1')";
$query2="INSERT INTO `online`.`question` (`id`, `reponse1`, `reponse2`, `reponse3`, `reponse4`, `correct`, `question`) VALUES ('$co', '$r21', '$r22', '$r23', '$r24', '$rep2' ,'$q2')";
$query3="INSERT INTO `online`.`question` (`id`, `reponse1`, `reponse2`, `reponse3`, `reponse4`, `correct`, `question`) VALUES ('$co', '$r31', '$r32', '$r33', '$r34', '$rep3' ,'$q3')";
$query4="INSERT INTO `online`.`question` (`id`, `reponse1`, `reponse2`, `reponse3`, `reponse4`, `correct`, `question`) VALUES ('$co', '$r41', '$r42', '$r43', '$r44', '$rep4' ,'$q4')";
$query5="INSERT INTO `online`.`question` (`id`, `reponse1`, `reponse2`, `reponse3`, `reponse4`, `correct`, `question`) VALUES ('$co', '$r51', '$r52', '$r53', '$r54', '$rep5' ,'$q5')";
$query6="INSERT INTO `online`.`question` (`id`, `reponse1`, `reponse2`, `reponse3`, `reponse4`, `correct`, `question`) VALUES ('$co', '$r61', '$r62', '$r63', '$r64', '$rep6' ,'$q6')";
$query7="INSERT INTO `online`.`question` (`id`, `reponse1`, `reponse2`, `reponse3`, `reponse4`, `correct`, `question`) VALUES ('$co', '$r71', '$r72', '$r73', '$r74', '$rep7' ,'$q7')";
$query8="INSERT INTO `online`.`question` (`id`, `reponse1`, `reponse2`, `reponse3`, `reponse4`, `correct`, `question`) VALUES ('$co', '$r81', '$r82', '$r83', '$r84', '$rep8', '$q8' )";
$query9="INSERT INTO `online`.`question` (`id`, `reponse1`, `reponse2`, `reponse3`, `reponse4`, `correct`, `question`) VALUES ('$co', '$r91', '$r92', '$r93', '$r94', '$rep9', '$q9')";
$query10="INSERT INTO `online`.`question` (`id`, `reponse1`, `reponse2`, `reponse3`, `reponse4`, `correct`, `question`) VALUES ('$co', '$r101', '$r102', '$r103', '$r104', '$rep10', '$q10')";
$query11="INSERT INTO `online`.`question` (`id`, `reponse1`, `reponse2`, `reponse3`, `reponse4`, `correct`, `question`) VALUES ('$co', '$r111', '$r112', '$r113', '$r114', '$rep11' ,'$q11')";
$query12="INSERT INTO `online`.`question` (`id`, `reponse1`, `reponse2`, `reponse3`, `reponse4`, `correct`, `question`) VALUES ('$co', '$r121', '$r122', '$r123', '$r124', '$rep12' ,'$q12')";
$query13="INSERT INTO `online`.`question` (`id`, `reponse1`, `reponse2`, `reponse3`, `reponse4`, `correct`, `question`) VALUES ('$co', '$r131', '$r132', '$r133', '$r134', '$rep13' ,'$q13')";
$query14="INSERT INTO `online`.`question` (`id`, `reponse1`, `reponse2`, `reponse3`, `reponse4`, `correct`, `question`) VALUES ('$co', '$r141', '$r142', '$r143', '$r144', '$rep14' ,'$q14')";
$query15="INSERT INTO `online`.`question` (`id`, `reponse1`, `reponse2`, `reponse3`, `reponse4`, `correct`, `question`) VALUES ('$co', '$r151', '$r152', '$r153', '$r154', '$rep15' ,'$q15')";

mysql_query($query1);
mysql_query($query2);
mysql_query($query3);
mysql_query($query4);
mysql_query($query5);
mysql_query($query6);
mysql_query($query7);
mysql_query($query8);
mysql_query($query9);
mysql_query($query10);
mysql_query($query11);
mysql_query($query12);
mysql_query($query13);
mysql_query($query14);
mysql_query($query15);

  ?>
