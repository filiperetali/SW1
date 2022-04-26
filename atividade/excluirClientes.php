<?php

include_once "conexao.php";
try {
    $id=$_GET['id'];

    $delete=$conectar->prepare('delete from cliente where id = :id');
    $delete->bindParam(':id',$id);
    $delete->execute();
    header('location:clientes.php');
} catch (\Throwable $th) {
    
}

?>
