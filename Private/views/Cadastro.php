<?php

if (isset($_GET['Cadastro']) && $_GET['Cadastro'] == "OK") {
    header("Refresh: 10; url=Cadastro.php");
}

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
                <i class="fa-solid fa-fire"></i> De olho no Produto

                <hr>


                <form method="POST" action="../RequirePrivate.php?acao=CADASTRO">
                    <div class="row">
                        <div class="col-12">

                            <div class="row">
                                <div class="col-md-3">
                                    <input type="text" name="Nome" class="form-control" placeholder="Nome do produto" id="inputCusto" required>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="Valor" class="form-control" placeholder="Valor do Fornecedo(Produto)" id="inputValor" required>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="Categoria" class="form-control" placeholder="Categoria" id="inputMargem" required>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="Link" class="form-control" placeholder="Link da página" id="inputMargem" required>
                                </div>
                                <div class="col-md-12">
                                    <textarea rows="5" name="descri" cols="10" class="form-control" placeholder="Descrição" required></textarea>
                                </div>
                            </div>

                            <?php
                            if (isset($_GET['Cadastro']) && $_GET['Cadastro'] == "OK") {
                            ?>
                                <hr>
                                <p id="text-cadastro">Produto cadastrado com sucesso!!</p>
                            <?php } else { ?>
                                <br><br>
                                <button type="submit" class="col-12 btn btn-dark">Salvar Produto</button>
                            <?php } ?>

                        </div>
                    </div>
                </form>




            </div>



        </div>
        <nav class="navbar fixed-bottom bg-body-tertiary">
            <div class="container-fluid">
                <div id="menu-bottom">
                    <a href="Projetar.php"><i class="fa-solid fa-gauge-high" id="icons"></i></a>

                    <a href="Cadastro.php"><i class="fa-regular fa-pen-to-square" id="icons"></i></a>

                    <a href="ListaProdutos.php"><i class="fa-solid fa-list" id="icons"></i></a>
                </div>
            </div>
        </nav>
    </section>




    <script src="../../js/index.js"></script>
    <script src="https://kit.fontawesome.com/0a2ff8b21c.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>