
<?php $this->load->view('include/header1.php');?>




<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand animated rollIn" href="<?php echo base_url();?>home"><b>RAJDHANI TRADERS<b></a>

    <div class="collapse navbar-collapse" id="navbarColor03">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active"> 
        <a class="nav-link" href="<?php echo base_url();?>Login/dashboard">Sanitaryware <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-info" href="#">Comming Soon</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-info" href="#">Comming Soon</a>
      </li>
    </ul>
  
  </div>
</nav>

<div class="container" style="padding-top: 35px;">

  <?php 
$url =  $this->uri->segment(3);
if ($url == 'es') 
{
  ?> <div class="animated rubberBand">
        <div class="alert alert-dismissible alert-success">
          <strong>Update Successfull</strong>
        </div>
      </div>
  <?php
}

?>

<div class="row">

<div class="col animated slideInLeft">
<div class="card text-white bg-info mb-3" style="max-width: 20rem;">
<div class="card-header" style="font-size: larger;">Urinals</div>
<div class="card-body">
<div class="row">
<div class="col">
<a href="<?php echo base_url();?>Home/addnew" style="font-size: larger;">Add new</a>
</div>
<div class="col"><?php $table = 'urinal' ?>
<a href="<?php echo site_url('Home/dash_data/'.$table); ?>"><h4 class="card-title" align="right"><?php echo $urinal;?>
  </h4></a>
</div>
</div>
</div>
</div>
</div>

<div class="col animated slideInLeft">
<div class="card text-white bg-default mb-3" style="max-width: 20rem;">
<div class="card-header"> <font color="black" style="font-size: larger;">One Piece</font></div>
<div class="card-body">
<div class="row">
<div class="col">
<a href="<?php echo base_url();?>Home/addnew" style="color: black; font-size: larger;">Add new</a>
</div>
<div class="col"><?php $table = 'onepiece' ?>
<a href="<?php echo site_url('Home/dash_data/'.$table); ?>"><h4 class="card-title" align="right" style="color: black;" ><?php echo $onepiece;?>
  </h4></a>
</div>
</div>
</div>
</div>
</div>



<div class="col animated slideInRight">
<div class="card text-white bg-info mb-3" style="max-width: 20rem; color: black;">
<div class="card-header" style="font-size: larger;">Washbasin Pedestal</div>
<div class="card-body">
<div class="row">
<div class="col">
<a href="<?php echo base_url();?>Home/addnew"  style="font-size: larger;" >Add new</a>
</div>
<div class="col"><?php $table = 'washbasin_pe' ?>
<a href="<?php echo site_url('Home/dash_data/'.$table); ?>"><h4 class="card-title" align="right" style="color: black;" ><?php echo $washbasin_pe;?>
  </h4></a>
</div>
</div>
</div>
</div>
</div>



<div class="col animated slideInRight">
<div class="card text-white bg-light mb-3" style="max-width: 20rem;">
<div class="card-header"> <font color="black" style="font-size: larger;">Table Top</font></div>
<div class="card-body">
<div class="row">
<div class="col">
<a href="<?php echo base_url();?>Home/addnew" style="color: black; font-size: larger;">Add new</a>
</div>
<div class="col"><?php $table = 'tabletop' ?>
<a href="<?php echo site_url('Home/dash_data/'.$table); ?>"><h4 class="card-title" align="right" style="color: black;" ><?php echo $tabletop;?>
  </h4></a>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="row">
<div class="col animated slideInLeft">
<div class="card text-white bg-info mb-3" style="max-width: 20rem;">
<div class="card-header" style="font-size: larger;">Washbasin</div>
<div class="card-body">
<div class="row">
<div class="col">
<a href="<?php echo base_url();?>Home/addnew" style="font-size: larger;">Add new</a>
</div>
<div class="col"><?php $table = 'washbasin' ?>
<a href="<?php echo site_url('Home/dash_data/'.$table); ?>"><h4 class="card-title" align="right"><?php echo $washbasin;?>
  </h4></a>
</div>
</div>
</div>
</div>
</div>

<div class="col animated slideInLeft">
<div class="card text-white bg-default mb-3" style="max-width: 20rem;">
<div class="card-header"> <font color="black" style="font-size: larger;">Water Closet</font></div>
<div class="card-body">
<div class="row">
<div class="col">
<a href="<?php echo base_url();?>Home/addnew" style="color: black; font-size: larger;">Add new</a>
</div>
<div class="col"><?php $table = 'watercloset' ?>
<a href="<?php echo site_url('Home/dash_data/'.$table); ?>"><h4 class="card-title" align="right" style="color: black;" ><?php echo $watercloset;?>
  </h4></a>
</div>
</div>
</div>
</div>
</div>



<div class="col animated slideInRight">
<div class="card text-white bg-info mb-3" style="max-width: 20rem; color: black;">
<div class="card-header" style="font-size: larger;">Seat Covers</div>
<div class="card-body">
<div class="row">
<div class="col">
<a href="<?php echo base_url();?>Home/addnew"  style="font-size: larger;" >Add new</a>
</div>
<div class="col"><?php $table = 'seatcovers' ?>
<a href="<?php echo site_url('Home/dash_data/'.$table); ?>"><h4 class="card-title" align="right" style="color: black;" ><?php echo $seatcovers;?>
  </h4></a>
</div>
</div>
</div>
</div>
</div>



<div class="col animated slideInRight">
<div class="card text-white bg-light mb-3" style="max-width: 20rem;">
<div class="card-header"> <font color="black" style="font-size: larger;">Pan</font></div>
<div class="card-body">
<div class="row">
<div class="col">
<a href="#" style="color: black; font-size: larger;">Add new</a>
</div>
<div class="col"><?php $table = 'pan' ?>
<a href="<?php echo site_url('Home/dash_data/'.$table); ?>"><h4 class="card-title" align="right" style="color: black;" ><?php echo $pan;?>
  </h4></a>

</div>
</div>
</div>
</div>
</div>
</div>


<div class="row">
<div class="col-md-3 animated slideInRight">
<div class="card text-white bg-light mb-3" style="max-width: 20rem;">
<div class="card-header"> <font color="black" style="font-size: larger;">Couple Suite</font></div>
<div class="card-body">
<div class="row">
<div class="col">
<a href="#" style="color: black; font-size: larger;">Add new</a>
</div>
<div class="col"><?php $table = 'couplesuite' ?>
<a href="<?php echo site_url('Home/dash_data/'.$table); ?>"><h4 class="card-title" align="right" style="color: black;" ><?php echo $couplesuite;?>
  </h4></a>

</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="container" style="padding-top: 35px;">
<div class="row">
<div class="col">
<div class="jumbotron">
<h1 class="display-5"> Welcome <?php print_r($_SESSION['ad_name']);?></h1>
  <br>
  <p>Logged in : <?php 
  $currentDate = date('Y-m-d h:i:s');
  echo $currentDate;
  ?></p>
<a class="btn btn-danger btn-lg" href="<?php echo base_url();?>Login/logout" role="button">Log Out</a>
</div>
</div>
<div class="jumbotron btn-info" >
  <h1 class="display-3"><?php echo "PRODUCT'S  </br><center><b>".$count;?></b></center></h1>

</div>
</div>
</div>




<div class="container" style="padding-top: 35px;">
<div class="row">
<div class="col animated slideInLeft">
<div class="card text-white bg-info mb-3" style="max-width: 20rem;">
<div class="card-header" style="font-size: larger;">Vitrassa</div>
<div class="card-body">
<div class="row">
<div class="col">
<a href="<?php echo base_url();?>Home/addnew" style="font-size: larger;">Add new</a>
</div>
<div class="col"><?php $table = 'vitrassa' ?>
<a href="<?php echo site_url('Home/dash_data/'.$table); ?>"><h4 class="card-title" align="right"><?php echo $vitrassa;?>
  </h4></a>
</div>
</div>
</div>
</div>
</div>

<div class="col animated slideInLeft">
<div class="card text-white bg-default mb-3" style="max-width: 20rem;">
<div class="card-header"> <font color="black" style="font-size: larger;">Matt Vitrassa Series</font></div>
<div class="card-body">
<div class="row">
<div class="col">
<a href="<?php echo base_url();?>Home/addnew" style="color: black; font-size: larger;">Add new</a>
</div>
<div class="col"><?php $table = 'mattvitrassa_series' ?>
<a href="<?php echo site_url('Home/dash_data/'.$table); ?>"><h4 class="card-title" align="right" style="color: black;" ><?php echo $mattvitrassa_series;?>
  </h4></a>
</div>
</div>
</div>
</div>
</div>



<div class="col animated slideInRight">
<div class="card text-white bg-info mb-3" style="max-width: 20rem;">
<div class="card-header" style="font-size: larger;">Vitrasa Series</div>
<div class="card-body">
<div class="row">
<div class="col">
<a href="<?php echo base_url();?>Home/addnew"  style="font-size: larger;" >Add new</a>
</div>
<div class="col"><?php $table = 'vitrassa_series' ?>
<a href="<?php echo site_url('Home/dash_data/'.$table); ?>"><h4 class="card-title" align="right"><?php echo $vitrassa_series;?>
  </h4></a>
</div>
</div>
</div>
</div>
</div>



<div class="col animated slideInRight">
<div class="card text-white bg-light mb-3" style="max-width: 20rem;">
<div class="card-header"> <font color="black" style="font-size: larger;">New Designer Series</font></div>
<div class="card-body">
<div class="row">
<div class="col">
<a href="<?php echo base_url();?>Home/addnew" style="color: black; font-size: larger;">Add new</a>
</div>
<div class="col"><?php $table = 'new_designer_series' ?>
<a href="<?php echo site_url('Home/dash_data/'.$table); ?>"><h4 class="card-title" align="right" style="color: black;" ><?php echo $new_designer_series;?>
  </h4></a>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="row">
<div class="col animated slideInLeft">
<div class="card text-white bg-info mb-3" style="max-width: 20rem;">
<div class="card-header" style="font-size: larger;">Rustic Series</div>
<div class="card-body">
<div class="row">
<div class="col">
<a href="<?php echo base_url();?>Home/addnew" style="font-size: larger;">Add new</a>
</div>
<div class="col"><?php $table = 'rustic_series' ?>
<a href="<?php echo site_url('Home/dash_data/'.$table); ?>"><h4 class="card-title" align="right"><?php echo $rustic_series;?>
  </h4></a>
</div>
</div>
</div>
</div>
</div>

<div class="col animated slideInLeft">
<div class="card text-white bg-default mb-3" style="max-width: 20rem;">
<div class="card-header"> <font color="black" style="font-size: larger;">Vitrasa WasBasin</font></div>
<div class="card-body">
<div class="row">
<div class="col">
<a href="<?php echo base_url();?>Home/addnew" style="color: black; font-size: larger;">Add new</a>
</div>
<div class="col"><?php $table = 'vitrasa_washbasin' ?>
<a href="<?php echo site_url('Home/dash_data/'.$table); ?>"><h4 class="card-title" align="right" style="color: black;" ><?php echo $vitrasa_washbasin;?>
  </h4></a>
</div>
</div>
</div>
</div>
</div>



<div class="col animated slideInRight">
<div class="card text-white bg-info mb-3" style="max-width: 20rem;">
<div class="card-header" style="font-size: larger;">Designer TableTop</div>
<div class="card-body">
<div class="row">
<div class="col">
<a href="<?php echo base_url();?>Home/addnew"  style="font-size: larger;" >Add new</a>
</div>
<div class="col"><?php $table = 'designer_tabletop' ?>
<a href="<?php echo site_url('Home/dash_data/'.$table); ?>"><h4 class="card-title" align="right"><?php echo $designer_tabletop;?>
  </h4></a>
</div>
</div>
</div>
</div>
</div>



<div class="col animated slideInRight">
<div class="card text-white bg-light mb-3" style="max-width: 20rem;">
<div class="card-header"> <font color="black" style="font-size: larger;">Dual Color One Piece</font></div>
<div class="card-body">
<div class="row">
<div class="col">
<a href="<?php echo base_url();?>Home/addnew" style="color: black; font-size: larger;">Add new</a>
</div>
<div class="col"><?php $table = 'dual_color_one_piece' ?>
<a href="<?php echo site_url('Home/dash_data/'.$table); ?>"><h4 class="card-title" align="right" style="color: black;" ><?php echo $dual_color_one_piece;?>
  </h4></a>

</div>
</div>
</div>
</div>
</div>
</div>


<div class="row">
<div class="col-md-3 animated slideInLeft">
<div class="card text-white bg-info mb-3" style="max-width: 20rem;">
<div class="card-header"> <font  style="font-size: larger;">Dual Color Orrisa Pan</font></div>
<div class="card-body">
<div class="row">
<div class="col">
<a href="<?php echo base_url();?>Home/addnew" style="font-size: larger;">Add new</a>
</div>
<div class="col"><?php $table = 'dual_color_orrisa_pan' ?>
<a href="<?php echo site_url('Home/dash_data/'.$table); ?>"><h4 class="card-title" align="right" ><?php echo $dual_color_orrisa_pan;?>
  </h4></a>

</div>
</div>
</div>
</div>
</div>

<div class="col-md-3 animated slideInLeft">
<div class="card text-white bg-light mb-3" style="max-width: 20rem;">
<div class="card-header"> <font color="black" style="font-size: larger;">Rustic Water Closet</font></div>
<div class="card-body">
<div class="row">
<div class="col">
<a href="<?php echo base_url();?>Home/addnew" style="color: black; font-size: larger;">Add new</a>
</div>
<div class="col"><?php $table = 'rustic_water_closet' ?>
<a href="<?php echo site_url('Home/dash_data/'.$table); ?>"><h4 class="card-title" align="right" style="color: black;" ><?php echo $rustic_water_closet;?>
  </h4></a>

</div>
</div>
</div>
</div>
</div>

<div class="col animated slideInRight">
<div class="card text-white bg-info mb-3" style="max-width: 20rem; color: black;">
<div class="card-header" style="font-size: larger;">Rustic Orrisa Pan</div>
<div class="card-body">
<div class="row">
<div class="col">
<a href="<?php echo base_url();?>Home/addnew"  style="font-size: larger;" >Add new</a>
</div>
<div class="col"><?php $table = 'rustic_orrisa_pan' ?>
<a href="<?php echo site_url('Home/dash_data/'.$table); ?>"><h4 class="card-title" align="right"><?php echo $rustic_orrisa_pan;?>
  </h4></a>
</div>
</div>
</div>
</div>
</div>



<div class="col animated slideInRight">
<div class="card text-white bg-light mb-3" style="max-width: 20rem;">
<div class="card-header"> <font color="black" style="font-size: larger;">Seat Cover Fittings</font></div>
<div class="card-body">
<div class="row">
<div class="col">
<a href="<?php echo base_url();?>Home/addnew" style="color: black; font-size: larger;">Add new</a>
</div>
<div class="col"><?php $table = 'seat_cover_fitting' ?>
<a href="<?php echo site_url('Home/dash_data/'.$table); ?>"><h4 class="card-title" align="right" style="color: black;" ><?php echo $seat_cover_fitting;?>
  </h4></a>

</div>
</div>
</div>
</div>
</div>
</div>

</div>


</div>
</div>



<div style="padding-top: 25px;">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<marquee><a class="navbar-brand text-info" href="<?php echo base_url();?>home">www.rajdhanitraders.com</a></marquee>
</nav>
</div>

<?php $this->load->view('include/footer.php');?>