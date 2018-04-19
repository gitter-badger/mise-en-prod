<!DOCTYPE html>
<html lang="fr">

<head>
  
<title>On met en production ?</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Content-Type" content="UTF-8">
<meta name="Content-Language" content="fr">
<link rel="shortcut icon" href="favicon.ico">
<link rel="stylesheet" type="text/css" href="style.css">
<style>
@import url('https://fonts.googleapis.com/css?family=Montserrat|Open+Sans|Tajawal');
</style>

</head>


<?php 
$fichier = 'log/compteur.txt';

if ( (file_exists($fichier)) && (is_readable($fichier)) ){ 
   $text = file_get_contents($fichier); 
      echo'<p class="titre">COMPTEUR</p>';
      echo'<p style="text-align: center; font-size:1em;">
      La page mise-en-prod.mehdydriouech.fr a été vue : '.$text.' fois.</p>';
} 
else 
{ 
   echo 'Le fichier '.$fichier.' n\'existe pas ou n\'est pas disponible en ouverture'; 
} 
?> 
