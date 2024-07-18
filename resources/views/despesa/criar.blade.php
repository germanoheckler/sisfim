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
                <h1 class="display-3">° Nova Despesa °</h1>
            </div>
            <form action="{{route('despesa.novo')}}" method="post">
            @csrf
                <div class="form-group text-center col-12">
                    <div class="form-group col-12 col-md-6 my-1 d-block mx-auto m-1">
                        <h4><label for="nome" class="link-dark link-underline-opacity-0">Nome</label></h4>
                        <input type="text" class="col-12 col-md-6 rounded p-1 border-light-subtle" name="nome" id="nome" placeholder="Digite o nome da despesa" required>
                    </div>
                    <div class="form-group col-12 col-md-6 my-1 d-block mx-auto m-1">
                        <h4><label for="descricao" class="link-dark link-underline-opacity-0">Descrição</label></h4>
                        <input type="text" class="col-12 col-md-6 rounded p-1 border-light-subtle" name="descricao" id="descricao" placeholder="Digite a descrição da despesa">
                    </div>
                    <div class="form-group col-12 col-md-6 my-1 d-block mx-auto m-1">
                        <h4><label for="valordadespesa" class="link-dark link-underline-opacity-0">Valor</label></h4>
                        <input type="number" class="col-12 col-md-6 rounded p-1 border-light-subtle" name="valordadespesa" id="valordadespesa" placeholder="Digite o valor da despesa">
                    </div>
                    <div class="form-group col-12 col-md-6 my-1 d-block mx-auto m-1">
                        <h4><label for="datadadespesa" class="link-dark link-underline-opacity-0">Data</label></h4>
                        <input type="date" class="rounded p-1 border-light-subtle" name="datadadespesa" id="datadadespesa" placeholder="Digite a data da despesa">
                    </div>
                    <input type="submit" value="Cadastrar Novo Cliente" class="m-2 btn btn-primary">
                </div>
            </form>
            <div class="text-center col-12 p-1 mb-5">
                <h6>Criado por Germano Heckler</h6>
            </div>
        </div>
    </div>
</body>
</html>