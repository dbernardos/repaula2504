<table>
    <tr>
        <th>Codigo</th>
        <th>Descricao</th>
        <th>Quantidade</th>
        <th>Valor</th>
        <th>Opções</th>
    </tr>
    <?php foreach ($produtos as $produto) : ?>
        <tr>
            <td><?php echo htmlentities($produto->getCodigo()); ?></td>
            <td>
                <a href="index.php?rota=produto&id=<?php echo $produto->getCodigo(); ?>">
                    <?php echo htmlentities($produto->getDescricao()); ?>
                </a>
            </td>
            <td><?php echo htmlentities($produto->getQuantidade()); ?></td>
            <td><?php echo htmlentities($produto->getValor()); ?></td>
            <td>
                <a href="index.php?rota=editar&id=<?php echo $produto->getCodigo(); ?>">
                Editar</a>
                <a href="index.php?rota=remover&id=<?php echo $produto->getCodigo(); ?>">
                Remover</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
