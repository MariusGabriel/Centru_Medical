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



//if(isset($_POST['submit'])){
    
$id =$_POST['id'];

   //echo $id;

$nume=  $_POST['nume'];

//echo $nume;

$prenume=  $_POST['prenume'];



 $sql="SELECT * FROM  pacientadd , consultatie where  consultatie.pacient_id ='".$id."' and pacientadd.id=consultatie.pacient_id ";

$query= $conn->query($sql);

           while($row=$query->fetch_assoc()){
               
               echo $row['pk'].$row['nume'];

               
  //$delete="Delete from `pacientadd`, `consultatie` where `consultatie`.`pacient_id` ='".$row['pacient_id']."' or `pacientadd`.`id`=`consultatie`.`pacient_id`";
  
   $delete="DELETE from `consultatie` where `consultatie`.`pacient_id`='".$row['pacient_id']."'";
    
   
$resdel=$conn->query($delete);



if($resdel)
 {
  ?>


<?php header("location:../adminpage/index.php");?>
        <?php
 }
 else
 {
  ?>


        <script>alert('error while registering you...');</script>
        <?php
 }
  
           }

          
 $delete1="DELETE from `pacientadd`  where `id`='".$id."'";


$resdel1=$conn->query($delete1);


 if($resdel1)
 {
  ?>


<?php header("location:../adminpage/index.php");?>
        <?php
 }
 else
 {
  ?>




        <script>alert('error while registering you...');</script>
        <?php
 }
          
           
           
          



//require_once '../adminpage/index.php';
//}