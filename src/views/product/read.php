<div class="container">
    <artc class="user-menu">
        <h2><?= $product->getNome() ?></h2>
        <p>Preço: R$ <?= $product->getPreco() ?></p>
        <p>Descrição: <?= $product->getDescricao() ?></p>
        <a href="index.php?action=product-edit&id=<?= $product->getId() ?>" type="button" class="btn edit">Editar Produto</a>
        <a href="index.php?action=product-delete&id=<?= $product->getId() ?>" type="button" class="btn delete" onclick="return confirm('Você tem certeza que deseja deletar esse produto?')">Deletar Produto</a>
    </artc>
</div>