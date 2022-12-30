function Calcular() {
    const CustoFixo = document.querySelector('#inputCusto').value;
    const CustoProduto = document.querySelector('#inputValor').value;
    const Margem = document.querySelector('#inputMargem').value
    const Quantidade = document.querySelector('#inputQuantidade').value

    const ResultadoCusto = document.querySelector('#ResultadoCusto');
    const ResultadoQuantidade = document.querySelector('#ResultadoQuantidade');
    const ResultadoLucro = document.querySelector('#ResultadoLucro');

    ResultadoCusto.innerHTML = 'R$' + CustoFixo;
    ResultadoQuantidade.innerHTML = Quantidade + ' Unidade(s)';

    var CalcularMargem = Number(CustoProduto) + Number(Margem);
    var CalcularQuantidade = CalcularMargem * Number(Quantidade);
    var Lucro = CalcularQuantidade - Number(CustoFixo);

    ResultadoLucro.innerHTML = 'R$ ' + Lucro.toFixed(2);



    //console.log(CustoFixo, CustoProduto, Margem, Quantidade)
}