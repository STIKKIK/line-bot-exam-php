<?php


$access_token = 'zgeWJcvHCGpH4zOhlun4mXkHQTE8f2LY5QcU4BrIhIGNDy4qA3/zPQgjBd7w0d2itivp3fr5XDiNCxy0TnkJVOqsqsntlLPcz374KnnkUxBUtBBayhdM34bHKSQ/YUcvT1cHpiWuHKy5kSwILsGwiAdB04t89/1O/w1cDnyilFU=';

$userId = 'U3fe7c7598917fff44f8dd2af4fd864a4';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

