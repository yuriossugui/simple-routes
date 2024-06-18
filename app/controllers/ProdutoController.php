<?php
namespace app\controllers;

use app\controllers\Controller;
use app\models\ProdutoModel;

class ProdutoController extends Controller {
    public function index() {
        $produtoModel = new ProdutoModel();
        $produtos = $produtoModel->selecionarTodos();

        //passa os dados para a view
        Controller::view("/produto", ['produtos' => $produtos]);
    }
}
