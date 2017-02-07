<?php

/* 
 * AUTHOR CALTEA MARIUS GABRIEL
 */

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
   
echo $id; 

$nume=  $_POST['nume'];
echo $nume;
$prenume=  $_POST['prenume'];
$varsta=$_POST['varsta'];
$cnp=$_POST['cnp'];

$sex=$_POST['sex'];
$zi=$_POST['phpzile'];
$lunile=$_POST['phpluni'];
$an=$_POST['phpan'];
$loculnasteri=$_POST['locnastere'];
$adresa=$_POST['adresa'];

$starecivila=$_POST['starecivila'];
echo $starecivila;
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

   


$update= "UPDATE pacientadd SET 
    
    nume='".$nume."',
        prenume='".$prenume."',
        varsta='".$varsta."',
        cnp='".$cnp."',
        sex='".$sex."',
        zi='".$zi."',
        luna='".$lunile."',
        an='".$an."',
        loc_nastere='".$loculnasteri."',
        adresa='".$adresa."',
        stare_civila='".$starecivila."',
        ocupati='".$ocupatie."',
        studii='".$studi."',
        serie='".$serienrci."',
        telefonfix='".$telefonfix."',
        telefonmobil='".$telefonmobil."',
        email='".$email."',
        asigurat='".$asigurat."',
        salariat='".$salariat."',
        coasigurat='".$coasigurat."',
        liberprofesionist='".$liberprof."',
        copil='".$copil."',
        elevstudent='".$elev."',
        gravida='".$gravida."',
        pensionar='".$pensionar."',
        veteran='".$veteran."',
        venit='".$minimec."',
        revolutionar='".$revolutionar."',
        handicap='".$handicap."',
        pns='".$pns."',
        ajutorsocial='".$ajutorsocial."',
        somaj='".$somaj."',
        card_europen='".$cardeuro."',
        altele='".$altele."' 
        WHERE id='".$id."'";
//}
//var_dump($update);    

$upquer=$conn->query($update);
    
   // var_dump($upquer);

 if($upquer)
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
   
   

   



//}
 
 
 //consultati
 
 
 if(isset($_POST['submit1'])){

                 
             /*consultatie*/    
                 
                 
     $nrregi=$_POST['nrregi'];
     echo $nrregi;
   $spital=$_POST['spital'];
   $judet=$_POST['judet'];
    $oras=$_POST['oras'];
   $sectie=$_POST['sectie'];              
   $medic=$_POST['medic'];
   $ziinternare=$_POST['ziinternare'];
   $lunainternare=$_POST['lunainternare'];
   $aninternare=$_POST['aninternare'];
   $ziexternare=$_POST['ziexternare'];
   $lunaexternare=$_POST['lunaexternare'];
   $anexternare=$_POST['anexternare'];
   $diagnosticprincipal=$_POST['diagnosticprincipal'];
   $diagnosticsecundar=$_POST['diagnosticsecundar'];
   $observatii=$_POST['observatii'];
    $nrfisa=$_POST['nrfisa'];
     $cod=$_POST['cod'];
   $datapacientzil=$_POST['datapacientzil'];
   $datapacientluna=$_POST['datapacientluna'];
   $datapacientnewan=$_POST['datapacientnewan'];
   $ora=$_POST['ora'];
   $minut=$_POST['minut'];
   $simtome=$_POST['simtome'];
   $diagnostic=$_POST['diagnostic'];
   $compensatie=$_POST['compensatie'];
   $valoarecompensatie=$_POST['valoarecompensatie'];
   $medicament1=$_POST['medicament1'];
   $medicament2=$_POST['medicament2'];
   $medicament1=$_POST['medicament1'];
   $cantitate2=$_POST['cantitate2'];
   $cantitate3=$_POST['cantitate3'];
  
   $nrfisa=$_POST['nrfisa'];
   $cod=$_POST['cod'];
   $tipboala=$_POST['tipboala'];
   
         

 $inserconsultatei=$conn->query("INSERT INTO 
     consultatie
(
`pacient_id`,
`nr_inregistrare`,
 `spital`,
 `judet_spital`, 
 `oras_spital`,
 `sectie`, `medic`,
 `internarezi`,
 `internareluna`, 
`internarean`, 
`externarezi`, 
`externareluna`,
`externarean`
, `diagnosticprin`,
`diagnosticsec`,
`observatii`, 
`nr_fisa`, 
`cod`, 
`datazi`,
`dataluna`,
`dataan`, 
`ora`, 
`oraminut`,
`simtome`, 
`diagnostic`,
 `compensatie`,
 `valcompensatie`, 
 `medicament1`,
 `medicament2`,
 `medicament3`,
 `cantitate1`, 
`cantitate2`, 
`cantitate3`,`tipul_boala`)
 VALUES ('$id','$nrregi','$spital','$judet','$oras','$sectie','$medic','$ziinternare','$lunainternare',
         '$aninternare','$ziexternare','$lunaexternare','$anexternare','$diagnosticprincipal','$diagnosticsecundar',
         '$observatii'
         ,'$nrfisa',
        '$cod','$datapacientzil',
         '$datapacientluna','$datapacientnewan',
        '$ora','$miunt','$simtome','$diagnostic',
         '$compensatie','$valoarecompensatie','$medicament1',
         '$medicament2','$medicament3','$cantitate1','$cantitate2',
         '$cantitate3','$tipboala');");
   //32
   //var_dump($inserconsultatei);


   if($inserconsultatei)
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