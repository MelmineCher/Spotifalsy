<?php 
$curl = curl_init();

//configuration

curl_setopt($curl, CURLOPT_URL,"https://api.airtable.com/v0/appD7ILXYD2dT7A4m/Albums");


//evite d'afficher le resultat dans la page

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);



$auth = "Authorization: Bearer keyYFk5DIMTnI2Rux";

//en tete http

curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content_Type : application/json', $auth));

curl_setopt($curl, CURLOPT_CAINFO, 'C:\wamp64\cacert.pem');

//execution

$resultat = curl_exec($curl);
$resultat = json_decode($resultat, true);


