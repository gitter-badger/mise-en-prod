<!DOCTYPE html>
<html lang="fr">

<head>

    <title>On met en production ?</title>
    <meta name="Content-Type" content="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Content-Language" content="fr">
    <meta name="Description" content="'Est-ce qu'on met en prod aujourd'hui' est le mini-site qui t'indique si aujourd'hui est une bonne journée pour la mise en prod avec une bonne dose de gifs.">
    <meta name="Keywords" content="gif, en prod, giffy, giphy, production, fun, lol, drole,Mise en prod, mise en prod, Mise en production, mise en production, mise, en , prod, gif, fun, lol, lundi, mardi, mercredi, jeud, vendredi, jours, jour, ">
    <meta name="Subject" content="Mise en production">
    <meta name="Copyright" content="original idea by estcequonmetenprod.info">
    <meta name="Author" content="Mehdy Driouech">
    <meta name="Publisher" content="Mehdy Driouech">
    <meta name="Identifier-Url" content="mise-en-prod.mehdydriouech.fr">
    <meta name="Reply-To" content="contact@mehdydriouech.fr">
    <meta name="Revisit-After" content="2 days">
    <meta name="Robots" content="all">
    <meta name="Rating" content="general">
    <meta name="Distribution" content="global">
    <meta name="Geography" content="63000">
    <meta name="Category" content="games">
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat|Open+Sans|Tajawal');
    </style>

</head>


<?php

include 'php/functions.php';

echo"<p class='titre'>Est-ce qu'on met en prod aujourd'hui ?</p>";

if (date("l")=="Monday"){

    //Emoji

    $text = "\\U1F60E"; // sun glaces
    $emojiHtml = preg_replace("/\\\\u([0-9A-F]{2,5})/i", "&#x$1;", $text);

    //gif array + random generation
    $tags = array('happy','yeah','yes','ha','ok','cool');
    $rand_keys = $tags[array_rand($tags, 1)];

    echo'<p class="jours" aria-label="Lundi">On est <b>Lundi</b></p>';
    echo'<p class="commentairePositif" aria-label="Commentaire mercredi"><b>OUI tu peux '.$emojiHtml.'</b></p>';
    echo'<p class="gifs">'.RandomGiphy($rand_keys).'</p>';

}else if (date("l")=="Tuesday"){

    //Emoji

    $text = "\\U1F600"; // happy face
    $emojiHtml = preg_replace("/\\\\u([0-9A-F]{2,5})/i", "&#x$1;", $text);

    //gif array + random generation
    $tags = array('happy','yeah','yes','ha','ok','party');
    $rand_keys = $tags[array_rand($tags, 1)];

    echo'<p class="jours" aria-label="Mardi">On est <b>Mardi</b></p>';
    echo'<p class="commentairePositif" aria-label="Commentaire mercredi"><b>OUI tu peux '.$emojiHtml.'</b></p>';
    echo'<p class="gifs">'.RandomGiphy($rand_keys).'</p>';

}else if (date("l")=="Wednesday"){

    //Emoji
    $text = "\\U1F60A"; // simple smile face
    $emojiHtml = preg_replace("/\\\\u([0-9A-F]{2,5})/i", "&#x$1;", $text);

    //gif array + random generation

    $tags = array('happy','yeah','yes','ha','ok','dance');
    $rand_keys = $tags[array_rand($tags, 1)];

    echo'<p class="jours" aria-label="Mercredi">On est <b>Mercredi</b></p>';
    echo'<p class="commentairePositif" aria-label="Commentaire mercredi"><b>OUI tu peux '.$emojiHtml.'</b></p>';
    echo'<p class="gifs">'.RandomGiphy($rand_keys).'</p>';

}else if (date("l")=="Thursday"){

    //Emoji

    $text = "\\U1F914"; // thinking face
    $emojiHtml = preg_replace("/\\\\u([0-9A-F]{2,5})/i", "&#x$1;", $text);

    //gif array + random generation
    $tags = array('maybe','sure','ahem','well','think','so','whatever','what');
    $rand_keys = $tags[array_rand($tags, 1)];

    echo'<p class="jeudi" aria-label="Jeudi">On est <b>Jeudi</b></p>';
    echo'<p class="commentairePositif" aria-label="Commentaire Jeudi"><b><i>Hmm, tu penses que ca passe ?'.'</i></b>'.$emojiHtml.'</p>';
    echo'<p class="gifs">'.RandomGiphy($rand_keys).'</p>';

}else if (date("l")=="Friday"){

    //Emoji

    $text = "\\U1F621"; // NO face
    $emojiHtml = preg_replace("/\\\\u([0-9A-F]{2,5})/i", "&#x$1;", $text);

    //gif array + random generation
    $tags = array('nope','no','hell','fire','stop','calmdown','annoyed','ugh','eyeroll','troll','fuck');
    $rand_keys = $tags[array_rand($tags, 1)];

    echo'<p class="vendredi" aria-label="Vendredi"<b>ON EST VENDREDI</b></p>';
    echo'<p class="commentaireVendredi" aria-label="Commentaire Vendredi"><b>NON NON NON NON'.$emojiHtml.'</b></p>';
    echo'<p class="gifs">'.RandomGiphy($rand_keys).'</p>';


}else if (date("l")=="Saturday"){

    //Emoji
    $text = "\\U1F389"; // Party face
    $emojiHtml = preg_replace("/\\\\u([0-9A-F]{2,5})/i", "&#x$1;", $text);

    //gif array + random generation
    $tags = array('happy','saturday','weekend','nice');
    $rand_keys = $tags[array_rand($tags, 1)];

    echo'<p class="jours" aria-label="Samedi">On est <b>Samedi</b></p>';
    echo'<p class="commentairePositif" aria-label="commentaire Samedi"><b>On ne bosse pas !'.$emojiHtml.'</b></p>';
    echo'<p class="gifs">'.RandomGiphy($rand_keys).'</p>';

}else if (date("l")=="Sunday"){

    //Emoji
    $text = "\\U1F389"; // Party face
    $emojiHtml = preg_replace("/\\\\u([0-9A-F]{2,5})/i", "&#x$1;", $text);

    //gif array + random generation
    $tags = array('happy','alleluia','sunday','good','clapping');
    $rand_keys = $tags[array_rand($tags, 1)];

    echo'<p class="jours" aria-label="Dimanche">On est <b>Dimanche</b></p>';
    echo'<p class="commentairePositif" aria-label="Commentaire Dimanche"><b>Le jour du seigneur on ne travail pas ! '.$emojiHtml.'</b></p>';
    echo'<p class="gifs">'.RandomGiphy($rand_keys).'</p>';
} else {
    echo'ERREUR';
}

//appels fonctions de tracking
compteurvisite();
IpVisiteur();

// récupération infos compteurs
$compteur_f = fopen('log/compteur.txt', 'r+');
$compte = fgets($compteur_f);

// affichage page

echo'<p class="compteurs" aria-label="compteur de vues">2018 - page vues '.$compte.' fois</p>';
echo'<p class="mentions"><a href="https://www.estcequonmetenprodaujourdhui.info/" aria-label="Idée Originale">idée originale : estcequonmetenprodaujourdhui.info</a></p>';
echo'<p class="mentions"><a href="https://github.com/MehdyDriouech/mise-en-prod" aria-label="Dépot Github">Github </a></p>';
echo'<p class="mentions"><a href="http://mise-en-prod.mehdydriouech.fr/giphy.html" aria-label="giphy"><img src="img/GiphyAttribution.png" alt="Giphy"></a></p>';


?>