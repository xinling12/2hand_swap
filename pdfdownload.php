<?php
$file_name = 'About.pdf';
$file_dir = dirname(dirname(__FILE__)).'/file/';
$file = iconv('utf-8','gb2312',$file_dir.$file_name);
$file = fopen($file_dir . $file_name,"r");
Header("Content-type:application/pdf");
Header("Accept-Ranges: bytes"); 
Header("Accept-Length: ".filesize($file_dir . $file_name)); 
Header("Content-Disposition: attachment; filename=" .$file_name);
echo fread($file,filesize($file_dir . $file_name)); 
fclose($file); 
require APP::R('center');
?>