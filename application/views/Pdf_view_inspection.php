<?php
$myfile=fopen("inspection_details.txt","r") or die("unable to open  a file");
echo fread($myfile,filesize("inspection_details.txt"));
fclose($myfile);
?>