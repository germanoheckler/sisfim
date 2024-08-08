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
                <h1 class="display-3">° Novo Produto °</h1>
            </div>
            <form action="{{route('produto.menu')}}" method="get">
            @csrf
                <div class="form-group text-center col-12">
                    <div class="form-group col-12 col-md-6 my-1 d-block mx-auto m-1">
                        <h5><label for="nome" class="link-dark link-underline-opacity-0">Nome</label></h5>
                        <input type="text" class="h6 col-12 col-md-6 rounded p-1 border-light-subtle" name="nome" id="nome" placeholder="Digite o nome do produto">
                    </div>
                    <div class="form-group col-12 col-md-6 my-1 d-block mx-auto m-1">
                        <h5><label for="descricao" class="link-dark link-underline-opacity-0">Descrição</label></h5>
                        <input type="text" class="h6 col-12 col-md-6 rounded p-1 border-light-subtle" name="descricao" id="descricao" placeholder="Digite a descrição do produto">
                    </div>
                    <div class="form-group col-12 col-md-6 my-1 d-block mx-auto m-1">
                        <h5><label for="foto" class="link-dark link-underline-opacity-0">Foto</label></h5>
                        <input type="file" class="h6 col-12 col-md-6 rounded border-light-subtle" name="foto" id="foto">
                        <input type="file" class="h6 col-12 col-md-6 rounded border-light-subtle" name="foto" id="foto">
                        <input type="file" class="h6 col-12 col-md-6 rounded border-light-subtle" name="foto" id="foto">
                    </div>
                            <div class="form-group col-12 col-md-6 my-1 d-block mx-auto m-1">
                            <h5><label for="quantidade" class="link-dark link-underline-opacity-0">Quantidade</label></h5>
                            <input type="text" class="h6 col-12 col-md-6 rounded p-1 border-light-subtle" name="quantidade" id="quantidade" placeholder="Digite a quantidade do produto">
                        </div>
                        <div class="form-group col-12 col-md-6 my-1 d-block mx-auto m-1">
                            <h5><label for="precodecompra" class="link-dark link-underline-opacity-0">Preço de Compra</label></h5>
                            <input type="text" class="h6 col-12 col-md-6 rounded p-1 border-light-subtle" name="precodecompra" id="precodevenda" placeholder="Digite o preço de compra do produto">
                        </div>
                        <div class="form-group col-12 col-md-6 my-1 d-block mx-auto m-1">
                            <h5><label for="precodevenda" class="link-dark link-underline-opacity-0">Preço de Venda</label></h5>
                            <input type="text" class="h6 col-12 col-md-6 rounded p-1 border-light-subtle" name="precodevenda" id="precodevenda" placeholder="Digite o preço de venda do produto">
                        </div>
                        <input type="submit" value="Cadastrar Produto" class="h6 ps-1 pe-1 mt-2 pt-0 pb-0 ms-2 btn btn-primary">
                    </div>
            </form>
            <div class="mt-4">
            </div>
            <div class="text-center col-12 pt-0 fixed-bottom pb-1 bg-white border-top border-bottom border-primary">
                <h6 class="mt-2 text-black">° SisFIM ° | Criado por Germano Heckler</h6>
            </div>
        </div>
    </div>
</body>
</html>