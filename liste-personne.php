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
        <?php
        session_start();
        if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
            ?>
            <form name="form12" method="POST" action="enlever-personne-admin.php">
                <br />
                <br />
                <br />
                <table align="center" cellpadding="0" width="800" border="0">
                    <tr>
                        <td><h1 align="center" class="heading"><img src="images/di.png" width="304" height="42" /></h1>
                            <h1 align="center" class="heading"><img src="images/cnam.png" width="830" height="51" alt="Welcome to Site" /></h1>
                            <p align="center"><h1>

                                Bienvenu: <?php echo " " . $_SESSION['username']; ?>
                            </h1>
                            <table>
                                <tr>
                                <ol>

                                    Choisire une matiere:
                                    <?php
                                    $personne = $_POST['personne'];
                                    $_SESSION['personne'] = $personne;
                                    mysql_connect('localhost', 'root', "");
                                    mysql_select_db("acces");
                                    $results = mysql_query("SELECT username FROM " . $personne);
                                    echo'<select name="per">';
                                    while ($table = mysql_fetch_array($results)) {
                                        echo"<option>";
                                        echo($table[0]);
                                        echo"</option>";
                                    }
                                    ?><br/>
                                    <input type="submit" value="Choisire" name="b2">
                                    <p align="left">&nbsp;</p></td>
                                    </tr>
                            </table>
                            <h1 align="center" class="heading">&nbsp;</h1>
                        <?php } ?>
                        </form>
                        </body>
                        </html>