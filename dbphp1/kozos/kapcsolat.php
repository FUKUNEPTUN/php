<?php

$host = 'localhost';
$dbuser = 'root';
$password = '1234';
$dbname = 'db_elso';

try {
    $datasourcename = "mysql:host=$host;dbname=$dbname";
    //echo $datasourcename . "<hr>";
    $options = [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
    $dbc = new PDO($datasourcename, $dbuser, $password, $options);
} catch (PDOException $exc) {
    echo "Kapcsolódási hiba:" . $exc->getMessage();
}

function readAll($dbc, $table) {
    $sql = "SELECT * FROM $table;";
    $utasitas = $dbc->prepare($sql);
    $utasitas->execute();

    return $utasitas->fetchAll(PDO::FETCH_ASSOC);
}

function readOne($dbc, $table, $id) {
    $sql = "SELECT * FROM $table WHERE id=$id;";
    $utasitas = $dbc->prepare($sql);
    $utasitas->execute();

    return $utasitas->fetchAll(PDO::FETCH_ASSOC);
}

function deleteOne($dbc, $table, $id) {
    $sql = "DELETE FROM $table WHERE id=$id;";
    $utasitas = $dbc->prepare($sql);
    $utasitas->execute();
}

// Mivel az id automatikusan generalodik ezért a id értéke helyett NULL értéket adunk meg beillesztéskor
function insert($dbc, $table, $datas) {
    $sql = "INSERT INTO $table VALUES (NULL, '";
    foreach ($datas as $value) {
        $sql .= $value . "', '";
    }
    $sql = substr($sql, 0, strlen($sql) - 3);
    $sql .= ");";
    $utasitas = $dbc->prepare($sql);
    $utasitas->execute();
}

function update($dbc, $table, $datas) {
    $sql = "UPDATE $table SET ";
    //print_r($datas);
    foreach ($datas as $key => $value) {
        if ($key <> 'id') {
            $sql .= $key . "='" . $value . "', ";
        }
    }
    $sql = substr($sql, 0, strlen($sql) - 2);
    $sql .= " WHERE id =" . $datas['id'] . ";";
    //print_r($sql);
    $utasitas = $dbc->prepare($sql);
    $utasitas->execute();
}
