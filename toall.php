<?php 

session_start();

 $id= $_POST['id'];
 $quantity=$_POST['count'];
 if($id!=''){
     if(isset($_SESSION['username'])){
        include 'con_db.php';
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