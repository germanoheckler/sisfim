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
                <h1 class="display-3">° Produtos °</h1>
            </div>
            <div class="text-center col-12">
                <div class="col-12 col-md-6 my-4 d-block mx-auto bg-info-subtle rounded-4 border border-dark-subtle border-3 shadow-lg m-3 border-top-0 border-start-0">
                    <h3>
                        <a href="{{route('produto.novo')}}" class="link-dark link-underline-opacity-0">
                            <i class="bi bi-house-add-fill fs-1 text-black"></i> Novo Produto
                        </a>
                    </h3>
                </div>
                <div class="col-12 col-md-6 my-4 d-block mx-auto bg-success-subtle rounded-4 border border-dark-subtle border-3 shadow-lg m-3 border-top-0 border-start-0">
                    <h3>
                        <a href="{{route('produto.novo')}}" class="link-dark link-underline-opacity-0">
                            <i class="bi bi-house-up-fill fs-1 text-black"></i> Novo Estoque
                        </a>
                    </h3>
                </div>
                <div class="col-12 col-md-6 my-4 d-block mx-auto bg-warning-subtle rounded-4 border border-dark-subtle border-3 shadow-lg m-3 border-top-0 border-start-0">
                    <h3>
                        <a href="{{route('produto.buscar')}}" class="link-dark link-underline-opacity-0">
                            <i class="bi bi-house-gear-fill fs-1 text-black"></i> Busca
                        </a>
                    </h3>
                </div>
                <div class="col-12 col-md-6 my-4 d-block mx-auto bg-secondary-subtle rounded-4 border border-dark-subtle border-3 shadow-lg m-3 border-top-0 border-start-0">
                    <h3>
                        <a href="{{route('produto.estoque')}}" class="link-dark link-underline-opacity-0">
                            <i class="bi bi-house-check-fill fs-1 text-black"></i> Produtos em Estoque
                        </a>
                    </h3>
                </div>
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