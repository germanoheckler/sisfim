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
                <h1 class="display-3">° Atrasados Totais °</h1>
            </div>
            <form action="{{route('cobranca.atrasados')}}" method="post">
                @csrf
                    <div class="form-group text-center col-12">
                        <div class="form-group col-12 col-md-6 my-1 d-block mx-auto m-1">
                            <h4><label for="data" class="link-dark link-underline-opacity-0">Mês da Cobrança</label></h4>
                            <input type="month" class="rounded p-1 border-light-subtle" name="meseano" id="meseano" placeholder="">
                            <input type="submit" value="Buscar" class="ms-2 btn btn-primary">
                        </div>
                        <div class="row align-items-start justify-content-center mx-auto text-center col-12 col-md-6">
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                  <tr>
                                    <th scope="col" class="bg-danger-subtle">Nr</th>
                                    <th scope="col" class="bg-danger-subtle">Nome</th>
                                    <th scope="col" class="bg-danger-subtle">Parcela(s)</th>
                                    <th scope="col" class="bg-danger-subtle">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row" class="bg-dark text-white"><i class="bi bi-coin"></i></th>
                                        <td class="bg-dark text-white"><b>Total atrasado</b></td>
                                        <td class="bg-dark text-white"><b>270,00</b></td>
                                        <td class="bg-dark text-white"><i class="bi bi-info-circle"></i></td>
                                      </tr>
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>Alan de Souza Pereira</td>
                                    <td>90,00</td>
                                    <td><a href="{{route('cobranca.recebimento')}}   "><i class="bi bi-check-square-fill text-danger"></i></a></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">2</th>
                                    <td>Carlos Augusto Ferreira de Lima</td>
                                    <td>100,00</td>
                                    <td><a href="{{route('cobranca.recebimento')}}   "><i class="bi bi-check-square-fill text-danger"></i></a></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">3</th>
                                    <td>Diego da Silva Fernandes</td>
                                    <td>80,00</td>
                                    <td><a href="{{route('cobranca.recebimento')}}   "><i class="bi bi-check-square-fill text-danger"></i></a></td>
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