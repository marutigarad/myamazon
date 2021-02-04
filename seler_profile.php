<?php

session_start();
if(isset($_SESSION["user"]))
{

}
else{
  echo"<script>location.href='seler_login.php'</script>";
}
?>
<?php
error_reporting(0);
 $servername = "localhost:3307";
 $username = "root";
 $password = "";
 $dbname = "myamazon";
 $conn = new mysqli($servername, $username, $password, $dbname);
 
     $see=$_SESSION['user'];
             $result = mysqli_query($conn, "SELECT * FROM seler WHERE pass='$see'");
              while ($row = mysqli_fetch_array($result))
              {
                   $name=$row['fname'];
                   $last_name=$row['lname'];
                   $mobile=$row['mobile'];
                   $gst=$row['gst'];
                   $address=$row['address'];
                   $mail=$row['mail'];
                    
                }
?>
<!DOCTYPE html>
<html>
<head>
<?php include 'link.php'; ?>
<link rel="stylesheet" href="style_admin.css">
<link rel="stylesheet" href="profile.css" />

</head>
    <body>
    <?php include 'seler_nav.php' ?>
        <form class="form-control shadow-lg p-3 mb-5 bg-white rounded">
            <div class="item-center">
                <figure style="width: 50vw;">
                    <img src="undraw_profile_pic_ic5t.svg">
                </figure>
               
                    <label for="inputPassword" class="col-3" >     Name</label>
                    <input type="text"value="<?php echo$name;  ?>"name="fname" class="inputgp shadow p-2 mb-4 bg-white rounded" id="inputPassword"> 
                  
                    <label for="inputPassword" class="col-3" >Last Name</label>
                    
                    <input type="text" value="<?php echo$name; ?>" name="lname" class="inputgp shadow p-2 mb-4 bg-white rounded" id="inputPassword"> 
                    <label for="inputPassword" class="col-3" >Mobile</label>
                    <input type="text" value="<?php echo$mobile; ?>" name="mobile"  class="inputgp shadow p-2 mb-4 bg-white rounded" id="inputPassword"> 
                  
                    <label for="inputPassword" class="col-3" >GST</label>
                    
                    <input type="text" value="<?php echo$gst; ?>" name="product_name"  class="inputgp shadow p-2 mb-4 bg-white rounded" id="inputPassword"> 
                    <label for="inputPassword" class="col-3" >Address</label>
                    <input type="text" value="<?php echo $address; ?>" name="product_name"  class="inputgp shadow p-2 mb-4 bg-white rounded" id="inputPassword">
                    <label for="inputPassword" class="col-3" > Mail</label>
                    <input type="text" value="<?php echo$mail; ?>" name="product_name"  class="inputgp shadow p-2 mb-4 bg-white rounded" id="inputPassword">
                    
                  <button type="submit" name="submit" class="btn btn-lg btn-outline-success col-sm-5" > Edit</button>
                   <button class="btn btn-outline-danger btn-lg col-sm-5"> Cancel</button>
               

        </form>
    </body>
</html>