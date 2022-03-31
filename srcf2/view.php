<!DOCTYPE html>
<?php
include "kapcsolat.php";
$adatok = readOne($dbc, 'pizzak', $_GET['id']);
//print_r($_GET);
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title>pizzak</title>
        <link href="bootstrap.min.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>


                <?php foreach ($adatok as $key => $value) : ?>
                    <li class="list-group-item"><?= "<b>$key: </b> $value"; ?> </li>
                <?php endforeach; ?>

                <a class="btn btn-success" href="index.php">Vissza</a>
        </div>
        <script src="bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>