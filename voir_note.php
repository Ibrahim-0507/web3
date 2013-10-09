<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>choix matiere</title>
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
        <form name="form12" method="POST" action="enlever-personne-admin.php">
            <br />
            <br />
            <br />
            <table align="center" cellpadding="0" width="800" border="0">
                <tr>
                <h1 align="center" class="heading"><img src="images/di.png" width="304" height="42" /></h1>
                <h1 align="center" class="heading"><img src="images/cnam.png" width="830" height="51" alt="Welcome to Site" /></h1>
                <table>
                    <tr align="center">
                <h1 align="center" class="heading">   
                        <?php
                        session_start();
                        $rq = $_SESSION['username'];
                        mysql_connect("localhost", "root", "");
                        mysql_select_db("online");
                        $b = "SELECT * FROM `note` WHERE nomet='" . $rq . "'";
                        if (mysql_query($b)) {
                            $mn = mysql_query($b);
                        }
                        while ($man = mysql_fetch_array($mn)) {
                            echo $man['code'];
                            echo "                ";
                            echo $man['note'];
                            echo '<br>';
                        }
                        ?>
                </h1>
                    </tr>
                </table>
                </tr>
            </table>
    </body>
</html>
