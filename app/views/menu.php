<body class="home-one">
   <!--[if lt IE 8]>
   <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
   <![endif]-->
   <!-- Add your site or application content here -->
   <!-- header area start -->
   <header class="short-stor">
   <!-- <link rel="icon" href="../public/template/img/icon_1.png" type="img/x-icon"> -->
      <div class="container-fluid">
         <div class="row">
            <!-- logo start -->
            <div class="col-md-3 col-sm-12 text-center nopadding-right">
               <div class="top-logo">
                  <a href="<?php echo BASE_URL ?>"><img src="<?php echo BASE_URL ?>/public/template/img/logo_1.png" alt="" /></a>
               </div>
            </div>
            <!-- logo end -->
            <!-- mainmenu area start -->
            <div class="col-md-6 text-center">
               <div class="mainmenu">
                  <nav>
                     <ul>
                        <li><a href="<?php echo BASE_URL ?>">Trang chủ</a></li>
                        <li class="expand">
                        <a href="<?php echo BASE_URL ?>/sanpham/danhmuc/1">Sản phẩm</a>
                           <ul class="restrain sub-menu">
                              <?php foreach($categoryFE as $key => $category) {?>
                              <li><a href="<?php echo BASE_URL ?>/sanpham/danhmuc/<?php echo $category['c_id'] ?>"><?php echo $category['c_name'] ?></a></li>
                              <?php } ?>
                           </ul>
                        </li>
                        <li class="expand">
                           <a href="<?php echo BASE_URL ?>/tintuc/danhmuc/8">Tin tức</a>
                           <ul class="restrain sub-menu">
                              <?php foreach($artisanFE as $key => $artisan) {?>
                              <li><a href="<?php echo BASE_URL?>/tintuc/danhmuc/<?php echo $artisan['a_id']?>"><?php echo $artisan['a_name'] ?></a></li>
                              <?php } ?>
                           </ul>
                        </li>
                     </ul>
                  </nav>
               </div>
               <!-- mobile menu start -->
               <div class="row">
                  <div class="col-sm-12 mobile-menu-area">
                     <div class="mobile-menu hidden-md hidden-lg" id="mob-menu">
                        <span class="mobile-menu-title">Menu</span>
                        <nav>
                           <ul>
                              <li>
                                 <a href="index.html">Home</a>
                                 <ul>
                                    <li><a href="index-2.html">Home 2</a></li>
                                    <li><a href="index-3.html">Home 3</a></li>
                                    <li><a href="index-4.html">Home 4</a></li>
                                    <li><a href="index-5.html">Home 5</a></li>
                                    <li><a href="index-6.html">Home 6</a></li>
                                    <li><a href="index-7.html">Home 7</a></li>
                                    <li><a href="index-8.html">Home 8</a></li>
                                 </ul>
                              </li>
                              <li>
                                 <a href="shop-grid.html">Man</a>
                                 <ul>
                                    <li>
                                       <a href="shop-grid.html">Dresses</a>
                                       <ul>
                                          <li><a href="shop-grid.html">Coctail</a></li>
                                          <li><a href="shop-grid.html">Day</a></li>
                                          <li><a href="shop-grid.html">Evening </a></li>
                                          <li><a href="shop-grid.html">Sports</a></li>
                                       </ul>
                                    </li>
                                    <li>
                                       <a class="mega-menu-title" href="shop-grid.html"> Handbags </a>
                                       <ul>
                                          <li><a href="shop-grid.html">Blazers</a></li>
                                          <li><a href="shop-grid.html">Table</a></li>
                                          <li><a href="shop-grid.html">Coats</a></li>
                                          <li><a href="shop-grid.html">Kids</a></li>
                                       </ul>
                                    </li>
                                    <li>
                                       <a class="mega-menu-title" href="shop-grid.html"> Clothing </a>
                                       <ul>
                                          <li><a href="shop-grid.html">T-Shirt</a></li>
                                          <li><a href="shop-grid.html">Coats</a></li>
                                          <li><a href="shop-grid.html">Jackets</a></li>
                                          <li><a href="shop-grid.html">Jeans</a></li>
                                       </ul>
                                    </li>
                                 </ul>
                              </li>
                              <li>
                                 <a href="shop-list.html">Women</a>
                                 <ul>
                                    <li>
                                       <a href="shop-grid.html">Rings</a>
                                       <ul>
                                          <li><a href="shop-grid.html">Coats & Jackets</a></li>
                                          <li><a href="shop-grid.html">Blazers</a></li>
                                          <li><a href="shop-grid.html">Jackets</a></li>
                                          <li><a href="shop-grid.html">Rincoats</a></li>
                                       </ul>
                                    </li>
                                    <li>
                                       <a href="shop-grid.html">Dresses</a>
                                       <ul>
                                          <li><a href="shop-grid.html">Ankle Boots</a></li>
                                          <li><a href="shop-grid.html">Footwear</a></li>
                                          <li><a href="shop-grid.html">Clog Sandals</a></li>
                                          <li><a href="shop-grid.html">Combat Boots</a></li>
                                       </ul>
                                    </li>
                                    <li>
                                       <a href="shop-grid.html">Accessories</a>
                                       <ul>
                                          <li><a href="shop-grid.html">Bootees bags</a></li>
                                          <li><a href="shop-grid.html">Blazers</a></li>
                                          <li><a href="shop-grid.html">Jackets</a></li>
                                          <li><a href="shop-grid.html">Jackets</a></li>
                                       </ul>
                                    </li>
                                    <li>
                                       <a href="shop-grid.html">Top</a>
                                       <ul>
                                          <li><a href="shop-grid.html">Briefs</a></li>
                                          <li><a href="shop-grid.html">Camis</a></li>
                                          <li><a href="shop-grid.html">Nigntwears</a></li>
                                          <li><a href="shop-grid.html">Shapewears</a></li>
                                       </ul>
                                    </li>
                                 </ul>
                              </li>
                              <li>
                                 <a href="shop-grid.html">Shop</a>
                                 <ul>
                                    <li>
                                       <a href="shop-list.html">Shop Pages</a>
                                       <ul>
                                          <li><a href="shop-list.html">List View </a></li>
                                          <li><a href="shop-grid.html">Grid View</a></li>
                                          <li><a href="login.html">My Account</a></li>
                                          <li><a href="wishlist.html">Wishlist</a></li>
                                          <li><a href="cart.html">Cart </a></li>
                                          <li><a href="checkout.html">Checkout </a></li>
                                       </ul>
                                    </li>
                                    <li>
                                       <a href="product-details.html">Product Types</a>
                                       <ul>
                                          <li><a href="product-details.html">Simple Product</a></li>
                                          <li><a href="product-details.html">Variables Product</a></li>
                                          <li><a href="product-details.html">Grouped Product</a></li>
                                          <li><a href="product-details.html">Downloadable</a></li>
                                          <li><a href="product-details.html">Virtual Product</a></li>
                                          <li><a href="product-details.html">External Product</a></li>
                                       </ul>
                                    </li>
                                 </ul>
                              </li>
                              <li>
                                 <a href="#">Pages</a>
                                 <ul>
                                    <li><a href="shop-grid.html">Shop Grid</a></li>
                                    <li><a href="shop-list.html">Shop List</a></li>
                                    <li><a href="product-details.html">Product Details</a></li>
                                    <li><a href="contact-us.html">Contact Us</a></li>
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="cart.html">Shopping cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="404.html">404 Error</a></li>
                                 </ul>
                              </li>
                              <li><a href="about-us.html">About Us</a></li>
                              <li><a href="contact-us.html">Contact Us</a></li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
               <!-- mobile menu end -->
            </div>
            <!-- mainmenu area end -->
            <!-- top details area start -->
            <div class="col-md-3 col-sm-12 nopadding-left">
               <div class="top-detail">
                  <!-- language division start -->
                  <div class="disflow">
                     <div class="expand lang-all disflow">
                        <a href="#"><img src="<?php echo BASE_URL ?>/public/template/img/country/vietnam.png" alt="">VietNam</a>
                        <ul class="restrain language">
                           <li><a href="#"><img src="<?php echo BASE_URL ?>/public/template/img/country/en.gif" alt="">English</a></li>
                        </ul>
                     </div>
                     
                  </div>
                  <!-- language division end -->
                  <!-- addcart top start -->
                  <div class="disflow">
                     <div class="circle-shopping expand">
                        <div class="shopping-carts text-right">
                           <div class="cart-toggler">
                              <a href="<?php echo BASE_URL ?>/cart"><i class="icon-bag"></i></a>
                           </div>
                           <div class="restrain ">
                              <!-- <ul class="cart-list">
                                 <li>
                                    <a class="sm-cart-product" href="product-details.html">
                                    <img src="<?php echo BASE_URL ?>/public/template/img/products/sm-products/cart1.jpg" alt="">
                                    </a>
                                    <div class="small-cart-detail">
                                       <a class="remove" href="#"><i class="fa fa-times-circle"></i></a>
                                       <a href="#" class="edit-btn"><img src="<?php echo BASE_URL ?>/public/template/img/btn_edit.gif" alt="Edit Button" /></a>
                                       <a class="small-cart-name" href="product-details.html">Voluptas nulla</a>
                                       <span class="quantitys"><strong>1</strong>x<span>$75.00</span></span>
                                    </div>
                                 </li>
                                 <li>
                                    <a class="sm-cart-product" href="product-details.html">
                                    <img src="<?php echo BASE_URL ?>/public/template/img/products/sm-products/cart2.jpg" alt="">
                                    </a>
                                    <div class="small-cart-detail">
                                       <a class="remove" href="#"><i class="fa fa-times-circle"></i></a>
                                       <a href="#" class="edit-btn"><img src="<?php echo BASE_URL ?>/public/template/img/btn_edit.gif" alt="Edit Button" /></a>
                                       <a class="small-cart-name" href="product-details.html">Donec ac tempus</a>
                                       <span class="quantitys"><strong>1</strong>x<span>$75.00</span></span>
                                    </div>
                                 </li>
                              </ul>
                              <p class="total">Subtotal: <span class="amount">$155.00</span></p>
                              <p class="buttons">
                                 <a href="checkout.html" class="button">Checkout</a> -->
                              <!-- </p> -->
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- addcart top start -->
                  <!-- search divition start -->
                  <div class="disflow">
                     <div class="header-search expand">
                        <div class="search-icon fa fa-search"></div>
                        <div class="product-search restrain">
                           <div class="container nopadding-right">
                              <form action="index.html" id="searchform" method="get">
                                 <div class="input-group">
                                    <input type="text" class="form-control" maxlength="128" placeholder="Search product...">
                                    <span class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                    </span>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- search divition end -->
                  <div class="disflow">
                     <div class="expand dropps-menu">
                        <a href="#"><i class="fa fa-align-right"></i></a>
                        <ul class="restrain language">
                           <?php if(Session::get('user')==true){?>
                              <li><a href="<?php echo BASE_URL ?>/user/dangxuat">Đăng xuất</a></li>
                              <?php }else{ ?>
                                 <li><a href="<?php echo BASE_URL ?>/user/login">Đăng nhập</a></li>
                                 <li><a href="<?php echo BASE_URL ?>/user/register">Đăng ký</a></li>
                              <?php }?>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <!-- top details area end -->
         </div>
      </div>
   </header>