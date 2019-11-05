
<?php
//include('database.php');
$connection5 = mysqli_connect('localhost','root','');
	if(!$connection5){
		die("Connection Failed");
	}
	else{
		//echo '<script>alert("Connection Established!"); </script>';
		mysqli_select_db($connection5,'nodue');
	}
	if(session_id()=="")
	{
		session_start();
	}
require('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Times','B',22);
$pdf->Cell(90,12,'                                                        Departmenet of Food & public ditribution',0,1,'C');
$pdf->Ln();
$pdf->SetFont('Times','B',18);
$pdf->Cell(90,12,'                                                        BILL',0,1,'C');

$pdf->Ln();
$pdf->SetFont('Times','B',12);
$column_heading=array('NAME                         :','RationID                  :');
$rowing=array('Item Code                      :','Item name                  :','Date        :');
$name=$rows['name'];
$name1=$rows['year'];
$name2=$rows['branch'];
$name3=$rows['roll'];
$j=0;
for($i=0;$i<count($column_heading);$i++)
{
if($i==0){
$pdf->Cell(45,12,$column_heading[$i]);
$pdf->SetFont('Times','',14);
$pdf->Cell(45,12,$name);
$pdf->SetFont('Times','B',12);
$pdf->Cell(45,12,$rowing[$i]);
$pdf->SetFont('Times','',14);
$pdf->Cell(45,12,$name3);
$pdf->Ln();
$pdf->SetFont('Times','B',12);
}
if($i==1){
$pdf->Cell(45,12,$column_heading[$i]);
$pdf->SetFont('Times','',14);
$pdf->Cell(45,12,$name1);
$pdf->SetX($pdf->GetX() - 35);
$pdf->Cell(7,12,' & ');
$pdf->SetX($pdf->GetX() - 1);
$pdf->Cell(5,12,$name2,0);
$pdf->SetX($pdf->GetX() + 24);
$pdf->SetFont('Times','B',12);
$pdf->Cell(45,12,$rowing[$i]);
$pdf->SetFont('Times','',14);
$pdf->Cell(45,12,$dept);
$pdf->Ln();
$pdf->SetFont('Times','B',12);
}
if($i==2){
$pdf->Cell(45,12,$column_heading[$i]);
$pdf->SetFont('Times','',14);
$pdf->Cell(45,12,$lib); 
$pdf->SetFont('Times','B',12);
$pdf->Cell(45,12,$rowing[$i]);
$pdf->SetFont('Times','',14);
$pdf->Cell(45,12,$manage);
$pdf->SetFont('Times','B',12);
$pdf->Ln();}
if($i==3)
{
$pdf->Cell(45,12,$column_heading[$i]);
$pdf->Cell(45,12,' '); 
$pdf->Cell(45,12,$rowing[$i]);
$pdf->Cell(45,12,' ');
$pdf->Ln();
$pdf->Ln();}

}
$pdf->SetFont('Times','B',12);
$pdf->Cell(90,12,'SIGNATURE OF HOD',0);
$pdf->Cell(170,12,'                                                 ',0);
//$pdf->Cell(9,12,$column_heading,1);
$test='D:\xamp\htdocs\ace\nodue\pdf\nodue'; 
$test.=$name3;
$test.='ace.pdf';
$pdf->Output($test,'F');
?>



