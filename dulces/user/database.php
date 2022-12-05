<?php
$server = 'localhost:3307';
$username = 'root';
$password = '';
$database = 'data_base';

try{
    $mysql = new PDO("mysql:host=$server; dbname=$database;", $username, $password);

} catch (PDOException $error) {
    die('Conexión fallida: ' . $error->getMessage());
}
?>