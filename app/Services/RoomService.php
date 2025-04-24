<?php

namespace App\Services;

use App\Interfaces\RoomRepositoryInterface;

class RoomService
{
    protected $roomRepository;

    public function __construct(RoomRepositoryInterface $roomRepository)
    {
        $this->roomRepository = $roomRepository;
    }

    public function getAllRooms()
    {
        return $this->roomRepository->getAllRooms();
    }

    public function getRoomById($id)
    {
        return $this->roomRepository->getRoomById($id);
    }

    public function createRoom(array $data)
    {
        return $this->roomRepository->createRoom($data);
    }

    public function updateRoom($id, array $data)
    {
        return $this->roomRepository->updateRoom($id, $data);
    }

    public function deleteRoom($id)
    {
        return $this->roomRepository->deleteRoom($id);
    }

    public function changeStatus($id, $status)
    {
        return $this->roomRepository->changeStatus($id, $status);
    }
}
