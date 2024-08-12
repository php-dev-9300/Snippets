<?php
error_reporting(E_ALL);

$version1 = phpversion();
$version2 = explode(".", $version1);
$version = $version2[0].".".$version2[1];
$php = PHP_BINDIR."/php";
$phpbin = PHP_BINARY; 

exec("$php tes1.php 2>&1"); 
exec("$php tes2.php 2>&1"); 
exec("$php tes3.php 2>&1");

?>
