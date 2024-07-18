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
                <h1 class="display-3">° Relatório Mensal °</h1>
            </div>
            <form action="{{route('cobranca.mensal')}}" method="post">
                @csrf
                    <div class="form-group text-center col-12">
                        <div class="form-group col-12 col-md-6 my-1 d-block mx-auto m-1">
                            <h4><label for="month" class="link-dark link-underline-opacity-0">Data do Relatório</label></h4>
                            <input type="month" class="rounded p-1 border-light-subtle" name="meseano" id="meseano" placeholder="">
                            <input type="submit" value="Buscar" class="ms-2 btn btn-primary">
                        </div>
                        <div class="row align-items-start justify-content-center mx-auto text-center col-12 col-md-6">
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                  <tr>
                                    <th scope="col"><u>INDICADORES</u></th>
                                    <th scope="col">Valores</th>
                                    <th scope="col">%</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row" class="bg-dark font-weight-bold text-white bold">Parcelas do mês</th>
                                    <td class="bg-dark text-white bold">R$10.000,00</td>
                                    <td class="bg-dark text-white bold">100%</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Total Recebido</th>
                                    <td class="bg-success-subtle font-weight-bold text-dark">R$4.000,00</td>
                                    <td>40%</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Total a Receber</th>
                                    <td class="bg-primary-subtle font-weight-bold text-dark">R$4.500,00 <a href="{{route('cobranca.diaria')}}"><i class="bi bi-check-square-fill text-success"></i></a></td>
                                    <td>45%</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Atrasados do mês</th>
                                    <td class="bg-warning-subtle font-weight-bold text-dark">R$1.000,00 <a href="{{route('cobranca.atrasados')}}"><i class="bi bi-check-square-fill text-danger"></i></a></td>
                                    <td>10%</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Total de Prejuízo</th>
                                    <td class="bg-danger-subtle font-weight-bold text-dark">R$500,00</td>
                                    <td>5%</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>

                            <img src="public/assets/images/grafico.jpg" alt="grafico" />
                    </div>
            </form>
            <div class="text-center col-12 p-1 mb-5">
                <h6>Criado por Germano Heckler</h6>
            </div>
        </div>
    </div>
</body>
</html>