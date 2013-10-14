<html><head>
        
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
    
    <body class="html"><form action='exam1.php' method='POST' >
            <h1 align="center" class="heading"><img src="images/di.png" width="304" height="42" /></h1>
            <h1 align="center" class="heading"><img src="images/cnam.png" width="830" height="51" alt="Welcome to Site" /><br>
                <table align="center">
                    <tr align="center">
        Choisir le nombre de question : <br> <input type="radio" name='nombre' value="10">10 
        <input type="radio" name='nombre' value='15'>15
        <input type="radio" name='nombre' value='20'>20<br>
        Donner le temp d'examen en minute      : <br><input type="text" name='temp'> <br>
        donner le code d'examen : <br><input type="text" name="code"><br>
        <input type='submit' value="submit" >
        </tr>
                </table>
        </form>
    
        <?php 
      session_start();
       if(isset($_POST['nombre'])){
       $_SESSION['nombre']=$_POST['nombre'] ; }
       if(isset($_POST['temp'])){
       $_SESSION['temp']=$_POST['temp'] ; }
   
        if(isset($_POST['nombre'])){
            if($_POST['nombre']==10){
                header('location:examen10.php');}
           if($_POST['nombre']==15){
            header('location:examen15.php');}
             if($_POST['nombre']==20){
          header('location:examen20.php');}
      }
      if(isset($_POST['code'])){
          $_SESSION['code']=$_POST['code'] ;
      }
        ?> 