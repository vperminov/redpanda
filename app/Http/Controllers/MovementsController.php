<?php

namespace App\Http\Controllers;

use App\Services\CubeService;
use App\Http\Requests\MovementRequest;
use App\Http\Resources\CubeResource;
use Illuminate\Http\JsonResponse;

class MovementsController extends Controller
{
    /**
     * @var CubeService
     */
    private $cubeService;

    /**
     * @param CubeService $cubeService
     */
    public function __construct(CubeService $cubeService)
    {
        $this->cubeService = $cubeService;
    }

    /**
     * @param MovementRequest $request
     * @return JsonResponse
     */
    public function movement(MovementRequest $request): JsonResponse
    {
        $direction = $request->input('direction', 'direct');
        $movement = $request->input('movement', 'U');
        $cube = $this->cubeService->makeMovement($movement, $direction);
        return response()->json(CubeResource::make($cube), 200);
    }

}
