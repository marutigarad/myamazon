<html>
    <head>
        <?php include 'link.php'; ?>
        <link rel="stylesheet" href="myamazon.css"/>
        <style>
            label{
                    cursor: pointer;
                }
                .card{
                    margin-left: 25px;

                }
        </style>
    </head>
    <body>
        <?php include "nevbar.php"; ?>
       
        <!-- main content div -->
         <div class="main bg-light shadow-lg">
            <div class='d-flex flex-wrap  justify-content-center shadow-lg p-3 mb-5 bg-white rounded'>
         <?php 
         include "con_db.php";

         $see='mobile';
         $i=0;
         $result = mysqli_query($conn, "SELECT * FROM product WHERE categories='fashion'");
          while ($row = mysqli_fetch_array($result))
          {
              
                echo"
                
                 <div class='card shadow-lg p-3 mb-5 bg-white rounded' style='width: 18rem; '>
                 
                 <img name='img' src='$row[image] ' class='card-img-top' alt='not available'>
                 <div class='card-body'>
                     <p class='card-text'><h4 name='price'> <i class='fas fa-rupee-sign'></i>$row[price]  </h4></p>
                     <p class='cart-text'><input name='name' value='$row[name]'>  <input name='detail' value='$row[detail]'> </p>
                     <form method='POST' action=''>
                     <label onclick='decrement($i)' class='minus'><i class='fas fa-minus'></i> </label>
                     
                     <input name='count' id='demo$i' type='text' class='text-center' value='1' placeholder='1'>  
                     
                     <label onclick='myFunction($i)' class='minus'> <i class='fas fa-plus'></i></label>
                     <input type='hidden' name='id' value='$row[pid]' />
                    </div>
                    <button type='submit' name='submit' class='btn btn-warning' style='margin-bottom: 10px;'><i class='fas fa-shopping-cart fs-4'></i>   Add To cart</button> 
                    <button type='submit' name='btnsubmit' class='btn btn-gold' style='background-color:orange;'> <i class='fas fa-caret-square-right fs-4'></i>  Buy</button></form>
                </div>";
            $i++;
            
        }
        ?>
            </div>

         </div>
            
        
        
        <script>
        var count=1;
        function myFunction(obj)
        {
            val=document.getElementById("demo"+obj).value;
            
            
            if(val<5){   
                count = 1 + parseInt(val);
                document.getElementById("demo"+obj).value= count;
            }
            else{
                alert("sorry");
            }
            
        }
        function decrement(dec)
        {
            val=document.getElementById("demo"+dec).value;
            if(val > 1){   
                count =val - 1;
                document.getElementById("demo"+dec).value= count;
            }
            else{
                alert("sorry");
            }
        }

         </script>

    </body>
</html>
<?php 
error_reporting(0);
session_start();

 $id= $_POST['id'];
 $quantity=$_POST['count'];
 if($id!=''){
     if(isset($_SESSION['username'])){
        include 'conn_db.php';
        $result = mysqli_query($conn, "select * from product where pid=".$id);
        while ($row = mysqli_fetch_array($result)){
            $pname=$row['name'];
            $detail=$row['detail'];
            $price=$row['price'];
            $image=$row['image'];
            $company=$row['company'];
            $username=$row['username'];
            $pid=$row['pid'];
         
            }
        $customer =$_SESSION['username'];
        $total_price= $quantity * $price;
        $status="add_to_cart";
        $info="Orderplced";
        if (isset($_POST["submit"]))
        {
             $sql= "INSERT INTO `order`(`pid`, `p_detail`, `p_quntity`, `p_price`, `p_image`, `p_company`, `p_seler`, `product_stasus`, `total_price`, `customer`, `p_name`, `info`) 
            VALUES ('$id','$detail','$quantity', '$price','$image','$company','$username','$status','$total_price','$customer','$pname','$info')";  
            if ($conn->query($sql) === TRUE)
             {
                 echo "<script> swal('Add!', 'one item added!', 'success'); </script>";
              } 
             else {
                echo "Error: " . $sql . "<br>" . $conn->error;
             }
         }
         else if(isset($_POST["btnsubmit"]))
         {
            $sql= "INSERT INTO `order`(`pid`, `p_detail`, `p_quntity`, `p_price`, `p_image`, `p_company`, `p_seler`, `product_stasus`, `total_price`, `customer`, `p_name`, `info`) 
            VALUES ('$id','$detail','$quantity', '$price','$image','$company','$username','$info','$total_price','$customer','$pname','$info')";
    
            if ($conn->query($sql) === TRUE) {
                echo "<script> swal('Order Placed!', 'comfirmed your order!', 'success'); </script>";
                 } 
            else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                }
         }
    }
     else{
        echo"<script>location.href='user_login.php'</script>";
     }
 
}

?>