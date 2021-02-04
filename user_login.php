<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style> 
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            overflow:hidden;
            width:100vw;
            height:100vh;
            background-image: url("images/undraw_accept_terms_4in8.svg");
            background-repeat: no-repeat, repeat;
            position: relative;
            }
        section{
            position:absolute;
            width:100%;
            max-width:30%;
            left:50%;
           /* box-shadow: 0px 5px 5px darkgrey; 
            border-radius:30px;*/
            }
            div{
                padding:10px;
            }
        </style>
    </head>
    <body>
        <section>
            <form class="form-control shadow-lg p-3 mb-5 bg-white rounded col-12" method="POST" actyion="">
                <div class="bg-secondary text-white"><h1>Wel-come Myamazon </div>
                <div class="col-9 ">
                    <label> Username </label>
                        <div>
                        <input type="text" name="username" placeholder="username" id="username"class="form-control col-2"  required/>
                        <small id="small"> </small>
                        </div>
                </div>
                <div class="col-9">
                    <label> Password </label>
                    <div>
                        <input type="password" name="password" placeholder="username" id="password" class="form-control"required/>
                        <small id="small"> </small>
                    </div>
                </div>
                <div> <a herf="">Forgot Password </a></div>
                <div class="col-12">
                    <button type="submiit" name="submit" onclick="myfunction()" value="submit"class="btn btn-outline-success col-4">submit </button>
                    <button type="reset" class="btn btn-outline-warning col-4">Cancel </button>
                 </div>
                 <div> <a href="user_signup.php" class="text-dark nev-link">Create Account </a></div>
                 <?php
                 error_reporting(0);
                 session_start();
                 $_SESSION["username"]=$_POST['username'];

                 ?>
            </form>
        </section>
        <script>
        var username=document.getElementById("username").value;
        function myfunction()
        {
            var str= username.length;
            if(str<=4){
                document.getElementById("small").innerHTML = " minimum char  4";
            }
            else if(str>=4){
                document.getElementById("small").innerHTML = " it ok";
            }

        }

        </script>

    </body>
</html>
<?php
error_reporting(0);


/*
    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $dbname = "myamazon";
    $conn = new mysqli($servername, $username, $password, $dbname); */
    $name =$_POST['username'];
    $pass=$_POST['password'];
    
     $_SESSION["username"]=$_POST['username'];
     
     
     if(isset($_SESSION["username"]))
     {
            include 'con_db.php';
             $result = mysqli_query($conn, "SELECT * FROM user WHERE pass LIKE '%{$pass}%'");
              while ($row = mysqli_fetch_array($result))
              {
                  echo$rwo['fname'];
                   $check=$row['fname'];
                }
                if($check==$name)
                {
                    echo"<script>location.href='home_myamazon.php'</script>";
                }
                else if($name==""&& $pass=="")
                {
                    echo"<script> setErrorMsg(pass, 'username cannot be blank');        </script>";
                    echo"<script> setErrorMsg(user, 'username cannot be blank');        </script>";
                }
                else if($pass=="")
                {
                    echo"<script> setErrorMsg(pass, 'username cannot be blank');        </script>";
                }
                else{
                    echo"<script> setErrorMsg(user, 'username cannot be blank');        </script>";
                }
            }
    
        
        
    mysqli_close($conn);

?>
