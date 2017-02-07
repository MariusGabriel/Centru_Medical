<?php

//include '../db/db.php';

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
    
    //echo "Connected successfully";
}
//if($_POST['submit']){
    
$nume=  $_POST['nume'];

//echo $nume;


$parola=$_POST['parola'];

//echo $parola ;

//var_dump($parola);

$rol=$_POST['rol'];

//echo $rol ;
//
$sql = "SELECT  nume ,parola,rol  FROM medic_asistent where nume='".$nume."' and  parola='".$parola."' and rol='".$rol."'";
$result = $conn->query($sql);

$newrow=$result->fetch_assoc();


//if ($result->num_rows > 0) {
    // output data of each row
    while($newrow != 0) {
    echo  $newrow["nume"].$newrow["parola"].$newrow['rol'];
    
        if($newrow["nume"]== $nume && $newrow["parola"]==$parola &&  $newrow['rol']==$rol){
            
            header("location:../adminpage/index.php");
        }
 else {
     
     //echo "<script>alert('Numele, Parola sau ROL sunt gresite');</script>";
   //  header("location:pagina_logare.php");
     
 }
    }
    
//}
    
  
echo '<!DOCTYPE>


<html>
    <head>
 
        <title>Stergere Pacient</title>
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="../js/bootstrap.js" type="text/javascript"></script>
<script src="../js/bootstrap.min.js" type="text/javascript"></script>
<script src="../js/npm.js" type="text/javascript"></script>
<link href="../css/style.css" rel="stylesheet" type="text/css"/>
            
    </head>
    <body class="deleteimage">
        <div class="container adaugaborder" style="margin-top: 270px;">
  
        
     
            <div class="col-md-12" style="margin-bottom: 30px;">
                <div class=" col-md-1"></div>
                
                <div class=" col-md-1 back" ><img style="height: 75px; width: 75px;" src="../img/sigla.png" /></div>
                
                <div class="col-md-8"><h3 class="text-uppercase text-center div_center addpacient">Ați gresit un dintre campurile <span style="color:red;">NUME</span>,<span style="color:red;">PAROLA</span>
                sau nu ați selectat <span style="color:red;">ROL!</span></h3></div>
            
                <div class=" col-md-1 back"><a href="../medic_asistent/pagina_logare.php"><img src="../img/back.png" title="Inapoi"> </a></div>
            </div>
    
              
    </div> <!-- /container -->

    </body>
</html> ';
    
