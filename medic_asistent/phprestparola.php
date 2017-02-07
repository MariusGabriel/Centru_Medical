<?php

$servername = 'localhost';
$username = 'root';
$password = 'linux32';
$db="db";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
    
    echo "Connected successfully";
}

if(isset($_POST['submit']))
{
    
$nume=  $_POST['email'];


 

echo $nume." ".$parola." ".$rparola;

//$test=$conn->query("INSERT INTO medic_asistent (`nume`,`prenume`,`email`,`parola`,`rparola`,`rol`)"
        //. "VALUES('$nume','$prenume','$email','$parola','$rparola','$rol')"); 

$updamedic="UPDATE medic_asistent set  parola='".$parola."',rparola='".$rparola."' where nume='".$nume."'";



$new=$conn->query($updamedic);


 //var_dump($test);
 
 if($new)
 {
  ?>
<?php header("location:pagina_logare.php");?>
        <?php
 }
 else
 {
  ?>
        <script>alert('error...');</script>
        <?php
 }

 
 
 }
