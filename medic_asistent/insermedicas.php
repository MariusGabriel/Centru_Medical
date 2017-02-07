<?php

/* AUTHOR :CALTEA MARIUS*/

include ('../db/db.php');

$servername = 'localhost';
$username = 'root';
$password = 'linux32';
$db="db";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

if(isset($_POST['submit']))
{
$nume=  $_POST['nume'];
$prenume=  $_POST['prenume'];
$email=$_POST['email'];
$parola = $_POST['parola'];
$rparola = $_POST['rparola'];
$rol = $_POST['rol'];
 

echo $nume." ".$prenume." ".$email." ".$parola." ".$rparola." ".$rol;

$test=$conn->query("INSERT INTO medic_asistent (`nume`,`prenume`,`email`,`parola`,`rparola`,`rol`)"
        . "VALUES('$nume','$prenume','$email','$parola','$rparola','$rol')"); 




 //var_dump($test);
 
 if($test)
 {
  ?>
<?php header("location:pagina_logare.php");?>
        <?php
 }
 else
 {
  ?>
        <script>alert('error while registering you...');</script>
        <?php
 }

 
 
 }
  


