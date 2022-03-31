<!DOCTYPE html>
<?php
include "kapcsolat.php";

//print_r($_POST);
$szamlalo = 0;
$adatok = [];
if (isset($_POST['insert'])) {
    foreach ($_POST as $key => $value) {
        if ($key <> 'insert') {
            $adatok[$key] = $value;
            $szamlalo++;
        }
    }
    insert($dbc, 'pizzak', $adatok);
    header('Location: index.php');
}
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title>Alkalmozottak</title>
        <link href="bootstrap.min.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div class="container  w-50">
            <form name="f" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Név</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="feltetek" class="form-label">feltetek</label>
                    <input type="text" class="form-control" id="feltetek" name="feltetek" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="ar" class="form-label">ar</label>
                    <input type="number" class="form-control" id="ar" name="ar" placeholder="">
                </div>
                <input class="btn btn-success" type="submit" name="insert" value="Beszúrás" />
                <a class="btn btn-success" href="index.php">Vissza</a>
            </form>



        </div>
        <script src="../kozos/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>