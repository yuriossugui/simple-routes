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
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['codigo']; ?></td>
            <td><?php echo $row['variacao']; ?></td>
            <td><?php echo $row['descricao']; ?></td>
            <td><?php echo $row['tipo']; ?></td>
            <td><a href="#?id=<?php echo $row['id']; ?>" class="btn btn-success">ALTERAR</a></td>
            <td><a href="#?id=<?php echo $row['id']; ?>" class="btn btn-danger">EXCLUIR</a></td>
        </tr>
    </tbody>
</table>