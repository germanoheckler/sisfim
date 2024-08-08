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
                <h2 class="display-3 text-dark">° Produtos °</h2>
            </div>
            <div class="text-center col-12 col-md-6">
                <div class="form-group col-12 col-md-6 my-1 d-block mx-auto m-1 mt-2">
                    <h5><label for="month" class="link-dark link-underline-opacity-0">Buscar Produtos:</label></h5>
                    <input type="text" class="h6 rounded p-1 border-light-subtle form-group" name="nome" id="nome" placeholder="Digite o nome do produto" required>
                    <input type="submit" value="Buscar" class="h6 ps-1 pe-1 pt-0 pb-0 ms-2 btn btn-primary">
                </div>
                <div>
                    <a href="{{ route('produto.novo')}}"><input type="submit" value="Adicionar Produto" class="h6 ps-1 pe-1 pt-0 pb-0 ms-2 btn btn-primary"></a>
                </div>
            <table class="table border-black">
                <tr>
                    <td class="bg-dark-subtle"><b>Estoque Total</b></td>
                    <td class="bg-dark-subtle"><b>10un</b></td>
                    <td class="bg-dark-subtle"><b>280,00</b></td>
                  </tr>
            </table>
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nome <i class="bi bi-arrow-down-up"></th>
                        <th scope="col">Qtd <i class="bi bi-arrow-down-up"></th>
                        <th scope="col">V.V. <i class="bi bi-arrow-down-up"></th>
                        <th scope="col"><i class="bi bi-house"></i></th>
                    </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><a href="#">Cadeira</a></td>
                    <td>2</td>
                    <td>10,00</td>
                    <td><i class="bi bi-house-fill text-success"></i><i class="bi bi-pencil-square text-primary"></i><i class="bi bi-trash-fill text-danger"></i></td>
                  </tr>
                  <tr>
                    <td><a href="#">Panela</a></td>
                    <td>3</td>
                    <td>20,00</td>
                    <td><i class="bi bi-house-fill text-success"></i><i class="bi bi-pencil-square text-primary"></i><i class="bi bi-trash-fill text-danger"></i></td>
                  </tr>
                  <tr>
                    <td><a href="#">Rede</a></td>
                    <td>5</td>
                    <td>40,00</td>
                    <td><i class="bi bi-house-fill text-success"></i><i class="bi bi-pencil-square text-primary"></i><i class="bi bi-trash-fill text-danger"></i></td>
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
</body>
</html>