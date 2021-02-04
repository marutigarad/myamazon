<?php 
error_reporting(0);
session_start();
$_SESSION['username'];
?>


<html>
    <head>
        
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
            integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" 
            integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA==" crossorigin="anonymous" />
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <link rel="stylesheet" href="offers.css"/>

    </head>
    <body>
    <header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">MYAMAZON</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav nav-pills text-white">
        <li class="nav-item">
          <a class="nav-link " href="seler_home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="admin_home.php">Add offers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">myorder</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Complict order</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="Sigup.php">AddEmp</a>
        </li>
       
        <li class="nav-item row">
          
        </li>
        
      </ul>
      </div> 
      <div class="col-2">
      <form method="POST" action="">
      <input class="search" type="text" placeholder="search/ delete " name="search" id="search">
      </div> 
      <div class="col-1">
       <button  type ="submit"name="delete" class="btn btn-lg btn-outline-warning" > Delete </button>
      </div>
      <div class="col-1">
      <button  type ="submit"name="update" class="btn btn-lg btn-outline-success" > Update </button>
      </div>
      </form>
      
    
    
    <h2> <?php echo $_SESSION["user"]; ?> </h>
  </div>
</nav>
<?php 
 if(isset($_POST['delete'])){
 $search=$_POST['search'];
 
  include 'con_db.php'; 
  $sql = "DELETE FROM offers WHERE ofid=".$search;
  if (mysqli_query($conn, $sql)) {
    echo "<script> swal('Delete!', 'one record deleted!', 'success'); </script>";
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }
}
 

?>

</header>
        <div class="section">
            <div class="container bg-light col-3 shadow-lg p-3 mb-5 bg-white rounded" style="width: 350px;" >
             
               <?php
               error_reporting(0);
               session_start();
               
                include 'con_db.php'; 
               $search=$_SESSION['search'];
               
             $result =mysqli_query($conn, "SELECT * FROM offers WHERE title LIKE '%{$search}%'");
              while ($row = mysqli_fetch_array($result))
              {
                echo " <div class='container bg-light col-3 shadow-lg p-3 mb-5 bg-white rounded' style='width: 350px;' >
                <h3>".$row['title']." </h3> Id  ".$row[ofid]."
                <div class='row row-cols-2'>
                 <div class='col'> <img class='img-thumbnail' src=".$row['faile1']. " '/> ".$row['cat_name1']. " </div>
                    <div class='col'> <img  class='img-thumbnail'src=".$row['faile2']. " '/> ".$row['cat_name2']. "  </div>
                    <div class='col'> <img class='img-thumbnail' src=".$row['faile3']. " '/> ".$row['cat_name3']. " </div>
                    <div class='col'> <img  class='img-thumbnail'src=".$row['faile4']. " /> ".$row['cat_name4']. " </div>
                     See more ";
              }
              ?>
             </div>
        </div>

        </div>   
<section>
        <form method="POST" action="" enctype="multipart/form-data" class="container-md col-12 shadow-lg p-3 mb-5 bg-white rounded " > 
            <div  class=" bg-secondary wight text-center text-white">
                 <h1> Wel-Come Myamazon INDIA </h1>
          </div>
            <div class="mb-3 row">
               <label for="inputPassword" class="col-sm-4 col-form-label" >offer title</label>
               <div class="col-sm-8">
                   <input type="text" name="offers" placeholder="offer title" class="form-control" value="<?php echo$title;?>"id="inputPassword"> 
                </div>
          </div>
           <div class="mb-3 row">
              <label for="inputPassword" class="col-sm-4 col-form-label">product categories</label>
              <div class="col-sm-8">
                 <input type="text" name="cat_name1" placeholder="product categories" class="form-control" id="inputPassword">
               </div>
           </div>
            <div class="mb-3 row">
              <label for="inputPassword" class="col-sm-4 col-form-label">file</label> 
              <div class="col-sm-8">
                <input type="file" name="file1"  class="form-control" id="inputPassword"> 
              </div>
            </div>
                 <div class="mb-3 row">
                     <label for="inputPassword" class="col-sm-4 col-form-label">product categury</label> 
                   <div class="col-sm-8">
                         <input type="text" name="cat_name2" placeholder="product categories" class="form-control" id="inputPassword"> 
                    </div>
                 </div>
                 <div class="mb-3 row">
                     <label for="inputPassword" class="col-sm-4 col-form-label">file</label>
                     <div class="col-sm-8">
                        <input type="file" name="file2" class="form-control" id="inputPassword"> 
                    </div>
                 </div>
                 <div class="mb-3 row">
                     <label for="inputPassword" class="col-sm-4 col-form-label">product categury</label> 
                   <div class="col-sm-8">
                         <input type="text" name="cat_name3" placeholder="product categories" class="form-control" id="inputPassword"> 
                    </div>
                 </div>
                 <div class="mb-3 row">
                     <label for="inputPassword" class="col-sm-4 col-form-label">file</label>
                     <div class="col-sm-8">
                        <input type="file" name="file3" class="form-control" id="inputPassword"> 
                    </div>
                 </div>
                 <div class="mb-3 row">
                     <label for="inputPassword" class="col-sm-4 col-form-label">product categury</label> 
                   <div class="col-sm-8">
                         <input type="text" name="cat_name4" placeholder="product categories" class="form-control" id="inputPassword"> 
                    </div>
                 </div>
                 <div class="mb-3 row">
                     <label for="inputPassword" class="col-sm-4 col-form-label">file</label>
                     <div class="col-sm-8">
                        <input type="file" name="file4" class="form-control" id="inputPassword"> 
                    </div>
                 </div>
                    <br>
                       <button type="submit" name="submit" class="btn btn-lg btn-outline-success col-sm-5" > Add offers</button>
                        <button class="btn btn-outline-danger btn-lg col-sm-5"> Cancel</button>
            </form>
       
    </section>
    <script src="myjava.js"></script>
    <script>
   
    </script>
    </body>
</html>
<?php
error_reporting(0);
if(isset($_POST['submit'])){
 session_start();
 $_SESSION['search']=$_POST['offers'];


 $servername = "localhost:3307";
 $username = "root";
 $password = "";
 $dbname = "myamazon";
 $conn = new mysqli($servername, $username, $password, $dbname);
  
$offers =$_POST['offers'];
$cat_name1 =$_POST['cat_name1'];
$cat_name2 =$_POST['cat_name2'];
$cat_name3 =$_POST['cat_name3'];
$cat_name4 =$_POST['cat_name4'];

$file1 =$_FILES['file1'];
$file2 =$_FILES['file2'];
$file3 =$_FILES['file3'];
$file4 =$_FILES['file4'];

$uploadfile1 =$file1['name'];
$uploadfile2 =$file2['name'];
$uploadfile3 =$file3['name'];
$uploadfile4 =$file4['name'];

$filetemp1 = $file1['tmp_name'];
$filetemp2 = $file2['tmp_name'];
$filetemp3 = $file3['tmp_name'];
$filetemp4 = $file4['tmp_name'];

$txtfile1 = explode('.',$uploadfile1);
$txtfile2 = explode('.',$uploadfile2);
$txtfile3 = explode('.',$uploadfile3);
$txtfile4 = explode('.',$uploadfile4);

$filecheck1 = strtolower(end($txtfile1));
$filecheck2 = strtolower(end($txtfile2));
$filecheck3 = strtolower(end($txtfile3));
$filecheck4 = strtolower(end($txtfile3));

$filtextstore = array('png','jpg','jpeg');

if(in_array($filecheck1,$filtextstore)&&in_array($filecheck2,$filtextstore)&&in_array($filecheck3,$filtextstore)&&in_array($filecheck4,$filtextstore))
{
    $destinationfile1 = 'photo/'.$uploadfile1;
    $destinationfile2 = 'photo/'.$uploadfile2;
    $destinationfile3 = 'photo/'.$uploadfile3;
    $destinationfile4 = 'photo/'.$uploadfile4;
    move_uploaded_file($filetemp1,$destinationfile1);
    move_uploaded_file($filetemp2,$destinationfile2);
    move_uploaded_file($filetemp3,$destinationfile3);
    move_uploaded_file($filetemp4,$destinationfile4);
    $sql = "INSERT INTO `offers`(`title`, `cat_name1`, `faile1`, `cat_name2`, `faile2`, `cat_name3`, `faile3`, `cat_name4`, `faile4`) 
    VALUES('$offers','$cat_name1','$destinationfile1','$cat_name2','$destinationfile2','$cat_name3','$destinationfile3','$cat_name4','$destinationfile4')";   
  if ($conn->query($sql) === TRUE)
    {
      echo "<script> aler('added successflly');</script>"; 
    } 
  else
    {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
}
?>