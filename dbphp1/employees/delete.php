<?php

include "../kozos/kapcsolat.php";

try {
    deleteOne($dbc, 'employees', $_GET['id']);
    header('location: index.php');
} catch (Exception $exc) {
    header("Location: hiba.php?hiba=" . $exc->getMessage());
}


