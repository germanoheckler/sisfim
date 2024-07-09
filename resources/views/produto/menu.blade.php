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
                <h1 class="display-3">° Produtos °</h1>
            </div>
            <div class="text-center col-12">
                <div class="col-12 col-md-6 my-4 d-block mx-auto bg-danger-subtle rounded-4 border border-dark-subtle border-3 shadow-lg m-3 border-top-0 border-start-0">
                    <h3>
                        <a href="{{route('produto.novo')}}" class="link-dark link-underline-opacity-0">
                            <i class="bi bi-house-add-fill fs-1 text-black"></i> Novo Produto
                        </a>
                    </h3>
                </div>
                <div class="col-12 col-md-6 my-4 d-block mx-auto bg-warning-subtle rounded-4 border border-dark-subtle border-3 shadow-lg m-3 border-top-0 border-start-0">
                    <h3>
                        <a href="{{route('produto.novo')}}" class="link-dark link-underline-opacity-0">
                            <i class="bi bi-house-up-fill fs-1 text-black"></i> Novo Estoque
                        </a>
                    </h3>
                </div>
                <div class="col-12 col-md-6 my-4 d-block mx-auto bg-success-subtle rounded-4 border border-dark-subtle border-3 shadow-lg m-3 border-top-0 border-start-0">
                    <h3>
                        <a href="{{route('produto.buscar')}}" class="link-dark link-underline-opacity-0">
                            <i class="bi bi-house-gear-fill fs-1 text-black"></i> Busca
                        </a>
                    </h3>
                </div>
                <div class="col-12 col-md-6 my-4 d-block mx-auto bg-info-subtle rounded-4 border border-dark-subtle border-3 shadow-lg m-3 border-top-0 border-start-0">
                    <h3>
                        <a href="{{route('produto.estoque')}}" class="link-dark link-underline-opacity-0">
                            <i class="bi bi-house-check-fill fs-1 text-black"></i> Produtos em Estoque
                        </a>
                    </h3>
                </div>
            </div>
            <div class="text-center col-12 p-1 mb-5">
                <h6>Criado por Germano Heckler</h6>
            </div>
        </div>
    </div>
</body>
</html>