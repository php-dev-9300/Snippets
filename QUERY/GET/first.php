<?php
$actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/";
if(empty($_GET)) {
$mescheck= "No variables specified in URL...";
}else{
	//$echo=array;
	//$echo= array();`
	/*
$echo ="";
$url = $_SERVER['QUERY_STRING'];
$para = explode("=", $url); 
foreach($para as $key => $value){   
    $p = explode("&", $value);
    foreach($p as $key => $val) {
      $echo .=$val."\n";
    }   
} 
	*/
	$echo9="";

	 foreach ($_GET as $key => $value) {
    //$echo .=$key;
		 //$array5 = explode(" ",$key);
			 //$array5 = explode(" ",);
$echo="";
		 $echo9 .= $key."\n";
		 		 			// 		 $array5 = explode("\n",$echo9);

		 $echo6 = array($echo9);
$echo="";
		 foreach ($echo6 as $value) {

			 $echo .= $value."\n";
		 }
}
//$echo = array($echo);

//$slo = explode("",$echo);
	//$slo=$echo;
	//$vil="";
	//$array=explode("",$echo);
	/*
$array=array($echo);
		$echo4='';

	foreach ($array as  $val)
{
		$echo4 .= $val;
	}
	
	$array5=array($echo4);
		$array5=explode("<br>",$echo4);
*/
		//$array6=array($echo);
$array5 = explode("\n",$echo);
if (in_array('tra', $array5)) {
        $echo3 = 'found';
		
        }else{
            $echo3 = 'Not Found';       
            }

if (isset($_SERVER['QUERY_STRING']) ) {
if (!empty($_GET['action'])){
$autre="action";	
$action=$_GET['action'];
}
if($action){
$action_return="action is ISSET";	
}else{
$action_return="action is Not set";	
}

	
}else{
$autre="no action";
$action_return="NULL";	
}
$mescheck="Hey! Here are all the $autre $action_return variables in the URL!\n";    
}
	
if(isset($_GET['action'])){
$file=$_GET['action'];
$filename=$file;
$message="ok";

if (file_exists($filename)) {
$filename=$file;
$message="ok";
} else {
$message="file not Found $filename";
$filename="error.sh";
}
}else{
$filename="error.sh";
$message="No query NOt Get action";
}

$content_file = file_get_contents($actual_link.'index-content.php');
$content_file_sh = file_get_contents($actual_link.$filename);

if (isset($_SERVER['HTTP_USER_AGENT']) && preg_match('/^(curl|wget)/i', $_SERVER['HTTP_USER_AGENT'])) {
header('Content-Type: text/sh');
//echo $actual_link;

$echo = <<<EOF
#!/bin/bash
proto2=$actual_link
message="$message"
mescheck="$mescheck"
oxi="$echo"
oxi2="$echo3"

$content_file_sh
EOF;
echo $echo;
}
else {	
	echo "Your are browser <br>";
echo $content_file."<br>";
	echo $actual_link."<br>";
}	

?>
