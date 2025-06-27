<?php
$actual_filename ="test1.php";

$CROPSTART = "##CROPSTART##";
$CROPEND = "##CROPEND##";
$CROPSTART2 = "##CROPSTART2##";
$CROPEND2 = "##CROPEND2##";
$kloop ="$CROPSTART\r test bibi test \r$CROPEND";
$kloop2 ="$CROPSTART2\r test 22222ffffff2 bibi test \r$CROPEND2";

$str = file_get_contents($actual_filename);

//$str = preg_replace('/'.preg_quote('<!--START_REMOVE-->').'[\s\S]+?'.preg_quote('<!--END_REMOVE-->').'/', 'lmlmlmlll', $str);
$str2 = preg_replace('/'.$CROPSTART.'[\s\S]+?'.$CROPEND.'/', $kloop, $str);

file_put_contents($actual_filename, $str2);

$strb = file_get_contents($actual_filename);
$str3 = preg_replace('/'.$CROPSTART2.'[\s\S]+?'.$CROPEND2.'/', $kloop2, $strb);

file_put_contents($actual_filename, $str3);

echo $actual_filename;
?>
