<!-- OnTop -->
<div class="top-bar text-white py-2">
    <div class="container d-flex justify-content-between align-items-center">
        <!-- Left Section -->
        <div class="d-flex align-items-center">
            <i class="fas fa-phone me-2"></i>
            <span><?= $params['creator']->phone ?></span>
        </div>

        <!-- Center Section -->
        <div class="text-center">
            <span>Get 50% Off on Selected Items</span>
            <a href="#" class="text-white ms-2">Shop Now</a>
        </div>

        <!-- Right Section -->
        <div class="d-flex align-items-center">
            <div class="dropdown me-3">
                <a
                    class="text-white dropdown-toggle"
                    href="#"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Eng
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">English</a></li>
                    <li><a class="dropdown-item" href="#">Italiano</a></li>
                    <li><a class="dropdown-item" href="#">Français</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <a
                    class="text-white dropdown-toggle"
                    href="#"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Location
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">USA</a></li>
                    <li><a class="dropdown-item" href="#">UK</a></li>
                    <li><a class="dropdown-item" href="#">Italia</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>