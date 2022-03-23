<!DOCTYPE html>
<?php
include "../kozos/kapcsolat.php";
$adatok = readAll($dbc, 'employees');
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title>Alkalmozottak</title>
        <link href="../kozos/bootstrap.min.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div class="container w-75">
            <a class="btn btn-success" href="insert.php">Hozzáadás</a>
            <table class="table table-success table-striped my-3" >
                <tr>
                    <?php foreach ($adatok[0] as $key => $value) : ?>
                        <th><?= $key; ?></th>
                    <?php endforeach; ?>
                    <!--Műveletek oszlop -->
                    <th colspan='3' style="text-align: center; width:20%;" >Műveletek</th>
                </tr>

                <?php foreach ($adatok as $sor) : ?>
                    <tr>
                        <?php foreach ($sor as $key => $value) : ?>
                            <td><?= $value; ?></td>
                        <?php endforeach; ?>
                        <!--Műveletek  létrehozás id oszlopra -->
                    <div >
                        <td><a class="btn btn-success" href="view.php?id=<?= $sor['id']; ?>"> Megtekint </a></td>
                        <td><a class="btn btn-success" href="update.php?id=<?= $sor['id']; ?>"> Szerkeszt </a></td>
                        <td><a class="btn btn-success" href="delete.php?id=<?= $sor['id']; ?>"> Töröl </a></td>
                    </div>
                    </tr>
                <?php endforeach; ?>
            </table>
            <a class="btn btn-success" href="../index.php">Vissza</a>
        </div>
        <script src="../kozos/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>