<?php
    foreach($productFE as $key => $value){
        $name = $value['c_name'];
    }
?>
<div class="shop-with-sidebar">
			<div class="container">
				<div class="row">
					<!-- left sidebar start -->
					<div class="col-md-3 col-sm-12 col-xs-12 text-left">
						<div class="topbar-left">
							<aside class="widge-topbar">
								<div class="bar-title">
									<div class="bar-ping"><img src="img/bar-ping.png" alt=""></div>
									<h2><?php echo $name ?></h2>
								</div>
							</aside>
							<aside class="sidebar-content">
								<div class="sidebar-title">
									<h6>Thể loại</h6>
								</div>
								<ul class="sidebar-tags">
                                    <?php foreach($categoryFE as $key => $category){?>
									<li><a href="<?php echo BASE_URL ?>/sanpham/danhmuc/<?php echo $category['c_id'] ?>"><?php echo $category['c_name'] ?></a><span> </span></li>
                                    <?php } ?>
								</ul>
							</aside>
							<aside class="sidebar-content">
								
							</aside>
							<aside class="topbarr-category sidebar-content">
								
								<div class="tpbr-menu col-md-12 nopadding">
							
								</div>
							</aside>
						</div>
					</div>
					<!-- left sidebar end -->
					<!-- right sidebar start -->
					<div class="col-md-9 col-sm-12 col-xs-12">
						<!-- shop toolbar start -->
						<div class="shop-content-area">
							<div class="shop-toolbar">
								<div class="col-md-4 col-sm-4 col-xs-12 nopadding-left text-left">
									<form class="tree-most" method="get">
										<div class="orderby-wrapper">
											
											<select name="orderby" class="orderby">
												<option value="menu_order" selected="selected">Mới nhất</option>
												<option value="popularity">Giá: Tăng dần</option>
												<option value="rating">Giá: giảm dần</option>
												<option value="date">Bán chạy nhất</option>
												
											</select>
										</div>
									</form>
								</div>
								<div class="col-md-4 col-sm-4 none-xs text-center">
									<div class="limiter hidden-xs">
										
										<!-- <select>
											<option selected="selected" value="">9</option>
											<option value="">12</option>
											<option value="">24</option>
											<option value="">36</option>
										</select> -->
										        
									</div>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12 nopadding-right text-right">
									<div class="view-mode">
										
									</div>
								</div>
							</div>
						</div>
						<!-- shop toolbar end -->
						<!-- product-row start -->
						<div class="tab-content">
							<div class="tab-pane fade active in" id="shop-grid-tab">
								<div class="row">
									<div class="shop-product-tab first-sale">
                                    <?php foreach($productFE as $key =>$product) {?> 
										<div class="col-lg-4 col-md-4 col-sm-4">
											<div class="two-product">
												<!-- single-product start -->
												<div class="single-product">
													<span class="sale-text">Sale</span>
													<div class="product-img">
														<a href="<?php echo BASE_URL ?>/sanpham/chitietsanpham/<?php echo $product['id'] ?>">
															<img class="primary-image" src="<?php echo BASE_URL ?>/public/admin/images/<?php echo $product['pro_avatar'] ?>" alt="">
															<img class="secondary-image" src="<?php echo BASE_URL ?>/public/admin/images/<?php echo $product['pro_avatar'] ?>" alt="">
														</a>
														<div class="action-zoom">
															<div class="add-to-cart">
																<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
															</div>
														</div>
														<div class="actions">
															<div class="action-buttons">
																<div class="add-to-links">
																	<div class="add-to-wishlist">
																		<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																	</div>
																	<div class="compare-button">
																		<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																	</div>									
																</div>
																<div class="quickviewbtn">
																	<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
																</div>
															</div>
														</div>
														<div class="price-box">
															<span class="new-price"><?php echo $product['pro_price'] ?></span>
														</div>
													</div>
													<div class="product-content">
														<h2 class="product-name"><a href="#"><?php echo $product['pro_name'] ?></a></h2>
														<p> <p>
													</div>
												</div>
												<!-- single-product end -->
											</div>
										</div>
                                    <?php } ?>
									</div>
								</div>
								<!-- product-row end -->
							</div>
						</div>
					</div>
					<!-- right sidebar end -->
				</div>
			</div>
		</div>