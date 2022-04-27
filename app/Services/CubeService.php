<?php

namespace App\Services;

use App\Models\Cube;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Helpers\CubeMapper;

class CubeService
{
    /**
     * @var CubeMapper
     */
    private $mapper;

    /**
     * @var array
     */
    private array $cubeMatrix = [
        'ubl' => 'white',
        'ub' => 'white',
        'ubr' => 'white',
        'ul' => 'white',
        'u' => 'white',
        'ur' => 'white',
        'ufl' => 'white',
        'uf' => 'white',
        'ufr' => 'white',
        'lub' => 'orange',
        'lu' => 'orange',
        'luf' => 'orange',
        'lb' => 'orange',
        'l' => 'orange',
        'lf' => 'orange',
        'ldb' => 'orange',
        'ld' => 'orange',
        'ldf' => 'orange',
        'ful' => 'green',
        'fu' => 'green',
        'fur' => 'green',
        'fl' => 'green',
        'f' => 'green',
        'fr' => 'green',
        'fdl' => 'green',
        'fd' => 'green',
        'fdr' => 'green',
        'ruf' => 'red',
        'ru' => 'red',
        'rub' => 'red',
        'rf' => 'red',
        'r' => 'red',
        'rb' => 'red',
        'rdf' => 'red',
        'rd' => 'red',
        'rdb' => 'red',
        'bur' => 'blue',
        'bu' => 'blue',
        'bul' => 'blue',
        'br' => 'blue',
        'b' => 'blue',
        'bl' => 'blue',
        'bdr' => 'blue',
        'bd' => 'blue',
        'bdl' => 'blue',
        'dfl' => 'yellow',
        'df' => 'yellow',
        'dfr' => 'yellow',
        'dl' => 'yellow',
        'd' => 'yellow',
        'dr' => 'yellow',
        'dbl' => 'yellow',
        'db' => 'yellow',
        'dbr' => 'yellow',
    ];

    public function __construct(CubeMapper $mapper)
    {
        $this->mapper = $mapper;
    }


    /**
     * @return array
     */
    public function getMatrix(): array
    {
        return $this->cubeMatrix;
    }

    /**
     * @param array $cubeMatrix
     * @return void
     */
    public function storeCube(array $cubeMatrix): void
    {
        try {
            $obj = Cube::findOrFail(1);
            $obj->cube = $cubeMatrix;
            $obj->save();
        } catch (ModelNotFoundException) {
            Cube::create(['cube' => $cubeMatrix]);
        }
    }

    /**
     * @return array
     */
    public function getCube(): array
    {
        try {
            $obj = Cube::findOrFail(1);
            $cube = $obj->cube;
        } catch (ModelNotFoundException) {
            $cube = $this->getMatrix();
        }

        return $cube;
    }

    /**
     * @param string $movement
     * @param string $direction
     * @return array
     */
    public function makeMovement(string $movement, string $direction): array
    {

        $movementMapper = $this->mapper->getMapper($movement, $direction);

        $cube = $this->getCube();
        $cubeValues = $cube;
        foreach ($movementMapper as $key => $value) {
            $cube[$key] = $cubeValues[$value];
        }
        $this->storeCube($cube);
        return $cube;
    }

}
