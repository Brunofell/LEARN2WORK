<?php

$usuario = 'root';
$senha = '';
$database = 'l2w';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);


if($mysqli->error){
    die("FALHA AO CONECTAR AO BANCO DE DADOS: " . $mysqli->error);
}

?>