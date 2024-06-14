<?php

namespace app\models;

class ProdutoModel {
    private $id;
    private $codigo;
    private $variacao;
    private $descricao;
    private $tipo;

    public function __construct($id, $codigo, $variacao, $descricao, $tipo) {
        $this->id = $id;
        $this->codigo = $codigo;
        $this->variacao = $variacao;
        $this->descricao = $descricao;
        $this->tipo = $tipo;
    }

    public function exibir() {
      $lista = ["nome" => "Rodrigo"];
      return $lista;
    }
}