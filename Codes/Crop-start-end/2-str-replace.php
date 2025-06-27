<?php
$CROPSTART = "##CROPSTART##";
$CROPEND = "##CROPEND##";
$template = file_get_contents("test2.php");
$start = strpos($template, $CROPSTART);

$end = strpos($template, $CROPEND); 
$section = substr($template, $start, $end - $start);
$newcontent="new content";
$remplace="$CROPSTART\r $newcontent \r";
$templatenew = str_replace($section, "$remplace", $template);
file_put_contents("test2.php", $templatenew);
?>
