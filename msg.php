<?php
require 'vendor/autoload.php';
use Telegram\Bot\Api;

$telegram = new Api('376072170:AAE2_y5EpVRCwc8Xbe-GHJLNP9yUdP2Zzto');

$chatid=$_POST['id'];
$text=$_POST['msg'];

$response = $telegram->sendMessage([
  'chat_id' => $chatid, 
  'text' => $text
]);



$messageId = $response->getMessageId();
?>
<form method="POST" action="msg.php">
<input name="id" id="id" type="text" value="<? echo $chatid ?>" />
<input name="msg" id="msg" type="text" plceholder="Mensaje" />
<input type="submit" value="enviar">
</form>
