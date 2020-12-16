<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('BASE', 'database');

try{
    $conn = new pdo('mysql:host=' .HOST. ';dbname=' .BASE, USER, PASS);
}catch(PDOException $erro){
    echo 'Erro: Falha ao Conectar' .$erro->getMessage();
}
