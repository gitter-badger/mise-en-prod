<!DOCTYPE html>
<html lang="fr">

<head>
  
<title>On met en production ?</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Content-Type" content="UTF-8">
<meta name="Content-Language" content="fr">
<link rel="shortcut icon" href="img/favicon.ico">
<link rel="stylesheet" type="text/css" href="style/style.css">
<style>
@import url('https://fonts.googleapis.com/css?family=Montserrat|Open+Sans|Tajawal');
</style>

</head>

<?php

echo "<p class='titre'>Adresse IP des visiteurs</p>";
echo "<br>";

$array = file("log/ip.txt");
foreach($array as $line)
       {
           echo "<p class='mentions' style='text-align:justify; margin-left:1%; font-size:1em;'>".$line."</p>";
       }

?>