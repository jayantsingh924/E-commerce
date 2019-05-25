<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<?php 

$url = $this->uri->segment(2);
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
  $this->load->view('include/header1.php');?>

<style type="text/css">
  td {
    font-size: larger;
  }
</style>

<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="<?php echo base_url();?>Login/dashboard">Home</a></li>
  <li class="breadcrumb-item active">All Records</li>
</ol>

<div class="container"  style="padding-top: 25px;">
   <div class="row">
    <div class="col-md-7">
      
            <a href="<?php echo base_url();?>home/add" class = "site-btn" >Add New</a>
      
   
    </div>
    <div class="col-md-5">
       <form class="form-inline my-2 my-lg-0" action="<?php echo site_url('Home/dash_data/'.$table); ?>" 
        method="post">
        <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search here">
        <button class="site-btn sb-dark" type="submit">Search</button>
       </form>
   </div>
  </div>
    
	  <br/>
    <table class="table table-stripd table-hover">
		      <tr class="table-info">
			       <th style="font-size: larger;">S.no</th>
			       <th style="font-size: larger;">Name</th>
             <th style="font-size: larger;">Price</th>
             <th style="font-size: larger;">Added Date</th>
             <th style="font-size: larger;">Action</th>
          </tr>
              <?php $row = 0;  $sno = $row+1;  ?>
	            <?php foreach($posts as $post){

                ?>
     <tr>
         <td><?php echo $sno;?></td>
         <td><?php echo $post->name;?></td>
         <td><?php echo $post->price;?></td>
         <td><?php echo $post->reg_date;?></td>
         <td>
          <a href="<?php echo site_url('Home/product/'.$post->id.'/'.$table); ?>">View</a> 
           <a href="<?php echo site_url('Home/edit/'.$post->id.'/'.$table); ?>">Edit</a> 
            
           <a href="<?php echo site_url('Home/delete/'.$post->id.'/'.$table); ?>" 
              onClick="return confirm('Are you sure you want to delete?')">Delete</a>
         </td>

      

      </tr>
        
     <?php $sno++;   }?>  

      
	     </table>
    
       


</div>

  <div>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
               <a class="navbar-brand" href="#">Total Records : <?php echo $count;?></a>
                 <p> 
                    <span> 
                         <center style="color: white;">
                             Copyright &copyRajdhani Traders
                         </center>
                    </span>
                 </p>
            </nav>
       </div>