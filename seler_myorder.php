<?php

session_start();
if(isset($_SESSION["user"]))
{

}
else{
  echo"<script>location.href='seler_login.php'</script>";
}
?>
<html>
    <head>
    <?php include 'link.php'; ?>
    <link rel="stylesheet" href="seler_home.css">
    </head>
    <body>
    <?php include 'seler_nav.php' ?>
    <section>
        <table class="table table-striped table-hover">
              <tr>
                  <th>Order Id </th>
                  <th>Product Id</th>
                  <th>Product Name </th>
                  <th>Qunatity </th>
                  <th>Company </th>
                  <th>Price </th>
                  <th>Total Price </th>
                  <th>Customer Name </th>
                  <th>Confirm Order </th>
                  <th>Image</th>
               </tr>
               <?php
                    error_reporting(0);
                    include 'con_db.php';
                    $see=$_SESSION['user'];
                    $stauts="Orderplced";
                  $result = mysqli_query($conn, "SELECT * FROM `order` WHERE p_seler='$see'AND info='$stauts'");
             while ($row = mysqli_fetch_array($result))
                  {                   
              echo"<form method='POST'> <tr>";
                echo"  <td> <input value='$row[oidd]' name='id' style='border:none; width:50px;'/>  </td> ";
                echo"  <td><input value='$row[pid]' name='pid' style='border:none; width:50px;'/> </td> ";
                echo"  <td>". $row['p_name']." </td> ";
                echo"  <td><input value='$row[p_quntity]' name='quantity' style='border:none; width:50px;'/> </td> ";
                echo"  <td>".$row['p_company'] ." </td> ";
                echo"  <td>".$row['p_price'] ." </td> ";
                echo"  <td>".$row['total_price'] ." </td> ";
                echo"  <td>".$row['customer'] ." </td> ";
                echo"  <td><input type='submit' name='submit' value='confirm' class='btn btn-success'/> </td> ";
                echo"  <td> <img class='photo' src=".$row['p_image'] ." ></td> ";
              echo"</tr> </form>";
                             }
                ?>  

        </table>

      </section>

    </body>
</html>

<?php 
error_reporting(0);
session_start();
if (isset($_POST["submit"])){
 
       $id = $_POST['id'];
       $quantity= $_POST['quantity'];
       $pid = $_POST['pid'];
        include 'conn_db.php';
        $status="shipped";
        $sql= "UPDATE `order` SET info='$status' WHERE oidd='$id'";
        if ($conn->query($sql) === TRUE) {
            echo "<script> swal('Order Placed!', 'comfirmed your order!', 'success'); </script>";
        } 
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            
        }
        $sql= "UPDATE `product` SET `totalsell`=`totalsell` +'$quantity' WHERE pid='$pid'";
        if ($conn->query($sql) === TRUE) {
          echo "<script> swal('Order Placed!', 'comfirmed your order!', 'success'); </script>";
      } 
      else {
          echo "Error: " . $sql . "<br>" . $conn->error;
         
          
      }



     echo"<script>location.href='seler_myorder.php'</script>";
     
     
}
?>