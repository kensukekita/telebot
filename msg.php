<?php
require 'vendor/autoload.php';
use Telegram\Bot\Api;

$telegram = new Api('376072170:AAE2_y5EpVRCwc8Xbe-GHJLNP9yUdP2Zzto');

$chatid=$_POST['id'];
$text=$_POST['msg'];

$response = $telegram->sendMessage([
  'chat_id' => ''$chatid'', 
  'text' => ''$text''
]);

$messageId = $response->getMessageId();