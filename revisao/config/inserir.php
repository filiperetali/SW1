<?php

include_once('./conexao.php');


if(isset($_POST)){
    if($_POST['gravar']==='grava'){
        $query = 'INSERT INTO lista (nome) VALUES (:nome)';
        $resultado = $conexao->prepare($query);
        $resultado->bindParam(":nome",$_POST['botao']);
        $resultado->execute();
        header('location:../index.php');
    }
}