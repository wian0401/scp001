<?php 
// PHP permanent URL redirection 
header("Location: https://www.cancioneros.wiki/", true, 301); 
exit(); 
?>


RewriteEngine on
RewriteRule ^(.*)$ https://www.cancioneros.wiki/$1 [R=301,L]


<meta http-equiv="refresh" content="0; url=https://www.cancioneros.wiki/">