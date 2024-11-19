<h1>Products</h1>

<?php

foreach ($params['products'] as $product) : ?>

    <div class="d-flex gap-5">
        <p><?= $product->id ?></p>
        <p><?= $product->name ?></p>
        <p><?= $product->price ?></p>
        <a href="/products/<?= $product->id ?>" class="btn btn-primary">Voir +</a>
    </div>


<?php endforeach ?>