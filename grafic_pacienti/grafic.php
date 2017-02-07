<!DOCTYPE html>
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

//echo date("Y")-1;


  //$sql="select * from pacientadd";
$sql="SELECT * FROM  pacientadd , consultatie where  pacientadd.id=consultatie.pacient_id ";
  
$id=0;

$diabet=0;
$sinuzita=0;
$meningita=0;
$pneumonie=0;
$laringita=0;
$hepatita=0;
$salariat=0;
$student=0;
$copil=0;

$coasigurat=0;
$pensionar=0;    
$asigurat=0;

$internare=0;
$externare=0;

           $query= $conn->query($sql);
        

    
               while($row=$query->fetch_assoc()){
                   
                 
                    if($row['copil']=='copil'){
                        $copil++;
                       
                   }
                   
                   if($row['elevstudent']=='elev'){
                        $student++;
                       
                   }
                   
  if($row['coasigurat']=='coasigurat'){
                        $coasigurat++;
                       
                   }
                   
                    if($row['pensionar']=='pensionar'){
                        $pensionar++;
                       
                   }
                
                     if($row['asigurat']=='DA'){
                        $asigurat++;
                       
                   }
                

                   
                   if($row['tipul_boala']== 'diabet'){
                       $diabet++;
                       
                       
                   }
                     if($row['tipul_boala']== 'Sinuzita'){
                       $sinuzita++;
                       
                       
                   }
                   
                   if($row['tipul_boala']=='Meningita acuta'){
                       
                       $meningita++;
                       
                   }
                   
                    if($row['tipul_boala']=='Pneumonie'){
                       
                       $pneumonie++;
                       
                   }
                   if($row['tipul_boala']=='Laringita'){
                       
                       $laringita++;
                       
                   }
                   
                     if($row['tipul_boala']=='Hepatita'){
                       
                       $hepatita++;
                       
                   }
                   
                     if($row['salariat']=='salariat'){
                       
                       $salariat++;
                       
                   }
                   
                   
                     if($row['internarean']==(date('Y')-1)){
                       
                       $internare++;
                       
                   } 
                   
                     if($row['externarean']==(date('Y')-1)){
                       
                       $externare++;
                       
                   } 
                   
                   
               }
          
 
 ?>



<html>
  <head>

          <title>Pagina Chart Pacient</title>
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="../js/bootstrap.js" type="text/javascript"></script>
<script src="../js/bootstrap.min.js" type="text/javascript"></script>
<link href="../css/style.css" rel="stylesheet" type="text/css"/>
 

 <script type="text/javascript" src="loader.js"></script>
  <script type="text/javascript" src="jsapi.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
                          ['SALARIAT',<?php echo $salariat;?>],
                          ['STUDENTI',<?php echo $student;?>],
                          ['COPII (< 18 ANI)',<?php echo $copil;?>],
                          ['PENSIONARI',<?php echo $pensionar;?>],
                            ['CO-ASIGURAT',<?php echo $coasigurat;?>] ,['ASIGURAT',<?php echo $asigurat;?>]

                ]
                        
        );

        var options = {
          title: 'Statistica pacienti',
       is3D: true,

pieStartAngle: 100,
width: 790,
        height: 450
         
        };
var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
        
        
        var data1 = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
                          ['PACIENTI INTERNATI',<?php echo $internare;?>],
                          ['PACIENTI EXTERNATI',<?php echo $externare;?>]
                        

                ]
                        
        );

        var options1 = {
          title: 'Pacienti internati/externari anul <?php echo (date('Y')-1);?>',
       is3D: true,

pieStartAngle: 100,
width: 790,
        height: 450
         
        };
var chart = new google.visualization.PieChart(document.getElementById('piechart_intext'));
        chart.draw(data1, options1);
        
        
        
        

        
var data = google.visualization.arrayToDataTable([
        ["Element", "", { role: "style" } ],
        ["Diabet",<?php echo  $diabet; ?> , "#b87333"],
        ["Sinuzita", <?php echo  $sinuzita;?>, "silver"],
        ["Meningita", <?php echo $meningita;?>, "gold"],
        ["Pneumonie", <?php echo   $pneumonie;?>, "color: #e5e4e2"],["Laringita",
            <?php echo  $laringita;?>,"color: #FF0000"],
                    ["Hepatita",<?php echo $hepatita;?>,"color: #m5l4f2"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },2
                       ]);

      var options = {
        title: "Statistica bolii",
        width: 600,
        height: 450,
        bar: {groupWidth: "95%"},
        legend: { position: "none" }
      };
        
        var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
    
        
      }
    </script>

   
    
  </head>

  <body class="graficimg">

  
      <div class="container ">
          
          <div class="col-lg-12 adaugaborder">
              
               <div class="col-md-12">
            <div class=" col-md-1" ></div>
                
                <div class=" col-md-1 back" ><img style="height: 75px; width: 75px;" src="../img/sigla.png" /></div>
                
                <div class="col-md-8"><h2 class="text-uppercase text-center div_center addpacient">grafic pacienti</h2></div>
            
                <div class=" col-md-1 back"><a href="../adminpage/index.php"><img src="../img/back.png" title="Inapoi"> </a></div>
                
                </div>
                
                
                 <div class="col-md-12">
                   
                     
                     
                <div id="piechart_3d"></div>
 
                </div>
              
               <div class="col-md-12">
                   
                     
                     
                <div id="piechart_intext"></div>
 
                </div>
              

      <div class="col-lg-12">
                   
              
           <div class="col-lg-11">   <div id="columnchart_values" ></div></div>

         
                     
      </div>
                
   </div>
      
      </div>
    
    
  </body>
</html>