<?php
include_once('templates/header.php');

include_once('config/conexao.php');

if(isset($conexao)){
    ?>
    <h4>Formulário para inserir no banco</h4>
    <form action="config/inserir.php" method="post">
        <input type="text" name="nome" id="nome" value="inserido">
        <input type="hidden" name="acao" value="gravar">
        <input type="submit" value="Enviar">
    </form>

    <h4>Formulário para EDITAR no banco</h4>
    <form action="config/editar.php" method="post">
        <input type="text" name="nome" id="nome" value="alterado">
        <input type="hidden" name="acao" value="alterar">
        <input type="submit" value="Enviar">
    </form>


    <?php
}

include_once('templates/footer.php');