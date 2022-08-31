<?php 
include_once('./templates/header.php');

include_once('./config/conexao.php');

if(isset($conexao)){
    ?>
    <h2>Banco de dados conectado</h2>
    <form class="formulario" action="config/inserir.php" method="post">
        <input type="hidden" name="gravar" value="grava">
        <input type="submit" value="Via botao" name="botao">
    </form>

    <?php
}

include_once('./templates/footer.php');