
<?php $this->load->view('include/headers.php');?>


	


	<!-- product section -->
	<section class="product-section">
		<div class="container">
			<div class="back-link">
				<a onclick="goBack()" style="font-size: larger;"> &lt;&lt; Previous</a>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="product-pic-zoom">
					<img src="<?php echo base_url(); ?>uploads/<?php echo $posts['image_1']; ?>" alt="">
					</div>
		<div class="product-thumbs" tabindex="1" style="overflow: hidden; outline: none;">
			<div class="product-thumbs-track">
					<div class="pt active">
						<img src="<?php echo base_url(); ?>uploads/<?php echo $posts['image_1']; ?>" alt="">
					</div>

                    <div class="pt">
						<img src="<?php echo base_url(); ?>uploads/<?php echo $posts['image_2']; ?>" alt="">
					</div>
					<div class="pt">
						<img src="<?php echo base_url(); ?>uploads/<?php echo $posts['image_3']; ?>" alt="">
					</div>
					<div class="pt">
						<img src="<?php echo base_url(); ?>uploads/<?php echo $posts['image_4']; ?>" alt="">
					</div>
			</div>
		</div>
				</div>
				<div class="col-lg-6 product-details">
					<h2 class="p-title"><?php print_r($posts['name']); ?></h2>
					<h3 class="p-price"><?php print_r($posts['price']); ?></h3>
					<h4 class="p-stock">Available: <span>In Stock</span></h4>
					<div class="p-rating">
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o fa-fade"></i>
					</div>
					
					
					<div class="quantity">
						<p>Quantity</p>
                        <div class="pro-qty"><input type="text" value="1"></div>
                    </div>
					<a href="<?php echo base_url();?>home/contact" class="site-btn">Contact us</a>
					<div id="accordion" class="accordion-area">
						<div class="panel">
							<div class="panel-header" id="headingOne">
								<button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">information</button>
							</div>
							<div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="panel-body">
									<p> <?php print_r($posts['description']); ?></p>
								</div>
							</div>
						</div>
						<div class="panel">
							<div class="panel-header" id="headingTwo">
								<button class="panel-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">care details </button>
							</div>
							<div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
								<div class="panel-body">
									<img src="<?php echo base_url();?>assest./img/cards.png" alt="">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integer bibendum sodales arcu id te mpus. Ut consectetur lacus leo, non scelerisque nulla euismod nec.</p>
								</div>
							</div>
						</div>
						<div class="panel">
							<div class="panel-header" id="headingThree">
								<button class="panel-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">shipping & Returns</button>
							</div>
							<div id="collapse3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
								<div class="panel-body">
									<h4>7 Days Returns</h4>
									<p>Cash on Delivery Available<br>Home Delivery <span>3 - 4 days</span></p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integer bibendum sodales arcu id te mpus. Ut consectetur lacus leo, non scelerisque nulla euismod nec.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="social-sharing">
						<a href=""><i class="fa fa-google-plus"></i></a>
						<a href=""><i class="fa fa-pinterest"></i></a>
						<a href=""><i class="fa fa-facebook"></i></a>
						<a href=""><i class="fa fa-twitter"></i></a>
						<a href=""><i class="fa fa-youtube"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- product section end -->


	<!-- RELATED PRODUCTS section -->
	<section class="related-product-section">
		<div class="container">
			<div class="section-title">
				<h2>RELATED PRODUCTS</h2>
			</div>
			<div class="product-slider owl-carousel">
				<div class="product-item">
					<div class="pi-pic">
						<img src="<?php echo base_url();?>assest/img/product/1.jpg" alt="">
						<div class="pi-links">
							
							<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
						</div>
					</div>
					<div class="pi-text">
					
						<p>Comming Soon</p>
					</div>
				</div>
				<div class="product-item">
					<div class="pi-pic">
						<div class="tag-new">New</div>
						<img src="<?php echo base_url();?>assest/img/product/2.jpg" alt="">
						<div class="pi-links">
							
							<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
						</div>
					</div>
					<div class="pi-text">
					
						<p>Comming Soon</p>
					</div>
				</div>
				<div class="product-item">
					<div class="pi-pic">
						<img src="<?php echo base_url();?>assest/img/product/3.jpg" alt="">
						<div class="pi-links">
							
							<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
						</div>
					</div>
					<div class="pi-text">
						
						<p>Comming Soon</p>
					</div>
				</div>
				<div class="product-item">
						<div class="pi-pic">
							<img src="<?php echo base_url();?>assest/img/product/4.jpg" alt="">
							<div class="pi-links">
								
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							
							<p>Comming Soon</p>
						</div>
					</div>
				<div class="product-item">
					<div class="pi-pic">
						<img src="<?php echo base_url();?>assest/img/product/6.jpg" alt="">
						<div class="pi-links">
							
							<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
						</div>
					</div>
					<div class="pi-text">
						
						<p>Comming Soon</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- RELATED PRODUCTS section end -->


<?php $this->load->view('include/footer.php');?>


<script>
function goBack() {
  window.history.back();
}
</script>