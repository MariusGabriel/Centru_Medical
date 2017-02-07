<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        
             <title>Rapoarte pacienti</title>
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="../js/bootstrap.js" type="text/javascript"></script>
<script src="../js/bootstrap.min.js" type="text/javascript"></script>
<script src="../js/npm.js" type="text/javascript"></script>
<link href="../css/style.css" rel="stylesheet" type="text/css"/>


<style>
    
    /* accordion*/

button.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
   /* padding: 18px;*/
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.9s;
}

button.accordion.active, button.accordion:hover {
    background-color: #ddd;
}

div.panel {
   /* padding: 0 18px;*/
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: 0.6s ease-in-out;
    opacity: 0;
}

div.panel.show {
    opacity: 1;
    max-height:1000px;  
}

/*end  accordion*/
    
    
    
</style>



    </head>
    <body class="raportbackground">
         <div class="container adaugaborder">
            <div class="col-md-12">
                <div class=" col-md-1" ></div>
                
                <div class=" col-md-1 back" ><img style="height: 75px; width: 75px;" src="../img/sigla.png" /></div>
                
                <div class="col-md-8"><h2 class="text-uppercase text-center div_center addpacient">rapoarte pacienti</h2></div>
            
                <div class=" col-md-1 back"><a href="../adminpage/index.php"><img src="../img/back.png" title="Inapoi"> </a></div>
                
                 <div class="col-md-12">
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
    
    //echo "Connected successfully";
}
                    
                     ?>
                     
                     <div class="col-md-12" style="margin-top:60px;"></div>
                     
                     
                     <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"> 
                
                   
                      <div class="col-md-12">
                              
                             
                         
                          <h3>   1: RAPORT PACIENTI CU VARSTA CUPRINSA INTRE  </h3>
                              
       
                        <div class="newpanel">
                          
                        
                             <div class="table-responsive">    
          
                                 
                                 <table class="table table-hover">
      <thead>
         
          <tr>
              
              <th colspan="2"> <input  type="text"  name="varsta" style="float: right; margin-top:-4px !important"> </th>
                           
              <th style="width: 60px">   <input  type="text"  name="varsta1"> </th>
                              
              <th>     <input type="submit" name="submit" value="" class="submitimg "> </th> 
              
              
          </tr>
           <?php  
           
          $varsta= "";
           $varsta1= "" ;     

            
   if (empty($_POST["varsta"])) {
    $nameErr = " ";
  } else {
    $varsta = test_input($_POST["varsta"]);
  }
  
  if (empty($_POST["varsta1"])) {
    $emailErr = " ";
  } else {
    $varsta1 = test_input($_POST["varsta1"]);
  }
  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
            
            
            
            
          
           ?>
          
      <tr class="info">
        <th>NR.CRT.</th>
        <th>NUME</th>
        <th>PRENUME</th>
        <th>VARSTA</th>
        <th>SEX</th>
        <th>TOTAL</th>
      
      </tr></thead>
      <?php 
       $sql="SELECT * FROM  pacientadd  where varsta  BETWEEN  '".$varsta."' and  '".$varsta1."' order by varsta asc";
           
           $query= $conn->query($sql);
      
                $i=1;
 
           while($row=$query->fetch_assoc()){?>
      
 
                                      <tbody>
                                            
                                          <tr>
                                              
                                              <td scope="row"><?php echo $i++; ?></td>
                                              
                                              <td scope="row"><?php echo $row["nume"]; ?></td>
                                              
                                              <td scope="row"><?php echo $row["prenume"]; ?></td>
                                              
                                               <td scope="row" bgcolor="#D9EDF7"><?php echo $row["varsta"]; ?></td>
                                               
           <td scope="row" ><?php echo $row["sex"];} $sizei=  max(array($i)); ?></td>
           
           <td scope="row"><?php
           
           if($sizei-1 ==0){
               
               echo null;
               
           }
           else {
               
                echo $sizei-1;
               
           }
           

           ?>
  
           </td>
           
           
                                          </tr>
                                          
                                          
                                          
                                          
                                          
                                          
                                      </tbody>
                                 </table>
                                 
                                 
                         
                                 
                             </div>
                             </div>
                          </div>
                         
                         
                     
                         
                         <div class="col-md-12 raportsex">
                              
 
                            
                      <h3>   2: RAPORT PACIENTI DUPA SEX    </h3>     
                          
                         
                              
                          
                            
                             <div class="table-responsive ">    
          
                                        <div class="col-md-12">
                                            <div class="col-md-4"></div>
                                            
                                            <div class="col-md-2" > <p style="float:right;">FEMININ <input type="radio"  name="sex" value="feminin"> </p></div>
                           
                                            <div  class="col-md-2" > <p>MASCULIN <input  type="radio"  name="sex" value="masculin"> </p> </div>
                              
                       <div  class="col-md-3" >  <input type="submit" name="submit" value="" class="newsubmit">   </div> 
              
              
          </div>                                
                                 
                             <div class="sepanel">     
                                 
                                 <table class="table table-hover ">
                                     
                
                 
                       
                                     
      <thead>
 
          
      <tr class="info">
        <th>NR.CRT.</th>
        <th>NUME</th>
        <th>PRENUME</th>
        <th>VARSTA</th>
        <th>SEX</th>
         <th>TOTAL</th>
      
      </tr>
                 <?php
                                          $sex="";
                                          //echo
                                          //$sex=$_POST["sex"];
                                          
 if (empty($_POST["sex"])) {
    $nameErrr = "Name is required";
  } else {
    $sex= test_input_($_POST["sex"]);
  }
       function test_input_($dataa) {
  $dataa = trim($dataa);
  $dataa = stripslashes($dataa);
  $dataa = htmlspecialchars($dataa);
  return $dataa;
}                                   
                                          $sqlsex="SELECT * FROM  pacientadd  where  sex ='".$sex."'  order by varsta asc";
                                           
                                   $newqueery=$conn->query($sqlsex)  ;     
                                          $i_=1;
    
                                   
                                          
           while($row=$newqueery->fetch_assoc()){
               
               
                              
                                          
                                          ?>  
      
      </thead>

    
                                      <tbody>
 
                                          <tr>
                                              
                                              <td scope="row"><?php echo $i_++; ?></td>
                                              <td scope="row"><?php echo $row["nume"]; ?></td>
                                              <td scope="row"><?php echo $row["prenume"]; ?></td>
                                               <td scope="row"><?php echo $row["varsta"]; ?></td>
                                               
           <td scope="row" bgcolor="#D9EDF7"><?php echo $row["sex"]; }
           
           $sizei=  max(array($i_));
           ?></td>
           
           
             <td scope="row"><?php
           
           if($sizei-1 ==0){
               
               echo null;
               
           }
           else {
               
                echo $sizei-1;
               
           }
           

           ?>
  
           </td>
           
                                          </tr>
 
                                          
                                      </tbody>
                                      
                                      
                                      
                                 </table>
                                 
                                 
                         </div>
                                 
                             </div>
                             
                          </div>
                          

                         
                            <div class="col-md-12 raportcivila">
                              
 
                            
                      <h3>   3: RAPORT PACIENTI  DUPA STARE CIVILA  </h3>     

                             <div class="table-responsive ">    
          
                                        <div class="col-md-12">
                                            <div class="col-md-4"></div>
                                            
                                            <div class="col-md-2" > <p style="float:right;">CASATORIT <input type="radio"  name="starecivila" value="CASATORIT"> </p></div>
                           
                                            <div  class="col-md-2" > <p>NECASATORIT <input  type="radio"  name="starecivila" value="NECASATORIT"> </p> </div>
                              
                       <div  class="col-md-3" >  <input type="submit" name="submit" value="" class="newsubmit">   </div> 
              
              
          </div>                                
                                 
                             <div class="sepanel">     
                                 
                                 <table class="table table-hover ">
                                     
                
                 
                       
                                     
      <thead>
 
          
      <tr class="info">
        <th>NR.CRT.</th>
        <th>NUME</th>
        <th>PRENUME</th>
        <th>VARSTA</th>
        <th>STARE CIVILA</th>
        <th>TOTAL</th>
      
      </tr>
                 <?php
                                          $starecivila="";
                                          //echo
                                          //$sex=$_POST["sex"];
                                          
 if (empty($_POST["starecivila"])) {
    $nameErrr = "Name is required";
  } else {
    $starecivila= test_inputstar($_POST["starecivila"]);
  }
       function test_inputstar($dataa) {
  $dataa = trim($dataa);
  $dataa = stripslashes($dataa);
  $dataa = htmlspecialchars($dataa);
  return $dataa;
}                                   
                                          $sqlstr="SELECT * FROM  pacientadd  where  stare_civila ='".$starecivila."'  order by varsta asc";
                                           
                                   $starequeery=$conn->query($sqlstr)  ;     
                                          $ist=1;
    
                                   
                                          
           while($row=$starequeery->fetch_assoc()){
               
               
                              
                                          
                                          ?>  
      
      </thead>

    
                                      <tbody>

                                          <tr>
                                              
                                              <td scope="row"><?php echo $ist++; ?></td>
                                              <td scope="row"><?php echo $row["nume"]; ?></td>
                                              <td scope="row"><?php echo $row["prenume"]; ?></td>
                                               <td scope="row"><?php echo $row["varsta"]; ?></td>
                                               
           <td scope="row" bgcolor="#D9EDF7"><?php echo $row["stare_civila"];}
           
           
                                 $sizei=  max(array($ist));
           //echo $size-1;
           
           ?></td>
           
             
          
           
           <td scope="row"><?php
           
           if($sizei-1 ==0){
               
               echo null;
               
           }
           else {
               
                echo $sizei-1;
               
           }
           

           ?>
  
           </td>
           
  
           
                                          </tr>
                                          
                                          
                                          
                                          
                                          
                                          
                                      </tbody>
                                      
                                      
                                      
                                 </table>
                                 
                                 
                         </div>
                                 
                             </div>
                             
                          </div>
                         
                         
                         
            
                         
                         
                         
                         
                         <div class="col-md-12 raportluna">
                              
 
                            
                      <h3>   4: RAPORT PACIENTI  DUPA LUNA NASTERII </h3>     
                          
                         
                              
                          
                            
                             <div class="table-responsive ">    
          
                                        <div class="col-md-12">
                                            <div class="col-md-4"></div>
                                            
                                            <div class="col-md-2">
                                            
                                               <select name="luna">
  <option value="">--LUNA--</option>
                    <?php
                    $array= array("IANUARIE","FEBRUARIE","MARTIE","APRILE","MAI","IUNIE","IULIE","AUGUST","SEPTEMBRIE","OCTOMBRIE","NOIEMBRIE","DECEMBRIE");
                    
                    
                    foreach ($array as $key){
                    ?>
                    <option value="<?php echo $key;?>" ><?php echo $key;?></option>
                    <?php }?>
               
                </select>
                                            </div>      
                                            
                                            
                                            
                                          
                           
                                            
                              
                       <div  class="col-md-4" >  <input type="submit" name="submit" value="" class="newsubmit">   </div> 
                       
                       
                       <div class="col-md-2"></div>
              
              
          </div>                                
                                 
                             <div class="sepanel">     
                                 
                                 <table class="table table-hover ">
                                     
                
                 
                       
                                     
      <thead>
 
          
      <tr class="info">
        <th>NR.CRT.</th>
        <th>NUME</th>
        <th>PRENUME</th>
        <th>VARSTA</th>
        <th>LUNA</th>
        <th>TOTAL</th>
      
      </tr>
                 <?php
                                          $luna="";
                                         
                                          
            if (empty($_POST["luna"])) {
               $nameErrr = "Name is required";
             } else {
               $luna= test_inputluna($_POST["luna"]);
             }
                  function test_inputluna($dataa) {
             $dataa = trim($dataa);
             $dataa = stripslashes($dataa);
             $dataa = htmlspecialchars($dataa);
             return $dataa;
           }      
           
       $sqlluna="SELECT * FROM  pacientadd  where  luna ='".$luna."'  order by varsta asc";
                                           
                                   $lunaquery=$conn->query($sqlluna);     
                                          $luna=1;
    
                                          
                                          
                                          
                                          
                
           while($row=$lunaquery->fetch_assoc()){
   
                                          ?>  
      
      </thead>

                                      <tbody>
   
                                          
                                          <tr>
                                              
                                              <td scope="row"><?php echo $luna++;?></td>
                                              <td scope="row"><?php echo $row["nume"]; ?></td>
                                              <td scope="row"><?php echo $row["prenume"]; ?></td>
                                               <td scope="row"><?php echo $row["varsta"]; ?></td>
                                               
           <td scope="row" bgcolor="#D9EDF7"><?php echo $row["luna"]; }
           
           $size=  max(array($luna));
           //echo $size-1;
           ?></td>
           
           <td scope="row"><?php
           
           if($size-1 ==0){
               
               echo null;
               
           }
           else {
               
                echo $size-1;
               
           }
           

           ?>
           
           
           
           </td>
           
                                          </tr>
      
                                          
                                      </tbody>

                                 </table>
                                 
                                 
                         </div>
                                 
                             </div>
                             
                          </div>
                         

                         
                         
                         
                         
                           <div class="col-md-12 boala">
                              

                               
                      <h3>  5: RAPORT PACIENTI SUFERINZI DE O ANUMITA BOALA </h3>     
                          
                         
                      
                            
                             
          
                                        <div class="col-md-12">
                                            <div class="col-md-4"></div>
                                            
                                            <div class="col-md-2">
               
                                               <select name="newbola">
  <option value="">--Tipul boli--</option>
                                                <?php
                    
                                                           include '../db/db.php';
                                                           
                                                           $boli= "SELECT DISTINCT tipul_boala FROM  pacientadd , consultatie where pacientadd.id=consultatie.pacient_id ";
                                                           
                                                           foreach($dbh->query($boli) as $key=>$value) {
                                                            
                                                                   // echo $value['tipul_boala'];

             ?>

                    <option value="<?php echo $value['tipul_boala'];  ?>"><?php echo $value['tipul_boala'];?></option>
                    <?php }?>
               
                </select>
                                            </div>      
         
                       <div  class="col-md-4" >  <input type="submit" name="submit" value="" class="newsubmit">   </div> 
                       
                  
                       
                       <div class="col-md-2"></div>
              
              
          </div>                 
                          
                          
                          
                      <div class="sepanel">
                        
                            
 
                                 <table class="table table-hover">
 <thead>
             
      <tr class="info">
        <th>NR.CRT.</th>
        <th>NUME</th>
        <th>PRENUME</th>
        <th>VARSTA</th>
        <th>SEX</th>
        <th>BOALA</th>
        <th>TOTAL</th>
      </tr>
 </thead>           
                <tbody>

                    <?php
                    error_reporting(0);
                              $pacientboli= "SELECT * FROM  pacientadd ,consultatie where pacientadd.id=consultatie.pacient_id";
                             
                                $newquerybola=$conn->query($pacientboli);     
                                          $bola=1;
                              
                             // $boalapacinetului= $_POST['newbola'];
                                 
                               
                    while($row=$newquerybola->fetch_assoc()){
                    if ($_POST['newbola'] == $row['tipul_boala']){
       
  
                    ?>
                    
                    
                    
                    <tr>
                     <td scope="row"><?php echo $bola++;?></td>
                                              <td scope="row"><?php echo $row["nume"]; ?></td>
                                              <td scope="row"><?php echo $row["prenume"]; ?></td>
                                               <td scope="row"><?php echo $row["varsta"]; ?></td>   
                                                <td scope="row"><?php echo $row["sex"]; ?></td>
                    <td scope="row" bgcolor="#D9EDF7"><?php echo $row["tipul_boala"]; }
                    
                    

                    
                    
                    
                    
                    } ?></td>
                    
                    
                          <td scope="row"><?php

           
                          if ($bola==1){
                              
                              echo null;
                              
                          }
                          else {
                              
                              echo $bola-1;
                              
                          }

           ?>
  
           </td>                       
                        
                        
                        
                        
                        
                    </tr>                     
                                          
                                   
                
                </tbody>
                              
                                 
                                 
                                 
                                 
                                 </table>
                             
                             
                            
          
                        
                        
                        
                        </div>
                            
                          
                 
                 
                 </div> 
                           
                         
                         
                         
                         
                         
               
                         
                         
 
                </form>
                 </div>
                
                
                
            </div>
         </div>
    </body>
    
    <footer>
            <script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show");
  }
}

function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}






</script> 
        
        
        
    </footer>
 
</html>
  