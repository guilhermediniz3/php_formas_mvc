<?php


namespace app\controllers;
use app\models\Area;

use app\core\Controller;

class FormasController extends  Controller
{
    function index()
    {
        $dados["view"] = "formas";
        $this->load("template", $dados);
    }

    public function calcula()
    {
        $objArea = new Area();
        $area = null;
        $figura = $_POST["figura"];
        $base = $_POST["base"];
        $altura = $_POST["altura"];
        $raio = $_POST["raio"];


        if ($figura == "quadrado") {
            $area = $objArea->quadrado($base);
            $dados["area"] = $area;
            $dados["view"] = "formas";
            $this->load ("template", $dados);
        }
        if ($figura == "retangulo") {
            $area = $objArea->retangulo($base, $altura);
            $dados["area"] = $area;
            $dados["view"] = "formas";
            $this->load ("template", $dados);
        }

        if ($figura == "circulo") {
            $area = $objArea->retangulo($base, $altura);
            $dados["area"] = $area;
            $dados["view"] = "formas";
            $this->load ("template", $dados);
        }

        if ($figura == "triangulo") {
            $area = $objArea->retangulo($base, $altura);
            $dados["area"] = $area;
            $dados["view"] = "formas";
            $this->load ("template", $dados);
        }


        else {
            $area = 0;

        }

    }
}