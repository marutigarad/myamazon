<?php





$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myamazon";
$conn = new mysqli($servername, $username, $password, $dbname);

  
    $name ='maruti';
    
    $result = mysqli_query($conn, "SELECT * FROM seler WHERE pass LIKE '%{$name}%'");

while ($row = mysqli_fetch_array($result))
{
        
        echo"suceefull";
}
    mysqli_close($conn);
  




?>