<?php

namespace App\Http\Telegram;

use Telegram\Bot\Laravel\Facades\Telegram;

class TelegramBot
{
    public function sendMessage($chat_id, $message){
        Telegram::sendMessage([
            'chat_id' => $chat_id,
            'text' => $message
        ]);
    }
    public function start(){
        Telegram::sendMessage([
            'chat_id' => env('TELEGRAM_CHAT_ID'),
            'text' => 'Hello World'
        ]);
    }
}
