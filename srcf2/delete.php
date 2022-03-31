<?php

include "kapcsolat.php";

try {
    deleteOne($dbc, 'pizzak', $_GET['id']);
    header('location: index.php');
} catch (Exception $exc) {
    header("Location: hiba.php?hiba=" . $exc->getMessage());
}


