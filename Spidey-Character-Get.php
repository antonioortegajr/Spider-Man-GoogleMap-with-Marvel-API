<?php
//beginning of endpoint. change if needed
$gate = 'http://gateway.marvel.com/v1/public/';
//Parameters
$param = "characters?name=Spider-Man";
//API key from developers.marvel
$APIKey ='YOURKEY123';
//private key from developers.marvel
$PrivateKey = 'YOURPRIVATEKEY123';
// just used an integer for this example
$timestamp = '1';
//create hash
$hash = md5($timestamp . $PrivateKey . $APIKey);
//build endpoint
$ch = curl_init($gate . $param . "&ts=" . $timestamp . "&apikey=" . $APIKey . "&hash=" . $hash);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HEADER, true );
$data = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

// view code in case there is an issue
echo $code;
?>
