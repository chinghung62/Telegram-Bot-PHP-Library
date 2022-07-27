<?php

// include Telegram Bot library
include("telegram-bot-1.5.0.php");

$bot_token = "1103799654:AAGk_HkEI8Dz9QiBAtK3PQxQmWTJ7nt9Lts";
$bot_username = "HelloBot";

// create Bot object
$bot = new Bot($bot_token, $bot_username);

// read raw data from the request body
$php_input = file_get_contents("php://input");

// load update from data
$update = $bot->load_update($php_input);

// bot logic: to respond 'Hi!' when user sends 'hello' to the bot
if ($update->message) {
    if ($update->message->text == "hello") {
        $bot->send_message($update->message->chat->id, "Hi!");
    }
}

?>