<?php
try {

    $db = new PDO("mysql:host=localhost;dbname=notlar;charset=UTF8", "root", "123");
    $db->exec("SET NAMES utf8");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die($e->getMessage());
}


?>
