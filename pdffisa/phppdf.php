<?php
require('../pdffisa/fpdf/fpdf.php');

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

class PDF extends FPDF
{
// Load data
function LoadData($file)
{
    // Read file lines
    $lines = file($file);
    $data = array();
    foreach($lines as $line)
        $data[] = explode(';',trim($line));
    return $data;
}

// Simple table
function BasicTable($header, $data)
{
    // Header
    foreach($header as $col)
        $this->Cell(40,7,$col,1);
    $this->Ln();
    // Data
    foreach($data as $row)
    {
        foreach($row as $col)
            $this->Cell(40,6,$col,1);
        $this->Ln();
    }
}


    }

 $pdf = new FPDF();
 
 $header = array('Country', 'Capital', 'Area (sq km)', 'Pop. (thousands)');
 
$pdf->AddPage();


$pdf->SetFont('Times','B',12);
$id= $_GET['id'];

 $sql="SELECT * FROM  pacientadd , consultatie where  consultatie.pacient_id ='".$id."' and pacientadd.id=consultatie.pacient_id ";


$query= $conn->query($sql);

           while($row=$query->fetch_assoc()){
               
               // echo  $row['id']." ".$row['nume']." ".$row['spital'];
              $text=$row['nume'];
         $pdf->Ln(5);
         
        $pdf->SetFillColor(205,170,125);
         
               $pdf->Cell(87,7,'Nume: '.$row['nume'],1,0,'L',1);
               //$pdf->Ln();
               $pdf->Cell(103,7,'Prenume: '.$row['prenume'],1,0,'L',1);  
             
               ///date
              
                $pdf->Ln(6);
  
             $pdf->SetFillColor(191,239,255);
             $pdf->SetTextColor(0);
             $pdf->SetFont('Times','B',10);
                
                
                
                $fill=false;
                
                
                $pdf->Cell(37,6,'Cnp: '.$row['cnp'],1,0,'L',1); 
                $pdf->Cell(39,6,' Serie si CI: '.$row['serie'],1,0,'L',1);     
                $pdf->Cell(24,6,' Sex: '.$row['sex'],1,0,'L',1); 
                $pdf->Cell(34,6,'Data Nasteri '.'Ziua: '.$row['zi'],1,0,'L',1);
                $pdf->Cell(35,6,'Luna: '.$row['luna'],1,0,'L',1); 
                $pdf->Cell(21,6,'Anul: '.$row['an'],1,0,'L',1); 
                $pdf->Ln();
                $pdf->Cell(20,6,'Varsta: '.$row['varsta'],1,0,'L',1); 
                $pdf->Cell(50,6,'Stare Civila: '.$row['stare_civila'],1,0,'L',1); 
                $pdf->Cell(40,6,'Studii: '.$row['studii'],1,0,'L',1); 
                $pdf->Cell(80,6,'Email: '.$row['email'],1,0,'L',1); 
                $pdf->Ln();
                $pdf->Cell(90,6,'Adresa: '.$row['adresa'],1,0,'L',1); 
                $pdf->Cell(50,6,'Telefon fix: '.$row['telefonfix'],1,0,'L',1); 
                $pdf->Cell(50,6,'Telefon mobil: '.$row['telefonmobil'],1,0,'L',1); 
                  
               $pdf->Ln(8); 
               $pdf->SetFillColor(205,170,125);
             $pdf->SetTextColor(0);
             $pdf->SetFont('Times','B',12);
               $pdf->Cell(190,6,'Internare Pacient',1,0,'C',1); 
               
               $pdf->Ln(5);
               
               $pdf->SetFillColor(191,239,255);
             $pdf->SetTextColor(0);
             $pdf->SetFont('Times','B',10);
                
                
                $fill=false;
               $pdf->Cell(40,6,'Nr.inreg.: '.$row['nr_inregistrare'],1,0,'L',1); 
               $pdf->Cell(50,6,'Spital: '.$row['spital'],1,0,'L',1);  
               $pdf->Cell(50,6,'Judet: '.$row['judet_spital'],1,0,'L',1); 
               $pdf->Cell(50,6,'Localitate: '.$row['oras_spital'],1,0,'L',1);  
               $pdf->Ln();
               $pdf->Cell(87,6,'Sectie: '.$row['sectie'],1,0,'L',1); 
               $pdf->Cell(103,6,'Medic: '.$row['medic'],1,0,'L',1);
                $pdf->Ln();
                $pdf->SetFillColor(255,193,193);
             $pdf->SetTextColor(0);
             $pdf->SetFont('Times','B',10);
               $pdf->Cell(35,6,'Internare '.'Ziua: '.$row['internarezi'],1,0,'L',1); 
               $pdf->Cell(32,6,'Luna: '.$row['internareluna'],1,0,'L',1); 
               $pdf->Cell(20,6,'Anul: '.$row['internarean'],1,0,'L',1); 
                 $pdf->SetFillColor(127,255,212);
             $pdf->SetTextColor(0);
             $pdf->SetFont('Times','B',10);
              
               $pdf->Cell(45,6,'Externare '.'Ziua: '.$row['externarezi'],1,0,'L',1); 
               $pdf->Cell(38,6,'Luna: '.$row['externareluna'],1,0,'L',1); 
               $pdf->Cell(20,6,'Anul: '.$row['externarean'],1,0,'L',1); 
               $pdf->Ln();
               
               
                  $pdf->Ln(2); 
               $pdf->SetFillColor(205,170,125);
             $pdf->SetTextColor(0);
             $pdf->SetFont('Times','B',12);
             
             $pdf->Cell(190,6,'Tipul boli ',1,0,'C',1); 
              $pdf->Ln(6); 
              
               
               $pdf->SetFillColor(191,239,255);
             $pdf->SetTextColor(0);
             $pdf->SetFont('Times','B',10);
                
                
                $fill=false;
               $pdf->Cell(190,6,''.$row['tipul_boala'],1,0,'C',1); 
               
               
               $pdf->Ln(5); 
               
            
               
             $pdf->Ln(3); 
               $pdf->SetFillColor(205,170,125);
             $pdf->SetTextColor(0);
             $pdf->SetFont('Times','B',12);
             
             $pdf->Cell(190,6,'Diagnostic Principal ',1,0,'C',1); 
              $pdf->Ln(5); 
              

             $pdf->SetFont('Times','',12);
             $pdf->SetFillColor(191,239,255);
             $pdf->SetTextColor(0);
             
             
             
             $pdf->MultiCell(0,5,$row['diagnosticprin'],1,1,1);
             
       
             
              //$pdf->Ln(2); 
               $pdf->SetFillColor(205,170,125);
             $pdf->SetTextColor(0);
             $pdf->SetFont('Times','B',12);
             
             $pdf->Cell(190,6,'Diagnostic Secundar',1,0,'C',1); 
              $pdf->Ln(5); 
              

             $pdf->SetFont('Times','',12);
             $pdf->SetFillColor(191,239,255);
             $pdf->SetTextColor(0);
             
             
             
             $pdf->MultiCell(0,5,$row['diagnosticsec'],1,1,1);
             
         
             
             
            $pdf->Ln(2); 
               $pdf->SetFillColor(205,170,125);
             $pdf->SetTextColor(0);
             $pdf->SetFont('Times','B',12);
             
             $pdf->Cell(190,6,'Observatii ',1,0,'C',1); 
              $pdf->Ln(6); 
              

             $pdf->SetFont('Times','',12);
             $pdf->SetFillColor(191,239,255);
             $pdf->SetTextColor(0);
             
             
             
             $pdf->MultiCell(0,5,$row['observatii'],1,1,1);
             
              
               $pdf->Ln(2); 
               $pdf->SetFillColor(205,170,125);
             $pdf->SetTextColor(0);
             $pdf->SetFont('Times','B',12);
             
             $pdf->Cell(190,6,'Consultatie Pacient',1,0,'C',1); 
              $pdf->Ln(6); 
              
               $pdf->SetFillColor(191,239,255);
             $pdf->SetTextColor(0);
             $pdf->SetFont('Times','B',10);
              $pdf->Cell(56,6,'Nr.fisa: '.$row['nr_fisa'],1,0,'L',1); 
              
              $pdf->Cell(39,6,'Data Ziua: '.$row['datazi'],1,0,'L',1); 
              $pdf->Cell(45,6,'Luna: '.$row['dataluna'],1,0,'L',1); 
              $pdf->Cell(20,6,'Anul: '.$row['dataan'],1,0,'L',1); 
              $pdf->Cell(30,6,'Ora '.$row['ora'].':'.$row['oraminut'],1,0,'L',1); 
              
              $pdf->Ln(8); 
               $pdf->SetFillColor(205,170,125);
             $pdf->SetTextColor(0);
             $pdf->SetFont('Times','B',12);
             
             $pdf->Cell(190,6,'Simptome',1,0,'C',1); 
              $pdf->Ln(5); 
              

             $pdf->SetFont('Times','',12);
             $pdf->SetFillColor(191,239,255);
             $pdf->SetTextColor(0);
             
             
             
             $pdf->MultiCell(0,5,$row['simtome'],1,1,1);
             
            
              
              $pdf->Ln(2); 
               $pdf->SetFillColor(205,170,125);
             $pdf->SetTextColor(0);
             $pdf->SetFont('Times','B',12);
             
             $pdf->Cell(190,6,'Compensatii ',1,0,'C',1); 
             
              $pdf->Ln(5); 
              
              $pdf->SetFillColor(191,239,255);
             $pdf->SetTextColor(0);
             $pdf->SetFont('Times','B',10);
              $pdf->Cell(93,6,'Compensatie: '.$row['compensatie'],1,0,'L',1); 
              
              $pdf->Cell(97,6,'Valoare compensatie: '.$row['valcompensatie'],1,0,'L',1); 
              
              $pdf->Ln(8);
         
        $pdf->SetFillColor(205,170,125);
         
               $pdf->Cell(87,7,'Medicament',1,0,'L',1);
               //$pdf->Ln();
               $pdf->Cell(103,7,'Cantitate',1,0,'L',1);  
               
               $pdf->Ln();
               
               $pdf->SetFillColor(191,239,255);
             $pdf->SetTextColor(0);
             $pdf->SetFont('Times','B',10);
              $pdf->Cell(87,6,$row['medicament1'],1,0,'L',1); 
              
              $pdf->Cell(103,6,$row['cantitate1'],1,0,'L',1); 
              $pdf->Ln();
              $pdf->Cell(87,6,$row['medicament2'],1,0,'L',1); 
              
              $pdf->Cell(103,6,$row['cantitate2'],1,0,'L',1); 
              $pdf->Ln();
              $pdf->Cell(87,6,$row['medicament2'],1,0,'L',1); 
              
              $pdf->Cell(103,6,$row['cantitate2'],1,0,'L',1); 
             $pdf->Ln(78);  
           }

                
$pdf->Output();

$pdf = new FPDF();
  $pdf->Ln(78);
$pdf->Output();