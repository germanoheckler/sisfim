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
    <div class="container-fluid text-black">
        <div class="row align-items-start justify-content-center mx-auto">
            <div class="text-center col-12 p-1 mt-5">
                <h1 class="display-3">° Recebimento °</h1>
            </div>
            <form action="{{route('cobranca.recebimento')}}" method="post">
                @csrf
                    <div class="form-group text-center col-12">
                        <div class="row align-items-start justify-content-center mx-auto text-center col-12 col-md-6">
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                  <tr>
                                    <th scope="col"></th>
                                    <th scope="col"><u>COBRANÇA</u></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">Nome</th>
                                    <td>Alan</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Telefone</th>
                                    <td>67-22222-2222</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Endereço</th>
                                    <td>Rua Marechal Rondon, 402, Bairro Centro, Jardim-MS</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Nr Parcela</th>
                                    <td>1 de 3</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Valor Parc.</th>
                                    <td>80,00</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Resto</th>
                                    <td>240,00</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Produtos</th>
                                    <td>
                                        Qt | Produto<br>
                                        Qt | Produto<br>
                                        Qt | Produto<br>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Adicionar Produtos</th>
                                    <td>
                                        <button class="ms-2 btn btn-primary" type="button">Editar Venda</button>
                                    </td>
                                  </tr>
                                </tbody>
                                  <thead class="thead-dark">
                                    <tr>
                                      <th scope="col"></th>
                                      <th scope="col"><u>RECEBIMENTO</u></th>
                                    </tr>
                                  </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">Forma de Pgto</th>
                                    <td>
                                        <div class="input-group justify-content-center">
                                            <select class="rounded p-1 border-start-dark custom-select" id="inputGroupSelect04">
                                              <option selected>Escolha</option>
                                              <option value="dinheiro">Dinheiro</option>
                                              <option value="cartao">Cartão</option>
                                              <option value="pix">Pix</option>
                                              <option value="perda">Perda</option>
                                            </select>
                                          </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th scope="row"><label for="valorrecebido">Valor Recebido</label></th>
                                    <td>
                                        <div class="form-group col-12 col-md-6 my-1 d-block mx-auto m-1">
                                            <input type="number" format="currency" precision="2" id="valorrecebido" name="valorrecebido" class="form-control" formControlName="valorrecebido" placeholder="Valor recebido" />
                                        </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th scope="row"><label for="desconto">Desconto ou Perda</label></th>
                                    <td>
                                        <div class="form-group col-12 col-md-6 my-1 d-block mx-auto m-1">
                                            <input type="number" format="currency" precision="2" id="desconto" name="desconto" class="form-control" formControlName="desconto" placeholder="Valor do desconto ou perda" />
                                        </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Parcelas Restantes</th>
                                    <td>
                                        <div class="form-group col-12 col-md-6 my-1 d-block mx-auto m-1">
                                            <input type="date" class="rounded p-1 border-light-subtle" name="datacobranca" id="datacobranca">
                                            <input type="number" format="currency" precision="2" id="valorparcela" name="valorparcela" class="form-control" formControlName="valorparcela" placeholder="Valor da Parcela" />
                                            <hr>
                                        </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Reparcelamento</th>
                                    <td>
                                        <button class="ms-2 btn btn-primary" type="button">Adicionar</button>
                                        <button class="ms-2 btn btn-danger" type="button">Remover</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th scope="row"><u>CONFIRMAÇÃO:</u></th>
                                    <td>
                                        <button class="ms-2 btn btn-success" type="button">Salvar Cobrança</button>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                    </div>
            </form>
            <div class="text-center col-12 p-1 mb-5">
                <h6>Criado por Germano Heckler</h6>
            </div>
        </div>
    </div>
</body>
</html>