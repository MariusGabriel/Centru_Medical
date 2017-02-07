<?php
if(!isset($_REQUEST['term']))
   //exit();


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



//$term = trim($_GET['term']);

$sql="select * from pacientadd where  nume like '".$_REQUEST['term']."%'";
       
$data = array();
 
        
        $query= $conn->query($sql);
        
           if($query->num_rows >0){
               
            
               while($row=$query->fetch_assoc()){
         $data[] =  array(
 
             'label'=>$row['nume'],
             'value'=>$row['nume']
                 
                 );  
   
           }

           
               }

                   echo json_encode($data);
                   flush();