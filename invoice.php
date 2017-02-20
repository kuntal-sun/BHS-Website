<?php
session_start();
require('fpdf17\fpdf.php');

class PDF extends FPDF
{
	var $B;
var $I;
var $U;
var $HREF;

function PDF($orientation='P',$unit='mm',$format='A4')
{
    //Call parent constructor
    $this->FPDF($orientation,$unit,$format);
    //Initialization
    $this->B=0;
    $this->I=0;
    $this->U=0;
    $this->HREF='';
}

function WriteHTML($html)
{
    //HTML parser
    $html=str_replace("\n",' ',$html);
    $a=preg_split('/<(.*)>/U',$html,-1,PREG_SPLIT_DELIM_CAPTURE);
    foreach($a as $i=>$e)
    {
        if($i%2==0)
        {
            //Text
            if($this->HREF)
                $this->PutLink($this->HREF,$e);
            else
                $this->Write(5,$e);
        }
        else
        {
            //Tag
            if($e{0}=='/')
                $this->CloseTag(strtoupper(substr($e,1)));
            else
            {
                //Extract attributes
                $a2=explode(' ',$e);
                $tag=strtoupper(array_shift($a2));
                $attr=array();
                foreach($a2 as $v)
                    if(ereg('^([^=]*)=["\']?([^"\']*)["\']?$',$v,$a3))
                        $attr[strtoupper($a3[1])]=$a3[2];
                $this->OpenTag($tag,$attr);
            }
        }
    }
}

function OpenTag($tag,$attr)
{
    //Opening tag
    if($tag=='B' or $tag=='I' or $tag=='U')
        $this->SetStyle($tag,true);
    if($tag=='A')
        $this->HREF=$attr['HREF'];
    if($tag=='BR')
        $this->Ln(5);
}

function CloseTag($tag)
{
    //Closing tag
    if($tag=='B' or $tag=='I' or $tag=='U')
        $this->SetStyle($tag,false);
    if($tag=='A')
        $this->HREF='';
}

function SetStyle($tag,$enable)
{
    //Modify style and select corresponding font
    $this->$tag+=($enable ? 1 : -1);
    $style='';
    foreach(array('B','I','U') as $s)
        if($this->$s>0)
            $style.=$s;
    $this->SetFont('',$style);
}

function PutLink($URL,$txt)
{
    //Put a hyperlink
    $this->SetTextColor(0,0,255);
    $this->SetStyle('U',true);
    $this->Write(5,$txt,$URL);
    $this->SetStyle('U',false);
    $this->SetTextColor(0);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
$html='<a href="http://localhost/bhswebsite/index.php" target="_blank">Back to Home</a>';
$x1=$_POST['inv'];
$x2=$_POST['fn'];
$x3=$_POST['em'];
$x4=$_POST['mob'];
$x5=$_POST['add'];
$x6=$_POST['pin'];
$x7=$_POST['land'];
$x8=date("Y-m-d");

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Image('logo.png',8,19,80);
$pdf->SetFont('Arial','U',13);
$pdf->Cell(85);
$pdf->Cell(20,10,'Invoice',0,0,'C');
$pdf->Ln(8);
$pdf->Cell(150);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(30,10,'Biswas Hardware Stores',0,0,'C');
$pdf->Ln(5);
$pdf->SetFont('Arial','',9);
$pdf->Cell(163);
$pdf->Cell(30,10,'Plassey,Nadia,West Bengal',0,0,'C');
$pdf->Ln(5);
$pdf->Cell(169);
$pdf->Cell(30,10,'India,Pin-741156',0,0,'R');
$pdf->Ln(5);
$pdf->Cell(159);
$pdf->Cell(30,10,'03474-262323/(+91) 9735423539',0,0,'C');
$pdf->Ln(5);
$pdf->Cell(158);
$pdf->Cell(30,10,'biswashardwarestores@gamil.com',0,0,'C');
$pdf->Ln(20);
$pdf->SetFont('Arial','',13);
$pdf->SetFillColor(200,220,255);
$pdf->Cell(18,8,'SL NO.',1,0,'C');
$pdf->Cell(76,8,'Item Description',1,0,'C');
$pdf->Cell(33,8,'1 Unit Price',1,0,'C');
$pdf->Cell(27,8,'Quantity',1,0,'C');
$pdf->Cell(37,8,'Final Price',1,1,'C');
$pdf->Ln(8);
$pdf->SetFont('Arial','',9);
$i=1;
$tp=0;
if(isset($_SESSION["products"]))
    {
		foreach ($_SESSION["products"] as $cart_itm)
        {

		   $model=$cart_itm["name"];
		   $qtity=$cart_itm["qty"];
		   $pprice=$cart_itm["price"];
		   $fp=$pprice*$qtity;
		   $tp+=$fp;
		   

$pdf->Cell(18,8,$i,0,0,'C');
$pdf->Cell(76,8,$model,0,0,'C');

$pdf->Cell(33,8,$pprice,0,0,'C');
$pdf->Cell(27,8,$qtity,0,0,'C');
$pdf->Cell(37,8,$fp,0,1,'C');
$i++;
		}}
$pdf->Cell(190,8,'_________________________________________________________________________________________________________________',0,1,'C');
$pdf->Ln(3);
$pdf->Cell(118);
$pdf->SetFont('Arial','B',13);
$pdf->Cell(37,8,'Total Price :',0,0,'C');
$pdf->Cell(37,8,$tp,0,1,'C');
$pdf->SetFont('Arial','B',11);
$pdf->Cell(37,8,'Invoice No :',0,0,'C');
$pdf->SetFont('Arial','',10);
$pdf->Cell(37,8,$x1,0,1,'C');
$pdf->SetFont('Arial','B',11);
$pdf->Cell(37,8,'Date :',0,0,'C');
$pdf->SetFont('Arial','',10);
$pdf->Cell(37,8,$x8,0,1,'C');
$pdf->Ln(15);
$pdf->Cell(45);
$pdf->SetFont('Arial','U',15);
$pdf->Cell(30,10,'Buyer Info :',0,1,'C');
$pdf->Cell(50);
$pdf->SetFont('Arial','',9);
$pdf->Cell(20,8,$x2,0,0,'C');
$pdf->Ln(5);
$pdf->Cell(50);
$pdf->Cell(20,8,$x3,0,0,'C');
$pdf->Ln(5);
$pdf->Cell(50);
$pdf->Cell(20,8,$x4,0,0,'C');
$pdf->Ln(5);
$pdf->Cell(50);
$pdf->Cell(20,8,$x5,0,0,'C');
$pdf->Ln(5);
$pdf->Cell(50);
$pdf->Cell(20,8,$x6,0,0,'C');
$pdf->Ln(5);
$pdf->Cell(50);
$pdf->Cell(20,8,$x7,0,0,'C');
$pdf->Ln(10);
$pdf->Cell(125);
$pdf->SetFont('Arial','',10);
$pdf->Cell(20,8,'Thanking you..',0,0,'C');
$pdf->Ln(5);
$pdf->Cell(145);
$pdf->SetFont('Arial','',12);
$pdf->Cell(20,8,'--Biswas Hardware Stores',0,0,'C');
$pdf->Ln(10);
$pdf->SetFontSize(14);
$pdf->WriteHTML($html);
$pdf->Ln(20);
$pdf->Cell(88);
$pdf->SetFont('Arial','',9);
$pdf->Cell(20,8,'-------------------------------(This is a computer generated invoice)-------------------------------',0,0,'C');
$pdf->Output();
unset($_SESSION['products']);
?>