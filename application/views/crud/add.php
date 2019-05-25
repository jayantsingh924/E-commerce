


<?php $this->load->view('include/header1.php');?>


<div class="container" style="padding-top: 100px; padding-bottom: 100px;">
      <legend>ADD Product</legend>

            <div class="row">
                <div class="col">

                    <form action="<?php echo base_url();?>Home/add" method="post" enctype="multipart/form-data">
                     <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="name" class="form-control" name="name" placeholder=" Enter Product Name">

                          <div class="col text-danger" <?php echo form_error('name'); ?> >
                          </div>
                     </div>
                </div>
                <div class="col">
                     <div class="form-group">
                        <label for="exampleInputPassword1">Product Price</label>
                        <input type="number" class="form-control" name="price" placeholder="Enter Product Price">
                         <div class="col text-danger" <?php echo form_error('price'); ?> >
                         </div>
                     </div>
                </div>
            </div>  
  <div class="row">
           <div class="col">
          <div class="form-group">
                        <label for="exampleInputEmail1">Model</label>
                        <input type="name" class="form-control" name="name" placeholder=" Enter Model ">

                          <div class="col text-danger" <?php echo form_error('name'); ?> >
                          </div>
                     </div>
                   </div>


           
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
            </div>
           </div>
           
  


           

          <div class="row">
               <div class="col">
                   <div class="form-group">
                       <label>Front View</label>
                       <input type="file" class="form-control-file" name="image_1" aria-describedby="fileHelp">
                       <small id="fileHelp" class="form-text text-muted">image 1</small>
                   </div>
               </div>
                <div class="col">
                   <div class="form-group">
                       <label>Back View</label>
                       <input type="file" class="form-control-file"  name="image_2" aria-describedby="fileHelp">
                       <small id="fileHelp" class="form-text text-muted">image 2</small>
                   </div>
               </div>
          </div>

          <div class="row">
               <div class="col">
                   <div class="form-group">
                       <label>Left View</label>
                       <input type="file" class="form-control-file" name="image_3" aria-describedby="fileHelp">
                       <small id="fileHelp" class="form-text text-muted">image 3</small>
                   </div>
               </div>
                <div class="col">
                   <div class="form-group">
                       <label>Right View</label>
                       <input type="file" class="form-control-file" name="image_4"  aria-describedby="fileHelp">
                       <small id="fileHelp" class="form-text text-muted">image 4</small>
                   </div>
               </div>
          </div> 
         

           <div class="row">
              <div class="col">
                 <div class="form-group">
                     <label for="exampleTextarea">Property Description</label>
                     <textarea class="form-control"  name="description" rows="1"></textarea>
                 </div>
            </div>
          </div>

             <div style="padding-top: 10px;">
                               <button type="submit" class="site-btn">Submit</button>
                               <button type="reset" class="site-btn sb-dark">Reset</button>
             </div>
 
</form>

</div>

