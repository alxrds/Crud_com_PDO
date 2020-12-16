<?php

include 'connection.php';

$stmt = $conn->prepare('SELECT * FROM tbl_usuario');
$stmt->execute(); 

while($row = $stmt->fetch()){

    echo $row['nome']." ".$row['sobrenome']."<br>";

}
