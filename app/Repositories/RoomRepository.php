<?php

namespace App\Repositories;

use App\Interfaces\RoomRepositoryInterface;
use App\Models\Room;

class RoomRepository implements RoomRepositoryInterface
{
    public function getAllRooms()
    {
        return Room::all();
    }

    public function getRoomById($id)
    {
        return Room::findOrFail($id);
    }

    public function createRoom(array $data)
    {
        return Room::create($data);
    }

    public function updateRoom($id, array $data)
    {
        $room = Room::findOrFail($id);
        $room->update($data);
        return $room;
    }

    public function deleteRoom($id)
    {
        $room = Room::findOrFail($id);
        $room->delete();
        return true;
    }

    public function changeStatus($id, $status)
    {
        $room = Room::findOrFail($id);
        $room->status = $status;
        $room->save();
        return $room;
    }
}
