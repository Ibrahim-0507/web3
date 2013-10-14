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

if(isset($_SESSION['temp'])){
$te=$_SESSION['temp'] ;
}
if(isset($_SESSION['code'])){
    $co=$_SESSION['code'] ;
    
}
if(isset($_SESSION['nom'])){
$plm=$_SESSION['nom'];} 
       
$sql="INSERT INTO `exam`(`id`, `prof`,`temp`,`code`) VALUES (null,'$plm','$te','$co')";

    mysql_query($sql) ;
  

     
       echo '<h1 align="center">le code d\'examen est </h1>' .$co.' </h1>' ;
       
   
        
    
     
  
  
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
       
  ?>
