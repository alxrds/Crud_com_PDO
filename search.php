<?php

include 'connection.php';

if($_GET){

    $search = $_GET['q'];

    $stmt = $conn->prepare('SELECT * FROM tbl_usuario WHERE nome LIKE :keywords');
    $stmt->bindValue(':keywords', '%' .$search. '%');
    $stmt->execute(); 
    if($stmt->rowCount() > 0){
        while($row = $stmt->fetch()) {
            echo $row['nome']." ".$row['sobrenome']."<br>";
        }
    }else{
        echo 'Nenhum registro encontrado';
    }
}else{
    echo 'Campo de busca vazio';
}

?>