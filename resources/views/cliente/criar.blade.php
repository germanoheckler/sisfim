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
                <h1 class="display-3">° Novo Cliente °</h1>
            </div>
            <form action="{{route('cliente.menu')}}" method="get">
            @csrf
                <div class="form-group text-center col-12">
                    <div class="form-group col-12 col-md-6 my-1 d-block mx-auto m-1">
                        <h4><label for="nome" class="link-dark link-underline-opacity-0">Nome</label></h4>
                        <input type="text" class="col-12 col-md-6 rounded p-1 border-light-subtle" name="nome" id="nome" placeholder="Digite o nome do cliente">
                    </div>
                    <div class="form-group col-12 col-md-6 my-1 d-block mx-auto m-1">
                        <h4><label for="cpf" class="link-dark link-underline-opacity-0">CPF</label></h4>
                        <input type="number" class="col-12 col-md-6 rounded p-1 border-light-subtle" name="cpf" id="cpf" placeholder="Digite o CPF do cliente">
                    </div>
                    <div class="form-group col-12 col-md-6 my-1 d-block mx-auto m-1">
                        <h4><label for="cpf" class="link-dark link-underline-opacity-0">Data de Nascimento</label></h4>
                        <input type="date" class="h6 rounded p-1 border-light-subtle" name="nascimento" id="nascimento">
                    </div>
                    <div class="form-group col-12 col-md-6 my-1 d-block mx-auto m-1">
                        <h4><label for="telefone" class="link-dark link-underline-opacity-0">Telefone</label></h4>
                        <input type="number" class="col-12 col-md-6 rounded p-1 border-light-subtle" name="telefone" id="telefone" placeholder="Digite o telefone do cliente">
                    </div>
                    <div class="form-group col-12 col-md-6 my-1 d-block mx-auto m-1">
                        <h4><label for="endereco" class="link-dark link-underline-opacity-0">Endereço</label></h4>
                        <input type="text" class="col-12 col-md-6 rounded p-1 border-light-subtle" name="endereco" id="endereco" placeholder="Digite o endereço do cliente">
                    </div>
                    <div class="form-group col-12 col-md-6 my-1 d-block mx-auto m-1">
                        <h4><label for="cidade" class="link-dark link-underline-opacity-0">Cidade</label></h4>
                        <select class="col-12 col-md-6 rounded p-1 border-light-subtle" id="cidade" name="cidade">
                            <option value="Jardim" data-cidade="jardim">Jardim</option>
                            <option value="Guia Lopes da Laguna" data-cidade="guialopesdalaguna">Guia Lopes da Laguna</option>
                        </select>
                    </div>

                    <div class="form-group col-12 col-md-6 my-1 d-block mx-auto m-1">
                        <h4><label for="bairro" class="link-dark link-underline-opacity-0">Bairro</label></h4>
                        <select class="col-12 col-md-6 rounded p-1 border-light-subtle" id="bairro" name="bairro">
                            <option>Vila Angélica I</option>
                            <option>Vila Camisão</option>
                        </select>
                    </div>
                    <a href="javascript:history.back()"><input type="submit" value="Cadastrar Novo Cliente" class="h6 ps-1 pe-1 mt-2 pt-0 pb-0 ms-2 btn btn-primary"></a>
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