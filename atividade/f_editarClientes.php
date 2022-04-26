<?php
include_once "conexao.php";
$id=$_GET['id'];

$consulta=$conectar->query("select * from cliente where id = '$id' ");
$linha=$consulta->fetch(PDO::FETCH_ASSOC);


?>

<form action="editarClientes.php" method="post">
    <fieldset>
        Nome:<br>
        <input type="text" name="nome" id="nome"
        value="<?php echo $linha['nome'] ?>">
        <br>
        Telefone:<br>
        <input type="text" name="telefone" id="telefone"
        value="<?php echo $linha['telefone'] ?>">
        <br>
        <br>
        <input type="hidden" name="id"
        value="<?php echo $linha['id'] ?>">
        
        <input type="submit" value="Enviar" name="btn-enviar">
    </fieldset>
</form>