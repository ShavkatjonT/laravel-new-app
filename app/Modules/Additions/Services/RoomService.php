<?php

namespace App\Modules\Additions\Services;

use App\Modules\Additions\Interfaces\RoomRepositoryInterface;
// use Monolog\Handler\TelegramBotHandler;
class RoomService
{

    public function __construct(private RoomRepositoryInterface $roomRepository) {}
    public function getAllRooms()
    {

        return $this->roomRepository->getAllRooms();
    }
}
