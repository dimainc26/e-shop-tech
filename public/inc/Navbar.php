 <!-- Navbar -->
 <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
     <div class="container">
         <!-- Logo -->
         <a
             class="navbar-brand d-flex align-items-center text-success fw-bold"
             href="#">
             <img
                 src="https://via.placeholder.com/40x40"
                 alt="Logo"
                 class="me-2"
                 style="width: 40px; height: 40px" />
             Shopcart
         </a>

         <!-- Toggler for mobile -->
         <button
             class="navbar-toggler"
             type="button"
             data-bs-toggle="collapse"
             data-bs-target="#navbarContent"
             aria-controls="navbarContent"
             aria-expanded="false"
             aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>

         <!-- Navbar content -->
         <div class="collapse navbar-collapse" id="navbarContent">
             <!-- Left Links -->
             <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                 <li class="nav-item dropdown">
                     <a
                         class="nav-link dropdown-toggle"
                         href="#"
                         id="categoriesDropdown"
                         role="button"
                         data-bs-toggle="dropdown"
                         aria-expanded="false">
                         Categories
                     </a>
                     <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
                         <li><a class="dropdown-item" href="#">Electronics</a></li>
                         <li><a class="dropdown-item" href="#">Fashion</a></li>
                         <li><a class="dropdown-item" href="#">Home & Garden</a></li>
                     </ul>
                 </li>
                 <li class="nav-item"><a class="nav-link" href="#">Deals</a></li>
                 <li class="nav-item">
                     <a class="nav-link" href="#">What's New</a>
                 </li>
                 <li class="nav-item"><a class="nav-link" href="#">Delivery</a></li>
             </ul>

             <!-- Search Bar -->
             <form class="d-flex me-3">
                 <input
                     class="form-control"
                     type="search"
                     placeholder="Search Product"
                     aria-label="Search" />
                 <button class="btn btn-outline-success ms-2" type="submit">
                     <i class="fas fa-search"></i>
                 </button>
             </form>

             <!-- Right Icons -->
             <ul class="navbar-nav mb-2 mb-lg-0">
                 <li class="nav-item">
                     <a class="nav-link" href="/login">
                         <i class="fas fa-user"></i> Account
                     </a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="#">
                         <i class="fas fa-shopping-cart"></i> Cart
                     </a>
                 </li>
             </ul>
         </div>
     </div>
 </nav>