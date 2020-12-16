<?php

include 'connection.php';

$id = 1;
$nome = 'Athos';
$sobrenome = 'Rodrigues';

$stmt = $conn->prepare('UPDATE tbl_usuario SET nome = :nome, sobrenome = :sobrenome WHERE id = :id');
$stmt->bindParam(':id', $id);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':sobrenome', $sobrenome);
 
$result = $stmt->execute();
 
if ($result){
    echo "Alterado com Sucesso";
}else{
    echo $stmt->errorInfo();
}
