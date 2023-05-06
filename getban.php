<?php 
if(isset($_GET['banz'])) 
{ 
$text = "".$_GET['banz']."\n"; 
$filename = "ip_forceur.txt"; 
$fh = fopen($filename, "a"); 
fwrite($fh, $text); 
fclose($fh); 
	
	echo ''.$_GET['banz'].' hop ca degage ! ';
 } 
 

 
?>