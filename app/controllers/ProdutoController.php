<?php
namespace app\controllers;

use app\controllers\Controller;
use app\models\ProdutoModel;

use PDO;

class ProdutoController extends Controller {
    
    public function index() {
        $produtoModel = new ProdutoModel();
        $produtos = $produtoModel->selecionarTodos();

        //passa os dados para a view
        Controller::view("/produto", ['produtos' => $produtos]);
    }

    public function cadastrarProduto() {
        Controller::view("/cadastrarProduto");
    }

    public function store($params){
        if (!(is_object($params) && isset($params->codigo, $params->variacao, $params->descricao, $params->tipo))) {
            $msg = 'PREENCHA TODOS OS CAMPOS';
            Controller::view("cadastrarProduto", ["msg" => $msg]);
            return;
        }
    
        try {
            $db = new PDO('mysql:host=localhost;dbname=yuridb', 'root', '', [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
    
            $stmt = $db->prepare("INSERT INTO produto (codigo, variacao, descricao, tipo) VALUES (:codigo, :variacao, :descricao, :tipo)");
            $stmt->bindParam(':codigo', $params->codigo);
            $stmt->bindParam(':variacao', $params->variacao);
            $stmt->bindParam(':descricao', $params->descricao);
            $stmt->bindParam(':tipo', $params->tipo);
            $stmt->execute();
    
            $msg = "PRODUTO CADASTRADO COM SUCESSO";
        } catch (\PDOException $e) {
            $msg = "ERRO AO CADASTRAR PRODUTO: " . $e->getMessage();
        } finally {
            $db = null;
        }
    
        Controller::view("cadastrarProduto", ["msg" => $msg]);
    }
    

    public function editar($params){

    }
}
