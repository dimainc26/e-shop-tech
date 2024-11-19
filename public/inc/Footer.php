<!-- Footer -->
<footer class="footer py-5 bg-light">
    <div class="container">
        <div class="row">
            <!-- Logo e Descrizione -->
            <div class="col-md-4">
                <div class="footer-brand">
                    <img
                        src="./assets/imgs/shopcart-logo.png"
                        alt="Shopcart Logo"
                        class="footer-logo mb-3" />
                    <p class="footer-description">
                        Amet minim mollit non deserunt ullamco est sit aliqua dolor do
                        amet sint. Velit officia consequat duis enim velit mollit.
                    </p>
                </div>
                <h5 class="mt-4">Accepted Payments</h5>
                <div class="d-flex flex-wrap gap-2 mt-2">
                    <img
                        src="./assets/imgs/payments/stripe.png"
                        alt="Stripe"
                        class="payment-logo" />
                    <img
                        src="./assets/imgs/payments/visa.png"
                        alt="Visa"
                        class="payment-logo" />
                    <img
                        src="./assets/imgs/payments/mastercard.png"
                        alt="MasterCard"
                        class="payment-logo" />
                    <img
                        src="./assets/imgs/payments/paypal.png"
                        alt="PayPal"
                        class="payment-logo" />
                    <img
                        src="./assets/imgs/payments/apple-pay.png"
                        alt="Apple Pay"
                        class="payment-logo" />
                    <img
                        src="./assets/imgs/payments/google-pay.png"
                        alt="Google Pay"
                        class="payment-logo" />
                </div>
            </div>

            <!-- Link delle categorie -->
            <div class="col-md-2">
                <h5 class="footer-title">Department</h5>
                <ul class="footer-links">
                    <li><a href="#">Fashion</a></li>
                    <li><a href="#">Education Product</a></li>
                    <li><a href="#">Frozen Food</a></li>
                    <li><a href="#">Beverages</a></li>
                    <li><a href="#">Organic Grocery</a></li>
                    <li><a href="#">Office Supplies</a></li>
                    <li><a href="#">Beauty Products</a></li>
                    <li><a href="#">Books</a></li>
                    <li><a href="#">Electronics & Gadget</a></li>
                    <li><a href="#">Travel Accessories</a></li>
                    <li><a href="#">Fitness</a></li>
                    <li><a href="#">Sneakers</a></li>
                    <li><a href="#">Toys</a></li>
                    <li><a href="#">Furniture</a></li>
                </ul>
            </div>

            <!-- Link "About Us" -->
            <div class="col-md-2">
                <h5 class="footer-title">About Us</h5>
                <ul class="footer-links">
                    <li><a href="#">About Shopcart</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">News & Blog</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">Press Center</a></li>
                    <li><a href="#">Shop By Location</a></li>
                    <li><a href="#">Shopcart Brands</a></li>
                    <li><a href="#">Affiliate & Partners</a></li>
                    <li><a href="#">Ideas & Guides</a></li>
                </ul>
            </div>

            <!-- Link "Services" -->
            <div class="col-md-2">
                <h5 class="footer-title">Services</h5>
                <ul class="footer-links">
                    <li><a href="#">Gift Card</a></li>
                    <li><a href="#">Mobile App</a></li>
                    <li><a href="#">Shipping & Delivery</a></li>
                    <li><a href="#">Order Pickup</a></li>
                    <li><a href="#">Account Signup</a></li>
                </ul>
            </div>

            <!-- Link "Help" -->
            <div class="col-md-2">
                <h5 class="footer-title">Help</h5>
                <ul class="footer-links">
                    <li><a href="#">Shopcart Help</a></li>
                    <li><a href="#">Returns</a></li>
                    <li><a href="#">Track Orders</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Feedback</a></li>
                    <li><a href="#">Security & Fraud</a></li>
                </ul>
            </div>
        </div>
        <div class="d-flex py-2 justify-content-center align-items-center">
            <a class="link" href="https://dimazanre.com"> © Copyright By <?= $params['creator']->first_name ?>, <?= $params['creator']->location ?> </a>
        </div>
    </div>
</footer>

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>