<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\retangulo;
use App\Models\triangulo;

class poligonoController extends Controller
{
    public function status(){
        return['status' => 'ok'];
    }

    public function retangulo(Request $requestretangulo){

        try{
            $retangulo = new retangulo();

            $retangulo->base = $requestretangulo->base;
            $retangulo->altura = $requestretangulo->altura; 
            $retangulo->area = $requestretangulo->base * $requestretangulo->altura;

            $retangulo->save();

            return['area'=> $retangulo->area];
        } catch(Exception $erro){
            return ['retorno'=>'erro','details'=>$erro];


        }


    }

    public function triangulo(Request $requestriangulo){

        try{
            $triangulo = new triangulo();

            $triangulo->base = $requestriangulo->base;
            $triangulo->altura = $requestriangulo->altura; 
            $triangulo->area =  $requestriangulo->base * $requestriangulo->altura/2;

            $triangulo->save();

            return['area'=>$triangulo->area];
        } catch(Exception $erro){
            return ['retorno'=>'erro','details'=>$erro];


        }


    }

    public function area(Request $requestarea){

        try{
            
            $retangulo = retangulo::where('id', '<', 100) -> sum('area');
            $triangulo = triangulo::where('id', '<', 100) -> sum('area');

            return ['total'=> $retangulo + $triangulo ];
        } catch(Exception $erro){
            return ['retorno'=>'erro','details'=>$erro];


        }


    }
}
