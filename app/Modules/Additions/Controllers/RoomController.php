<?php

namespace App\Modules\Additions\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Additions\Services\RoomService;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function __construct(private RoomService $roomService) {}

    public function index()
    {
        $rooms = $this->roomService->getAllRooms();
        return $rooms;
    }
    public function store(Request $request)
    {
        $data = collect($request->all());

        $filteredData = $this->filterContractData($data);
        

        return $filteredData;
    }

    private function filterContractData($data)
    {
        $data = $data->filter(function ($item) {
            $passportSeriesValid = isset($item['passport_series']) && preg_match('/^[A-Z]{2}$/', $item['passport_series']);
            $passportNumberValid = isset($item['passport_number']) && preg_match('/^\d{7}$/', $item['passport_number']);
            $tinValid = isset($item['tin']) && preg_match('/^\d{14}$/', $item['tin']);
            return $passportSeriesValid && $passportNumberValid && $tinValid;
        })->values();

        return $data;
    }
}
