<!DOCTYPE html>
<?php
include "kapcsolat.php";

if (isset($_POST['update'])) {
    $akt = array_pop($_POST);
    update($dbc, 'pizzak', $_POST);
    header('Location: index.php');
} else {
    $akt = readOne($dbc, 'pizzak', $_GET['id']);
    $akt = $akt[0];
}
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title>Pizzák</title>
        <link href="bootstrap.min.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div class="container  w-50">
            <form name="uj" method="POST">
                <input hidden type="text" class="form-control" id="id" name="id" value="<?= $akt['id']; ?>" placeholder="">
                <div class="mb-3">
                    <label for="name" class="form-label">Név</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?= $akt['name']; ?>" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="feltetek" class="form-label">Feltétek</label>
                    <input type="text" class="form-control" id="feltetek" name="feltetek" value="<?= $akt['feltetek']; ?>" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="ar" class="form-label">Ár</label>
                    <input type="number" class="form-control" id="ar" name="ar" value="<?= $akt['ar']; ?>"  placeholder="">
                </div>
                <div class="mb-3">
                    <label for="kep" class="form-label">Kép</label>
                    <input type="number" class="form-control" id="kep" name="kep" value="<?= $akt['kep']; ?>"  placeholder="">
                </div>
                <input class="btn btn-success" type="submit" name="update" value="Frissít" value=""  />
                <a class="btn btn-success" href="index.php">Vissza</a>
            </form>
        </div>
        <script src="bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>