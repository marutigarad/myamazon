<?php 
error_reporting(0);
session_start();
if(isset($_SESSION["username"]))
{

}
else{
  echo"<script>location.href='user_login.php'</script>";
}
?>
<html>
    <head>
    <?php include "nevbar.php"; ?>
        <link rel="stylesheet" href="myamazon.css"/>
        <link rel="stylesheet" href="seler_home.css">
        <style>
        </style>
    </head>
    <body>
    <div class="main bg-light shadow-lg">
            <div class='d-flex flex-wrap  justify-content-center shadow-lg p-3 mb-5 bg-white rounded'>
               <?php
                
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "myamazon";
$conn = new mysqli($servername, $username, $password, $dbname);
                    $total=0;
                $see=$_SESSION['username'];
                $stauts='Orderplced';
                $result = mysqli_query($conn, "SELECT * FROM `order` WHERE customer='$see' AND product_stasus='$stauts'");
                  while ($row = mysqli_fetch_array($result))
                      {     
                          $total= $total + $row['total_price'];  
                          $_SESSION['total']=$total;   
                          $info=$row['info'];
                        echo"
                
                        <div class='card shadow-lg p-3 mb-5 bg-white rounded' style='width: 18rem; '>
                        
                        <img name='img' src='$row[p_image] ' class='card-img-top' alt='not available'>
                        <div class='card-body'>
                            <p class='card-text'><h4 name='price'> <i class='fas fa-rupee-sign'></i>$row[p_price]  </h4></p>
                            <p class='cart-text'><input name='name' value='$row[p_name]'>  <input name='detail' value='$row[p_detail]'> </p>
                            <form method='POST' action=''>
                            <label > Quntity  </label>
                            <input name='count' id='demo$i' type='text' class='text-center'  value='$row[p_quntity]' placeholder='1'>  
                            
                            
                            <input type='hidden' name='id' value='$row[oidd]' />
                           </div>
                           
                         </form>
                       </div>";
                   $i++;
                             }
                ?>  
                <div class='card shadow-lg p-3 mb-5 border border-success bg-white fs-4 rounded' style='width: 18rem; '>
                <label > total Item in Cart: 
                <input type="text" value="<?php echo $i; ?> "   style="width:40PX;"> </label> <br>
                <label >Product has:<input type="text" value="<?php echo $info ?> "  placeholder="total" style="width:120PX;"> </label>
                <br>
                <label > total price :
                <input type="text" value="<?php echo $total; ?> "  placeholder="total"> </label><br>
                <Address>
                <?php
                        error_reporting(0);
                        include "con_db.php";
 
                        $see=$_SESSION['username'];
                         $result = mysqli_query($conn, "SELECT * FROM user WHERE pass='$see'");
                         while ($row = mysqli_fetch_array($result))
                             {
                                  
                                   
                                   $mobile=$row['mobile'];
                                    $city=$row['city'];
                                   $address=$row['address'];
                                    $zip=$row['zip'];
                    
                            }
                
                     echo "Address :
                     <input style=' width: 200px;' value='$address'/>
                     <label> City : <input value='$city' /> </label>
                     <label> Pin code : <input value='$zip' /> </label> <br>
                     <label class='bg-warning' style=' width: 100%;'> <i class='fas fa-truck-moving fs-1 text-gray'></i> </lebal>
                     ";

                ?>
                </Address>


                </div>
       </div>
       </div>

      </section>
       
      
    </body>
</html>
