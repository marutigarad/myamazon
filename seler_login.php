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

<link rel="stylesheet" href="seler_login.css">
</head>

<body>
<div>
    
        <div class="container container-md ">
        <form class=" container-md col-5 bg-light g-4  rounded-3 shadow-lg p-3 mb-5 bg-white rounded" id="form" action="" method="POST">
            <h1 class="bg-secondary wight text-center text-white"> Myamazon </h1><br>

            <div class="col-md-10 form-control1 ">
                <label for="validationServer01" class="form-label">User Name</label>
                <input type="text" class="form-control" id="username" name="uname" placeholder="UserName" >
                <i class=" far fa-check-circle"></i> 
              <div class="form-control1"style="color: red;" > <small> </small>
      
                <br>
               
            </div>
            <div class="col-md-12 form-control1 "> 
                <label for="validationServer01" class="form-label">Password</label>
                <input type="password" class="form-control " id="password" name="pass" placeholder="Password" >
               <i class="far fa-check-circle"></i> 
                <small class="form-control1"style="color: red;"> </small>
                
            </div>
           
            <button type="button" class="btn btn-link">Forgot Password</button>
            <br>
            <br>
            <div class="col-12 ">
                <div class="col-sm-12">
               
                <input class="btn btn-outline-success col-sm-4"name="submit" value="login" type="submit"/>
                
            
                <button class="btn btn-outline-warning col-sm-4" type="reset">Cancel</button>
            
            </div>
            <div class="col-md-8">
            <label for="validationServer01" class="form-label"><a class="nav-link" href="Sigup.php">Singup</a></label>
            </div>
        </form>
        </div>
        <?php
        error_reporting(0);
session_start();

$_SESSION['user']=$_POST["user"];


?>
</div>
<script type="text/javascript">
 const from = document.getElementById('form');
 const user = document.getElementById('username');
 const pass = document.getElementById('password');
 form.addEventListener('submit',(event)=>{
     //event.preventDefault();
     validate();
 });
 const validate = () =>{
    const username = user.value.trim();
    const password = pass.value.trim();
    //validate user
    if(username===""){
        setErrorMsg(user, 'username cannot be blank');

    }
    else if(username.length<=2){
        setErrorMsg(user,'user name min 4 char');

    }
    else{   
        setSuccess(user,'');
    }
    if(password===""){
        setErrorMsg(pass, 'username cannot be blank');

    }
    else if(password.length<=2){
        setErrorMsg(pass,'user name min 4 char');

    }
    else{   
        setSuccess(pass,'');
    }

 }
 function setErrorMsg(input,errormsgs){
     const formControl = input.parentElement;
     const small= formControl.querySelector('small');
     formControl.className="form-control1 error";
     
     small.innerText=errormsgs;
 }
 
 function setSuccess(input,success){
     const formControl = input.parentElement;
     const small= formControl.querySelector('small');
     formControl.className="form-control1 success";
     small.innerText=success;
 }




 </script>
</body>
</html>
<?php
error_reporting(0);
if(isset($_POST['submit']))
{
    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $dbname = "myamazon";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $name =$_POST['uname'];
    $pass=$_POST['pass'];

    session_start();
     $_SESSION["user"]=$_POST['uname'];
     
     if(isset($_SESSION["user"]))
     {
             $result = mysqli_query($conn, "SELECT * FROM seler WHERE pass LIKE '%{$pass}%'");
              while ($row = mysqli_fetch_array($result))
              {
                   $check=$row['fname'];
                }
                if($check==$name)
                {
                    echo"<script>location.href='admin_home.php'</script>";
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
        else{
            echo" please edit your code because session start !!!!...";
        }
        
    mysqli_close($conn);
}
?>
