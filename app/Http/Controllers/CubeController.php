<?php

namespace App\Http\Controllers;

use App\Http\Resources\CubeResource;
use Illuminate\Http\Request;
use App\Services\CubeService;
use Illuminate\Http\JsonResponse;

class CubeController extends Controller
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
     * @return JsonResponse
     */
    public function getNewCube(): JsonResponse
    {
        $cube = $this->cubeService->getMatrix();
        return response()->json(CubeResource::make($cube), 200);
    }

    /**
     * @return JsonResponse
     */
    public function getCurrentCube(): JsonResponse
    {
        $cube = $this->cubeService->getCube();
        return response()->json(CubeResource::make($cube), 200);
    }
}
