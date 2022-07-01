<?php 

$servidor = "mysql:dbname=bd_buisnes;host=localhost";
$usuario = "root";
$password = "1234";

try {
    $pdo = new PDO($servidor, $usuario, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    // echo "conectado...";
} catch (PDOException $e) {
    echo "Conexion mala.. " .$e->getMessage();
}

?>