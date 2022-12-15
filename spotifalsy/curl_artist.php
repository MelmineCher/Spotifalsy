<?php

$artistSession = curl_init();


//configuration

curl_setopt($artistSession, CURLOPT_URL,"https://api.airtable.com/v0/appD7ILXYD2dT7A4m/Albums?fields%5B%5D=Artist");


//evite d'afficher le resultat dans la page

curl_setopt($artistSession, CURLOPT_RETURNTRANSFER, true);



$auth = "Authorization: Bearer keyYFk5DIMTnI2Rux";

//en tete http

curl_setopt($artistSession, CURLOPT_HTTPHEADER, array('Content_Type : application/json', $auth));

curl_setopt($artistSession, CURLOPT_CAINFO, 'C:\wamp64\cacert.pem');

//execution
$resultart = curl_exec($artistSession);
$resultart = json_decode($resultart, true);



