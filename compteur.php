<?php 
$fichier = 'compteur.txt'; 

if ( (file_exists($fichier)) && (is_readable($fichier)) ){ 
   $text = file_get_contents($fichier); 
      echo'<p style="text-align: center; font-size:3em;">COMPTEUR</p>';
      echo'<p style="text-align: center; font-size:1em;">
      La page mise-en-prod.mehdydriouech.fr a été vue : '.$text.' fois.</p>';
} 
else 
{ 
   echo 'Le fichier '.$fichier.' n\'existe pas ou n\'est pas disponible en ouverture'; 
} 
?> 