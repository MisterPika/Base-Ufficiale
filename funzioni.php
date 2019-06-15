<?php

// VARIABILI

$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);

$chatId = $update['message']['chat']['id'];
$text = $update['message']['text'];

$nome = $update['message']['from']['first_name'];
$cognome = $update['message']['from']['last_name'];
$username = $update['message']['from']['username'];
$id = $update['message']['from']['id'];
$lingua = $update['message']['from']['language_code'];


$query = $update['callback_query'];

$queryId = $query['id'];
$queryUserId = $query['from']['id'];
$queryusername = $query['from']['username'];
$queryData = $query['data'];

// FUNZIONI

function sendMessage($chatId,$text)
{
	$url = $GLOBALS[website]."/sendMessage?chat_id=$chatId&text=".urlencode($text);
	file_get_contents($url);
}

?>