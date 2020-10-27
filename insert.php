<?php

include 'connection.php';

$nome = 'Alice';
$sobrenome = 'Rodrigues';

$stmt = $conn->prepare('INSERT INTO tbl_usuario (nome, sobrenome) VALUES(:nome, :sobrenome)');
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':sobrenome', $sobrenome);
$result = $stmt->execute();
 
if ($result){
    echo "Inserido com Sucesso";
}else{
    echo $stmt->errorInfo();
}

?>