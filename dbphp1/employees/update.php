<!DOCTYPE html>
<?php
include "../kozos/kapcsolat.php";

if (isset($_POST['update'])) {
    $akt = array_pop($_POST);
    update($dbc, 'employees', $_POST);
    header('Location: index.php');
} else {
    $akt = readOne($dbc, 'employees', $_GET['id']);
    $akt = $akt[0];
}
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title>Alkalmozottak</title>
        <link href="../kozos/bootstrap.min.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div class="container  w-50">
            <form name="uj" method="POST">
                <input hidden type="text" class="form-control" id="id" name="id" value="<?= $akt['id']; ?>" placeholder="">
                <div class="mb-3">
                    <label for="name" class="form-label">name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?= $akt['name']; ?>"" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="adrress" class="form-label">address</label>
                    <input type="text" class="form-control" id="adress" name="address" value="<?= $akt['address']; ?>"" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="salary" class="form-label">salary</label>
                    <input type="number" class="form-control" id="salary" name="salary" value="<?= $akt['salary']; ?>""  placeholder="">
                </div>
                <input class="btn btn-success" type="submit" name="update" value="Frissít" value=""  />
                <a class="btn btn-success" href="index.php">Vissza</a>
            </form>
        </div>
        <script src="../kozos/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>