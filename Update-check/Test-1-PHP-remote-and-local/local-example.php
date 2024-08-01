<?php
echo basename(__FILE__) . '<br>';
//self name without file extension
echo basename(__FILE__, '.php') . '<br>';
//self full url with file extension
echo __FILE__ . '<br>';

//parent file parent folder name
echo basename($_SERVER["REQUEST_URI"]) . '<br>';
//parent file parent folder name with //s
echo $_SERVER["REQUEST_URI"] . '<br>';

// parent file name without file extension
echo basename($_SERVER['PHP_SELF'], ".php") . '<br>';
// parent file name with file extension
echo basename($_SERVER['PHP_SELF']) . '<br>';
// parent file relative url with file etension
echo $_SERVER['PHP_SELF'] . '<br>';

// parent file name without file extension
echo basename($_SERVER["SCRIPT_FILENAME"], '.php') . '<br>';
// parent file name with file extension
echo basename($_SERVER["SCRIPT_FILENAME"]) . '<br>';
// parent file full url with file extension
echo $_SERVER["SCRIPT_FILENAME"] . '<br>';

//self name without file extension
echo pathinfo(__FILE__, PATHINFO_FILENAME) . '<br>';
//self file extension
echo pathinfo(__FILE__, PATHINFO_EXTENSION) . '<br>';

// parent file name with file extension
echo basename($_SERVER['SCRIPT_NAME']);
?>
