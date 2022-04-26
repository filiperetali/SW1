<?php
include_once "conexao.php";

try {
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];

    $insert = $conectar->prepare('insert into cliente (nome,telefone)
    values (:nome,:telefone)');
    $insert->bindParam(':nome',$nome);
    $insert->bindParam(':telefone',$telefone);
    
    $insert->execute();
    header('location:clientes.php');

} catch (\Throwable $th) {
    //throw $th;
}

?>