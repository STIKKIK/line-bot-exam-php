<?php



require "vendor/autoload.php";

$access_token = 'zgeWJcvHCGpH4zOhlun4mXkHQTE8f2LY5QcU4BrIhIGNDy4qA3/zPQgjBd7w0d2itivp3fr5XDiNCxy0TnkJVOqsqsntlLPcz374KnnkUxBUtBBayhdM34bHKSQ/YUcvT1cHpiWuHKy5kSwILsGwiAdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'e7ebfe3f0a87bbfa96664a36f8a30195';

$pushID = 'U3fe7c7598917fff44f8dd2af4fd864a4';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







