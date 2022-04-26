<?php
include_once "conexao.php";
try {
    $id=$_POST['id'];
    $nome=$_POST['nome'];
    $telefone=$_POST['telefone'];

    $update=$conectar->prepare("update cliente set nome = :nome, telefone = :telefone
    where id = :id");
    $update->bindParam(':id',$id);
    $update->bindParam(':nome',$nome);
    $update->bindParam(':telefone',$telefone);
    $update->execute();
    header('location:clientes.php');
} catch (\Throwable $th) {
    //throw $th;
}
?>