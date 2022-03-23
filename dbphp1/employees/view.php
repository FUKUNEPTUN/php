<!DOCTYPE html>
<?php
include "../kozos/kapcsolat.php";
$adatok = readOne($dbc, 'employees', $_GET['id']);
//print_r($_GET);
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title>Alkalmozottak</title>
        <link href="../kozos/bootstrap.min.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div class="container">
            <ul class="list-group">
                <li class="list-group-item">An item</li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">A third item</li>
                <li class="list-group-item">A fourth item</li>
                <li class="list-group-item">And a fifth one</li>
            </ul>

            <table class="table table-success table-striped my-3" >


                <?php foreach ($adatok as $key => $value) : ?>
                    <li class="list-group-item"><?= "<b>$key: </b> $value"; ?> </li>
                <?php endforeach; ?>

                <a class="btn btn-success" href="index.php">Vissza</a>
        </div>
        <script src="../kozos/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>