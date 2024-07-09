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
                <h1 class="display-3">° Nova Venda °</h1>
            </div>
            <form action="{{route('nova-venda')}}" method="post">
            @csrf
                <div class="form-group text-center col-12">
                    <div class="form-group col-12 col-md-6 my-1 d-block mx-auto m-1">
                        <h4><label for="cliente" class="link-dark link-underline-opacity-0">Cliente</label></h4>
                        <select name="cliente_id" id="cliente_id">
                            @foreach ($clientes as $cliente)
                                <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-12 col-md-6 my-1 d-block mx-auto m-1">
                        <h4><label for="marca" class="link-dark link-underline-opacity-0">Produto Vendido</label></h4>
                        <button onclick="adicionarProduto()" id='botaoAdicionar' class="bg-warning m-2 btn">Adicionar Produto</button>
                        <script>
                            function adicionarProduto(){
                                console.log('alerta');
                                var input=`
                                <p>
                                <select name="produtos[]">
                                @foreach ($produtos as $produto)
                                    <option value="{{ $produto->id }}">{{ $produto->nome }}</option>
                                @endforeach
                                </select>
                                <input name="quantidades[]" placeholder="quantidade">
                                </p>
                                `;
                                var botao=document.querySelector('#botaoAdicionar');
                                var template = document.createElement("template");
                                template.innerHTML = input;

                                botao.parentNode.insertBefore(template.content.firstElementChild, botao.nextSibling);

                            }
                        </script>

                        <input type="text" class="form-control" name="marca" id="marca" placeholder="Digite a marca do produto">
                    </div>
                    <div class="form-group col-12 col-md-6 my-1 d-block mx-auto m-1">
                        <h4><label for="date" class="link-dark link-underline-opacity-0">Data</label></h4>
                        <input type="date" class="col-auto rounded border-0 p-2" name="data" id="data" required>
                    </div>
                    <input type="submit" value="Cadastrar Nova Venda" class="m-2 btn btn-primary">
                </div>
            </form>
            <div class="text-center col-12 p-1 mb-5">
                <h6>Criado por Germano Heckler</h6>
            </div>
        </div>
    </div>
</body>
</html>