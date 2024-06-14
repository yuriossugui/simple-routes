<?php
namespace app\database;

use PDO;

class conexao
{
    private $bd;

    public function __construct($bd)
    {
        $this->bd = new PDO('mysql:host=localhost;dbname=yuridb', 'root', '', [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
    }

    public function inserirProduto($nome, $descricao, $preco) {
        $sql = "INSERT INTO produtos (nome, descricao, preco) VALUES (:nome, :descricao, :preco)";

            $stmt = $this->bd->prepare($sql);
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':descricao', $descricao);
            $stmt->bindParam(':preco', $preco);
            $stmt->execute();
            return true; 
    }

}

