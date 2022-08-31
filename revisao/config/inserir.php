<?php

include_once('conexao.php');

if(isset($_POST)){
    if($_POST['botao']==='gravar'){
        $query = 'INSERT INTO lista (nome) VALUES (:nome)';
        $resultado = $conexao->prepare($query);
        $resultado->bindParam(":nome",$_POST['nome']);
        $resultado->execute();
        // header('location:../index.php');

    }
}