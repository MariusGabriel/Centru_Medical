<!DOCTYPE html>
<?php $servername = 'localhost';
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
<html>
    
    <head>
    <meta charset="UTF-8">
        <title>Pagina administrare Medic sau Asistent</title>
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="../js/bootstrap.js" type="text/javascript"></script>
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../js/npm.js" type="text/javascript"></script>
        <link href="../css/style.css" rel="stylesheet" type="text/css"/>
        <script src="../js/jquery-1.12.3.min.js" type="text/javascript"></script>
        <script src="../js/jquery-2.2.3.min.js" type="text/javascript"></script>
        

      <link href="../js/jquery-ui-1.11.4.custom/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
    <link href="../js/jquery-ui-1.11.4.custom/jquery-ui.theme.min.css" rel="stylesheet" type="text/css"/>
    <link href="../js/jquery-ui-1.11.4.custom/jquery-ui.theme.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="imagbackground">
       
        <div class="container containercolor">
            <div class="col-md-12">
                <div class="col-md-3 div_center"><a href="../img/sigla.png"><img src="../img/sigla.png" style="width:75px;height: 75px;"/></a></div>
            <div class="col-md-9 div_center"><h1 class="h_sisteminformatic">ADMINISTRAREA PACIENTILOR</h1></div>
             
            </div>
            
             <div class="col-md-12 border">
                
                 <div class="col-md-2"><h4 class="adm_h"><a href="#">PACIENTI</a> </h4></div>
             
                 <div class="col-md-2"><h4 class="adm_h"><a href="../medic_asistent/inreg_medic_asistent.php" style="/*opacity: 0.6;*/">UTILIZATORI</a></h4> </div>
            
                 <div class="col-md-3"><h4 class="adm_h"><a href="../medic_asistent/webupdatemedic.php" style="/*opacity: 0.6;*/">SCHIMBA PAROLA</a></h4> </div>
            
                 <div class="col-md-2"><h4 class="adm_h"><a href="../rapoarte/htmlrapoarte.php">RAPOARTE</a></h4></div>
            
                 <div class="col-md-2"><h4 class="adm_h"><a href="../grafic_pacienti/grafic.php">GRAFICE </a></h4></div>
            
            <div class="col-md-1"><a href="../medic_asistent/pagina_logare.php" title="Iesire"> <img src="../img/exit.png" style="text-shadow: 10px 10px 10px;"></a></div>
                
             </div>
             
             
             
        
                 
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

                 <div class="col-md-12 div_center">
                     <div class="col-md-1"></div>
                    
                     <div class="col-md-3" ><a class="" href="../pacienti/adaugapacient.php" style="text-decoration:none;"> 
                             
                             <div class="btn btn-info btn-block" style="font-weight:bold;">
                           
                             ADAUGA PACIENT
                             
                             </div>
                         
                         
                         </a></div>
             
                     <div class="col-md-4"><input type="text" name="find" id="find"  class="searchc col-xs-12" placeholder="Cautare..." style="height: 36px;col-md-4"/></div>
                         
                         <div class="col-md-3">
                      <input class="btn btn-info btn-block"  id="cauta" type="submit" style=" font-weight:bold; float:left;" value="CAUTA PACIENT" name="submit">
                         </div>
                     
                     
                          <div class="col-md-1"></div>
                   
                   
             </div>
                <div style="height: 60px"></div>
                <div class="col-md-12"> 
                 <div class="table-responsive">          
  <table class="table table-hover" border="1">
    <thead>
        <tr class="info centermad" >
            <th>NR.CRT.</th>
        <th>NUME</th>
        <th>PRENUME</th>
        <th>EMAIL</th>
        <th>CNP</th>
        <th>LOCUL NASTERII</th>
        <th>EDITARE PACIENT</th>
      </tr>
    </thead>
    <tbody>
        
        <?php  
        
       error_reporting(0);
      //if(isset($_POST['submit'])){
             
            
        $cauta=  $_POST['find'];
        //echo $cauta;
  
        
        $find = strtoupper($cauta); 
 $find = strip_tags($cauta); 
 $find = trim ($cauta); 
 
        //echo $cauta;
        
          
        
        $sql="select * from pacientadd where  nume like '$cauta%' order by '$cauta' ASC";
        
     $data = array();
        
        $query= $conn->query($sql);
        
           if($query->num_rows >0){
               
               $i=1;
               while($row=$query->fetch_assoc()){
                   
               
        ?>
      <tr>
       <td scope="row"><?php echo $i++; ?></td>
       <td scope="row"><?php echo $row["nume"]; ?></td>
       
    <?php  $data[] =  array('label'=>$row['nume'],'value'=>$row['nume']); ?>
       
        <td scope="row"><?php echo $row["prenume"]; ?></td>
        
        <td scope="row" ><?php echo $row["email"]; ?></td>
        
           <td scope="row"><?php echo $row["cnp"];  ?></td>
             <td scope="row"><?php echo $row["loc_nastere"];  ?></td>
        <td scope="row">
            <a href ="../pacienti/updatepacient.php?id=<?php echo $row['id'];?>"><img title="EDITARE PACIENT" src="../img/ediitarenew.png"/></a>
            
            |
            <a href ="../pacienti/deletepacient.php?id=<?php echo $row['id'];?>"><img title="STERGERE PACIENT" src="../img/deluser.png"/></a>
            |
            <a href ="../pdffisa/phppdf.php?id=<?php echo $row['id'];?>"><img title=" FISA MEDICALA PACIENT" src="../img/pdfpdf.png" style="width:36px; height: 36px; "/></a>
            
        </td>
      </tr>
      
      <?php
          
      }
        }
        
    $json= json_encode($data);
        
            //  }?>
      
         
    <script src="../js/jquery-ui-1.11.4.custom/jquery-ui.min.js" type="text/javascript"></script>
      
 
      
        
    <script type="text/javascript">
$(function() {
    var array=<?php echo $json;?>
    //autocomplete
    
    $(".searchc").autocomplete({
        source:array,
       // minLength: 1,
        autoFocus:true
    });                

});
   
        </script>

      
    </tbody>
  </table>
  </div>
                
                </div>
                 
                 
             </form>
             
        </div>
        
    </body>
</html>
