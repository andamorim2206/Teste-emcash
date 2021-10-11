<?php

namespace Tests\Feature;
use App\Http\Controllers\Api\poligonoController;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Request;
use Tests\TestCase;

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

    public function test_area()
    {
        $testtriangulo = new  poligonoController();

        $result = $testtriangulo->requestriangulo();

        $this -> $this->assertCount(9, $result);


    }
}
