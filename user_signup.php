<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php include 'link.php'; ?>
        
<Style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    overflow:hidden;
    width:100vw;
    height:100vh;
    background-image: url("images/undraw_referral_4ki4.svg");
    background-repeat: no-repeat, repeat;
    position: relative;
 }
 .container-md{
    position: relative;
    left: 20%;
}
 }

</Style>
</head>
    </head>
    <body>
        <section>
            <form class="container-md col-5  shadow-lg p-3 mb-5 bg-white rounded" method="POST" action="">
                <div  class=" bg-secondary wight text-center text-white">
                    <h1> Wel-Come Myamazon INDIA </h1>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label" >Frist Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword" name="fname" placeholder="Frist Name">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Last Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword" name="lname" placeholder="Last Name">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Mobile No</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword" name="mobile" placeholder="Mobile">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Email Id</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword" name="mail" placeholder="E-Mail Id">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword" placeholder="Apartment, studio, or floor" name="address">
                    </div>
                </div>
                <div class="col-9 row">
                    <div class="col-md-4">
                        <label for="inputCity" class="form-label">City</label>
                        <input type="text" class="form-control" id="inputCity" name="city">
                    </div>
                    <div class="col-md-5">
                        <label for="inputState" class="form-label">State</label>
                        <select id="inputState" class="form-select" name="state">
                            <option selected VALUES="maharashtra">maharashtra</option>
                            <option VALUES="karanataka">karanatka</option>
                            <option VALUES="kerala"> keral </option>
                            <option VALUES="gujrat"> gujrat </option>
                            <option VALUES="rajesthan"> rajesthan </option>
                        </select>
                    </div>
                    <div class="col-md-3 ">
                        <label for="inputZip" class="form-label">Zip</label>
                        <input type="number" name ="zip" class="form-control" id="inputZip">
                    </div>
                </div>
                <br>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword" name="pass" placeholder="Password">
                    </div>
                </div>
                <div clas="mb-3 row">
                    <label for= "inputPassword" class="col-sm-2 col-from label"> </label>
                    <button type="submit" class="btn btn-outline-primary btn btn-lg col-sm-4" name="submit">Sumbmit</button>
                    <button type="reset" class="btn btn-outline-warning btn-lg col-sm-4" name ="reset">Cancel</button>
                </div>
                <br>
                <div>
                    <br>
                </div>
            </form>

        </section>
   </body>
</html>
<?php

error_reporting (0);

if(isset($_POST['submit']))
{
    include 'con_db.php';
    $f_name =$_POST['fname'];
    $l_name=$_POST['lname'];
    $mbile= $_POST['mobile'];
    $mail= $_POST['mail'];
    $address= $_POST['address'];
    $city =$_POST['city'];
    $state =$_POST['state'];
    $zip = $_POST['zip'];
    $pass= $_POST['pass'];


    $sql= "INSERT INTO `user`(`mobile`, `fname`, `lname`, `mail`, `address`,  `city`, `state`, `zip`, `pass`)
    VALUES ('$mbile','$f_name','$l_name','$mail', '$address','$city','$state','$zip','$pass')";

    if ($conn->query($sql) === TRUE) {
        echo "<script> swal('Delete!', 'one record deleted!', 'success'); </script>";
    } else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
else{
echo"faild please modifed your code";

}
$conn->close();

?>
