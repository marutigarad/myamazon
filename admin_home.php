<?php
 session_start();
 error_reporting(0);
 if(isset($_SESSION["user"]))
{
  
}
else{
  echo"<script>location.href='seler_login.php'</script>";
}


?>

<!DOCTYPE html>
<html>
<head>
<?php include 'link.php'; ?>
<link rel="stylesheet" href="style_admin.css">
</head>
    <body>
    <?php include 'seler_nav.php' ?>

           <form method="POST" action="product.php" enctype="multipart/form-data" class="container-md col-6 bg-light border border-warning border-info rounded-3 " > 
           <div  class=" bg-secondary wight text-center text-white">
          <h1> Wel-Come Myamazon INDIA </h1>
          </div>
             
                <div class="mb-3 row">
                   <label for="inputPassword" class="col-sm-4 col-form-label" >Enter Product Name</label>
                   <div class="col-sm-8">
                   <input type="text" name="product_name" placeholder="Product Name" class="form-control" id="inputPassword"> 
                  </div>
                 </div>
                 <div class="mb-3 row">
                 <label for="inputPassword" class="col-sm-4 col-form-label">Enter Product Detail</label>
                 <div class="col-sm-8">
                 <input type="text" name="product_detail" placeholder="Product deatil" class="form-control" id="inputPassword">
                 </div>
                 </div>
                 <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-4 col-form-label">Enter Product Quntity</label> 
                <div class="col-sm-8">
                <input type="text" name="product_quntity" placeholder="Product Quntity" class="form-control" id="inputPassword"> 
                </div>
                 </div>
                 </div>
                 <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-4 col-form-label">Enter Company Name</label> 
                <div class="col-sm-8">
                <input type="text" name="product_company" placeholder="Company Name" class="form-control" id="inputPassword"> 
                </div>
                 </div>
                 <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-4 col-form-label">Enter Product Categories</label>
                <div class="col-sm-8">
                <select  name="Categories" class="form-control col-mb-4 text-center" id="exampleFormControlSelect1" >
                    <option values="mobile"> mobile </option>
                    <option values="home" > home </option>
                    <option values= "grocery">grocery </option>
                    <option values= "fastion" > Fashion </option>
                    <option values= "electronics"> Electronics </option>
                    <option values= "beauty" > Beauty </option>
                    <option values= "Appliances"> Appliances </option>
                    <option values ="toys_and_baby"> Toys & Baby </option>
                    <option values= "food_and_more"> Food & more </optio>
                    <option values ="sports"> Sports </option>
                </select>                  
                 </div>
                 </div>
                 <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-4 col-form-label">Enter Product price</label>
                <div class="col-sm-8">
                <input type="text" name="product_price" placeholder="Product Price  " class="form-control" id="inputPassword"> 
                </div>
                 </div>
                 <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-4 col-form-label">Enter Product Images</label>
                <div class="col-sm-8">
                <div class="custom-file">
                    <input type="file"  name="files" value="" id="validatedCustomFile" required class="form-control" id="inputPassword"/> 
                   
                     <div class="invalid-feedback">Example invalid custom file feedback</div>

                    </div>
                    <br>
                    
                       <button type="submit" name="submit" class="btn btn-lg btn-outline-success col-sm-5" > Submit</button>
                        <button class="btn btn-outline-danger btn-lg col-sm-5"> Cancel</button>
                    
                
            </form>
       
    </body>
</html>
