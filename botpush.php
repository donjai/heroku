<?php



require "vendor/autoload.php";

$access_token = 'aD7IUVEtRXPVZEfrI1A2ho6zLsRtdEHx/v2Ol1MZyGuQFKypsHMh1rDybUjGljTVfZu+6LJbBEY0lbVSoLDKv7C99YzUMsoqNEUACvUx76xRPaa2laydLfASxvkRW/Bo9uauEAWbfrDbClfJ4UyIrwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '48dfa13cf2f53703079355c4b7043032';

$pushID = 'Ua8b091faa36d13c4003c797f9dfe5801';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







