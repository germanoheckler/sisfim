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
        <div class="row align-items-start justify-content-center mx-auto">
            <div class="text-center col-12 p-1 mt-5">
                <h1 class="display-3">° Lucro e Custo °</h1>
            </div>
            <form action="{{route('relatorio.lucro')}}" method="get">
                @csrf
                    <div class="form-group text-center col-12">
                        <div class="form-group col-12 col-md-6 my-1 d-block mx-auto m-1">
                            <h5><label for="month" class="link-dark link-underline-opacity-0">Data do Relatório</label></h5>
                            <input type="month" class="h6 rounded p-1 border-light-subtle" name="meseano" id="meseano" value="{{ \Carbon\Carbon::now()->format('Y-m') }}">
                            <input type="submit" value="Buscar" class="h6 ps-1 pe-1 pt-0 pb-0 ms-2 btn btn-primary">
                        </div>
                        <div class="mt-1 row align-items-start justify-content-center mx-auto text-center col-12 col-md-6">
                            <table class="table table-striped">
                                <thead class="table align-center text-center border-black">
                                  <tr>
                                    <th class="bg-dark-subtle" scope="col">Indicadores</th>
                                    <th class="bg-dark-subtle" scope="col">Valores</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">Faturamento Total</th>
                                    <th class="font-weight-bold text-dark">R$10.000,00</th>
                                  </tr>
                                  <tr>
                                    <th scope="row">Despesas Totais</th>
                                    <th class="bg-warning-subtle font-weight-bold text-dark">R$3.977,50</th>
                                  </tr>
                                  <tr>
                                    <th scope="row">Lucro/Prejuízo</th>
                                    <th class="bg-success-subtle font-weight-bold text-dark">+R$6.022,50</th>
                                  </tr>
                                  <tr>
                                    <th scope="row">Retorno<br>(Margem Líquida)</th>
                                    <th class="bg-success-subtle font-weight-bold text-dark">60,22%</th>
                                  </tr>
                                  <tr>
                                    <th scope="row">Custo Total</th>
                                    <th class="bg-warning-subtle font-weight-bold text-dark">39,78%</th>
                                  </tr>
                                </tbody>
                              </table>
                              <img src="{{ asset('assets/images/lucro.png') }}" />
                            </div>
                    </div>
            </form>
            <div class="mt-4">
            </div>
            <div class="mt-4">
            </div>
            <div class="text-center col-12 pt-0 fixed-bottom pb-1 bg-white border-top border-bottom border-primary">
                <h6 class="mt-2 text-black">° SisFIM ° | Criado por Germano Heckler</h6>
            </div>
        </div>
</body>
</html>