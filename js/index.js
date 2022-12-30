function ProjetarIndex() {
    window.location.href = "./private/views/Projetar.php";
}
function CadastrarIndex() {
    window.location.href = "./private/views/Cadastro.php";
}
function ListaIndex() {
    window.location.href = "./private/views/ListaProdutos.php";
}

//=====================================================================

function Projetar() {
    window.location.href = "Projetar.php";
}
function Cadastrar() {
    window.location.href = "Cadastro.php";
}
function Lista() {
    window.location.href = "ListaProdutos.php";
}
//=====================================================================

function Deletar(id) {
    window.location.href = '../views/ListaProdutos.php?acao=DELETAR&id=' + id;
}