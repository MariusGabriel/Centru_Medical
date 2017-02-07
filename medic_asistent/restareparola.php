<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
     <title>Restare parola</title>
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="../js/bootstrap.js" type="text/javascript"></script>
<script src="../js/bootstrap.min.js" type="text/javascript"></script>
<script src="../js/npm.js" type="text/javascript"></script>
<link href="../css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="restbackgound">
         <div class="container adaugaborder" style="margin-top: 180px;">
             
       <div class="col-md-12" style="margin-bottom: 30px; ">
                <div class=" col-md-1" ></div>
                
                <div class=" col-md-1 back" ><img style="height: 75px; width: 75px;" src="../img/sigla.png" /></div>
                
                <div class="col-md-8"><h2 class="text-uppercase text-center div_center addpacient">Resetare Parola</h2></div>
            
                <div class=" col-md-1 back"><a href="pagina_logare.php"><img src="../img/back.png" title="Inapoi"> </a></div>
       </div>
              <div class="col-md-12">
                <form action="" method="post">
                    
                    <div class="col-md-12"> 
                        <div class="col-md-3"></div> 
                           
                        <div class="col-md-1">  <h3  class="addpacient">EMAIL</h3></div>
                         
                            
                            <div class="col-md-7">
                                <input name="email"  class="col-md-7" id="nume" type="text" style="margin-top: 15px; "/>
                            </div>
                    </div>

                    <div class="col-md-12" style="margin-bottom: 30px;"> 
                        <div class="col-md-7" >
                            <input type="submit" name="submit" class="btn btn-success" style="float: right; margin-top: 20px;" value="TRIMITE"> </div>
                    
                            <div class="col-md-5"></div> 
                    </div>
                    
                    
                </form>
                  </div>
              </div>
          
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



     
       
 
                //mail("mariuscmg92@yahoo.com","test","sdfsdfsdfsd");
               
       if(isset($_POST['submit'])){
                 
        
  //update db
            
           
             $email=  $_POST['email'];
      
 $random=  rand(38867,78678);//rand passo
               echo $random;
         
               
               $updatenew="UPDATE set parola='".$random."' , rparola='".$random."' where eamil='".$email."' ";
             
               $newparola= $conn->query($updatenew);
               
             header("location:pagina_logare.php");
              /* 
               $subject="Resetare Parola Centru Medical $random";
               
               $message="Noua parola este";
               
               $from="centrumeical@med.com";
               
               mail($email,$subject,$message,$from);
               */
         
        
                
       
         
        if($new)
 {
  header("location:pagina_logare.php");
        
 }
 else
 {
  
    echo     "<script>alert('error...');</script>";
        
 }
       }
       
       
      
         
         ?>
        
 
    </body>
</html>
