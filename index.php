<!DOCTYPE html>
<html lang="fr">

<head>
  
<title>On met en production ?</title>
<meta name="Content-Type" content="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Content-Language" content="fr">
<meta name="Description" content="Le mini-site qui t'indique si tu peux mettre en production selon le jour de la semaine avec une bonne dose de Gifs">
<meta name="Keywords" content="gif, mise, en, prod, mise en prod, en prod, lundi, mardi, mercredi, jeudi, vendredi, samedi, dimanche, giffy, giphy, production, fun, lol, drole, ">
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
<link rel="shortcut icon" href="favicon.ico">
<link rel="stylesheet" type="text/css" href="style.css">
<style>
@import url('https://fonts.googleapis.com/css?family=Montserrat|Open+Sans|Tajawal');
</style>

</head>


<?php

    include 'functions.php';

	echo"<p class='titre'>Est-ce qu'on met en prod aujourd'hui ?</p>";

if (date("l")=="Monday"){

    //gif array + random generation
    $tags = array('happy','yeah','youhou','cool');
    $rand_keys = array_rand($tags, 2);

    echo'<p class="jours" aria-label="Lundi">On est <b>Lundi<b></p>';
    echo'<p class="commentairePositif" aria-label="Commentaire mercredi"><b>OUI tu peux<b></p>';
    echo'<p class="gifs">'.RandomGiphy($rand_keys).'</p>';
	
}else if (date("l")=="Tuesday"){

    //gif array + random generation
    $tags = array('happy','yeah','youhou','cool');
    $rand_keys = array_rand($tags, 2);

    echo'<p class="jours" aria-label="Dimanche">On est <b>Mardi<b></p>';
    echo'<p class="commentairePositif" aria-label="Commentaire mercredi"><b>OUI tu peux<b></p>';
    echo'<p class="gifs">'.RandomGiphy($rand_keys).'</p>';

}else if (date("l")=="Wednesday"){

    //gif array + random generation
    $tags = array('happy','yeah','youhou','cool');
    $rand_keys = array_rand($tags, 2);

    echo'<p class="jours" aria-label="Dimanche">On est <b>Mercredi<b></p>';
    echo'<p class="commentairePositif" aria-label="Commentaire mercredi"><b>OUI tu peux<b></p>';
    echo'<p class="gifs">'.RandomGiphy($rand_keys).'</p>';

}else if (date("l")=="Thursday"){

    //gif array + random generation
    $tags = array('maybe','sure?','ahem','well');
    $rand_keys = array_rand($tags, 2);

    echo'<p class="jeudi" aria-label="Dimanche">On est <b>Mercredi<b></p>';
    echo'<p class="commentaireJeudi" aria-label="Commentaire Jeudi"><b><i>Hmm, tu penses que ca passe ?<i><b></p>';
    echo'<p class="gifs">'.RandomGiphy($rand_keys).'</p>';

}else if (date("l")=="Friday"){

    //gif array + random generation
    $tags = array('nope','no','hell','fire');
    $rand_keys = array_rand($tags, 2);

    echo'<p class="vendredi" aria-label="Vendredi"<b>ON EST VENDREDI<b></p>';
    echo'<p class="commentaireVendredi" aria-label="Commentaire Vendredi"><b>NON NON NON NON<b></p>';
    echo'<p class="gifs">'.RandomGiphy($rand_keys).'</p>';


}else if (date("l")=="Saturday"){

    //gif array + random generation
    $tags = array('happy','yeah','youhou','cool');
    $rand_keys = array_rand($tags, 2);

    echo'<p class="jours" aria-label="Samedi">On est <b>samedi<b></p>';
    echo'<p class="commentairePositif" aria-label="commentaire Samedi"><b>Tu bosses ?<b></p>';
    echo'<p class="gifs">'.RandomGiphy($rand_keys).'</p>';

}else if (date("l")=="Sunday"){

	//gif array + random generation
	$tags = array('happy','yeah','youhou','cool');
	$rand_keys = array_rand($tags, 2);

	echo'<p class="jours" aria-label="Dimanche">On est <b>Dimanche<b></p>';
	echo'<p class="commentairePositif" aria-label="Commentaire Dimanche"><b>Le jour du seigneur on ne travail pas normalement...<b></p>';
    echo'<p class="gifs">'.RandomGiphy($rand_keys).'</p>';
} else {
	echo'ERREUR';
}

    //appels fonctions de tracking
        compteurvisite();
        IpVisiteur();

	// récupération infos compteurs
        $compteur_f = fopen('compteur.txt', 'r+');
        $compte = fgets($compteur_f);

    // affichage page

	echo'<p class="compteurs" aria-label="compteur de vues">2018 - page vues '.$compte.' fois</p>';
	echo'<p class="mentions"><a href="https://www.estcequonmetenprodaujourdhui.info/" aria-label="Idée Originale">idée originale : estcequonmetenprodaujourdhui.info</a></p>';
	echo'<p class="mentions"><a href="https://github.com/MehdyDriouech/mise-en-prod" aria-label="Dépot Github">Github </a></p>';
	echo'<p class="mentions"><a href="http://giphy.com" aria-label="giphy">Powered by GiphyAPI</a></p>';

	
?>