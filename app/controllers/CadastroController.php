<?php
namespace app\controllers;

use app\core\Controller;

class CadastroController extends Controller {

   public function index(){
       $dados["view"]= "cadastrar";
    $this->load("template",$dados);
   } 
}
