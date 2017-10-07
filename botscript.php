<?php

$botToken = "463812915:AAEEa-5oWmSsGhxWsLMBJEfah6eZzKL7LMs";
$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents($website."/getupdates");

$updateArray = json_decode($update, TRUE);

//print_r($updateArray);

//$text = $updateArray["result"][0]["message"]["text"];

$chatId = $updateArray["result"][0]["message"]["chat"]["id"];

file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=test");

//print_r($text);

?>