<html>
  <head>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
</body>
</html>

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
</head>
<body>
  <?php

$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "myamazon";
$conn = new mysqli($servername, $username, $password, $dbname);

error_reporting (0);


if(isset($_POST['submit'])){

$name =$_POST['product_name'];
$detail =$_POST['product_detail'];
$quantity =$_POST['product_quntity'];
$categories =$_POST['Categories'];
$price =$_POST['product_price'];
$company =$_POST['product_company'];
$username1=$_SESSION['user'];
$totalsell= 0;
$file =$_FILES['files'];
$uploadfile =$file['name'];
$fileerror =$file['error'];
$filetemp = $file['tmp_name'];
$txtfile = explode('.',$uploadfile);
$filecheck = strtolower(end($txtfile));

$filtextstore = array('png','jpg','jpeg');

if(in_array($filecheck,$filtextstore))
{
    $destinationfile = 'photo/'.$uploadfile;
    move_uploaded_file($filetemp,$destinationfile);
    $sql = "INSERT INTO `product`(`name`, `detail`, `quntity`, `categories`, `price`, `image`, `company`,`username`,`totalsell`)
     VALUES ('$name','$detail','$quantity','$categories','$price','$destinationfile','$company','$username1','$totalsell')";


if ($conn->query($sql) === TRUE) {
  echo "<script> swal('Done!', 'one record added!', 'success'); </script>";
    echo "<script>location.href='seler_home.php'</script>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

}
?>

</body>
</html>