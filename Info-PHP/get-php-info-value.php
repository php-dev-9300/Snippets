<?php
error_reporting(E_ALL);

$version1 = phpversion();
$version2 = explode(".", $version1);
$version = $version2[0].".".$version2[1];
$php = PHP_BINDIR."/php";
$phpbin = PHP_BINARY; 

?>
