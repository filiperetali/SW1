<?php
include_once "conexao.php";

try {
    $nome = $_POST['nome'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $insert = $conectar->prepare('insert into login (nome,usuario,senha)
    values (:nome,:usuario,:senha)');
    $insert->bindParam(':nome',$nome);
    $insert->bindParam(':usuario',$usuario);
    $insert->bindParam(':senha',$senha);
    $insert->execute();
    header('location:index.php');

} catch (\Throwable $th) {
    //throw $th;
}

?>