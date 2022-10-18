<?php
    $page=$_REQUEST['page'];
    $titre=$_REQUEST['titre'];
    $css=$_REQUEST['css'];
    if (($page=='')||(substr($page,0,7)=='http://')) {
        $page = "index.php";
        $titre = "Introduction";
        $css = "css1";
    }

?>
<html lang="fr">

    <head>

    <title><?php echo " : ".$titre ?></title>

    <meta charset="utf-8"/>

    <?php echo '<link href="'.$css.'.css"'. ' rel="stylesheet" type="text/css">'; ?>

    </head>

    <body>

        <?php

        // inclusion des fichiers

        include "header.php";//haut de page

        echo "\n";

        include "navig.php"; //menu

        echo "\n";

        include $page.".php"; //page à inclure en fonction de la valeur de $page

        echo "\n";

        include "footer.php"; // bas de page

        ?>
    </body>

</html>