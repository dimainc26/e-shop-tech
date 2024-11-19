<?php

require_once './inc/OnTop.php';

require_once './inc/Navbar.php';

require_once './inc/Header.php';

?>

<!-- Section Title -->
<div class="container my-5">
    <h2 class="fw-bold">Headphones For You!</h2>
</div>

<!-- Products in Grid -->
<div class="container pb-5">
    <div class="row g-4">
        <!-- Product Card -->

        <?php foreach ($params['homeProducts'] as $prod) {

            require './inc/products/ProductItem.php';
        } ?>

    </div>
    <div class="product-grid-line"></div>
</div>

<?php

require_once './inc/Brand.php';

require_once './inc/PromoBanner.php';

require_once './inc/SimilarProd.php';

require_once './inc/Service.php';
