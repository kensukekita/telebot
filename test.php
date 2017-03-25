<?php
require 'vendor/autoload.php';
use Telegram\Bot\Api;

$telegram = new Api('376072170:AAE2_y5EpVRCwc8Xbe-GHJLNP9yUdP2Zzto');

$response = $telegram->sendAudio([
  'chat_id' => '237836796', 
  'audio' => 'test.mp3',
]);

$messageId = $response->getMessageId();