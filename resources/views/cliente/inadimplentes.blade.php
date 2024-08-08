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
                <h1 class="display-3">° Clientes Inad. °</h1>
            </div>
            <div class="text-center col-12 col-md-6">
                <table class="table table-striped">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col" class="bg-danger-subtle">Nr</th>
                        <th scope="col" class="bg-danger-subtle">Nome</th>
                        <th scope="col" class="bg-danger-subtle"><i class="bi bi-info-circle"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" class="bg-dark text-white"><b>3</b></th>
                            <td class="bg-dark text-white"><b><i class="bi bi-arrow-left-circle"></i> Total Inadimplentes</b></td>
                            <td class="bg-dark text-white"><i class="bi bi-people"></i></td>
                          </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td>Marcos Rogerio dos Santos</td>
                        <td><a href="#"><i class="text-danger bi bi-person-circle"></a></i></td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>João Ferreira da Silva Neto</td>
                        <td><a href="#"><i class="text-danger bi bi-person-circle"></a></i></td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Laudemir Vargas Coimbra</td>
                        <td><a href="#"><i class="text-danger bi bi-person-circle"></a></i></td>
                      </tr>
                    </tbody>
                  </table>
            </div>
            <div class="mt-4">
            </div>
            <div class="text-center col-12 pt-0 fixed-bottom pb-1 bg-white border-top border-bottom border-primary">
                <h6 class="mt-2 text-black">° SisFIM ° | Criado por Germano Heckler</h6>
            </div>
        </div>
    </div>
</body>
</html>