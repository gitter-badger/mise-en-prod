<?php

function compteurvisite(){

    if(file_exists('compteur.txt'))
    {
        $compteur_f = fopen('compteur.txt', 'r+');
        $compte = fgets($compteur_f);
    }
    else
    {
        $compteur_f = fopen('compteur.txt', 'a+');
        $compte = 0;
    }
    $compte++;
    fseek($compteur_f, 0);
    fputs($compteur_f, $compte);
    fclose($compteur_f);

    // return $compte;
}

function IpVisiteur(){

    $file="ip.txt";
    $currentFile=fopen($file,'a');
    $current="";
    $today = new DateTime('NOW', new DateTimeZone('Europe/Paris'));
    $today = $today->format('d/m/Y - H:i:s');
    $ipAdress = $_SERVER['REMOTE_ADDR'];

// Fai part

    try {

    $url = "http://ip-api.com/json/".$ipAdress;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json')); // Assuming you're requesting JSON
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
    $resultData = json_decode($response, true);

    if ($status = $resultData[status]){
        $fai = $resultData[isp];
        $city = $resultData[city];
        $region = $resultData[regionName];
        $codePostal = $resultData[zip];
        $organisation = $resultData[org];
    } else {
        $fai = "failed to get";
        $city = "failed to get";
        $region = "failed to get";
        $codePostal = "failed to get";
        $organisation = "failed to get";
    }


    } catch (Exception $e) {
        echo 'Exception reçue : ',  $e->getMessage(), "\n";
    }

// End Fai part

    try {
        $current .= $today ." - ". $ipAdress."  VILLE : ".$city."  CODE POSTAL :  ".$codePostal."  REGION :  ".$region."  FAI :  ".$fai."  ORGANISATION :  ".$organisation."\n";
    } catch (Exception $e) {
        $current .= $today.'Exception reçue'.'\n' ;
    }
    fwrite($currentFile,$current);
    fclose($currentFile);
    echo ""; //close call
}

function RandomGiphy($tag){

    try {

        $url = "http://api.giphy.com/v1/gifs/search?q=".$tag."&api_key=7DnYCmyUFcUP8vBcHEwZc30OC0F0fpcj";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json')); // Assuming you're requesting JSON
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);
        $resultData = json_decode($response, true);
        $rand = rand(0,20);


        $gifGet=$resultData[data][$rand][embed_url];
        echo "<p style='display: block; margin: 0 auto; width: 500px;'>"."<iframe src=".$gifGet." width='500' height='500' frameBorder=\"0\"></iframe>"."</p>";

    } catch (Exception $e) {
        echo 'Exception reçue : ',  $e->getMessage(), "\n";
    }


}
