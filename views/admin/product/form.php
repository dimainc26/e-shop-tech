<h1><?= $params['product']->name ?? 'Create New Product' ?></h1>

<form class="container form" action="<?= isset($params['product']) ? "/admin/products/edit/{$params['product']->id}" : "/admin/products/createPost" ?>" method="post">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="input form-control" id="name" name="name" value="<?= $params['product']->name ?? '' ?>" />
    </div>
    <div class="form-group">
        <label for="img">Img</label>
        <input type="text" class="input form-control" id="img" name="img" value="<?= $params['product']->img ?? '' ?>" />
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input type="text" class="input form-control" id="price" name="price" value="<?= $params['product']->price ?? '' ?>" />
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <input type="text" class="input form-control" id="content" name="content" value="<?= $params['product']->content ?? '' ?>" />
    </div>
    <div class="form-group">
        <label for="model">Model</label>
        <input type="text" class="input form-control" id="model" name="model" value="<?= $params['product']->model ?? '' ?>" />
    </div>
    <div class="form-group">
        <label for="brand">Brand</label>
        <input type="text" class="input form-control" id="brand" name="brand" value="<?= $params['product']->brand ?? '' ?>" />
    </div>
    <label for="colors">Colors</label>
    <select multiple class="form-select" id="colors" name="colors[]" aria-label="Default select example">
        <?php foreach ($params['color'] as $color) : ?>
            <option value="<?= $color->id ?>"

                <?php if (isset($params['product'])) : ?>
                <?php foreach ($params['product']->colors() as $productColor) {
                        echo ($color->id  === $productColor->id) ? 'selected' : '';
                    } ?>
                <?php endif ?>><?= $color->name ?>
            </option>
        <?php endforeach ?>
    </select>
    </div>
    <button type="submit" class="btn btn-primary"><?= isset($params['product']) ? 'Update' : 'Save' ?></button>
</form>