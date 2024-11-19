<?php if (isset($_GET['success'])) : ?>
    <div class="alert alert-success">Vous etes connecté</div>
<?php endif ?>

<h1>Admin products</h1>

<a href="/admin/products/create" class="btn btn-success my-5">Add Product</a>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Brand</th>
            <th scope="col">Model</th>
            <th scope="col">Colors</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($params['products'] as $product) : ?>
            <tr>
                <th scope="row"><?= $product->id ?></th>
                <td><?= $product->name ?></td>
                <td><?= $product->brand ?></td>
                <td><?= $product->model ?></td>
                <td><?= $product->id ?></td>
                <td>
                    <a href="/admin/products/edit/<?= $product->id ?>" class="btn btn-warning">Modifier</a>
                    <form method="post" action="/admin/products/delete/<?= $product->id ?>" class="form d-inline">
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
        <?php endforeach  ?>
    </tbody>
</table>