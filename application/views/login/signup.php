

<?php $this->load->view('include/header1.php');?>

<style type="text/css">
  label 
   { 
     font-size: larger;
   }

  input 
   { 
     font-size: larger;
   }
</style>
<div class="container" style="padding-top: 100px; padding-bottom: 100px;">
  <div class="row">
    <div class="col-md-12">
  
<form method="post" action="<?php echo base_url();?>Login/register">
 
   
      <div class="container">
      <div class="row">
        <div class="col">


      <div class="form-group">
      <label>FirstName</label>
      <input type="text" class="form-control" name="firstname" placeholder="Enter your FirstName">
      </div> 
      </div>
        <div class="col">

      <div class="form-group">
      <label>LastName</label>
      <input type="text" class="form-control" name="lastname" placeholder="Enter your LastName">
      </div> 
      </div>
      </div>
      <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" name="email" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
    
      <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" name="password" placeholder="Password">
      </div>
      
      <fieldset class="form-group">
      <legend>Gender</legend>
      <div class="form-check">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="gender" value="male" checked="">
          Male
        </label>
      </div>
      <div class="form-check">
      <label class="form-check-label">
          <input type="radio" class="form-check-input" name="gender" value="female">
          Female
        </label>
      </div>
      </fieldset>
    
 
    <div class="form-group">
      <label>About Me</label>
      <textarea class="form-control" name="aboutme" rows="3"></textarea>
    </div>
   
    <button type="submit" class="site-btn">Submit</button>
    <button type="reset" class="site-btn sb-dark">Reset</button>

</form>
     </div>
</div>

<div class="col-md-6">
  
   <!-- <img class="img-responsive" style="width:100%; height: 100%;" src="<?php echo base_url();?>assest/img/signup.jpg" alt="Client">  -->
</div>
</div>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <marquee>www.rajdhanitraders.com 
    <p><span style="color: pink">Call us:
       </span> +91-********** 
       <span style="color: pink">E-mail:
       </span> contact@rajdhanitraders.com </p>
  </marquee>
</nav>



