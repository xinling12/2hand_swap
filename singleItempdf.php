<?php
session_start();
require_once('TCPDF-master/tcpdf.php');
//实例化   
$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);   
   
// 设置文档信息   
$pdf->SetCreator('2hand Swap');   
$pdf->SetAuthor('yueguangguang');   
$pdf->SetTitle('Welcome to 2hand Swap.com!');   
$pdf->SetSubject('TCPDF Tutorial');   
$pdf->SetKeywords('TCPDF, PDF, PHP');   
   
// 设置页眉和页脚信息   
$pdf->SetHeaderData('logo.png', 20	, '2hand Swap.com', 'Buy and Sell your old stuff!',    
      array(0,64,255), array(0,64,128));   
$pdf->setFooterData(array(0,64,0), array(0,64,128));   
   
// 设置页眉和页脚字体   
$pdf->setHeaderFont(Array('stsongstdlight', '', '10'));   
$pdf->setFooterFont(Array('helvetica', '', '8'));   
   
// 设置默认等宽字体   
$pdf->SetDefaultMonospacedFont('courier');   
   
// 设置间距   
$pdf->SetMargins(15, 27, 15);   
$pdf->SetHeaderMargin(5);   
$pdf->SetFooterMargin(10);   
   
// 设置分页   
$pdf->SetAutoPageBreak(TRUE, 25);   
   
// set image scale factor   
$pdf->setImageScale(1.25);   
   
// set default font subsetting mode   
$pdf->setFontSubsetting(true);   
   
//设置字体   
$pdf->SetFont('stsongstdlight', '', 14);   
   
$pdf->AddPage();   
   
$str1 = 'Welcome to 2hand Swap, '.$_SESSION['name'].'~';
$str2 = 'Product Name: '.$_SESSION['proname'];
$str3 = 'Price: $'.$_SESSION['price'].'AUD';
$str4 = 'Type: '.$_SESSION['type'];
$str5 = 'Special Point: '.$_SESSION['spe_poi'];
$str6 = 'Stock: '.$_SESSION['stock'];

   
$pdf->Write(0,$str1,'', 0, 'L', true, 0, false, false, 0); 
$pdf->Write(0,$str2,'', 0, 'L', true, 0, false, false, 0);
$pdf->Write(0,$str3,'', 0, 'L', true, 0, false, false, 0);
$pdf->Write(0,$str4,'', 0, 'L', true, 0, false, false, 0);
$pdf->Write(0,$str5,'', 0, 'L', true, 0, false, false, 0);
$pdf->Write(0,$str6,'', 0, 'L', true, 0, false, false, 0);


//输出PDF   
$pdf->Output($_SESSION['name'].'.pdf', 'I');   
?>