<html>
    <head>
        <title>
            etudiant
        </title>
    </head>
    <body>
        <?php
        session_start();
        $nom=$_POST['username'];
        $pass=$_POST['password'];
        if(mysql_connect("localhost", "root", "")){
            if(mysql_select_db("acces")){
                $req="select username,password from etudiant where username='$nom' and password='$pass'";
                $res=mysql_query($req);
                if(!$res){
                    die("erreur de requete");
                }
                if(mysql_num_rows($res)==0){
                    require ('setud.html');
                    die("Nom ou Mos de pass incorrecte");
                }
                else{
                    $_SESSION['username']=$nom;
                    $_SESSION['password']=$pass;
                    require 'profileetudiant.php';
               }
            }
        }
        ?>
    </body>
</html>