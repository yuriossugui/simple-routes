<?php

namespace app\models;

use PDO;

class ProdutoModel {
  private $db;

  public static function getConexao() {
    try {
      $db = new PDO('mysql:host=localhost;dbname=yuridb', 'root', '', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
      ]);
      return $db;
    } catch (\PDOException $e) {
      echo "Erro ao conectar com o banco de dados: " . $e->getMessage();
      return null;
    }
  }

  public function selecionarTodos() {
    if(!$this->db){
      $this->db = self::getConexao();
    }

    if($this->db){
      $stmt = $this->db->query('SELECT * FROM produto');
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }else{
      return null;
    }
  }

  private $id;
  private $codigo;
  private $variacao;
  private $descricao;
  private $tipo;

  // Allow optional parameters in the constructor for flexibility
  public function __construct($id = null, $codigo = null, $variacao = null, $descricao = null, $tipo = null) {
    $this->id = $id;
    $this->codigo = $codigo;
    $this->variacao = $variacao;
    $this->descricao = $descricao;
    $this->tipo = $tipo;
  }

  public function getId() {
    return $this->id;
  }

  public function getCodigo() {
    return $this->codigo;
  }

  public function getVariacao() {
    return $this->variacao;
  }

  public function getDescricao() {
    return $this->descricao;
  }

  public function getTipo() {
    return $this->tipo;
  }

  //set
  public function setId($id) {
    return $this->id = $id;
  }

  public function setCodigo($codigo) {
    return $this->codigo = $codigo;
  }

  public function setVariacao($variacao) {
    return $this->variacao = $variacao;
  }

  public function setDescricao($descricao) {
    return $this->descricao = $descricao;
  }

  public function setTipo($tipo) {
    return $this->tipo = $tipo;
  }
}
