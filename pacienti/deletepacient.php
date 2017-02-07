<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
       
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
    
   // echo "Connected successfully";
}

        $id=$_GET['id'];
        
        //echo $id;
        
        $sql="select nume,prenume from pacientadd where id='".$id."'"; 
        
        $query= $conn->query($sql);
        
           if($query->num_rows >0){
               
               while($row=$query->fetch_assoc()){
                   
 
        ?>
     
            <div class="col-md-12" style="margin-bottom: 30px;">
                <div class=" col-md-1" name="<?php// echo $id;?>"></div>
                
                <div class=" col-md-1 back" ><img style="height: 75px; width: 75px;" src="../img/sigla.png" /></div>
                
                <div class="col-md-8"><h2 class="text-uppercase text-center div_center addpacient">Stergere Pacient</h2></div>
            
                <div class=" col-md-1 back"><a href="../adminpage/index.php"><img src="../img/back.png" title="Inapoi"> </a></div>
            </div>
    
            <form class="form-horizontal" action="delete.php" method="post">
                        
                        
                        
                        <input type="hidden" name="id" value="<?php echo $id;?>">
                        
                       <div class="col-md-12" style="margin-bottom: 30px;">
                           <div class="col-md-1"></div>
                           <div class="col-md-4">  <h4 class="text-center"> Esti sigur ca vrei sa stergi pacientul:</h4></div>
                          
                           <div class="col-md-7">   
                            
                            <h4 class="text-uppercase" style="font-weight: bold; float:left;color: red;">
                                
                <?php   echo  $row['nume']." ".$row['prenume'];} }?>


                                
                            </h4></div>
                       
                       
                       
                       
                       </div>
                        
                        
                      
                          <div class="col-md-12">
                              <div class="col-md-6"><button type="submit" class="btn btn-danger" style="float: right; margin-top: 25px">DA</button></div>
                              <div class="col-md-6"> <a class="btn btn-info" href="../adminpage/index.php" style="margin-top: 25px">NU</a></div>
                          </div>
                        
                    </form>
               
                 
    </div> <!-- /container -->

    </body>
</html>
