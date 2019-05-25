
<?php 

$url = $this->uri->segment(4);
$url2 = $this->uri->segment(3);

if ($url == 'urinal' or $url2 == 'urinal') {
  $url = 'URINALS';
  $table = 'urinal'; 
}
elseif ($url == 'onepiece' or $url2 == 'onepiece') {
  $url = 'ONE PIECE';
  $table = 'onepiece'; 
}
elseif ($url == 'washbasin_pe' or $url2 == 'washbasin_pe') {
  $url = 'WASHBASIN PE';
  $table = 'washbasin_pe';
}
elseif ($url == 'tabletop' or $url2 == 'tabletop') {
  $url = 'TABLE TOP';
  $table = 'tabletop';
}
elseif ($url == 'washbasin' or $url2 == 'washbasin') {
  $url = 'WASHBASIN';
  $table = 'washbasin';
}
elseif ($url == 'watercloset' or $url2 == 'watercloset') {
  $url = 'WATER CLOSET';
  $table = 'watercloset';
}
elseif ($url == 'seatcovers' or $url2 == 'seatcovers') {
  $url = 'SEAT COVERS';
  $table = 'seatcovers';
}
elseif ($url == 'pan' or $url2 == 'pan') {
  $url = 'PAN';
  $table = 'pan';
}
elseif ($url == 'couplesuite' or $url2 == 'couplesuite') {
  $url = 'COULPLE SUITE';
  $table = 'couplesuite';
}
elseif ($url == 'vitrassa' or $url2 == 'vitrassa') {
  $url = 'VITRASSA';
  $table = 'vitrassa';
}
elseif ($url == 'mattvitrassa_series' or $url2 == 'mattvitrassa_series') {
  $url = 'MATTVITRASSA SERIES';
  $table = 'mattvitrassa_series';
}
elseif ($url == 'vitrassa_series' or $url2 == 'vitrassa_series') {
  $url = 'VITRASSA SERIES';
  $table = 'vitrassa_series';
}
elseif ($url == 'new_designer_series' or $url2 == 'new_designer_series') {
  $url = 'NEW DESIGNER SERIES';
  $table = 'new_designer_series';
}
elseif ($url == 'rustic_series' or $url2 == 'rustic_series') {
  $url = 'RUSTIC SERIES';
  $table = 'rustic_series';
}
elseif ($url == 'vitrasa_washbasin' or $url2 == 'vitrasa_washbasin') {
  $url = 'VITRASA WASHBASIN';
  $table = 'vitrasa_washbasin';
}
elseif ($url == 'designer_tabletop' or $url2 == 'designer_tabletop') {
  $url = 'DESIGNER TABLETOP';
  $table = 'designer_tabletop';
}
elseif ($url == 'dual_color_one_piece' or $url2 == 'dual_color_one_piece') {
  $url = 'DUAL COLOR ONE PIECE';
  $table = 'dual_color_one_piece';
}
elseif ($url == 'dual_color_orrisa_pan' or $url2 == 'dual_color_orrisa_pan') {
  $url = 'DUAL COLOR ORRISA PAN';
  $table = 'dual_color_orrisa_pan';
}
elseif ($url == 'seat_cover_fitting' or $url2 == 'seat_cover_fitting') {
  $url = 'SEAT COVER FITTING';
  $table = 'seat_cover_fitting';
}
elseif ($url == 'rustic_water_closet' or $url2 == 'rustic_water_closet') {
  $url = 'RUSTIC WATER CLOSET';
  $table = 'rustic_water_closet';
}
elseif ($url == 'rustic_orrisa_pan' or $url2 == 'rustic_orrisa_pan') {
  $url = 'RUSTIC ORRISA PAN';
  $table = 'rustic_orrisa_pan';
}
elseif ($url == 'color_range_c' or $url2 == 'color_range_c') {
  $url = 'COLOR RANGE';

}
elseif ($url == 'technical_instruction_c') {
  $url = 'TECHNICAL INSTRUCTION';
}

$this->load->view('include/header1.php'); ?>



<div class="container" style="padding-top: 35px; padding-bottom: 100px;">
      <legend>UPDATE PRODUCT</legend>

            <div class="row">
                <div class="col">

                    <form action="<?php echo site_url('Home/edit/'.$post->id.'/'.@$table); ?>" method="post" enctype="multipart/form-data">
                     <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="name" class="form-control" name="name" value="<?php print_r($post->name);?>" placeholder=" Enter Product Name">

                          <div class="col text-danger" <?php echo form_error('name'); ?> >
                          </div>
                     </div>
                </div>

<input type="hidden"  name="edit" value="edit">

                <div class="col">
                     <div class="form-group">
                        <label for="exampleInputPassword1">Product Price</label>
                        <input type="number" class="form-control" name="price" value="<?php print_r($post->price);?>" placeholder="Enter Product Price">
                         <div class="col text-danger" <?php echo form_error('price'); ?> >
                         </div>
                     </div>
                </div>
            </div>  
  <div class="row">
           <div class="col">
          <div class="form-group">
                        <label for="exampleInputEmail1">Model</label>
                        <input type="model" class="form-control" name="model" placeholder=" Enter Model ">

                          <div class="col text-danger" <?php echo form_error('model'); ?> >
                          </div>
                     </div>
                   </div>

<!-- 
           
            <div class="col">
                 <div class="form-group">
                  <label>Product</label>
                   <select class="form-control" name="product">
                    <option>Please Select</option>
                      <?php 
                         foreach($sanitry_product as $product)
                           {
                          echo '<option value="'.$product['id'].'">'.$product['product_name'].'</option>';
                           }
                       ?>  
                    </select>
                 </div>
            </div> -->
           </div>
      <div class="row">
              <div class="col">
                 <div class="form-group">
                     <label for="exampleTextarea">Property Description</label>
                     <textarea class="form-control" value="<?php print_r($post->description);?>" name="description" rows="1"></textarea>
                 </div>
            </div>
          </div>

             <div style="padding-top: 10px;">
                               <button type="submit" class="site-btn">Update</button>
                               <button type="reset" class="site-btn sb-dark">Reset</button>
             </div>
 
</form>

</div>

