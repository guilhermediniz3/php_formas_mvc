<?php


namespace app\controllers;


use app\core\Controller;

class ListaController extends Controller
{  function index(){
    $dados['view']= 'lista';
    $this->load('template',$dados);


}

}