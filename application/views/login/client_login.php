
<?php $this->load->view('include/header1.php');?>



<div class="container" style="padding-top: 60px; padding-bottom: 100px;">
  <div class="row">
    <div class="col-md-6">

<form action="<?php echo base_url();?>Login/check_login" method="post">
  <fieldset>
    <legend>CLIENT LOGIN</legend>
    <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label" style="font-size: larger;">Email</label>
      <div class="col-sm-10">
        <input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="email@example.com">
      </div>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1" style="font-size: larger;">Email address</label>
      <input type="email" class="form-control"  name="email" style="font-size: larger;" placeholder="Enter your email">
     
        <div class="col text-danger"> <?php echo form_error('email'); ?> 
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1" style="font-size: larger;">Password</label>
      <input type="password" class="form-control" style="font-size: larger;" name="password" placeholder="Password">
       <div class="col text-danger"> <?php echo form_error('password'); ?> 
    </div>
   
    
  <div style="padding-top: 25px;">
   
    <button type="submit" class="site-btn">Submit</button>
     <a class="site-btn sb-dark" href="<?php echo base_url();?>Login/signup">Signup</a>
     </div>

  </fieldset>
</form>
</div>
<div class="col-md-6">
  
   <!-- <img class="img-responsive" style="width:100%; height: 100%;" src="#" alt="admin">  -->
</div>

</div>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <marquee>www.propertypoints.co.in 
    <p><span style="color: green">Call us:
       </span> +91-9833655868 
       <span style="color: green">E-mail:
       </span> contact@propertypoints.co.in </p>
  </marquee>
</nav>


