<?php

class controller
{
    private $conexao;
    private $produto;

    public function __construct(Conect $conexao, Produto $produto)
    {
        $this->conexao = $conexao->Conctar();
        $this->produto = $produto;
    }

    public function Cadastrar()
    {
        $query = "INSERT INTO produtos(nome, valor, categoria, descri, link) VALUES (:nome, :valor, :categoria, :descri, :link)";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':nome', $this->produto->__get('nome'));
        $stmt->bindValue(':valor', $this->produto->__get('valor'));
        $stmt->bindValue(':categoria', $this->produto->__get('categoria'));
        $stmt->bindValue(':descri', $this->produto->__get('descri'));
        $stmt->bindValue(':link', $this->produto->__get('link'));
        $stmt->execute();

        header('location: ./views/Cadastro.php?Cadastro=OK');
    }

    public function Recuperar()
    {
        $query =  "SELECT * FROM produtos ORDER BY id DESC";
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function deletar()
    {
        $query = "DELETE FROM produtos WHERE id = :id";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':id', $this->produto->__get('id'));

        $stmt->execute();

        header('location: ../views/ListaProdutos.php');
    }
}
