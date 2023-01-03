<?php

require_once 'ConfigConect/Conect.php';
require_once 'model/Produto.php';
require_once 'model/Despesa.php';
require_once 'controller/Controller.php';


$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

// Método atualizado...
switch ($acao) {
    case "CADASTRO":
        $conexao = new Conect();

        $ProdutoModel = new Produto();
        $ProdutoModel->__set('nome', $_POST['Nome']);
        $ProdutoModel->__set('valor', $_POST['Valor']);
        $ProdutoModel->__set('categoria', $_POST['Categoria']);
        $ProdutoModel->__set('descri', $_POST['descri']);
        $ProdutoModel->__set('link', $_POST['Link']);

        $controller = new Cadastrar($conexao, $ProdutoModel);
        $controller->Cadastrar();
        break;

    case "RECUPERAR":
        $conexao = new Conect();
        $ProdutoModel = new Produto();

        $controller = new Recuperar($conexao);
        $Produtos = $controller->Recuperar();
        break;
    case "DELETAR":
        $conexao = new Conect();

        $ProdutoModel = new Produto();
        $ProdutoModel->__set('id', $_GET['id']);

        $controller = new Deletar($conexao, $ProdutoModel);
        $controller->deletar();
        break;
    case "CADASTRO_DESPESA":
        $conexao = new Conect();
        $DespesaModel = new Despesa();
        $DespesaModel->__set('nome', $_POST['nome']);
        $DespesaModel->__set('valor', $_POST['valor']);
        $DespesaModel->__set('tipo', $_POST['select']);


        $ControllerDespesa = new CadastroDespesa($conexao, $DespesaModel);
        $ControllerDespesa->CadastrarDespesa();


        break;
    case "RECUPERAR_DESPESA":
        $conexao = new Conect();
        $DespesaModel = new Despesa();


        $recuperarDespesa = new RecuperarDespesas($conexao, $DespesaModel);
        $Despesa = $recuperarDespesa->RecuperarDespesa();

        $SomaDespesa = $recuperarDespesa->SomarDespesas();
        break;
    case "DELETAR_DESPESA":
        $conexao = new Conect();
        $DespesaModel = new Despesa();
        $DespesaModel->__set('id', $_GET['id']);


        $DeleteDespesa = new DeletarDespesa($conexao, $DespesaModel);
        $DeleteDespesa->DeletarDespesa();

        break;
}

// Método antigo...

/*
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
*/