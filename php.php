<?php 

$counter = 0; 

$handle=@fopen("counter", "r"); 
if ($handle) 
{ 
 $counter = fread($handle, filesize("counter")); 
 fclose($handle); 
} 

$counter++; 

$handle=@fopen("counter", "w"); 
if ($handle) 
{ 
 fwrite($handle, $counter); 
 fclose($handle); 
} 

print "Эту страницу посещали $counter раз"; 

?>
