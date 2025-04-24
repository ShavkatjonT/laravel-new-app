<?php

namespace App\Modules\Additions\Room\Room\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Additions\Requests\CreateRoomRequest;
use App\Modules\Additions\Requests\UpdateRoomRequest;
use App\Modules\Additions\Room\Room\Http\Requests\ChangeStatusRequest;
use App\Modules\Additions\Services\RoomService;
use Illuminate\Http\JsonResponse;

class RoomController extends Controller
{
    protected $roomService;

    public function __construct(RoomService $roomService)
    {
        $this->roomService = $roomService;
    }

    public function index(): JsonResponse
    {
        $rooms = $this->roomService->getAllRooms();
        return response()->json($rooms);
    }

    public function store(CreateRoomRequest $request): JsonResponse
    {
        $room = $this->roomService->createRoom($request->validated());
        return response()->json($room, 201);
    }

    public function show($id): JsonResponse
    {
        $room = $this->roomService->getRoomById($id);
        return response()->json($room);
    }

    public function update(UpdateRoomRequest $request, $id): JsonResponse
    {
        $room = $this->roomService->updateRoom($id, $request->validated());
        return response()->json($room);
    }

    public function destroy($id): JsonResponse
    {
        $this->roomService->deleteRoom($id);
        return response()->json(null, 204);
    }

    public function changeStatus(ChangeStatusRequest $request, $id): JsonResponse
    {
        $room = $this->roomService->changeStatus($id, $request->status);
        return response()->json($room);
    }
}
