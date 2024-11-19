<div class="col-md-4 col-lg-3">
    <div class="product-card shadow-sm">
        <!-- Image Section -->
        <div class="product-image">
            <img
                src="./assets/imgs/heads/sony-black.png"
                alt="Product Image" />
            <button class="btn wishlist-btn">
                <i class="far fa-heart"></i>
            </button>
        </div>
        <!-- Details Section -->
        <div class="product-details">
            <h5 class="product-title"><?= $prod->name ?></h5>
            <p class="product-description">
                <?= $prod->getExerpt ?>
            </p>
            <div class="product-rating">
                <span class="text-success"><i class="fas fa-star"></i> 4.5</span>
                <span class="text-muted small">(121)</span>
            </div>
            <div
                class="product-price-cart d-flex justify-content-between align-items-center">
                <span class="product-price">$ <?= $prod->price ?></span>
                <button class="btn btn-outline-dark btn-sm">Add to Cart</button>
            </div>
        </div>
    </div>
</div>