<?php
$myfile=fopen("property_details.txt","r") or die("unable to open  a file");
echo fread($myfile,filesize("property_details.txt"));
fclose($myfile);
?>