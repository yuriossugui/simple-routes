<?php $this->layout("master"); ?>


<h1>CADASTRO DE PRODUTO</h1>

<form action="/cadastrarProduto" method="post">
        <input type="text" name="codigo" id="" placeholder="Codigo">
        <input type="text" name="variacao" id="" placeholder="Variação">
        <input type="text" name="descricao" id="" placeholder="Descrição">
        <input type="text" name="tipo" id="" placeholder="Tipo">
        <button type="submit">Cadastrar</button>
</form>

<?= $msg ?>