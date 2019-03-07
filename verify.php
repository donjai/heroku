<?php
$access_token = 'aD7IUVEtRXPVZEfrI1A2ho6zLsRtdEHx/v2Ol1MZyGuQFKypsHMh1rDybUjGljTVfZu+6LJbBEY0lbVSoLDKv7C99YzUMsoqNEUACvUx76xRPaa2laydLfASxvkRW/Bo9uauEAWbfrDbClfJ4UyIrwdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
