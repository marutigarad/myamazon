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
                      <a class="nav-link " aria-current="page" href="seler_home.php">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="admin_home.php">Add Product</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="seler_myorder.php">myorder</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="complite_order.php">Complict order</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Bank</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="seler_profile.php">Profile</a>
                    </li>
                    <li class="nav-item">
                     
                    </li>
                    
                 </ul>
                 
                </div>
                <a class="nav-link" href="seler_login.php">LogOut</a>
                 <h2> <?php echo $_SESSION["user"]; ?> </h>
            </div>
        </nav>
            
            
    </header>