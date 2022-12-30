<?php


class Conect
{
    private $database = 'mysql:host=127.0.0.1; dbname=php';
    private $user = 'root';
    private $senha = '3205741';

    public function Conctar()
    {
        try {
            $pdo = new PDO($this->database, $this->user, $this->senha);
            return $pdo;
        } catch (PDOException $e) {
            echo 'ERRO!!' . $e->getMessage();
            header('location: ../views/PaginaServidorERRO.php');
        }
    }
}
