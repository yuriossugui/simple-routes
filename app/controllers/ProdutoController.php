<?php
namespace app\controllers;

use app\controllers\Controller;
use app\models\ProdutoModel;

class ProdutoController{
    public function index(){
        $lista = new ProdutoModel("","","","","");
        $result = $lista->exibir();
        Controller::view("produto", ["lista" => $result]);
    }
}