<?php

include 'connection.php';

$id = 1;

$stmt = $conn->prepare('DELETE FROM tbl_usuario WHERE id = :id');
$stmt->bindParam(':id', $id);
$result = $stmt->execute();
 
if($result){
    echo "Excluído com Sucesso";
}else{
    echo $stmt->errorInfo();
}
