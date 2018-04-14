<?php

echo "Adresse IP des visiteurs";
echo "<br>";

$array = file("ip.txt");
foreach($array as $line)
       {
           echo $line;
           echo "<br>";
       }

?>