<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SisFIM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>
</head>
<body class="bg-primary bg-opacity-25">
    <div class="text-center col-12 pt-1 fixed-top pb-1 bg-white border-top border-bottom border-primary">
        <a href="javascript:history.back()" class="btn btn-black pb-1 pt-1 ps-2 pe-2"><i class="bi bi-arrow-left h6"></i></a>
        <a href="{{route('inicio')}}" class="btn btn-black pb-1 pt-1 ps-2 pe-2"><i class="bi bi-grid-fill h6"></i></a>
        <a href="{{ route('cobranca.menu')}}" class="btn btn-black pb-1 pt-1 ps-2 pe-2"><i class="bi bi-calendar2-range-fill h6"></i></a>
        <a href="{{ route('venda.menu')}}" class="btn btn-black pb-1 pt-1 ps-2 pe-2"><i class="bi bi-cart-fill h6"></i></a>
        <a href="{{ route('cliente.menu')}}" class="btn btn-black pb-1 pt-1 ps-2 pe-2"><i class="bi bi-people-fill h6"></i></a>
        <a href="{{ route('produto.menu')}}" class="btn btn-black pb-1 pt-1 ps-2 pe-2"><i class="bi bi-house-fill h6"></i></a>
        <a href="{{ route('despesa.menu')}}" class="btn btn-black pb-1 pt-1 ps-2 pe-2"><i class="bi bi-coin h6"></i></a>
        <a href="{{ route('relatorio.menu')}}" class="btn btn-black pb-1 pt-1 ps-2 pe-2"><i class="bi bi-graph-up-arrow h6"></i></a>
</div>
<div class="mb-4">
</div>
    <div class="container-fluid text-black">
        <div class="row align-items-start justify-content-center mx-auto">
            <div class="text-center col-12 p-1 mt-5">
                <h1 class="display-3">° Nova Venda °</h1>
            </div>
            <form action="{{route('venda.menu')}}" method="get">
            @csrf
            <div class="form-group text-center col-12">
                <div class="row align-items-start justify-content-center mx-auto text-center col-12 col-md-6">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col" colspan="2"><u>VENDA</u></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th colspan="2">
                                Cliente:<br>
                                <select class="h6 rounded p-1 border-start-dark custom-select" id="cliente" name="cliente">
                                <option selected>Escolha</option>
                                <option value="Alan" data-status="alan">Alan de Souza Ferreira</option>
                                <option value="Joao" data-cidade="joao">João da Silva Chaves</option>
                                <option value="Marcio" data-cidade="marcio">Marcio dos Santos Pereira</option>
                                </select>
                            </th>
                          </tr>
                          <tr>
                            <th scope="row">Produto</th>
                            <td>
                                            <select class="h6 rounded p-1 border-start-dark custom-select" id="produto" name="produto">
                                            <option selected>Escolha</option>
                                            <option value="Cadeira" data-status="cadeira">Cadeira</option>
                                            <option value="Panela" data-cidade="panela">Panela</option>
                                            <option value="Rede" data-cidade="rede">Rede</option>
                                            </select>
                                            <input type="text" class="h6 col-4 col-md-2 rounded p-1 border-light-subtle" name="quantidade" id="quantidade" placeholder="Qtd">
                                            <b class="text-success">R$0,00</b>
                                    <br>
                                            <select class="h6 rounded p-1 border-start-dark custom-select" id="produto" name="produto">
                                            <option selected>Escolha</option>
                                            <option value="Cadeira" data-status="cadeira">Cadeira</option>
                                            <option value="Panela" data-cidade="panela">Panela</option>
                                            <option value="Rede" data-cidade="rede">Rede</option>
                                            </select>
                                            <input type="text" class="h6 col-4 col-md-2 rounded p-1 border-light-subtle" name="quantidade" id="quantidade" placeholder="Qtd">
                                            <b class="text-success">R$0,00</b>
                                    <br>
                                            <select class="h6 rounded p-1 border-start-dark custom-select" id="produto" name="produto">
                                            <option selected>Escolha</option>
                                            <option value="Cadeira" data-status="cadeira">Cadeira</option>
                                            <option value="Panela" data-cidade="panela">Panela</option>
                                            <option value="Rede" data-cidade="rede">Rede</option>
                                            </select>
                                            <input type="text" class="h6 col-4 col-md-2 rounded p-1 border-light-subtle" name="quantidade" id="quantidade" placeholder="Qtd">
                                            <b class="text-success">R$0,00</b>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">Total a Pagar</th>
                            <td><b class="text-success">R$0,00</b></td>
                          </tr>
                          <tr>
                            <th scope="row">Desconto</th>
                            <td><input type="text" class="h6 col-6 col-md-3 rounded p-1 border-light-subtle" name="desconto" id="desconto"  value="0.00"></td>
                          </tr>
                          <tr>
                            <th scope="row">Forma de Pgto</th>
                            <td>
                                <div class="input-group justify-content-center">
                                    <select class="h6 rounded p-1 border-start-dark custom-select" id="inputGroupSelect04">
                                      <option selected>Escolha</option>
                                      <option value="dinheiro">Dinheiro</option>
                                      <option value="cartao">Cartão</option>
                                      <option value="pix">Pix</option>
                                    </select>
                                </div>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">Quantidade de Parcelas</th>
                            <td>
                                <div class="input-group justify-content-center">
                                    <select class="h6 rounded p-1 border-start-dark custom-select" id="pagamento" name="pagamento">
                                    <option selected>Escolha</option>
                                    <option value="AVista" data-status="avista">À vista</option>
                                    <option value="1" data-cidade="1">1</option>
                                    <option value="2" data-cidade="2">2</option>
                                    <option value="3" data-cidade="3">3</option>
                                    <option value="4" data-cidade="4">4</option>
                                    <option value="5" data-cidade="5">5</option>
                                    <option value="6" data-cidade="6">6</option>
                                    <option value="7" data-cidade="7">7</option>
                                    <option value="8" data-cidade="8">8</option>
                                    <option value="9" data-cidade="9">9</option>
                                    <option value="10" data-cidade="10">10</option>
                                    <option value="11" data-cidade="11">11</option>
                                    <option value="12" data-cidade="12">12</option>
                                    </select>
                                </div>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">Valor da Parcela</th>
                            <td><b class="text-success">R$0,00</b></td>
                          </tr>
                          <tr>
                            <th scope="row">Data da 1ª Parc.</th>
                            <td>
                                <input type="date" class="h6 col-9 col-md-4 rounded p-1 border-light-subtle" name="data" id="data" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}">
                            </td>
                          </tr>
                          <tr>
                            <th scope="row"><u>CONFIRMAÇÃO:</u></th>
                            <td>
                                <a href="javascript:history.back()"><button class="h6 ps-1 pe-1 pt-0 pb-0 ms-2 btn btn-success" type="button">Cadastrar Venda</button></a>
                            </td>
                          </tr>
                        </tbody>
                    </table>
                </div>
                </div>
            </form>
            <div class="mt-6">
                <br>
            </div>
            <div class="mt-6">
                <br>
            </div>
            <div class="text-center col-12 pt-0 fixed-bottom pb-1 bg-white border-top border-bottom border-primary">
                <h6 class="mt-2 text-black">° SisFIM ° | Criado por Germano Heckler</h6>
            </div>
        </div>
    </div>
</body>
</html>