<?php 
session_start();
error_reporting(0);
if(isset($_SESSION)){

}
else{
  echo "<script>location.href='user_login.php </script>";
}
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


</head>
<link rel="stylesheet" href="home_myamazon.css"/>
<body>
<?php include "nevbar.php"; ?>
<section style="overflow: hidden;">
  <div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel" style="height: 300px;">
    <ol class="carousel-indicators">
      <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
      <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/beautiful-pink-smoke-abstract-white-background_55716-1983.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block" style="height: 1000px;">
          <img src="images/galaxy.webp" class="" style="width:400px; height:200px;"/>
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/beautiful-pink-smoke-abstract-white-background_55716-1983.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block" style="height: 1000px;">
          <img src="images/mobile2.jpg" class=" " style="width:400px; height:200px;"/>
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/beautiful-pink-smoke-abstract-white-background_55716-1983.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block" style="height: 1000px;">
          <img src="images/mobile.jpg" class="" style="width:400px; height:200px;"/>
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </a>
  </div>
</section>

<section class=" row">

             
             <?php
             error_reporting(0);
             session_start();
             
              include 'con_db.php'; 
             $search=$_SESSION['search'];
             
           $result =mysqli_query($conn, "SELECT * FROM offers WHERE title LIKE '%{$search}%'");
            while ($row = mysqli_fetch_array($result))
            {
              echo " <div class='container bg-light col-3 shadow-lg p-3 mb-5 bg-white rounded' style='width: 350px;' >
              <h3>".$row['title']."</h3>
              <div class='row row-cols-2'>
               <div class='col'> <img class='img-thumbnail' src=".$row['faile1']. " '/> ".$row['cat_name1']. " </div>
                  <div class='col'> <img  class='img-thumbnail'src=".$row['faile2']. " '/> ".$row['cat_name2']. "  </div>
                  <div class='col'> <img class='img-thumbnail' src=".$row['faile3']. " '/> ".$row['cat_name3']. " </div>
                  <div class='col'> <img  class='img-thumbnail'src=".$row['faile4']. " /> ".$row['cat_name4']. " </div>
                   See more 
                   </div>
                   </div>
             
                   </div>  ";
            }
            ?>
     
  
<section>
  
  <div class="d-flex justify-content-center shadow-lg p-3 mb-5 bg-white rounded">
    <h1><i>Top Pick for you</i></h1>
    <div class="card shadow-lg p-3 mb-5 bg-white rounded" style="width: 18rem; ">
      <img src="images/laptop1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text"><i class="fas fa-rupee-sign"></i>500 - <i class="fas fa-rupee-sign"></i> 2000</p>
      </div>
    </div>
    <div class="card shadow-lg p-3 mb-5 bg-white rounded" style="width: 18rem;">
      <img src="images/shart1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text"><i class="fas fa-rupee-sign"></i>500 - <i class="fas fa-rupee-sign"></i> 2000</p>
      </div>
    </div>
    <div class="card shadow-lg p-3 mb-5 bg-white rounded" style="width: 18rem;">
      <img src="images/samsung-galaxy-m20.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text"><i class="fas fa-rupee-sign"></i>500 - <i class="fas fa-rupee-sign"></i> 2000</p>
      </div>
    </div>
    <div class="card shadow-lg p-3 mb-5 bg-white rounded" style="width: 18rem;">
      <img src="images/chairkids.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text"><i class="fas fa-rupee-sign"></i>500 - <i class="fas fa-rupee-sign"></i> 2000</p>
      </div>
    </div>
    <div class="card shadow-lg p-3 mb-5 bg-white rounded" style="width: 18rem;">
      <img src="images/Hot-Sell-2018-New-Fashion-Wind-Breaker-Jackets-Men-Korean-Trend-Street-Wear-Overcoat-Slim-Fit__36447.1544765763.webp" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text"><i class="fas fa-rupee-sign"></i>500 - <i class="fas fa-rupee-sign"></i> 2000</p>
      </div>
    </div>
    <div class="card shadow-lg p-3 mb-5 bg-white rounded" style="width: 18rem;">
      <img src="images/chairkids.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text"><i class="fas fa-rupee-sign"></i>500 - <i class="fas fa-rupee-sign"></i> 2000</p>
      </div>
    </div>
    <div class="card shadow-lg p-3 mb-5 bg-white rounded" style="width: 18rem;">
      <img src="images/Hot-Sell-2018-New-Fashion-Wind-Breaker-Jackets-Men-Korean-Trend-Street-Wear-Overcoat-Slim-Fit__36447.1544765763.webp" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text"><i class="fas fa-rupee-sign"></i>500 - <i class="fas fa-rupee-sign"></i> 2000</p>
      </div>
    </div>
  </div>
</section>

</body>
</html>