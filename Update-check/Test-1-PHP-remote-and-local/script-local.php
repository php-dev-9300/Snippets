<?php
//2 Files
// Files 1 and 2 in local - sames server
$a = file_get_contents('1.php');
$b = file_get_contents('2.php');
$a_hash = md5($a);
$b_hash = md5($b);
if($a_hash !== $b_hash) 
echo "NOK is different";
else 
echo "OK is same";
?>

<?php
// 2 Files
// File $a in local and file $b in remote server
$a = file_get_contents('https://raw.githubusercontent.com/php-dev-9300/Snippets/main/Update-check/Test-1-PHP-remote-and-local/remote-example.php');
$b = file_get_contents('https://www.php-dev.ovh/test/check-last-modified/update-locale-from-remote/remote-call.php');
$a = rtrim($a);
$b = rtrim($b);
$a_hash = md5($a);
$b_hash = md5($b);
if($a_hash !== $b_hash) {
echo "NOK is different";
}else{ 
echo "OK is same";
}
?>

<?php 
$filename =basename($_SERVER['SCRIPT_NAME']);
if (file_exists($filename)) {
echo "<p class='result'>$filename was last modified: " . date("F d Y H:i:s.", filemtime($filename)).'</p>';
}
 echo "<p class='result'>".$_SERVER['PHP_SELF']."</p>";   
?>

