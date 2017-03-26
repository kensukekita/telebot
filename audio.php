<?php

use Telegram\Bot\Api;

$telegram = new Api('376072170:AAE2_y5EpVRCwc8Xbe-GHJLNP9yUdP2Zzto');
$chatid=$_POST['id'];
$audio=$_POST['msg'];

$response = $telegram->sendAudio([
  'chat_id' => $chatid, 
  'audio' => $audio,
]);

$messageId = $response->getMessageId();
