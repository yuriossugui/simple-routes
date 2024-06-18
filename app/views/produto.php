<?php $this->layout("master"); ?>

<h1 id="tituloHome">ACOMPANHAMENTO DOS PRODUTOS</h1>
<button class="btn btn-primary" id="botaoCadProduto">Cadastrar</button>
<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>CÓDIGO</th>
            <th>VARIAÇÃO</th>
            <th>DESCRIÇÃO</th>  
            <th>TIPO</th>
            <th>ALTERAR</th>
            <th>EXCLUIR</th>
        </tr>
    </thead>
    <tbody>
        <?php if(!empty($produtos)): ?>
            <?php foreach ($produtos as $produto): ?>
            <tr>
                <td><?php echo htmlspecialchars($produto['id']);?></td>
                <td><?php echo htmlspecialchars($produto['codigo']);?></td>
                <td><?php echo htmlspecialchars($produto['variacao']);?></td>
                <td><?php echo htmlspecialchars($produto['descricao']);?></td>
                <td><?php echo htmlspecialchars($produto['tipo']);?></td>
            </tr>
            <?php endforeach;?>
        <?php else: ?>
            <tr>
                <td colspan="3">Nenhum produto encontrado.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>