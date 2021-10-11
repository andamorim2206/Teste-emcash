<?php

namespace Tests;
use App\Http\Controllers\Api\poligonoController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Contracts\Console\Kernel;

class poligono_test extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_retangulo()
    {
        $testretangulo = new  poligonoController();

        $result = $testretangulo->requestretangulo();

        $this -> $this->assertCount(9, $result);


    }

    public function test_triangulo()
    {
        $testtriangulo = new  poligonoController();

        $result = $testtriangulo->requestriangulo();

        $this -> $this->assertCount(9, $result);


    }

    public function test_soma()
    {
        $testarea = new  poligonoController();

        $result = $testarea->requestarea();

        $this -> $this->assertCount(18, $result);


    }
}
