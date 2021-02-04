<?php
session_start();
if(isset($_SESSION["username"]))
{

}
else{
  echo"<script>location.href='user_login.php'</script>";
}
?>
<?php
error_reporting(0);
include "con_db.php";
 
     $see=$_SESSION['username'];
             $result = mysqli_query($conn, "SELECT * FROM user WHERE pass='$see'");
              while ($row = mysqli_fetch_array($result))
              {
                   $name=$row['fname'];
                   $last_name=$row['lname'];
                   $mobile=$row['mobile'];
                   $gst=$row['city'];
                   $address=$row['address'];
                   $mail=$row['mail'];
                    
                }
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include "link.php"; ?>
       
        <style> 
           *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            body{
                overflow:hidden;
                width:100vw;
                height:100vh;
                background-image: url("images/undraw_on_the_office_fbfs.svg");
                background-repeat: no-repeat, repeat;
                }

        .main_form{
                width: 100vw;
                max-width: 47vw;
                margin-left: 50%;
                
                }
                img{
                height: 200px;
                width: 200px;
                border:2px solid yellow;
                border-radius: 50%;
                margin-left: 25%;
                }
         </style>

     </head>
     <body>
         <?php include "nevbar.php"; ?>
         <form class="main_form form-control shadow-lg p-3 mb-5 bg-white rounded">
            <div class="item-center">
                <figure style="width: 50vw;">
                    <img src="undraw_profile_pic_ic5t.svg">
                </figure>
               
                    <label for="inputPassword" class="col-2" >     Name</label>
                    <input type="text"value="<?php echo$name;  ?>"name="fname" class="inputgp shadow p-2 mb-4 bg-white rounded" id="inputPassword"> 
                  
                    <label for="inputPassword" class="col-2" >Last Name</label>
                    
                    <input type="text" value="<?php echo$last_name; ?>" name="lname" class="inputgp shadow p-2 mb-4 bg-white rounded" id="inputPassword"> 
                    <label for="inputPassword" class="col-2" >Mobile</label>
                    <input type="text" value="<?php echo$mobile; ?>" name="mobile"  class="inputgp shadow p-2 mb-4 bg-white rounded" id="inputPassword"> 
                  
                    <label for="inputPassword" class="col-2" >City</label>
                    
                    <input type="text" value="<?php echo$gst; ?>" name="product_name"  class="inputgp shadow p-2 mb-4 bg-white rounded" id="inputPassword"> 
                    <label for="inputPassword" class="col-2" >Address</label>
                    <input type="text" value="<?php echo $address; ?>" name="product_name"  class="inputgp shadow p-2 mb-4 bg-white rounded" id="inputPassword">
                    <label for="inputPassword" class="col-2" > Mail</label>
                    <input type="text" value="<?php echo$mail; ?>" name="product_name"  class="inputgp shadow p-2 mb-4 bg-white rounded" id="inputPassword">
                    
                  <button type="submit" name="submit" class="btn btn-lg btn-outline-success col-sm-5" > Edit</button>
                   <button class="btn btn-outline-danger btn-lg col-sm-5"> Cancel</button>
               

        </form>

    </body>
</html>

