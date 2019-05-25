<?php 
//echo'<pre>'; print_r($posts2[0]->id); die();
 $this->load->view('include/headers.php');

?>


	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="<?php echo base_url();?>assest/img/bg.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<span>New Arrivals</span>
							<h2>Design Your Style</h2>
							<p>Every modern home must have a WC fitted that is connected direct to the drainage system, with a basin fitted next to the WC with a supply of hot and cold water. In addition, every home must have a fixed bath or shower with a hot and cold water supply, and all appliance connections that are connected to the drainage system must have a trap to prevent odours and dangerous gases building up inside. </p>
							<a href="#" class="site-btn sb-line">DISCOVER</a>
							<a href="<?php echo base_url();?>home/contact" class="site-btn sb-white">CONTACT US</a>
						</div>
					</div>
				<!-- 	<div class="offer-card text-white">
						<span>from</span>
						<h2>$29</h2>
						<p>SHOP NOW</p>
					</div> -->
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="<?php echo base_url();?>assest/img/bg-2.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<span  style="color: black;">New Arrivals</span>
							<h2  style="color: black;">Sanitaryware</h2>
							<p  style="color: black;">However, sanitary appliances are now made from a wide range of materials, including metals, acrylics, glass, and so on, and ‘sanitaryware’ is sometimes now interpreted to include a wider range of appliances that might be found in sanitary installations such as baths, showers, bins, incinerators, macerators, and so on. </p>
							<a href="#" class="site-btn sb-line"  style="color: black;">DISCOVER</a>
							<a href="<?php echo base_url();?>home/contact" class="site-btn sb-white"  style="color: black;">CONTACT US</a>
						</div>
					</div>
				<!-- 	<div class="offer-card text-white">
						<span>from</span>
						<h2>999</h2><h3> Rs.</h3>
						<p>SHOP NOW</p>
					</div> -->
				</div>
			</div>
		</div>
		<div class="container">
			<div class="slide-num-holder" id="snh-1"></div>
		</div>
	</section>
	<!-- Hero section end -->



	<!-- Features section -->
	<section class="features-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="<?php echo base_url();?>assest/img/icons/1.png" alt="#">
						</div>
						<h2>Fast Secure Payments</h2>
					</div>
				</div>
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="<?php echo base_url();?>assest/img/icons/2.png" alt="#">
						</div>
						<h2>Premium Products</h2>
					</div>
				</div>
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="<?php echo base_url();?>assest/img/icons/3.png" alt="#">
						</div>
						<h2>Free & fast Delivery</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Features section end -->


	<!-- letest product section -->
	<section class="top-letest-product-section">
		<div class="container">
			<div class="section-title">
				<h2>LATEST PRODUCTS</h2>
			</div>
			<div class="product-slider owl-carousel">
				<div class="product-item">
					<div class="pi-pic">
						<img src="<?php echo base_url(); ?>uploads/<?php echo $posts[0]->image_1; ?>" alt="">
						<div class="pi-links">
							<!-- <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a> -->
							<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
						</div>
					</div>
					<div class="pi-text">
						<!-- <h6><?php print_r($posts[0]->price); ?> </h6> -->
						<p><?php print_r($posts[0]->name); ?> </p>
					</div>
				</div>
				<div class="product-item">
					<div class="pi-pic">
						<div class="tag-new">New</div>
						<img src="<?php echo base_url(); ?>uploads/<?php echo $posts[1]->image_1; ?>" alt="">
						<div class="pi-links">
						<!-- 	<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a> -->
							<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
						</div>
					</div>
					<div class="pi-text">
					<!-- 	<h6><?php print_r($posts[1]->price); ?> </h6> -->
						<p><?php print_r($posts[1]->name); ?> </p>
					</div>
				</div>
				<div class="product-item">
					<div class="pi-pic">
						<img src="<?php echo base_url(); ?>uploads/<?php echo $posts[2]->image_1; ?>" alt="">
						<div class="pi-links">
							<!-- <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a> -->
							<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
						</div>
					</div>
					<div class="pi-text">
						<!-- <h6><?php print_r($posts[2]->price); ?> </h6> -->
						<p><?php print_r($posts[2]->name); ?> </p>
					</div>
				</div>
				<div class="product-item">
						<div class="pi-pic">
							<img src="<?php echo base_url(); ?>uploads/<?php echo $posts[3]->image_1; ?>" alt="">
							<div class="pi-links">
							<!-- 	<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a> -->
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
							<div class="pi-text">
						<!-- <h6><?php print_r($posts[3]->price); ?> </h6> -->
						<p><?php print_r($posts[3]->name); ?> </p>
					</div>
					</div>
				<div class="product-item">
						<div class="pi-pic">
							<img src="<?php echo base_url(); ?>uploads/<?php echo $posts[4]->image_1; ?>" alt="">
							<div class="pi-links">
								<!-- <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a> -->
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
					<!-- 	<h6><?php print_r($posts[4]->price); ?> </h6> -->
						<p><?php print_r($posts[4]->name); ?> </p>
					</div>
					</div>
			</div>
		</div>
	</section>
	<!-- letest product section end -->



	<!-- Product filter section -->
	<section class="product-filter-section">
		<div class="container">
			<div class="section-title">
				<h2>BROWSE TOP SELLING PRODUCTS</h2>
			</div>
			<ul class="product-filter-menu">
				<li><a>EWCs</a></li>
							<li><a>Wash basins</a></li>
						
							<li><a>Urinals</a></li>
						
							<li><a>Cisterns</a></li>
							<li><a>Seat Covers</a></li>
						
							<li><a>Green Products</a></li>
							<li><a>Kids range</a></li>
			</ul>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="<?php echo base_url(); ?>uploads/<?php echo $posts1[0]->image_1; ?>" alt="">
							<div class="pi-links">
								<!-- <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a> -->
								<?php if (!empty($posts1)) {
								?><a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a><?php
								}?>
							</div>
						</div>
						<div class="pi-text">
				<!-- 			<h6><?php print_r($posts1[0]->price); ?></h6> -->
							<p><?php print_r($posts1[0]->name); ?></p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<div class="tag-sale">ON SALE</div>
							<img src="<?php echo base_url(); ?>uploads/<?php echo $posts1[1]->image_1; ?>" alt="">
							<div class="pi-links">
								<!-- <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a> -->
								<?php if (!empty($posts1)) {
								?><a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a><?php
								}?>
							</div>
						</div>
							<div class="pi-text">
					<!-- 		<h6><?php print_r($posts1[1]->price); ?></h6> -->
							<p><?php print_r($posts1[1]->name); ?></p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="<?php echo base_url(); ?>uploads/<?php echo $posts1[2]->image_1; ?>" alt="">
							<div class="pi-links">
								<!-- <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a> -->
								<?php if (!empty($posts1)) {
								?><a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a><?php
								}?>
							</div>
						</div>
						<div class="pi-text">
						<!-- 	<h6><?php print_r($posts1[2]->price); ?></h6> -->
							<p><?php print_r($posts1[2]->name); ?></p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="<?php echo base_url(); ?>uploads/<?php echo $posts1[3]->image_1; ?>" alt="">
							<div class="pi-links">
								<!-- <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a> -->
								<?php if (!empty($posts1)) {
								?><a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a><?php
								}?>
							</div>
						</div>
							<div class="pi-text">
					<!-- 		<h6><?php print_r($posts1[3]->price); ?></h6> -->
							<p><?php print_r(@$posts1[3]->name); ?></p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="<?php echo base_url(); ?>uploads/<?php echo @$posts2[0]->image_1; ?>" alt="">
							<div class="pi-links">
								<!-- <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a> -->
								<?php if (!empty($posts2)) {
								?><a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a><?php
								}?>
							</div>
						</div>
						<div class="pi-text">
							<!-- <h6><?php print_r(@$posts2[0]->price); ?></h6> -->
							<p><?php print_r(@$posts2[0]->name); ?></p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="<?php echo base_url(); ?>uploads/<?php echo @$posts2[1]->image_1; ?>" alt="">
							<div class="pi-links">
								<!-- <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a> -->
								<?php if (!empty($posts2)) {
								?><a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a><?php
								}?>
							</div>
						</div>
							<div class="pi-text">
					<!-- 		<h6><?php print_r($posts2[1]->price); ?></h6> -->
							<p><?php print_r(@$posts2[1]->name); ?></p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="<?php echo base_url(); ?>uploads/<?php echo @$posts2[2]->image_1; ?>" alt="">
							<div class="pi-links">
								<!-- <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a> -->
								<?php if (!empty($posts2)) {
								?><a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a><?php
								}?>
							</div>
						</div>
							<div class="pi-text">
						<!-- 	<h6><?php print_r($posts2[2]->price); ?></h6> -->
							<p><?php print_r(@$posts2[2]->name); ?></p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="<?php echo base_url(); ?>uploads/<?php echo @$posts2[3]->image_1; ?>" alt="">
							<div class="pi-links">
								<!-- <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a> -->
								<?php if (!empty($posts2)) {
								?><a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a><?php
								}?>
							</div>
						</div>
						<div class="pi-text">
							<!-- <h6><?php print_r($posts2[3]->price); ?></h6> -->
							<p><?php print_r(@$posts2[3]->name); ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="text-center pt-5">
				<a href="<?php echo base_url();?>home/contact" class="site-btn sb-line sb-dark">Contact US
				</a>
			</div>
		</div>
	</section>
	<!-- Product filter section end -->


	<!-- Banner section -->
	<section class="banner-section">
		<div class="container">
			<div class="banner set-bg" data-setbg="<?php echo base_url();?>assest/img/banner-bg.jpg">
				<div class="tag-new">NEW</div>
				<span>New Arrivals</span>
				<h2>Spacial Need Range</h2>
				<a href="#" class="site-btn">SHOP NOW</a>
			</div>
		</div>
	</section>
	<!-- Banner section end  -->


<?php $this->load->view('include/footer.php');?>
