
<?php 
$curl_artists = curl_init();

//configuration

curl_setopt($curl_artists, CURLOPT_URL,"https://api.airtable.com/v0/appD7ILXYD2dT7A4m/Artists");


//evite d'afficher le resultat dans la page

curl_setopt($curl_artists, CURLOPT_RETURNTRANSFER, true);



$auth = "Authorization: Bearer keyYFk5DIMTnI2Rux";

//en tete http

curl_setopt($curl_artists, CURLOPT_HTTPHEADER, array('Content_Type : application/json', $auth));

curl_setopt($curl_artists, CURLOPT_CAINFO, 'C:\wamp64\cacert.pem');

//execution

$resultart = curl_exec($curl_artists);
$resultart = json_decode($resultart, true);



