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


 <script type="text/javascript">
function myday()
{
    var bignumber=32;
   var day = "<option value='0'>--ZI--</option>";
        
        for(var i =1;i < bignumber;i++){
            
            day+="<option value='"+i+"'>"+i+"</option>"
            
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

function validateForm() {
    var x = document.forms["myForm"]["nume","prenume","varsta","elev","gravida","locnastere","adresa","ocupatie","studi","serienrci","telefonfix","telefonmobil"].value;
    if (x === null || x === "") {
        alert("Nu ați completat câmpurile din Adaugă Pacient.");
        return false;
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
    </head>
    <body  class="pacintbackground" onload="myday();myyear();">
        <div class="container adaugaborder">
            <div class="col-md-12">
                <div class=" col-md-1" ></div>
                
                <div class=" col-md-1 back" ><img style="height: 75px; width: 75px;" src="../img/sigla.png" /></div>
                
                <div class="col-md-8"><h2 class="text-uppercase text-center div_center addpacient">ADAUGA PACIENT</h2></div>
            
                <div class=" col-md-1 back"><a href="../adminpage/index.php"><img src="../img/back.png" title="Inapoi"> </a></div>
            </div>
            

                  <div class="col-md-12">
                      
                      
                      <form  name="myForm" action="pacienadd.php" method="post" onsubmit="return validateForm()">
                          
                          
                 <div class="table-responsive">    
          
                           
  <table class="table table-hover">
    <thead>
      <tr>
          <th class="col-md-4"><h4 class="text-cente addpacient">ADAUGA PACIENT</h4></th>
          <th class="col-md-4"><h4 class="text-cente addpacient">STATUSURI</h4></th>
       
      </tr>
    </thead>
    <tbody>
      <tr  scope="row"  class="info">
        <td>  <h5 class="text-cente">NUME:</h5><input type="text" name="nume" id ="nume" placeholder="NUME">  <p id="demo"> </p></td>
        
        <td><h5 class="text-cente">SALARIAT :</h5> <input type="checkbox" name="salariat"  value="salariat"> </td>

      </tr>
       <tr scope="row" class="info">
        <td>  <h5 class="text-cente">PRENUME:</h5><input type="text" name="prenume"  id="prenume" placeholder="PRENUME"> </td>
        <td><h5 class="text-cente">CO-ASIGURAT :</h5> <input type="checkbox" name="coasigurat" value="coasigurat"> </td>

      </tr>
       
       
       <tr scope="row" class="info">
        <td>  <h5 class="text-cente">CNP:</h5><input type="text" name="cnp" id="cnp" placeholder="CNP"> </td>
        <td><h5 class="text-cente">LIBER-PROFESIONIST :</h5> <input type="checkbox" name="liberprof" value="liberprofesionist"> </td>

      </tr>
      
      <tr scope="row" class="info">
        <td>  <h5 class="text-cente">VARSTA:</h5><input type="text" name="varsta"  id="varsta" placeholder="VARSTA"> </td>
        <td><h5 class="text-cente">COPIL (< 18 ANI) :</h5> <input type="checkbox" name="copil" value="copil"> </td>

      </tr>
      <tr scope="row" class="info">
        <td>  <h5 class="text-cente">SEX:</h5> 
            <input type="radio" name="sex" value="masculin" checked> MASCULIN 
  <input type="radio" name="sex" value="feminin"> FEMININ
        </td>
        <td><h5 class="text-cente">ELEV/UCENIC/STUDENT :</h5> <input type="checkbox" name="elev"  id="elev" value="elev"> </td>

      </tr>
      
      
      <tr scope="row" class="info">
        <td>  
            <h5 class="text-cente">DATA NASTERI:</h5>
            
            <select class="selectpicker" name="zi" id="day"></select>

            <select class="selectpicker" name="lunile">
 <option>--LUNA--</option>
<option name="ianuarie" value="ianuarie">IANUARIE</option>
<option name="februarie" value="februarie">FEBRUARIE</option>
<option name="martie" value="martie">MARTIE</option>
<option name="aprilie" value="aprilie">APRILE</option>
<option name="mai" value="mai">MAI</option>

<option name="iunie" value="iunie">IUNIE</option>

<option name="iulie" value="iulie">IULIE</option>

<option name="august" value="august">AUGUST</option>

<option name="septembrie" value="septembrie">SEPTEMBRIE</option>

<option name="octombrie" value="octombrie">OCTOMBRIE</option>

<option name="noiembrie" value="noiembrie">NOIEMBRIE</option>
<option name="decembrie" value="decembrie">DECEMBRIE</option>
</select>
            
            <select class="selectpicker" name="an" id="year"></select>
        </td>
        <td><h5 class="text-cente">GRAVIDA:</h5> <input type="checkbox" name="gravida" id ="gravida" value="gravida"> </td>

      </tr>
      <tr scope="row" class="info">
        <td>  <h5 class="text-cente">LOCUL NASTERII:</h5><input type="text" name="locnastere"  id ="locnastere" placeholder="LOCUL NASTERII"> </td>
        <td><h5 class="text-cente"> PENSIONAR:</h5> <input type="checkbox" name="pensionar" value="pensionar"> </td>

      </tr>
      <tr scope="row" class="info">
        <td>  <h5 class="text-cente">ADRESA:</h5><input type="text" name="adresa"  id="adresa" placeholder="ADRESA"> </td>
        <td><h5 class="text-cente"> VETERAN:</h5> <input type="checkbox" name="veteran" value="veteran"> </td>
        </tr>
      
       <tr scope="row" class="info">
        <td>  <h5 class="text-cente">STARE CIVILA:</h5>
            
  <input type="radio" name="starecivila" value="CASATORIT" checked> CASATORIT 
  <input type="radio" name="starecivila" value="NECASATORIT"> NECASATORIT

        </td>
        
        <td><h5 class="text-cente"> 0-1000 lei/luna:</h5> <input type="checkbox" name="minimec"  value="0-1000 lei/luna"> </td>
        </tr>
        
        
        
        <tr scope="row" class="info">
        <td>  <h5 class="text-cente">OCUPATIE:</h5>
            
      <input type="text" name="ocupatie" id ="ocupatie" placeholder="OCUPATIE"> 



        </td>
        
        <td><h5 class="text-cente"> REVOLUTIONAR:</h5> <input type="checkbox" name="revolutionar"  value="revolutionar"> </td>
        </tr>
        
         <tr scope="row" class="info">
        <td>  <h5 class="text-cente">STUDII:</h5>
            
      <input type="text" name="studi" id ="studi" placeholder="STUDII"> 
 </td>
        
        <td><h5 class="text-cente"> HANDICAP:</h5> <input type="checkbox" name="handicap" value="handicap"> </td>
        </tr>
        
        
        <tr scope="row" class="info">
        <td>  <h5 class="text-cente">SERIE SI NUMAR CI</h5>
            
      <input type="text" name="serienrci" id ="serienrci" placeholder="SERIE NR SI CI"> 
 </td>
        
        <td><h5 class="text-cente"> PNS:</h5> <input type="checkbox" name="pns" value="pns"> </td>
        </tr>
        
        <tr scope="row" class="info">
        <td>  <h5 class="text-cente">TELEFON FIX:</h5>
            
      <input type="text" name="telefonfix" id ="telefonfix" placeholder="TELEFON FIX"> 
 </td>
        
        <td><h5 class="text-cente"> AJUTOR SOCIAL:</h5> <input type="checkbox" name="ajutorsocial" value="ajutorsocial"> </td>
        </tr>
        <tr scope="row" class="info">
        <td>  <h5 class="text-cente">TELEFON MOBIL:</h5>
            
      <input type="text" name="telefonmobil"  id="telefonmobil" placeholder="TELEFON MOBIL"> 
 </td>
        
        <td><h5 class="text-cente"> SOMAJ:</h5> <input type="checkbox" name="somaj" value="somaj"> </td>
        </tr>
        
           <tr scope="row" class="info">
        <td>  <h5 class="text-cente">EMAIL:</h5>
            
      <input type="email" name="email" id ="email" placeholder="EMAIL"> 
 </td>
        
        <td><h5 class="text-cente"> CARD EUROPEAN:</h5> <input type="checkbox" name="cardeuro" value="cardeuro"> </td>
        </tr>
        
         <tr scope="row" class="info">
        <td>  <h5 class="text-cente">ASIGURAT:</h5>
                        
              <input type="radio" name="asigurat" value="DA" checked> DA 
  <input type="radio" name="asigurat" value="NU"> NU

        </td>
         <td><h5 class="text-cente"> ALTELE</h5> <input type="checkbox" name="altele" value="altele"> </td>
         
         </tr>
    
    </tbody>
    
  </table>      
    
    <div class="col-md-12">
                     <div class="col-md-4"></div>  
                     <div class="col-md-3 div_center"> 
                         
                    
                          <input type="submit" name="submit" value="ADAUGA PACIENT" class="btn btn-info btn-block">
                       
                     
                     </div>
                 </div>
                      </div> 
   
             </form>
             
                  </div>

        </div>

    </body>
    
   
</html>

