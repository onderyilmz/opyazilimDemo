<?php


$vtServer = "localhost";
$vtName = "vt1";
$vtUser = "onder";
$vtPass = "Onder.1234";

try {
    $vtConnect = new PDO("mysql:host={$vtServer};dbname={$vtName};charset=utf8", $vtUser, $vtPass);
    $vtConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo $e->getMessage();

}
