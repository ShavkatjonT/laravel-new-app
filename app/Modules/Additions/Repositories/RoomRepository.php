<?php

namespace App\Modules\Additions\Repositories;

use App\Modules\Additions\Interfaces\RoomRepositoryInterface;
use App\Modules\Additions\Models\Room;

class RoomRepository implements RoomRepositoryInterface
{
    public function getAllRooms()
    {
        return Room::all();
    }
}
