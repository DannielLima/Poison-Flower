<!DOCTYPE html>
<html>
<head>
    <title>POISON FLOWER</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <section class="section">
        <div class="container">
            <h2 class="title has-text-centered">Carrinho</h2>
            <div class="table-container">
                <table class="table is-fullwidth is-hoverable">
                    <thead>
                        <tr>
                            <th>Produto</th>
                            <th>Quantidade</th>
                            <th>Preço</th>
                            <th>Total</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($cart)): ?>
                            <?php foreach ($cart as $item): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($item['product_name'], ENT_QUOTES, 'UTF-8'); ?></td>
                                    <td><?php echo htmlspecialchars($item['quantity'], ENT_QUOTES, 'UTF-8'); ?></td>
                                    <td>R$<?php echo number_format($item['price'], 2, ',', '.'); ?></td>
                                    <td>R$<?php echo number_format($item['quantity'] * $item['price'], 2, ',', '.'); ?></td>
                                    <td>
                                        <a href="index.php?page=cart&action=remove&id=<?php echo htmlspecialchars($item['id'], ENT_QUOTES, 'UTF-8'); ?>" class="button is-danger is-small">
                                            <span class="icon"><i class="fas fa-trash"></i></span>
                                            <span>Excluir</span>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="5" class="has-text-centered">Seu carrinho está vazio.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
            <?php if (!empty($cart)): ?>
                <div class="has-text-centered mt-5">
                    <a href="views/cart/checkout.php" class="button is-primary is-large">
                        <span class="icon"><i class="fas fa-shopping-cart"></i></span>
                        <span>Finalizar Compra</span>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</body>
</html>