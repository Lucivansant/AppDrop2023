<?php

require_once 'ConfigConect/Conect.php';
require_once 'model/Produto.php';
require_once 'controller/Controller.php';


$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;



if ($acao == "CADASTRO") {
    $conexao = new Conect();

    $ProdutoModel = new Produto();
    $ProdutoModel->__set('nome', $_POST['Nome']);
    $ProdutoModel->__set('valor', $_POST['Valor']);
    $ProdutoModel->__set('categoria', $_POST['Categoria']);
    $ProdutoModel->__set('descri', $_POST['descri']);
    $ProdutoModel->__set('link', $_POST['Link']);

    $controller = new controller($conexao, $ProdutoModel);
    $controller->Cadastrar();
}

if ($acao == "RECUPERAR") {

    $conexao = new Conect();
    $ProdutoModel = new Produto();

    $controller = new controller($conexao, $ProdutoModel);
    $Produtos = $controller->Recuperar();
}

if ($acao == "DELETAR") {
    $conexao = new Conect();

    $ProdutoModel = new Produto();
    $ProdutoModel->__set('id', $_GET['id']);

    $controller = new controller($conexao, $ProdutoModel);
    $controller->deletar();
}
