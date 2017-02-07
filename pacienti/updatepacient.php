<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
      <title>Pagina adaugare Pacient</title>
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
    transition: 0.4s;
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




 <script type="text/javascript">
function myday()
{
    var nrday=32;
   var day = "<option value='0'>--ZI--</option>";
        
        for(var i =1;i < nrday;i++){
            
            day+="<option value='"+i+"'>"+i+"</option>";
            continue;
           
        }
       
        
        document.getElementById('day').innerHTML=day;
   
}

function myyear()
{
    var bignumber= new Date();
    var curentyear= bignumber.getFullYear();
    
   var an = "<option value=''>--ANUL--</option>";
        
        for(var j =1900; j < curentyear+1;j++){
            
            an+="<option value='"+j+"'>"+j+"</option>"
            
        }
        
        
        document.getElementById('year').innerHTML=an;
   
}

</script>

    </head>
    <body onload="myday(),myyear();" class="updatebackground">
        <div class="container adaugaborder">
      
             <div class="col-md-12">
                <div class=" col-md-1" ></div>
                
                <div class=" col-md-1 back" ><img style="height: 75px; width: 75px;" src="../img/sigla.png" /></div>
                
                <div class="col-md-8"><h2 class="text-uppercase text-center div_center addpacient">MODIFICA PACIENT</h2></div>
            
                <div class=" col-md-1 back"><a href="../adminpage/index.php"><img src="../img/back.png" title="Inapoi"> </a></div>
            </div>

                  <div class="col-md-12">
                      
                      
                      <form  name="Form" action="uppacient.php" method="post">
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
                          
 //echo "</br>";                         
                          

   $id=$_GET['id'];//id get url       
   
                          
$sql = "SELECT  * FROM pacientadd where id ='".$id."'";
$result = $conn->query($sql);


 


//echo $_POST['phpluni'];

                          
 if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       // echo "id: " . $row["id"]. " - Name: " . $row["nume"]. " " . $row["prenume"]. "<br>";
                  
                        
                      
                          ?>
                          <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                 <div class="table-responsive">    
          
                           
  <table class="table table-hover">
    <thead>
      <tr>
          <th class="col-md-4"><h4 class="text-cente addpacient">MODIFICA PACIENT</h4></th>
          <th class="col-md-4"><h4 class="text-cente addpacient">STATUSURI</h4></th>
       
      </tr>
    </thead>
    <tbody>
      <tr scope="row"  class="info">
         
          
    
          
          <td>  <h5 class="text-cente">NUME:</h5><input type="text" name="nume" value="<?php echo $row['nume'];?>">  <p id="demo"> </p></td>
       
          

          <td><h5 class="text-cente">SALARIAT :</h5>
              <input
                  type="checkbox" name="salariat" 
                  value="salariat"
                      <?php if($row['salariat']=='salariat'){echo "checked";}?>
   
                  > 
              
              
          </td>

      </tr>
       <tr scope="row"  class="info">
           <td>  <h5 class="text-cente">PRENUME:</h5><input type="text" value="<?php echo $row['prenume'];?>"  name="prenume" id="prenume"> </td>
        <td><h5 class="text-cente">CO-ASIGURAT :</h5> 
            <input type="checkbox" name="coasigurat"
        value="coasigurat"
                      <?php if($row['coasigurat']=='coasigurat'){echo "checked";}?>>
        
        </td>

      </tr>
       
       
       <tr scope="row"  class="info">
        <td>  <h5 class="text-cente">CNP:</h5><input type="text" name="cnp" id="cnp" value="<?php echo $row['cnp'];?>"> </td>
        <td><h5 class="text-cente">LIBER-PROFESIONIST :</h5> 
            <input type="checkbox" name="liberprof"
                   value="liberprof"
                      <?php if($row['liberprofesionist']=='liberprof'){echo "checked";}?>> </td>

      </tr>
      
      <tr scope="row"  class="info">
        <td>  <h5 class="text-cente">VARSTA:</h5><input  type="text" name="varsta"  id="varsta" value="<?php echo $row['varsta'];?>"> </td>
        <td><h5 class="text-cente">COPIL (< 18 ANI) :</h5> 
            <input type="checkbox" name="copil"
                   value="copil"
                   <?php if($row['copil']=='copil'){echo "checked";}?>
                   
                   > </td>

      </tr>
      <tr scope="row"  class="info">
        <td>  <h5 class="text-cente">SEX:</h5> 
<input type="radio" name="sex" value="masculin" <?php if($row['sex']=='masculin'){echo "checked";}?>> MASCULIN 
  <input type="radio" name="sex" value="feminin" <?php if($row['sex']=='feminin'){echo "checked";}?>> FEMININ
        </td>
        <td><h5 class="text-cente">ELEV/UCENIC/STUDENT :</h5>
            <input type="checkbox" name="elev"  id="elev" 
                   value="elev"
                      <?php if($row['elevstudent']=='elev'){echo "checked";}?> > 
        
        </td>

      </tr>
      
      
      <tr scope="row"  class="info">
        <td>  
            <h5 class="text-cente">DATA NASTERI:</h5>
            
            <?php 
            $day=$row['zi'];
            
            
function day($day){
    
    echo "<option class = 'lunileanului' value='".$day."' lunadb>".$day."</option>";
    for($i=1;$i<32;$i++){
 
$convert=(string)$i;
//echo $convert."\n";

  echo "<option value='".$convert."' lunadb>".$convert."</option>";

    }   
}
 
            ?>
            
                 <select class="selectpicker" name="phpzile" onchange="this.form.sumit();">
                <?php //
                

    echo day($day);
    
                
                ?>
               
</select>
            
            
   

            <?php
             $lunadb= $row['luna'];
             
             
            function get_luni($lunadb){ 
       $lunian= array("IANUARIE"=>1,"FEBRUARIE"=>2,"MARTIE"=>3,
      "APRILIE"=>4,"MAI"=>5,
      "INUNIE"=>6,"IULIE"=>7,
      "AUGUST"=>8,"SECTEMBRIE"=>9,
      "OCTOMBRIE"=>10,"NOIEMBRIE"=>11,"DECEMBRIE"=>12); 
  
  $optiunes='';
  echo "<option class = 'lunileanului' value='".$lunadb."' lunadb>".$lunadb."</option>";
  foreach ($lunian as $key=>$values){

           $optiunes.="<option value='".$key."'>".$key."</option>";
      
     
      
   }
      
 return $optiunes;
  }
    ?>
            
            <select class="selectpicker" name="phpluni" onchange="this.form.sumit();">
                <?php //
                

    echo get_luni($lunadb);
    
                
                ?>
               
</select>
            
            
            
            
            
            <?php 
            $an=$row['an'];
            
            
function an($an){
    
    echo "<option class = 'lunileanului' value='".$an."'>".$an."</option>";
    
    
    
    for($i=1900;$i<2017;$i++){
 
$convert=(string)$i;
//echo $convert."\n";

  echo "<option value='".$convert."'>".$convert."</option>";

    }   
}
 
            ?>
            
                 <select class="selectpicker" name="phpan" onchange="this.form.sumit();">
                <?php //
                

    echo an($an);
    
                
                ?>
               
</select>

            
        </td>
        <td><h5 class="text-cente">GRAVIDA:</h5> 
            <input type="checkbox" name="gravida" id ="gravida"
                   value="gravida"
                      <?php if($row['gravida']=='gravida'){echo "checked";}?>
                   
                   
                   > </td>

      </tr>
      <tr scope="row"  class="info">
        <td>  <h5 class="text-cente">LOCUL NASTERII:</h5><input type="text" name="locnastere"  id ="locnastere" value="<?php echo $row['loc_nastere'];?>"> </td>
        <td><h5 class="text-cente"> PENSIONAR:</h5> 
            <input type="checkbox" name="pensionar" 
                    value="pensionar"
                      <?php if($row['pensionar']=='pensionar'){echo "checked";}?>
                   
                   
                   > </td>

      </tr>
      <tr scope="row"  class="info">
        <td>  <h5 class="text-cente">ADRESA:</h5><input type="text" name="adresa"  id="adresa" value="<?php echo $row['adresa'];?>"> </td>
        <td><h5 class="text-cente"> VETERAN:</h5> 
            <input type="checkbox" name="veteran"
                   value="veteran"
                      <?php if($row['veteran']=='veteran'){echo "checked";}?>
                   
                   > </td>
        </tr>
      
       <tr scope="row"  class="info">
        <td>  <h5 class="text-cente">STARE CIVILA:</h5>
           
<input type="radio" name="starecivila" value="CASATORIT" <?php if($row['stare_civila']=='CASATORIT'){echo "checked";}?>> CASATORIT/A                                                        
<input type="radio" name="starecivila" value="NECASATORIT" <?php if($row['stare_civila']=='NECASATORIT'){echo "checked";}?>> NECASATORIT 
  
        </td>
        
        <td><h5 class="text-cente"> 0-1000 lei/luna:</h5> 
            <input type="checkbox" name="minimec" 
                   value="minimec"
                      <?php if($row['venit']=='minimec'){echo "checked";}?>
                   
                   > </td>
        </tr>
        
        
        
        <tr scope="row"  class="info">
        <td>  <h5 class="text-cente">OCUPATIE:</h5>
            
            <input type="text" name="ocupatie" id ="ocupatie" value="<?php echo $row['ocupati'];?>"> 



        </td>
        
        <td><h5 class="text-cente"> REVOLUTIONAR:</h5> 
            <input type="checkbox" name="revolutionar" 
                       value="revolutionar"
                      <?php if($row['revolutionar']=='revolutionar'){echo "checked";}?>
                   
                   > </td>
        </tr>
        
         <tr scope="row"  class="info">
        <td>  <h5 class="text-cente">STUDII:</h5>
            
      <input type="text" name="studi" id ="studi" value="<?php echo $row['studii'];?>" > 
 </td>
        
        <td><h5 class="text-cente"> HANDICAP:</h5> 
            <input type="checkbox" name="handicap"
                   value="handicap"
                      <?php if($row['handicap']=='handicap'){echo "checked";}?>
                   
                   > </td>
        </tr>
        
        
        <tr scope="row"  class="info">
        <td>  <h5 class="text-cente">SERIE SI NUMAR CI</h5>
            
      <input type="text" name="serienrci" id ="serienrci" value="<?php echo $row['serie'];?>"> 
 </td>
        
        <td><h5 class="text-cente"> PNS:</h5> 
            
            <input type="checkbox" name="pns" 
                    value="pns"
                      <?php if($row['pns']=='pns'){echo "checked";}?>
                   
                   
                   > </td>
        </tr>
        
        <tr scope="row"  class="info">
        <td>  <h5 class="text-cente">TELEFON FIX:</h5>
            
      <input type="text" name="telefonfix" id ="telefonfix" value="<?php echo $row['telefonfix'];?>"> 
 </td>
        
        <td><h5 class="text-cente"> AJUTOR SOCIAL:</h5>
            
            <input type="checkbox" name="ajutorsocial" 
               value="ajutorsocial"
                      <?php if($row['ajutorsocial']=='ajutorsocial'){echo "checked";}?>    
                   > </td>
        </tr>
        <tr scope="row"  class="info">
        <td>  <h5 class="text-cente">TELEFON MOBIL:</h5>
            
      <input type="text" name="telefonmobil"  id="telefonmobil" value="<?php echo $row['telefonmobil'];?>"> 
 </td>
        
        <td><h5 class="text-cente"> SOMAJ:</h5> 
            <input type="checkbox" name="somaj" 
                    value="somaj"
                      <?php if($row['somaj']=='somaj'){echo "checked";}?> 
                   
                   > </td>
        </tr>
        
           <tr scope="row"  class="info">
        <td>  <h5 class="text-cente">EMAIL:</h5>
            
      <input type="email" name="email" id ="email" value="<?php echo $row['email'];?>"> 
 </td>
        
        <td><h5 class="text-cente"> CARD EUROPEAN:</h5> 
            <input type="checkbox" name="cardeuro" 
                   value="cardeuro" <?php if($row['card_europen']=='cardeuro'){echo "checked";}?>> </td>
        </tr>
        
         <tr scope="row"  class="info">
        <td>  <h5 class="text-cente">ASIGURAT:</h5>
                        
            <input type="radio" name="asigurat" value="DA" <?php if($row['asigurat']=='DA'){echo "checked";}?>> DA 
  <input type="radio" name="asigurat" value="NU" <?php if($row['asigurat']=='NU'){echo "checked";}?>> NU
        </td>

       
         <td><h5 class="text-cente"> ALTELE</h5> 
             <input type="checkbox" name="altele" 
                    value="altele"
                      <?php if($row['altele']=='altele'){echo "checked";}?> 
                    
                    
                    
                    > </td>
         
         </tr>
    
    </tbody>
 
  </table>      
    
   
                      </div> 
                          
                                    <?php  }
} else {
    echo "0 results";
}  ?>
                 <div class="col-md-12">
                     <div class="col-md-4"></div>  
                     <div class="col-md-3 div_center"> 
                         
                    
                          <input type="submit" name="submit" value="MODIFICAREA PACIENT" class="btn btn-info btn-block">
                       
                     
                     </div>
                 </div>
                   
                     
                                     
                          <div class="col-md-12 internare">
                              
                              
                              
                         SELECTATI OPTIUNEA DE INTERNARE PACIENT <input type="checkbox" class="accordion"> 
                        <div class="panel">
                            
                            
                             <div class="table-responsive">    
          
                           
                                 <table class="table table-hover">
                                     
                                     <tbody>
                                         
                                          <tr  scope="row"  class="success">
                                              
        <td>  <h5 class="text-cente">NR INREGISTRARE:</h5><input type="text" name="nrregi"></td>
        <td>  <h5 class="text-cente">SPITAL:</h5><input type="text" name="spital"></td>
        
        <td>  <h5 class="text-cente">JUDET(SPITAL):</h5><input type="text" name="judet"></td>
        <td>  <h5 class="text-cente">LOCALITATE/ORAS (SPITAL):</h5><input type="text" name="oras"></td>

      </tr>
                                                     <tr  scope="row"  class="success">
                                              
        <td>  <h5 class="text-cente">SECTIE:</h5><input type="text" name="sectie"></td>
        <td>  <h5 class="text-cente">MEDIC:</h5><input type="text" name="medic"></td>
        
        
        
        <td>  
            <h5 class="text-cente">INTERNARE:</h5>
            
                <select name="ziinternare">
 <option value="">--ZI--</option>
                    <?php
                    for($i=1;$i<32;$i++){
                    ?>
                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                    <?php }?>
               
                </select>
            
                <select name="lunainternare">
  <option value="">--LUNA--</option>
                    <?php
                    $array= array("IANUARIE","FEBRUARIE","MARTIE","APRILE","MAI","IUNIE","IULIE","AUGUST","SEPTEMBRIE","OCTOMBRIE","NOIEMBRIE","DECEMBRIE");
                    
                    
                    foreach ($array as $key){
                    ?>
                    <option value="<?php echo $key;?>"><?php echo $key;?></option>
                    <?php }?>
               
                </select>
        
                       <select name="aninternare">
 <option value="">--AN--</option>
                    <?php
                    for($i=2010;$i<2017;$i++){
                    ?>
                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                    <?php }?>
               
                </select>
            
            
        </td>
        
         <td>  
            <h5 class="text-cente"> EXTERNARE :</h5>
            
               
                <select name="ziexternare">
 <option value="">--ZI--</option>
                    <?php
                    for($i=1;$i<32;$i++){
                    ?>
                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                    <?php }?>
               
                </select>
            
                <select name="lunaexternare">
  <option value="">--LUNA--</option>
                    <?php
                    $array= array("IANUARIE","FEBRUARIE","MARTIE","APRILE","MAI","IUNIE","IULIE","AUGUST","SEPTEMBRIE","OCTOMBRIE","NOIEMBRIE","DECEMBRIE");
                    
                    
                    foreach ($array as $key){
                    ?>
                    <option value="<?php echo $key;?>"><?php echo $key;?></option>
                    <?php }?>
               
                </select>
        
                       <select name="anexternare">
 <option value="">--AN--</option>
                    <?php
                    for($i=2010;$i<2017;$i++){
                    ?>
                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                    <?php }?>
               
                </select>
  
        </td>
        


      </tr>
                <tr scope="row"  class="success">
          
        
                    <td colspan="3">  <h5 class="text-cente" style="margin-left: 280px;">TIPUL BOLI:</h5><input class="col-md-8" style="margin-left: 280px;" type="text" name="tipboala"></td>
               
          <td colspan="1">   </td>
           
      </tr>                      
    
      <tr scope="row"  class="success">

           <td colspan="4">  
               <h5 class="text-cente">DIAGNOSTIC PRINCIPAL:</h5>
           
               <textarea  rows="4" cols="122" id="diagnosticprincipal" name="diagnosticprincipal"></textarea>
           
           </td>
      </tr>
               <tr scope="row"  class="success">
           <td colspan="4"> 
           <h5 class="text-cente">DIAGNOSTIC SECUNDAR:</h5>
           
           <textarea rows="4"  cols="122" id="diagnosticsecundar" name="diagnosticsecundar"></textarea>
           
           </td>
               
               </tr>

           
       <tr scope="row"  class="success">
           <td colspan="4">  
        <h5 class="text-cente">OBSERVATII:</h5>
           
               <textarea  rows="4"  cols="122" id="observatii" name="observatii"></textarea>
           
           </td>
          
      </tr> 
  
      
      
      
      
                                         
                                     </tbody>
                                     
                                     
                                 </table>
                             
                              
                             
                             </div>
                            

                        </div> 
                          </div>       
                          
                          
                           <div class="col-md-12 consultatie">

                              
                               SELECTATI CONSULTATIA PACIENT <input type="checkbox" class="accordion"> 
                        <div class="panel">
                       <div class="table-responsive">    
          
                           
                                 <table class="table table-hover">
                                     
                                     <tbody>
                                         
   <tr  scope="row"  class="success">
                                              
        <td>  <h5 class="text-cente">NR FISA:</h5><input type="text" name="nrfisa"></td>
        <td>  <h5 class="text-cente">COD:</h5><input type="text" name="cod"></td>
        <td>
            
             <h5 class="text-cente"> DATA :</h5>
            
               
                <select name="datapacientzil">
 <option value="">--ZI--</option>
                    <?php
                    for($i=1;$i<32;$i++){
                    ?>
                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                    <?php }?>
               
                </select>
            
                <select name="datapacientluna">
  <option value="">--LUNA--</option>
                    <?php
                    $array= array("IANUARIE","FEBRUARIE","MARTIE","APRILE","MAI","IUNIE","IULIE","AUGUST","SEPTEMBRIE","OCTOMBRIE","NOIEMBRIE","DECEMBRIE");
                    
                    
                    foreach ($array as $key){
                    ?>
                    <option value="<?php echo $key;?>"><?php echo $key;?></option>
                    <?php }?>
               
                </select>
        
                       <select name="datapacientnewan">
 <option value="">--AN--</option>
                    <?php
                    for($i=2016;$i<2017;$i++){
                    ?>
                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                    <?php }?>
               
                </select>
            
            
        </td>
        
        
        <td>
            ORA:
            <select name="ora" style="margin-top: 29px;">
                <option value="">--ORA--</option>
                    <?php
                    for($i=1;$i<25;$i++){
                    ?>
                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                    <?php }?>
                
                
                
            </select>
            :
             <select name="minut">
                <option value="">--MINUT--</option>
                    <?php
                    for($i=1;$i<61;$i++){
                    ?>
                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                    <?php }?>
    
            </select>
            
            
            
        </td>

      </tr>
                                    
        <tr scope="row"  class="success">
           <td colspan="4">  
        <h5 class="text-cente">SIMPTOME:</h5>
           
               <textarea  rows="4"  cols="122" id="observatii" name="simtome"></textarea>
           
           </td><tr/>
         <tr scope="row"  class="success">
           <td colspan="4">  
        <h5 class="text-cente">DIAGNOSTIC:</h5>
           
               <textarea  rows="4"  cols="122" id="observatii" name="diagnostic"></textarea>
           
           </td><tr/>
      
      
      
                                         
                                     </tbody>
                                 </table>
                            
                       </div>
                            
                        </div> 
                          </div>   
                            <div class="col-md-12 tratament">
                              
                              
                              
                        SELECTATI TRATAMENT PACIENT  <input type="checkbox" class="accordion"> 
                        <div class="panel">
                  <div class="table-responsive">    
          
                           
                                 <table class="table table-hover">
                                     
                                     <tbody>
                                         
                                         <tr scope="row"  class="success">
                                         <td>  <h5 class="text-cente">COMPENSATIE:</h5>
                                             
                                             <select name="compensatie">
                                                 <option name="da" value="DA">DA</option> 
                                                 <option name="nu" value="NU">NU</option>
                                             </select> </td>
                                             <td><h5 class="text-cente">VALOARE COMPENSATIE:</h5>
                                             
                                             <select name="valoarecompensatie">
                                                 <option name="50" value="50">50%</option> 
                                                 <option name="50" value="90">90%</option>
                                                 <option name="gratuit" value="Gratuit">GRATUIT</option>
                                                 
                                             </select>
                                         
                                         
                                         </td>   
                                         </tr> 
                                         
                                   
      <tr>
          <th class="col-md-4"><h4 class="text-cente addpacient">MEDICAMENT</h4></th>
          <th class="col-md-4"><h4 class="text-cente addpacient">CANTITATE</h4></th>
       
      </tr>
      <tr class="success"> <td> <input type="text" name="medicament1" placeholder="medicament"></td>
      
      <td> <input type="text" name="cantitate1" placeholder="cantitate" ></td>
      </tr>
      
     <tr class="success">
         <td> <input type="text" name="medicament2" placeholder="medicament"></td>
      
      <td> <input type="text" name="cantitate2" placeholder="cantitate" ></td>
      
      </tr> 
      <tr class="success"> <td> <input type="text" name="medicament3" placeholder="medicament"></td>
      
      <td> <input type="text" name="cantitate3" placeholder="cantitate" ></td>
      </tr> 
                                         
                                     </tbody>

                                     
                                     
                                 </table>
                  </div>
                            
                        </div> 
                          </div>   
                          
                          
                          
                          
                 <div class="col-md-12">
                     <div class="col-md-4"></div>  
                     <div class="col-md-3 div_center"> 
                         
                    
                          <input type="submit" name="submit1" value="INTERNARE PACIENT" class="btn btn-info btn-block">
                       
                     
                     </div>
                 </div>
                     
                          
                          
            
                          
                          
             </form>
             
                  </div>
            
        </div>

 
    
    </body>
  <script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show");
  }
}
</script>  
   
</html>

