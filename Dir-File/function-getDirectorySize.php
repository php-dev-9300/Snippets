<?php
function getDirectorySize($path)
{
$totalsize = 0;
$totalcount = 0;
$dircount = 0;
if ($handle = opendir ($path))
{
while (false !== ($file = readdir($handle)))
{
$nextpath = $path . '/' . $file;
if ($file != '.' && $file != '..' && !is_link ($nextpath))
{
if (is_dir ($nextpath))
{
$dircount++;
$result = getDirectorySize($nextpath);
$totalsize += $result['size'];
$totalcount += $result['count'];
$dircount += $result['dircount'];
}
elseif (is_file ($nextpath))
{
$totalsize += filesize ($nextpath);
$totalcount++;
}
}
}
}
closedir ($handle);
$total['size'] = $totalsize;
$total['count'] = $totalcount;
$total['dircount'] = $dircount;
return $total;
}
function sizeFormat($size)
{
if($size<1024)
{
return $size." bytes";
}
else if($size<(1024*1024))
{
$size=round($size/1024,1);
return $size." KB";
}
else if($size<(1024*1024*1024))
{
$size=round($size/(1024*1024),1);
return $size." MB";
}
else
{
$size=round($size/(1024*1024*1024),1);
return $size." GB";
}
}
################################
/*
$path=$path_server;
$ar=getDirectorySize($path);
echo "<h5>Poids du présent projet</h5>";
echo "<p>";        
echo "Total size : ".sizeFormat($ar['size'])."<br>";
echo "No. of files : ".$ar['count']."<br>";
echo "No. of directories : ".$ar['dircount']."<br>";
echo "</p>";
*/
?> 
