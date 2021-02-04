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
             $result = mysqli_query($conn, "SELECT * FROM product WHERE username='$see'");
              while ($row = mysqli_fetch_array($result))
              {
                   $row['username'];
                    $row['name'];
                    $row['quntity'];
                    $row['company'];
                 
                    
                }
              
?>
<!DOCTYPE html>
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
                  <th>Seler </th>
                  <th>Product</th>
                  <th>Quntity </th>
                  <th>Company </th>
                  <th>Total sell </th>
                  <th>Image </th>
               </tr>
               <?php
      error_reporting(0);
      $servername = "localhost:3307";
      $username = "root";
      $password = "";
      $dbname = "myamazon";
      $conn = new mysqli($servername, $username, $password, $dbname);
      
          $see=$_SESSION['user'];
                  $result = mysqli_query($conn, "SELECT * FROM product WHERE username='$see'");
             while ($row = mysqli_fetch_array($result))
                  {
                       
                       
                      
                                   
              echo" <tr>";
                echo"  <td>".$row['username']."  </td> ";
                echo"  <td>". $row['name']." </td> ";
                echo"  <td>". $row['quntity']." </td> ";
                echo"  <td>".$row['company'] ." </td> ";
                echo"  <td>".$row['totalsell'] ." </td> ";
                echo"  <td> <img class='photo' src=".$row['image'] ." ></td> ";
              echo"</tr>";
                             }
                ?>  

        </table>

      </section>
     
     
    </body>
</html>