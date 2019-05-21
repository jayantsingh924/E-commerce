



  
<?php 
$url = $this->uri->segment(2);
if ($url == 'urinals_view') {
	$url = 'URINALS';
	$table = 'urinal'; 
}
elseif ($url == 'onepiece_view') {
	$url = 'ONE PIECE';
	$table = 'onepiece'; 
}
elseif ($url == 'washbasin_pe_view') {
	$url = 'WASHBASIN PE';
	$table = 'washbasin_pe';
}
elseif ($url == 'tabletop_view') {
	$url = 'TABLE TOP';
	$table = 'tabletop';
}
elseif ($url == 'washbasin_view') {
	$url = 'WASHBASIN';
	$table = 'washbasin';
}
elseif ($url == 'watercloset_view') {
	$url = 'WATER CLOSET';
	$table = 'watercloset';
}
elseif ($url == 'seatcovers_view') {
	$url = 'SEAT COVERS';
	$table = 'seatcovers';
}
elseif ($url == 'pan_view') {
	$url = 'PAN';
	$table = 'pan';
}
elseif ($url == 'couplesuite') {
	$url = 'COULPLE SUITE';
	$table = 'couplesuite';
}
elseif ($url == 'vitrassa') {
	$url = 'VITRASSA';
	$table = 'vitrassa';
}
elseif ($url == 'mattvitrassa_series') {
	$url = 'MATTVITRASSA SERIES';
	$table = 'mattvitrassa_series';
}
elseif ($url == 'vitrassa_series') {
	$url = 'VITRASSA SERIES';
	$table = 'vitrassa_series';
}
elseif ($url == 'new_designer_series') {
	$url = 'NEW DESIGNER SERIES';
	$table = 'new_designer_series';
}
elseif ($url == 'rustic_series') {
	$url = 'RUSTIC SERIES';
	$table = 'rustic_series';
}
elseif ($url == 'vitrasa_washbasin') {
	$url = 'VITRASA WASHBASIN';
	$table = 'vitrasa_washbasin';
}
elseif ($url == 'designer_tabletop') {
	$url = 'DESIGNER TABLETOP';
	$table = 'designer_tabletop';
}
elseif ($url == 'dual_color_one_piece') {
	$url = 'DUAL COLOR ONE PIECE';
	$table = 'dual_color_one_piece';
}
elseif ($url == 'dual_color_orrisa_pan') {
	$url = 'DUAL COLOR ORRISA PAN';
	$table = 'dual_color_orrisa_pan';
}
elseif ($url == 'seat_cover_fitting') {
	$url = 'SEAT COVER FITTING';
	$table = 'seat_cover_fitting';
}
elseif ($url == 'rustic_water_closet') {
	$url = 'RUSTIC WATER CLOSET';
	$table = 'rustic_water_closet';
}
elseif ($url == 'rustic_orrisa_pan') {
	$url = 'RUSTIC ORRISA PAN';
	$table = 'rustic_orrisa_pan';
}
elseif ($url == 'color_range') {
	$url = 'COLOR RANGE';

}
elseif ($url == 'technical_instruction') {
	$url = 'TECHNICAL INSTRUCTION';
}
  $this->load->view('include/headers.php');?>


	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4><?php echo $url; ?></h4>
			<div class="site-pagination">
				<a href="<?php echo base_url();?>home">Home</a> /
				<a href="">Shop</a> /
			</div>
		</div>
	</div>
	<!-- Page info end -->


	<!-- Category section -->
	<section class="category-section spad">
		<div class="container">
			<div class="row">
				

				<div class="col-lg-12  order-1 order-lg-2 mb-5 mb-lg-0">
					<div class="row">
						<div class="col-lg-4 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
						<?php if (!empty($product)) 
						         {
							?><div class="tag-sale">ON SALE</div></i></a><?php
								}
						     else
						     	{?><div class="bgimg">
 
  <div class="middle">
    <h1 style="color: #f51167;">COMING SOON</h1>
    <hr>
  </div>
  
</div><?php 
						        } ?>
									
						<a href="<?php echo site_url('Home/product/'.$product[0]['id'].'/'.$table); ?>"><img src="<?php echo base_url(); ?>uploads/<?php echo $product[0]['image_1']; ?>" alt=""></a>
					<div class="pi-links">
								<!-- <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a> -->
								<?php if (!empty($product[0])) {
								?><a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a><?php
								}?>
					</div>
								</div>
								<div class="pi-text">
									<!-- <h6><?php print_r($product[0]['price']); ?>/Rs</h6> -->
									<p><?php print_r($product[0]['name']); ?></p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
						<a href="<?php echo site_url('Home/product/'.$product[1]['id'].'/'.$table); ?>"><img src="<?php echo base_url(); ?>uploads/<?php echo $product[1]['image_1']; ?>" alt=""></a>
									<div class="pi-links">
								<!-- <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a> -->
								<?php if (!empty($product[1])) {
								?><a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a><?php
								}?>
							</div>
								</div>
								<div class="pi-text">
									<!-- <h6><?php print_r($product[1]['price']); ?>/Rs</h6> -->
									<p><?php print_r($product[1]['name']); ?></p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
						<a href="<?php echo site_url('Home/product/'.$product[2]['id'].'/'.$table); ?>"><img src="<?php echo base_url(); ?>uploads/<?php echo $product[2]['image_1']; ?>" alt=""></a>
									<div class="pi-links">
								<!-- <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a> -->
								<?php if (!empty($product[2])) {
								?><a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a><?php
								}?>
							</div>
								</div>
								<div class="pi-text">
									<!-- <h6><?php print_r($product[2]['price']); ?>/Rs</h6> -->
									<p><?php print_r($product[2]['name']); ?></p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
						<a href="<?php echo site_url('Home/product/'.$product[3]['id'].'/'.$table); ?>"><img src="<?php echo base_url(); ?>uploads/<?php echo $product[3]['image_1']; ?>" alt=""></a>
									<div class="pi-links">
								<!-- <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a> -->
								<?php if (!empty($product[3])) {
								?><a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a><?php
								}?>
							</div>
								</div>
								<div class="pi-text">
									<!-- <h6><?php print_r($product[3]['price']); ?>/Rs</h6> -->
									<p><?php print_r($product[3]['name']); ?></p>
								</div>
							</div>
						</div>
					
					
						<div class="col-lg-4 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
						<a href="<?php echo site_url('Home/product/'.$product[4]['id'].'/'.$table); ?>"><img src="<?php echo base_url(); ?>uploads/<?php echo $product[4]['image_1']; ?>" alt=""></a>
									<div class="pi-links">
								<!-- <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a> -->
								<?php if (!empty($product[4])) {
								?><a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a><?php
								}?>
							</div>
								</div>
								<div class="pi-text">
									<!-- <h6><?php print_r($product[4]['price']); ?>/Rs</h6> -->
									<p><?php print_r($product[4]['name']); ?></p>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
						<a href="<?php echo site_url('Home/product/'.$product[5]['id'].'/'.$table); ?>"><img src="<?php echo base_url(); ?>uploads/<?php echo $product[5]['image_1']; ?>" alt=""></a>
									<div class="pi-links">
								<!-- <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a> -->
								<?php if (!empty($product[5])) {
								?><a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a><?php
								}?>
							</div>
								</div>
								<div class="pi-text">
									<!-- <h6><?php print_r($product[5]['price']); ?>/Rs</h6> -->
									<p><?php print_r($product[5]['name']); ?></p>
								</div>
							</div>
						</div>
						<div class="text-center w-100 pt-3">
							<a href="<?php echo base_url();?>home/contact" class="site-btn sb-line sb-dark">Contact Us</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Category section end -->


	
<?php $this->load->view('include/footer.php');?>

