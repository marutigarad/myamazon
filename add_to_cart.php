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

                $see=$_SESSION['username'];
                $stauts='add_to_cart';
                $result = mysqli_query($conn, "SELECT * FROM `order` WHERE customer='$see' AND product_stasus='$stauts'");
                  while ($row = mysqli_fetch_array($result))
                      {                  
                        echo"
                
                        <div class='card shadow-lg p-3 mb-5 bg-white rounded' style='width: 18rem; '>
                        
                        <img name='img' src='$row[p_image] ' class='card-img-top' alt='not available'>
                        <div class='card-body'>
                            <p class='card-text'><h4 name='price'> <i class='fas fa-rupee-sign'></i>$row[p_price]  </h4></p>
                            <p class='cart-text'><input name='name' value='$row[p_name]'>  <input name='detail' value='$row[p_detail]'> </p>
                            <form method='POST' action=''>
                            <label>Quantity</label>
                            
                            <input name='count' id='demo$i' type='text' class='text-center'  value='$row[p_quntity]' placeholder='1'>  
                            <input type='hidden' name='id' value='$row[oidd]' />
                           </div>
                           <input type='submit' name='btnSubmit' value='Buy Now' class='btn btn-warning' style='width:100%;' /> 
                           <input type='submit' name='btnDelete' value='Remove Item' class='btn btn-danger' style='width:100%;' /> </form>
                       </div>";
                   $i++;
                             }
                ?>  

       </div>
       </div>

      </section>
       
     
    </body>
</html>
<?php 

session_start();
if (isset($_POST["btnSubmit"])){
 $id= $_POST['id'];
 $quantity=$_POST['count'];
 if($id!=''){
     if(isset($_SESSION['username'])){
       
       
        $status="Orderplced";
        $sql= "UPDATE `order` SET product_stasus='$status' WHERE oidd='$id'";

        if ($conn->query($sql) === TRUE) {
            echo "<script> swal('Order Placed!', 'comfirmed your order!', 'success'); </script>";
        } 
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            
        }

    
     echo"<script>location.href='add_to_cart.php'</script>";

     }
     else{
        echo"<script>location.href='user_login.php'</script>";
     }
 }
}
else if (isset($_POST["btnDelete"])){

    $id= $_POST['id'];
 $quantity=$_POST['count'];
 if($id!=''){
     if(isset($_SESSION['username'])){
        include 'conn_db.php';
       
        
        $sql= "DELETE FROM `order` WHERE oidd=".$id;

        if ($conn->query($sql) === TRUE) {
            echo "<script> swal('Remove Item!', 'item removed !', 'success'); </script>";
        } 
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            
        }

    
     echo"<script>location.href='add_to_cart.php'</script>";

     }
     else{
        echo"<script>location.href='user_login.php'</script>";
     }
 }
}
 

?>