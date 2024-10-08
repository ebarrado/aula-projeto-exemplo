<?php
class ProdutoController{
    private PDO $pdo;

    //CONSTRUTOR
    public function __construct(PDO $pdo){
        $this->pdo = $pdo;

    }
}