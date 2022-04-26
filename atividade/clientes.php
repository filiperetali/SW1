<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuários</title>
</head>
<body>
    <a href="index.php"><h2>Página Inicial</h2></a>
    <a href="f_cadastroClientes.php"><h2>Novo Cadastro</h2></a>
<?php
        include_once "conexao.php";
        $consulta = $conectar->query("Select * from cliente");
        echo "<table border=1>";
        echo "<tr><td>Nome</td><td>Telefone</td><td>Opções</td></tr>";
        while($linha=$consulta->fetch(PDO::FETCH_ASSOC)){
            echo "<tr><td>$linha[nome]</td><td>$linha[telefone]</td>";
            echo "<td><a href='f_editarClientes.php?id=$linha[id]'>Editar<br></a>";
            echo "<a href='excluirClientes.php?id=$linha[id]'>Excluir</a>";
            echo "</td></tr>";
        }
        echo "</table>";
    ?>
</body>
</html>