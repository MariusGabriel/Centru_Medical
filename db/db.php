<?php
/*
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
*/

try {
  //  $db="db";
    
    $username = 'root';
$password = 'linux32';
    $dbh = new PDO('mysql:host=localhost;dbname=db', $username, $password);
    /*foreach($dbh->query('SELECT * from pacientadd') as $row) {
        print_r($row);
    }*/
    
   // echo "connect";
   // $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}













//$db=mysqli_select_db($conn,"db");

//var_dump($db);


//$sql = "SELECT  * FROM medic_asistent";
/*$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["nume"]. " " . $row["prenume"]. "<br>";
    }
} else {
    echo "0 results";
}
*/



//$conn->close();


?>

  