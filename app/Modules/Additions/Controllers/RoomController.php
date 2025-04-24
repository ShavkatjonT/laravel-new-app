<?php

namespace App\Modules\Additions\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Additions\Services\RoomService;

class RoomController extends Controller
{
    public function __construct(private RoomService $roomService) {}

    public function index()
    {
        $rooms = $this->roomService->getAllRooms();
        return $rooms;
    }
    public function store()
    {
        return 'data';
    }
}
