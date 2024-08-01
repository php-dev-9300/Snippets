<?php
$default_timezone = "Europe/Brussels";
date_default_timezone_set("$default_timezone");
$UTC_Time   = date("Y-m-d h:i:sa");
echo "$default_timezone : ".$UTC_Time."<br>";
?>
