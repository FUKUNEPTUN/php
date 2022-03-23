<!DOCTYPE html>
<?php
include "kozos/kapcsolat.php";
$adatok = readAll($dbc, 'firms');
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title>Alkalmozottak</title>
        <link href="kozos/bootstrap.min.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div class="container">
            <table class="table table-success table-striped my-3" >
                <tr>
                    <?php foreach ($adatok[0] as $key => $value) : ?>
                        <th><?= $key; ?></th>
                    <?php endforeach; ?>

                </tr>

                <?php foreach ($adatok as $sor) : ?>
                    <tr>
                        <?php foreach ($sor as $value) : ?>
                            <td><?= $value; ?></td>
                        <?php endforeach; ?>
                    </tr>
                <?php endforeach; ?>
            </table>
            <a class="btn btn-success" href="index.php">Vissza</a>
        </div>
        <script src="kozos/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>