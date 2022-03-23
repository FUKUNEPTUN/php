<!DOCTYPE html>
<?php
include "kozos/kapcsolat.php";

$sql = "SELECT * FROM employees;";
$utasitas = $dbc->prepare($sql);
$utasitas->execute();

$alkalmazottak = $utasitas->fetchAll(PDO::FETCH_ASSOC);
print_r($alkalmazottak);
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
                    <?php foreach ($alkalmazottak[0] as $key => $value) : ?>
                        <th><?= $key; ?></th>
                    <?php endforeach; ?>

                </tr>

                <?php foreach ($alkalmazottak as $sor) : ?>
                    <tr>
                        <?php foreach ($sor as $value) : ?>
                            <td><?= $value; ?></td>
                        <?php endforeach; ?>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <script src="kozos/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>