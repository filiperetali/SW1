<?php

include_once('conexao.php');

if(isset($_POST)){
    if($_POST['acao']==='alterar'){
        $query = 'UPDATE lista SET nome = :nome WHERE nome LIKE :pesquisa';
        $pesquisa='inserido';
        $alteracao='alterado';
        $resultado = $conexao->prepare($query);
        // $resultado->bindParam(":id",$_POST['id']);
        $resultado->bindParam(":nome",$alteracao);
        $resultado->bindParam(":pesquisa",$pesquisa);
        $resultado->execute();
        // header('location:../index.php');

    }
}