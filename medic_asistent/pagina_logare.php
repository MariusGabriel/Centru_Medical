<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Pagina logare Medic sau Asistent</title>
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="../js/bootstrap.js" type="text/javascript"></script>
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../js/npm.js" type="text/javascript"></script>
        <link href="../css/style.css" rel="stylesheet" type="text/css"/>
        
     <script>  function connect(){
               var x = document.forms["myForm1"]["nume","parola"].value;

            if (x === null || x === "") {
        alert("Nu ați completat un dintre campurile NUME,PAROLA sau nu ați selectat ROL! ");
       return false;      
    }

    
    
    
} </script>
        
        
    </head>
    <body class="backgroundimg">

        
        <div class="container topform ">
            <div class="col-xs-12 contin">
                <form  name="myForm1" action="medicasistentlog.php" method="post" onsubmit="return connect();" >
            
            
            <div class="col-md-12"><h1 class="text-center  centrumedical">PAGINA DE LOGARE</h1></div>
       
       
          
       
       <div class="form-group">
          
           <div class="col-md-2"></div>
       <div class="col-md-3">
           <h5 class="color_h paglpg">NUME</h5>
        
        
        <input type="text" name="nume"  id="nume" class="form-control newnume" placeholder="Nume">
        
        
        </div>
       
          <div class="col-md-3">
       
        <span><h5 class="color_h paglpg">PAROLA</h5></span>
      
        
        <input type="password"  name="parola" id="parola" class="form-control" placeholder="Parola">
        
          </div>
           
        <div class="col-md-4">
            
            <h5 class="color_h paglpg">ROL:</h5>
           

    
        <select name="rol" id="rol">
   <option>ROL:</option>
      <option nume="medic" value="medic">Medic</option>
    <option nume="asistent" value="asistent">Asistent/ă</option>

</select>
</div></div>
        
            <div class="col-md-5 div_center">
                
                
                <div class="col-md-5 reparola"></div>
                <a  href ="restareparola.php" class="color_r">Resetare Parola</a>
            
            
            </div>
         
           <div class="col-md-7 div_center">
               
           <button class="btn btn-lg btn-primary color_h" num="submit" type="submit">Autentificare</button>
        
           </div>
              
        
        
      </form>
            </div>
          
        </div>
        
    </body>
</html>
