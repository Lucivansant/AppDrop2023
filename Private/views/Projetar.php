<?php
$acao = "RECUPERAR_DESPESA";
require_once '../RequirePrivate.php';

?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dropshipping</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chivo+Mono:wght@300&display=swap" rel="stylesheet">

    <link href="../../css/index.css" rel="stylesheet">
</head>

<body>
    <header style="font-family: 'Chivo Mono', monospace;">
        <div class="container" id="navbar">
            <h6 id="text-menu"><i class="fa-solid fa-money-bill-wave"></i> Dropshipping <i class="fa-solid fa-money-bill-wave"></i></h6>
        </div>
    </header>


    <section id="seg-geral" style="font-family: 'Chivo Mono', monospace;">
        <div class="container" id="div-sec-geral">
            <div id="div-sec">
                <i class="fa-solid fa-chart-simple"></i> Projeção de LUCRO/VENDA.
                <hr>
            </div>
            <div class="row">
                <div class="col-12">

                    <div class="row">
                        <div class="col-md-3">
                            <input value="<?php echo $SomaDespesa->valor_despesa ?>" class="form-control" placeholder="Custo Fixo" id="inputCusto">
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" placeholder="Custo do Produto" id="inputValor">
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" placeholder="Valor da Margem" id="inputMargem">
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" placeholder="Quantidade de Vendas" id="inputQuantidade">
                        </div>
                    </div>
                    <button onclick="Calcular()" class="col-12 btn btn-dark">Calcular</button>
                    <br><br>


                </div>
                <div class="col-md-4">
                    <div id="painel">
                        <p id="text-div">Custo</p>
                        <div>
                            <hr>
                            <p id="ResultadoCusto">R$ Sem dados...</p>

                        </div>
                    </div>


                </div>
                <div class="col-md-4">
                    <div id="painel">
                        <p id="text-div">Quantidade de vendas</p>
                        <div>
                            <hr>
                            <p id="ResultadoQuantidade">Sem dados...</p>

                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div id="painel">
                        <p id="text-div">Lucro/Prejuízo</p>
                        <div>
                            <hr>
                            <p id="ResultadoLucro">R$ Sem dados...</p>

                        </div>
                    </div>

                </div>
            </div>


        </div>
        <nav class="navbar fixed-bottom bg-body-tertiary">
            <div class="container-fluid">
                <div id="menu-bottom">
                    <a href="Projetar.php"><i class="fa-solid fa-gauge-high" id="icons"></i></a>

                    <a href="Cadastro.php"><i class="fa-regular fa-pen-to-square" id="icons"></i></a>

                    <a href="ListaProdutos.php"><i class="fa-solid fa-list" id="icons"></i></a>

                    <a href="CustosGerais.php"><i class="fa-solid fa-chart-line" id="icons"></i></a>
                </div>
            </div>
        </nav>
    </section>



    <script src="../../js/calcular.js"></script>
    <script src="../../js/index.js"></script>
    <script src="https://kit.fontawesome.com/0a2ff8b21c.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>