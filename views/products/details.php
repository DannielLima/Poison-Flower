<section class="section">
    <div class="container">
        <div class="columns is-vcentered">
            <div class="column is-half">
                <figure class="image is-6by5">
                    <img src="assets/images/<?= $product['image'] ?>" alt="<?= $product['name'] ?>">
                </figure>
            </div>
            <div class="column is-half">
                <h1 class="title is-2 has-text-primary"><?= $product['name'] ?></h1>
                <p class="subtitle is-4 has-text-weight-semibold">R$<?= number_format($product['price'], 2, ',', '.') ?></p>
                <p class="content is-medium"><?= $product['description'] ?></p>
                <br>
                <a href="index.php?page=cart&action=add&id=<?= $product['id'] ?>" class="button is-primary is-fullwidth is-large is-rounded">
                    <span class="icon"><i class="fas fa-cart-plus"></i></span>
                    <span>Adicionar ao Carrinho</span>
                </a>
            </div>
        </div>
    </div>
</section>