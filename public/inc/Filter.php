 <!-- Filter Bar -->
 <div class="container filter-bar my-4">
     <div class="d-flex justify-content-between align-items-center">
         <!-- Filters -->
         <div class="d-flex flex-wrap gap-2">
             <!-- Dropdown: Headphone Type -->
             <div class="dropdown">
                 <button
                     class="btn btn-light rounded-pill dropdown-toggle"
                     type="button"
                     id="dropdownHeadphoneType"
                     data-bs-toggle="dropdown"
                     aria-expanded="false">
                     Headphone Type
                 </button>
                 <ul class="dropdown-menu" aria-labelledby="dropdownHeadphoneType">
                     <li><a class="dropdown-item" href="#">Over-ear</a></li>
                     <li><a class="dropdown-item" href="#">In-ear</a></li>
                     <li><a class="dropdown-item" href="#">On-ear</a></li>
                 </ul>
             </div>

             <!-- Dropdown: Price -->
             <div class="dropdown">
                 <button
                     class="btn btn-light rounded-pill dropdown-toggle"
                     type="button"
                     id="dropdownPrice"
                     data-bs-toggle="dropdown"
                     aria-expanded="false">
                     Price
                 </button>
                 <ul class="dropdown-menu" aria-labelledby="dropdownPrice">
                     <li><a class="dropdown-item" href="#">$0 - $50</a></li>
                     <li><a class="dropdown-item" href="#">$50 - $100</a></li>
                     <li><a class="dropdown-item" href="#">$100+</a></li>
                 </ul>
             </div>

             <!-- Dropdown: Review -->
             <div class="dropdown">
                 <button
                     class="btn btn-light rounded-pill dropdown-toggle"
                     type="button"
                     id="dropdownReview"
                     data-bs-toggle="dropdown"
                     aria-expanded="false">
                     Review
                 </button>
                 <ul class="dropdown-menu" aria-labelledby="dropdownReview">
                     <li><a class="dropdown-item" href="#">1 Star</a></li>
                     <li><a class="dropdown-item" href="#">2 Stars</a></li>
                     <li><a class="dropdown-item" href="#">3 Stars</a></li>
                     <li><a class="dropdown-item" href="#">4 Stars</a></li>
                     <li><a class="dropdown-item" href="#">5 Stars</a></li>
                 </ul>
             </div>

             <!-- Dropdown: Color -->
             <div class="dropdown">
                 <button
                     class="btn btn-light rounded-pill dropdown-toggle"
                     type="button"
                     id="dropdownColor"
                     data-bs-toggle="dropdown"
                     aria-expanded="false">
                     Color
                 </button>
                 <ul class="dropdown-menu" aria-labelledby="dropdownColor">
                     <li><a class="dropdown-item" href="#">Black</a></li>
                     <li><a class="dropdown-item" href="#">White</a></li>
                     <li><a class="dropdown-item" href="#">Blue</a></li>
                     <li><a class="dropdown-item" href="#">Red</a></li>
                 </ul>
             </div>

             <!-- Button: All Filters -->
             <button type="button" class="btn btn-light rounded-pill">
                 All Filters <i class="fas fa-sliders-h"></i>
             </button>
         </div>

         <!-- Sort By -->
         <div class="dropdown">
             <button
                 class="btn btn-outline-secondary rounded-pill dropdown-toggle sort"
                 type="button"
                 id="dropdownSortBy"
                 data-bs-toggle="dropdown"
                 aria-expanded="false">
                 Sort by
             </button>
             <ul class="dropdown-menu" aria-labelledby="dropdownSortBy">
                 <li><a class="dropdown-item" href="#">Price</a></li>
                 <li><a class="dropdown-item" href="#">Popularity</a></li>
                 <li><a class="dropdown-item" href="#">Newest</a></li>
             </ul>
         </div>
     </div>
 </div>