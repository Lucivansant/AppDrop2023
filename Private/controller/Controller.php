<?php
// Método atualizado...

// Cadastreo de produto
class Cadastrar
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
}

// Recuperando produto
class Recuperar
{
    private $conexao;

    public function __construct(Conect $conexao)
    {
        $this->conexao = $conexao->Conctar();
    }

    public function Recuperar()
    {
        $query =  "SELECT * FROM produtos ORDER BY id DESC";
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}

// Deletando produto
class Deletar
{
    private $conexao;
    private $produto;

    public function __construct(Conect $conexao, Produto $produto)
    {
        $this->conexao = $conexao->Conctar();
        $this->produto = $produto;
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

class CadastroDespesa
{
    private $conexao;
    private $despesa;

    public function __construct(Conect $conexao, Despesa $despesa)
    {
        $this->conexao = $conexao->Conctar();
        $this->despesa = $despesa;
    }

    public function CadastrarDespesa()
    {
        $query = "INSERT INTO drop_despesas(nome, valor, tipo) VALUES (:nome, :valor, :tipo)";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':nome', $this->despesa->__get('nome'));
        $stmt->bindValue(':valor', $this->despesa->__get('valor'));
        $stmt->bindValue(':tipo', $this->despesa->__get('tipo'));
        $stmt->execute();

        header('location: ./views/CustosGerais.php');
    }
}

class RecuperarDespesas
{
    private $conexao;

    public function __construct(Conect $conexao)
    {
        $this->conexao = $conexao->Conctar();
    }

    public function RecuperarDespesa()
    {
        $query = "SELECT * FROM drop_despesas ORDER BY id DESC";
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function SomarDespesas()
    {
        $query = "SELECT SUM(valor) AS valor_despesa FROM drop_despesas";
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ);
    }
}

class DeletarDespesa
{
    private $conexao;
    private $despesa;
    public function __construct(Conect $conexao, Despesa $despesa)
    {
        $this->conexao = $conexao->Conctar();
        $this->despesa = $despesa;
    }

    public function DeletarDespesa()
    {
        $query = "DELETE FROM drop_despesas WHERE id = :id";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue('id', $this->despesa->__get('id'));
        $stmt->execute();

        header('location: ../views/CustosGerais.php');
    }
}
// ===================================================================================



// Método antigo...
/*
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
*/
