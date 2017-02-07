<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
 
        <title>Pagina inregistrare Medic sau Asistent</title>
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="../js/bootstrap.js" type="text/javascript"></script>
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../js/npm.js" type="text/javascript"></script>
          <link href="../css/style.css" rel="stylesheet" type="text/css"/>
        <style>

.centered-form {
    margin-top: 120px;
    margin-bottom: 120px;
}

.centered-form .panel {
    background: rgba(255, 255, 255, 0.8);
    box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
}
</style>
        
        
    </head>
    <body class="doctrbackground">
       
       <div class="container" id="container1">
        <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Inregistrare Medic sau Asistent/a</h3>
                    </div>
                    <div class="panel-body">
                        <form  action="insermedicas.php" method="post">
                           
                            <div class="form-group">
                                <input type="text" name="nume" class="form-control input-sm" placeholder="Nume">
                            </div>

                            <div class="form-group">
                                <input type="text" name="prenume"  class="form-control input-sm" placeholder="Prenume">
                            </div>

                            <div class="form-group">
                                <input type="email" name="email"  class="form-control input-sm" placeholder="Email">
                            </div>
                       

                            
                            
                            
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="password" name="parola" id="password" class="form-control input-sm" placeholder="Parola">
                                    </div>
                                </div>
                                
                                
        
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="password" name="rparola" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Parola">
                                    </div>
                                </div>
                            </div>
                              <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <span>ROL:</span>
                                    </div>
                                </div>
                                
                                
        
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                  
        <select class="selectpicker" name="rol">
  <optgroup label="ROL:">
      <option name="medic" value="medic">Medic</option>
    <option name="medic" value="asistent">Asistent/a</option>

  </optgroup>

</select>
                                    </div>
                                </div>
                            </div>

                            <input type="submit"  name="submit" value="Inregistrare" class="btn btn-info btn-block">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </body>
    
    
    
</html>