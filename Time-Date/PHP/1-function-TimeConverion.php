<?php
$default_timezone = "Europe/Brussels";
$timezone_conversion = "Europe/Athens";
date_default_timezone_set("$default_timezone");
$UTC_Time   = date("Y-m-d h:i:sa");
echo "$default_timezone : ".$UTC_Time."<br>";
echo "$timezone_conversion : ".TimeConverion("$timezone_conversion");

function TimeConverion($target_timezone) {
  date_default_timezone_set("$default_timezone");
  $sTime = date("Y-m-d h:i:sa");
  $ts3 = strtotime(date("G:i:s"))-strtotime($sTime); 
  $utc = explode(" ",$sTime);
  $time = strtotime($utc[1]);
  date_default_timezone_set($target_timezone);
  $time += $ts3;  // Add the difference
  //return $utc[0]." - ".date("Y-m-d h:i:sa", $time);
  return date("Y-m-d h:i:sa", $time);	
}
?>
