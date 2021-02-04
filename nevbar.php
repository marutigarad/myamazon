<?php include "link.php";

session_start();
error_reporting(0);

?>
<header>
    <div >
    
        <nav class="navbar navbar-light bg-secondary">
            <div class="container-fluid ">
              <a class="navbar-brand text-white"><h1 >WEL-COME MYAMAZON</h1></a>
              <form class="d-flex">
                <input class="form-control  col-8 me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-warning fs-3 col-3" type="submit"><i class="fas fa-search"></i></button>
              </form>
              <div>
                <a class="nav-link text-white fs-4" href="order_return.php">Return & Orders</a>
              </div>
              <div >
              <a class="nav-link text-white " href="user_profile.php">profile<i class="fas fa-user-circle fs-2 "></i> </a>
              </div>
              <div >
              <a class="nav-link text-white " href="add_to_cart.php">Cart<i class="fas fa-cart-plus fs-3"></i> </a>
              </div>
            </div>
          </nav>

    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <div class="container-fluid ">
          <a class="navbar-brand text-white" href="home_myamazon.php">Home</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav fs-5 lists">
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="best_seller.php">best sellers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="mobile.php">Mobiles</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Today Deals</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">New Releases</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="fashion.php">Fashion</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="electronic.php">Electronics</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Computers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Gift Ideas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="toys.php">Toys & More</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Wel-Come <?php echo$_SESSION['username']; ?></a>
              </li>

         
             
            </ul>
          </div>
        <div>
          <a class="nav-link text-white fs-4  " href="user_login.php"><?php if(isset($_SESSION['username']))
              { echo"SingOut"; } else{ echo"SignIn";} ?></a>
        </div>
        </div>
      </nav>
</header>