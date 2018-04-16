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
	$gifTab = array(
	'<iframe src="https://giphy.com/embed/3ohhwkEl6OLXqn7mms" width="480" height="360" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/happy-cute-friends-3ohhwkEl6OLXqn7mms" aria-label="1/7 gif Lundi"></a></p>',
	'<iframe src="https://giphy.com/embed/14e3yFOEtOQqfukLFJ" width="480" height="450" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/dance-happy-friday-14e3yFOEtOQqfukLFJ" aria-label="2/7 gif Lundi"></a></p>',
	'<iframe src="https://giphy.com/embed/fCkHih2gXdORq" width="480" height="425" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/reaction-gif-yes-jimmy-fallon-fCkHih2gXdORq" aria-label="3/7 gif Lundi"></a></p>',
	'<iframe src="https://giphy.com/embed/13ZHjidRzoi7n2" width="466" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/reactiongifs-13ZHjidRzoi7n2" aria-label="4/7 gif Lundi"></a></p>',
	'<iframe src="https://giphy.com/embed/r1fDuPIcs18d2" width="480" height="258" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/r1fDuPIcs18d2" aria-label="5/7 gif Lundi"></a></p>',
	'<iframe src="https://giphy.com/embed/l4KhSYoul5j8i3su4" width="480" height="270" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/justin-yeah-michael-jordon-l4KhSYoul5j8i3su4" aria-label="6/7 gif Lundi"></a></p>',
	'<iframe src="https://giphy.com/embed/xnNKRYdeemYi4" width="480" height="313" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/how-i-met-your-mother-yes-agree-xnNKRYdeemYi4" aria-label="7/7 gif Lundi"></a></p>'
	);
	$rand_keys = array_rand($gifTab, 2);
	
	echo'<p class="jours" aria-label="Lundi">On est <b>lundi<b></p>';
	echo'<p class="commentairePositif" aria-label="Commentare lundi"><b><i>OUI tu peut mettre en prod<i><b></p>';
	echo'<p class="gifs">'.$gifTab[$rand_keys[0]].'</p>';
	
}else if (date("l")=="Tuesday"){
	
	//gif array + random generation
	$gifTab = array(
	'<iframe src="https://giphy.com/embed/RrVzUOXldFe8M" width="480" height="360" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/excited-yes-nicolas-cage-RrVzUOXldFe8M" aria-label="1/7 gif Mardi"></a></p>',
	'<iframe src="https://giphy.com/embed/z48aJruaX0Jsk" width="480" height="358" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/z48aJruaX0Jsk" aria-label="2/7 gif Mardi"></a></p>',
	'<iframe src="https://giphy.com/embed/bzE1WAm8BifiE" width="480" height="362" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/yeah-saturday-bzE1WAm8BifiE" aria-label="3/7 gif Mardi"></a></p>',
	'<iframe src="https://giphy.com/embed/WJjLyXCVvro2I" width="480" height="423" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/WJjLyXCVvro2I" aria-label="4/7 gif Mardi"></a></p>',
	'<iframe src="https://giphy.com/embed/tyxovVLbfZdok" width="480" height="301" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/movie-happy-excited-tyxovVLbfZdok" aria-label="5/7 gif Mardi"></a></p>',
	'<iframe src="https://giphy.com/embed/xT9IgzUuC5Ss6ZnTEs" width="480" height="323" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/originals-bob-ross-stick-around-xT9IgzUuC5Ss6ZnTEs" aria-label="6/7 gif Mardi"></a></p>',
	'<iframe src="https://giphy.com/embed/2xgzOPvrWW7hm" width="480" height="270" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/excited-yeah-adventure-time-2xgzOPvrWW7hm" aria-label="7/7 gif Mardi"></a></p>'
	);
	$rand_keys = array_rand($gifTab, 2);
	
	echo'<p class="jours" aria-label="Mardi">On est <b>mardi<b></p>';
	echo'<p class="commentairePositif" aria-label="Commentaire Mardi"><b><i>OUI tu peut mettre en prod<i><b></p>';
	echo'<p class="gifs">'.$gifTab[$rand_keys[0]].'</p>';

}else if (date("l")=="Wednesday"){
	
	//gif array + random generation
	$gifTab = array(
	'<iframe src="https://giphy.com/embed/a3zqvrH40Cdhu" width="413" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/a3zqvrH40Cdhu" aria-label="1/7 gif Mercredi"></a></p>',
	'<iframe src="https://giphy.com/embed/jL6OeIhk3zPi" width="480" height="360" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/jL6OeIhk3zPi" aria-label="2/7 gif Mercredi"></a></p>',
	'<iframe src="https://giphy.com/embed/kRXnZwKrPTwVq" width="480" height="360" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/ok-wink-kRXnZwKrPTwVq" aria-label="3/7 gif Mercredi"></a></p>',
	'<iframe src="https://giphy.com/embed/xUA7baWfTjfHGLZc3e" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/hannahbronfman-hannah-bronfman-xUA7baWfTjfHGLZc3e" aria-label="4/7 gif Mercredi"></a></p>',
	'<iframe src="https://giphy.com/embed/w77O4Mf1juHPq" width="477" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/reaction-jeremy-renner-w77O4Mf1juHPq" aria-label="5/7 gif Mercredi"></a></p>',
	'<iframe src="https://giphy.com/embed/J6ikkcRDDSL4I" width="480" height="389" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/mrw-someone-chocolate-J6ikkcRDDSL4I" aria-label="6/7 gif Mercredi"></a></p>',
	'<iframe src="https://giphy.com/embed/1rSpWBMQlQJzjglX9I" width="480" height="231" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/jerseyshore-mtv-jersey-shore-1rSpWBMQlQJzjglX9I" aria-label="7/7 gif Mercredi"></a></p>'
	);
	$rand_keys = array_rand($gifTab, 2);
	
	echo'<p class="jours" aria-label="Mercredi">On est <b>mercredi<b></p>';
	echo'<p class="commentairePositif" aria-label="Commentaire Mercredi"><b><i>OUI tu peut mettre en prod<i><b></p>';
	echo'<p class="gifs">'.$gifTab[$rand_keys[0]].'</p>';

}else if (date("l")=="Thursday"){
	
	//gif array + random generation
	$gifTab = array(
	'<iframe src="https://giphy.com/embed/3og0IFntLbrW7yuamQ" width="480" height="244" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/movie-jim-carrey-liar-3og0IFntLbrW7yuamQ" aria-label="1/7 gif Jeudi"></a></p>',
	'<iframe src="https://giphy.com/embed/3o7bu19Otejn05nksg" width="480" height="270" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/harlemglobetrotters-harlem-globetrotters-3o7bu19Otejn05nksg" aria-label="2/7 gif Mercredi"></a></p>',
	'<iframe src="https://giphy.com/embed/Q25XQvcPhghRS" width="480" height="358" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/nine-inch-nails-nin-trent-reznor-Q25XQvcPhghRS" aria-label="3/7 gif Mercredi"></a></p>',
	'<iframe src="https://giphy.com/embed/DfdbTJZx6Yjra" width="480" height="207" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/birthday-leonardo-dicaprio-DfdbTJZx6Yjra" aria-label="4/7 gif Mercredi"></a></p>',
	'<iframe src="https://giphy.com/embed/26gR0t9sNVrbVEhPO" width="480" height="270" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/lilireinhart-lili-reinhart-26gR0t9sNVrbVEhPO" aria-label="5/7 gif Mercredi"></a></p>',
	'<iframe src="https://giphy.com/embed/26u4lhPy4UI6AHzGw" width="480" height="270" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/manuelmedrano-manuel-medrano-26u4lhPy4UI6AHzGw" aria-label="6/7 gif Mercredi"></a></p>',
	'<iframe src="https://giphy.com/embed/3ohc1gfk1PzCARZrnq" width="480" height="423" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/vtm-familie-viv-3ohc1gfk1PzCARZrnq" aria-label="7/7 gif Mercredi"></a></p>'
	);
	$rand_keys = array_rand($gifTab, 2);	
	
	echo'<p class="jeudi" aria-label="Jeudi">On est <b>jeudi<b></p>';
	echo'<p class="commentairePositif" aria-label="Commentaire Jeudi"><b><i>Hmm, tu penses que ca passe ?<i><b></p>';
	echo'<p class="gifs">'.$gifTab[$rand_keys[0]].'</p>';

}else if (date("l")=="Friday"){

	//gif array + random generation
	$gifTab = array(
	'<iframe src="https://giphy.com/embed/12XMGIWtrHBl5e" width="480" height="392" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/the-office-no-steve-carell-12XMGIWtrHBl5e" aria-label="1/7 gif Vendredi"></a></p>',
	'<iframe src="https://giphy.com/embed/1zSz5MVw4zKg0" width="436" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/reaction-1zSz5MVw4zKg0" aria-label="2/7 gif Vendredi"></a></p>',
	'<iframe src="https://giphy.com/embed/pLcgO003rbeo0" width="270" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/loop-request-copy-pLcgO003rbeo0" aria-label="3/7 gif Vendredi"></a></p>',
	'<iframe src="https://giphy.com/embed/i1JSXl0MfeRd6" width="480" height="373" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/jake-high-quality-gyllenhaal-i1JSXl0MfeRd6" aria-label="4/7 gif Vendredi"></a></p>',
	'<iframe src="https://giphy.com/embed/l49JJQf9w3RPCWDyU" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/animation-reaction-dancing-l49JJQf9w3RPCWDyU" aria-label="5/7 gif Vendredi"></a></p>',
	'<iframe src="https://giphy.com/embed/26gsdXTHmJcO3pQas" width="480" height="270" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/throwingshade-tv-land-tvland-26gsdXTHmJcO3pQas" aria-label="6/7 gif Vendredi"></a></p>',
	'<iframe src="https://giphy.com/embed/yMaLDA976YtUs" width="480" height="255" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/nope-do-not-want-run-away-yMaLDA976YtUs" aria-label="7/7 gif Vendredi"></a></p>'
	);
	$rand_keys = array_rand($gifTab, 2);

	echo'<p class="vendredi" aria-label="Vendredi"<b>ON EST VENDREDI<b></p>';
	echo'<p class="commentaireVendredi" aria-label="Commentaire Vendredi"><b>NON NON NON NON<b></p>';
	echo'<p class="gifs">'.$gifTab[$rand_keys[0]].'</p>';

}else if (date("l")=="Saturday"){

	//gif array + random generation
	$gifTab = array(
	'<iframe src="https://giphy.com/embed/dnIsXwv78BC4U" width="396" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/star-wars-gif-may-the-force-be-with-you-dnIsXwv78BC4U" aria-label="1/7 gif Samedi"></a></p>',
	'<iframe src="https://giphy.com/embed/l3q2Lz5yuEFUXX3IQ" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/schittscreek-pop-schittscreek-poptv-eugunelevy-l3q2Lz5yuEFUXX3IQ" aria-label="2/7 gif Samedi"></a></p>',
	'<iframe src="https://giphy.com/embed/26hitGX1jzdTVMonu" width="480" height="320" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/studiosoriginals-stay-strong-comfort-26hitGX1jzdTVMonu" aria-label="3/7 gif Samedi"></a></p>',
	'<iframe src="https://giphy.com/embed/BlVnrxJgTGsUw" width="396" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/dancing-happy-seinfeld-BlVnrxJgTGsUw" aria-label="4/7 gif Samedi"></a></p>',
	'<iframe src="https://giphy.com/embed/MVDPX3gaKFPuo" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/pitchperfect-movie-pitch-perfect-pitchperfect2-MVDPX3gaKFPuo" aria-label="5/7 gif Samedi"></a></p>',
	'<iframe src="https://giphy.com/embed/kEKcOWl8RMLde" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/happy-crazy-homer-simpson-kEKcOWl8RMLde" aria-label="6/7 gif Samedi"></a></p>',
	'<iframe src="https://giphy.com/embed/2Vp0UxNcA8TEQ" width="480" height="270" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/ifc-television-ifc-comedy-bang-2Vp0UxNcA8TEQ" aria-label="7/7 gif Samedi"></a></p>'
	);
	$rand_keys = array_rand($gifTab, 2);

	echo'<p class="jours" aria-label="Samedi">On est <b>samedi<b></p>';
	echo'<p class="commentairePositif" aria-label="commentaire Samedi"><b>Tu bosses ?<b></p>';
	echo'<p class="gifs">'.$gifTab[$rand_keys[0]].'</p>';

}else if (date("l")=="Sunday"){

	//gif array + random generation
	$gifTab = array(
	'<iframe src="https://giphy.com/embed/rnshwCdGdDyg0" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/rnshwCdGdDyg0" aria-label="1/7 gif Dimanche"></a></p>',
	'<iframe src="https://giphy.com/embed/CB7Sv8VRm5SX6" width="480" height="330" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/fail-monday-sunday-CB7Sv8VRm5SX6" aria-label="2/7 gif Dimanche"></a></p>',
	'<iframe src="https://giphy.com/embed/3NtY188QaxDdC" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/3NtY188QaxDdC" aria-label="3/7 gif Dimanche"></a></p>',
	'<iframe src="https://giphy.com/embed/MuXIBzINgpzbO" width="480" height="367" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/doug-90s-nickelodeon-national-underwear-day-MuXIBzINgpzbO" aria-label="4/7 gif Dimanche"></a></p>',
	'<iframe src="https://giphy.com/embed/l0HlV0zIwjOBvNQTm" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/animation-trippy-cartoon-l0HlV0zIwjOBvNQTm" aria-label="5/7 gif Dimanche"></a></p>',
	'<iframe src="https://giphy.com/embed/eeDarGFPiZxyE" width="480" height="270" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/adventure-time-gif-eeDarGFPiZxyE" aria-label="6/7 gif Dimanche"></a></p>',
	'<iframe src="https://giphy.com/embed/13CM6E7tLmAR8s" width="480" height="267" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/adventure-time-gif-13CM6E7tLmAR8s" aria-label="7/7 gif Dimanche"></a></p>'
	);
	$rand_keys = array_rand($gifTab, 2);

	echo'<p class="jours" aria-label="Dimanche">On est <b>Dimanche<b></p>';
	echo'<p class="commentairePositif" aria-label="Commentaire Dimanche"><b>Le jour du seigneur on ne travail pas normalement...<b></p>';
	echo'<p class="gifs">'.$gifTab[$rand_keys[0]].'</p>';
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

	
?>