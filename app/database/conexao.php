<?php
namespace app\database;

use PDO;

class conexao
{
    private $db;

    public function __construct($bd)
    {
        $this->db = new PDO('mysql:host=localhost;dbname=yuridb', 'root', '', [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
    }
}

