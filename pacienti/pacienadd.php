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
    
    echo "Connected successfully";
}

 
 

if(isset($_POST['submit'])){
    
$nume=  $_POST['nume'];
$prenume=  $_POST['prenume'];
$varsta=$_POST['varsta'];
$cnp=$_POST['cnp'];

$sex=$_POST['sex'];
$zi=$_POST['zi'];
$lunile=$_POST['lunile'];
$an=$_POST['an'];
$loculnasteri=$_POST['locnastere'];
$adresa=$_POST['adresa'];


$starecivila=$_POST['starecivila'];
$ocupatie=$_POST['ocupatie'];
$studi=$_POST['studi'];

$serienrci=$_POST['serienrci'];
$telefonfix=$_POST['telefonfix'];
$telefonmobil=$_POST['telefonmobil'];
$email=$_POST['email'];
$asigurat=$_POST['asigurat'];
    //type checkbox

$salariat=$_POST['salariat'];
$coasigurat=$_POST['coasigurat'];

$liberprof=$_POST['liberprof'];
$copil=$_POST['copil'];

$elev=$_POST['elev'];
$gravida=$_POST['gravida'];



$pensionar=$_POST['pensionar'];
$veteran=$_POST['veteran'];
$minimec=$_POST['minimec'];
$revolutionar=$_POST['revolutionar'];
$handicap=$_POST['handicap'];
$pns=$_POST['pns'];
$ajutorsocial=$_POST['ajutorsocial'];
$somaj=$_POST['somaj'];
$cardeuro=$_POST['cardeuro'];
$altele=$_POST['altele'];


    
   $inserpac=$conn->query ("INSERT INTO pacientadd( 
           `nume`, `prenume`, `varsta`,`cnp`,
           `sex`, `zi`, 
           `luna`, `an`,
           `loc_nastere`, 
           `adresa`, 
           `stare_civila`,
           `ocupati`,
           `studii`, `serie`, 
           `telefonfix`, 
            `telefonmobil`, 
           `email`, `asigurat`, 
           `salariat`, `coasigurat`,
           `liberprofesionist`,`copil`, 
           `elevstudent`, `gravida`, 
           `pensionar`,  `veteran`, 
           `venit`, `revolutionar`,
           `handicap`, `pns`, 
            `ajutorsocial`, `somaj`, 
           `card_europen`, `altele`) VALUES
            ('$nume','$prenume','$varsta','$cnp',
                   '$sex',
                   '$zi','$lunile',
                   '$an','$loculnasteri','$adresa',
                   '$starecivila','$ocupatie',
                   '$studi' ,'$serienrci','$telefonfix',
                   '$telefonmobil','$email','$asigurat',
                   '$salariat','$coasigurat','$liberprof','$copil',
                   '$elev','$gravida','$pensionar','$veteran','$minimec',
                   '$revolutionar','$handicap','$pns','$ajutorsocial','$somaj','$cardeuro','$altele');");
    
   if($inserpac)
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


 require_once '../adminpage/index.php';


}

