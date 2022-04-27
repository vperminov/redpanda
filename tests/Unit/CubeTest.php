<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Services\CubeService;
use App\Helpers\CubeMapper;

class CubeTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @var CubeService
     */
    protected CubeService $fixture;

    protected function setUp(): void
    {
        parent::setUp();
        $this->fixture = new CubeService(new CubeMapper);
    }

    protected function tearDown(): void
    {
//        parent::tearDown();
    }

    /**
     * @return void
     */
    public function test_get_matrix(): void
    {
        $this->assertEquals($this->matrixProvider(), $this->fixture->getMatrix());
    }

    /**
     * @return void
     */
    public function test_get_cube(): void
    {
        $this->assertEquals($this->matrixProvider(), $this->fixture->getCube());
    }

    /**
     * @return array
     */
    public function matrixProvider(): array
    {
        return [
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
    }
}
