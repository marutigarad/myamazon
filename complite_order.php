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
                  <th> Order </th>
                  <th>Image</th>
               </tr>
               <?php
                    error_reporting(0);
                    include 'con_db.php';
                    $see=$_SESSION['user'];
                    $stauts="shipped";
                  $result = mysqli_query($conn, "SELECT * FROM `order` WHERE p_seler='$see'AND info='$stauts'");
             while ($row = mysqli_fetch_array($result))
                  {                   
              echo"<form method='POST'> <tr>";
                echo"  <td> ".$row['oidd'] ." </td> "; 
                echo"  <td>".$row['pid']."</td> ";
                echo"  <td>". $row['p_name']." </td> ";
                echo"  <td>".$row['p_quntity'] ." </td> "; 
                echo"  <td>".$row['p_company'] ." </td> ";
                echo"  <td>".$row['p_price'] ." </td> ";
                echo"  <td>".$row['total_price'] ." </td> ";
                echo"  <td>".$row['customer'] ." </td> ";
                echo"  <td><input  name='submit' value='done' class='btn btn-success'/> </td> ";
                echo"  <td> <img class='photo' src=".$row['p_image'] ." ></td> ";
              echo"</tr> </form>";
                             }
                ?>  

        </table>

      </section>

    </body>
</html>

