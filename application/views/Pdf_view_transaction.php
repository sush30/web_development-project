<?php
$myfile=fopen("all_files/abhi/property/transaction_details.txt","r") or die("unable to open  a file");
echo fread($myfile,filesize("all_files/abhi/property/transaction_details.txt"));
fclose($myfile);
?>